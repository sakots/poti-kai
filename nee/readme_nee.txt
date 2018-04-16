
POTI-board用テンプレート「nee」 lot.180411
by sakots >> https://sakots.red/

このファイル一式はPOTI-board v1.30 lot.050114以降用に作成されたデザインテンプレートです。
標準でHTML5、レスポンシブ対応。PaintBBSNEOを組み込ませていただきました。

■追記

PaintBBSNEOの組み込みを許可していただきました。figuneさんありがとうございます。
https://github.com/funige/neo/
NEOのバージョンアップは、最新版の.jsファイルと.cssファイルを
それぞれPaingBBS.jsとPaintBBS.cssに名前を変えて上書きしてください。
NEO専用ですのでアプレットのjarファイル要りません。


■各ファイル説明

template_ini.php  テンプレート設定ファイル
nee_main.html     メイン＆レス テンプレート
nee_other.html    その他 テンプレート
nee_paint.html    お絵かき テンプレート
nee_catalog.html  カタログ テンプレート
nee.css           カスタマイズ用スタイルシート
nee_main.css      テンプレ
nee_main.scss     参考資料（↑のcssを生成するためのファイル）
siihelp.php       専用しぃHELP
palette.txt       専用パレットデータ
meta.php          head内追加メタファイル
(PaingBBS.js)     neo本体
(PaintBBS.css)    neo本体

■設定

[ config.php ]

お絵かき機能を使用する場合、設定は 2 にして下さい。
　define(USE_PAINT, 2);

利用するアプレットは何を選んでもNEO一択です。
　define(APPLET, 0);

動画機能は使えません。
　define(USE_ANIME, 0);
　define(DEF_ANIME, 0);

コンティニューは画像からできるようです。

[ picpost.php ]
NEO readmeより
送信された画像のUser-Agentを見て不正な投稿かどうかチェックしているようです。
アプリではUser-Agentを簡単に偽装できるのですが、埋め込みのNEOでは偽装は難しいので、
このチェックを外す必要があります。
とのことで、

　/*
　if($h=='S'){
 　   if(!strstr($u_agent,'Shi-Painter/')){
　        unlink($full_imgfile);
　        error("UA error。画像は保存されません。");
　        exit;
　    }
　    $ext = '.spch';
　}else{
　    if(!strstr($u_agent,'PaintBBS/')){
　        unlink($full_imgfile);
　        error("UA error。画像は保存されません。");
　        exit;
　    }
　    $ext = '.pch';
　}
　*/

の部分をコメントアウトしてください。

■補足

独自タグ非対応、文字色変えも非対応。

■変更履歴

[2018/04/16]
・コードの記述ミスを修正

※アップデートはnee_main.html template_ini.php nee_paint.html 上書き

[2018/04/11]
・公開

■最後に

好きに改造していいので俺に生活費か仕事をくれませんかねえ。
