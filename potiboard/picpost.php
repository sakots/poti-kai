<?php
//----------------------------------------------------------------------
// picpost.php lot.200302  by SakaQ >> http://www.punyu.net/php/
// & sakots >> https://poti-k.info/
//
// しぃからPOSTされたお絵かき画像をTEMPに保存
//
// このスクリプトはPaintBBS（藍珠CGI）のPNG保存ルーチンを参考に
// PHP用に作成したものです。
//----------------------------------------------------------------------
// 2020/02/25 flock()修正タイムゾーンを'Asia/Tokyo'に
// 2020/01/25 REMOTE_ADDRが取得できないサーバに対応
// 2019/12/03 軽微なエラー修正。datファイルのパーミッションを600に
// 2018/07/13 動画が記録できなくなっていたのを修正
// 2018/06/14 軽微なエラー修正
// 2018/01/12 php7対応
// 2005/06/04 容量違反・画像サイズ違反・拒絶画像のチェックを追加
// 2005/02/14 差し換え時の認識コードrepcodeを投稿者情報に追加
// 2004/06/22 ユーザーを識別するusercodeを投稿者情報に追加
// 2003/12/22 JPEG対応
// 2003/10/03 しぃペインターに対応
// 2003/09/10 IPアドレス取得方法変更
// 2003/09/09 PCHファイルに対応.投稿者情報の記録機能追加
// 2003/09/01 PHP風(?)に整理
// 2003/08/28 perl -> php 移植  by TakeponG >> http://www.chomkoubou.com/
// 2003/07/11 perl版初公開

//設定
include(__DIR__.'/config.php');
//タイムゾーン
date_default_timezone_set('Asia/Tokyo');
//容量違反チェックをする する:1 しない:0
define('SIZE_CHECK', '1');

$time = time();
$imgfile = $time.substr(microtime(),2,3);	//画像ファイル名

/* エラー発生時にSystemLOGにエラーを記録 */
function error($error){
	global $imgfile,$syslog,$syslogmax;
	$time = time();
	$youbi = array('日','月','火','水','木','金','土');
	$yd = $youbi[date("w", $time)] ;
	$now = date("y/m/d",$time)."(".(string)$yd.")".date("H:i",$time);
	if(!is_file($syslog)){//$syslogがなければ作成
		file_put_contents($syslog,"\n", LOCK_EX);
		chmod($syslog,0606);
	}
	$ep = fopen($syslog , "r+") or die($syslog."が開けません");
	flock($ep, LOCK_EX);
	rewind($ep);
	$key=0;
	while($line=fgets($ep,4096)){//ログを配列に
		if($line!==''){
		$lines[$key]=$line;
	}
	++$key;
	if($key>($syslogmax-2)){//記録上限
	break;
	}
	}
	$line=implode('',$lines);//これまでのエラー情報
	$newline=$imgfile."  ".$error." [".$now."]\n";//最新のエラー情報
	$newline.=$line;//最新とこれまでをまとめる
	rewind($ep);
	fwrite($ep,$newline);
	fflush($ep);
	flock($ep, LOCK_UN);
	fclose($ep);
}

/* ■■■■■ メイン処理 ■■■■■ */

$u_ip = getenv("HTTP_CLIENT_IP");
if(!$u_ip) $u_ip = getenv("HTTP_X_FORWARDED_FOR");
if(!$u_ip) $u_ip = getenv("REMOTE_ADDR");
$u_host = gethostbyaddr($u_ip);
$u_agent = getenv("HTTP_USER_AGENT");
$u_agent = str_replace("\t", "", $u_agent);

//raw POST データ取得
$buffer = file_get_contents('php://input');
if(!$buffer){
	$stdin = @fopen("php://input", "rb");
	$buffer = @fread($stdin, $_ENV['CONTENT_LENGTH']);
	@fclose($stdin);
}
if(!$buffer){
	error("データの取得に失敗しました。お絵かき画像は保存されません。");
	exit;
}

// 拡張ヘッダー長さを獲得
$headerLength = substr($buffer, 1, 8);
// 画像ファイルの長さを取り出す
$imgLength = substr($buffer, 1 + 8 + $headerLength, 8);
// 投稿容量制限を超えていたら保存しない
if(SIZE_CHECK && ($imgLength > MAX_KB * 1024)){
	error("規定容量オーバー。お絵かき画像は保存されません。");
	exit;
}
// 画像イメージを取り出す
$imgdata = substr($buffer, 1 + 8 + $headerLength + 8 + 2, $imgLength);
// 画像ヘッダーを獲得
$imgh = substr($imgdata, 1, 5);
// 拡張子設定
if($imgh=="PNG\r\n"){
	$imgext = '.png';	// PNG
}else{
	$imgext = '.jpg';	// JPEG
}
$full_imgfile = TEMP_DIR.$imgfile.$imgext;
// 同名のファイルが存在しないかチェック
if(is_file($full_imgfile)){
	error("同名の画像ファイルが存在します。上書きします。");
}
// 画像データをファイルに書き込む
$fp = fopen($full_imgfile,"wb");
if(!$fp){
	error("画像ファイルのオープンに失敗しました。お絵かき画像は保存されません。");
	exit;
}else{
	flock($fp, LOCK_EX);
	fwrite($fp, $imgdata);
	fflush($fp);
	flock($fp, LOCK_UN);
	fclose($fp);
}
// 不正画像チェック(検出したら削除)
// if(is_file($full_imgfile)){
	$size = getimagesize($full_imgfile);
	if($size[0] > PMAX_W || $size[1] > PMAX_H){
		unlink($full_imgfile);
		error("規定サイズ違反を検出しました。画像は保存されません。");
		exit;
	}
	$chk = md5_file($full_imgfile);
	foreach($badfile as $value){
		if(preg_match("/^$value/",$chk)){
			unlink($full_imgfile);
			error("拒絶画像を検出しました。画像は保存されません。");
			exit;
		}
	}
// }

// PCHファイルの長さを取り出す
$pchLength = substr($buffer, 1 + 8 + $headerLength + 8 + 2 + $imgLength, 8);
// ヘッダーを獲得
$h = substr($buffer, 0, 1);
// 拡張子設定

if($h=='S'){
//	if(!strstr($u_agent,'Shi-Painter/')){
//		unlink($full_imgfile);
//		error("UA error。画像は保存されません。");
//		exit;
//	}
	$ext = '.spch';
}else{
//	if(!strstr($u_agent,'PaintBBS/')){
//		unlink($full_imgfile);
//		error("UA error。画像は保存されません。");
//		exit;
//	}
	$ext = '.pch';
}

if($pchLength!=0){
	// PCHイメージを取り出す
	$PCHdata = substr($buffer, 1 + 8 + $headerLength + 8 + 2 + $imgLength + 8, $pchLength);
	// 同名のファイルが存在しないかチェック
	if(is_file(TEMP_DIR.$imgfile.$ext)){
		error("同名のPCHファイルが存在します。上書きします。");
	}
	// PCHデータをファイルに書き込む
	$fp = fopen(TEMP_DIR.$imgfile.$ext,"wb");
	if(!$fp){
		error("PCHファイルのオープンに失敗しました。PCHは保存されません。");
		exit;
	}else{
		flock($fp, LOCK_EX);
		fwrite($fp, $PCHdata);
		fflush($fp);
		flock($fp, LOCK_UN);
		fclose($fp);
	}
}

/* ---------- 投稿者情報記録 ---------- */
$userdata = "$u_ip\t$u_host\t$u_agent\t$imgext";
// 拡張ヘッダーを取り出す
$sendheader = substr($buffer, 1 + 8, $headerLength);
if($sendheader){
	$sendheader = str_replace("&amp;", "&", $sendheader);
	$query_str = explode("&", $sendheader);
	foreach($query_str as $query_s){
		list($name,$value) = explode("=", $query_s);
		$$name = $value;
	}
	//usercodeと差し換え認識コード追加
	$userdata .= "\t$usercode\t$repcode";
}
$userdata .= "\n";
if(is_file(TEMP_DIR.$imgfile.".dat")){
	error("同名の情報ファイルが存在します。上書きします。");
}
// 情報データをファイルに書き込む
$fp = fopen(TEMP_DIR.$imgfile.".dat","w");
if(!$fp){
	error("情報ファイルのオープンに失敗しました。投稿者情報は記録されません。");
	exit;
}else{
	flock($fp, LOCK_EX);
	fwrite($fp, $userdata);
	fflush($fp);
	flock($fp, LOCK_UN);
	fclose($fp);
	chmod(TEMP_DIR.$imgfile.'.dat',0600);
}

die("ok");
?>
