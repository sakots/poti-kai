
POTI-board用テンプレート「5u」 lot.180502
by sakots >> https://sakots.red/

このファイル一式はPOTI-board v1.30 lot.050114以降用に作成されたデザインテンプレートです。
標準でHTML5に対応、PaintBBSNEOを組み込ませていただきました。「ごうー」と読みます。

■追記

PaintBBSNEOの組み込みを許可していただきました。figuneさんありがとうございます。
https://github.com/funige/neo/
NEOのバージョンアップは、最新版の.jsファイルと.cssファイルを
それぞれPaingBBS.jsとPaintBBS.cssに名前を変えて上書きしてください。
NEO専用ですのでアプレットのjarファイル要りません。


■各ファイル説明

template_ini.php  テンプレート設定ファイル
n5u_main.html     メイン＆レス テンプレート
n5u_other.html    その他 テンプレート
n5u_paint.html    お絵かき テンプレート
n5u_catalog.html  カタログ テンプレート
n5u.css           カスタマイズ用スタイルシート
n5u_main.css      テンプレ
siihelp.php       専用しぃHELP
palette.txt       専用パレットデータ
meta.php          head内追加メタファイル
(neo.js)          neo本体
(neo.css)         neo本体

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
メールアドレスとURL入力欄はこのご時世無駄なので消しました。

■変更履歴

[2018/05/03]
・ページリンク調整

※アップデートは n5u_main.html n5u_catalog.html n5u_paint.html n5n5u_other.html
　n5u_main.css template_ini.php 上書き

[2018/05/02]
・ページリンク調整
・オートコンプリートの修正

※アップデートは n5u_main.html n5u_catalog.html n5u_paint.html n5n5u_other.html
　n5u_main.css template_ini.php 上書き

[2018/01/24]
・外部メタファイル追加

※アップデートは n5u_main.html n5u_catalog.html template_ini.php 上書き
　meta.php追加

[2018/01/23]
・コメントスパム対策

※アップデートは n5u_main.html template_ini.php 上書き

[2018/01/22]
・githubに公開
・template_ini.phpの最適化

※アップデートは template_ini.php 上書き

[2018/01/16]
・外部URLからwindow.openerで掲示板を操作できる可能性がある問題を修正

※アップデートは n5u_main.html template_ini.php 上書き

[2018/01/13]
・URL入力欄復活
・レスフォーム表示の場合に省略されたレスが読めなかった問題修正

※アップデートは n5u_main.html n5u_other.html template_ini.php 上書き

[2018/01/12]
・お絵描き画面のUI改善
・NEOを1.2.3にアップデート

※アップデートは n5u_paint.html n5u_main.css template_ini.php PaingBBS.js PaingBBS.css 上書き

[2018/01/11]
・ブラウザにhtmlファイルをキャッシュさせないようにした

※アップデートは n5u_main.html n5u_catalog.html template_ini.php 上書き

[2018/01/10]
・URL変更、また管理のしやすさの観点からスキンのファイル名を変更

※アップデートは全て上書き

[2017/12/11]
・NEOを1.2.0に更新
・デフォルトのCSS更新

※アップデートは 5u_paint.html 5u_main.css template_ini.php PaintBBS.css PaintBBS.js siihelp.php 上書き

[2017/11/30]
・デフォルトのCSS更新
・その他テンプレートCSSをいくつか同梱

※アップデートは5u_main.css template_ini.php 上書き

[2017/11/15]
・カスタマイズしやすいようにCSSを分離

※アップデートは5u.css 5u_main.css template_ini.php 上書き

[2017/11/04]
・公開

[2017/11/05]
・レスができない問題を改善
・カタログモード実装

※アップデートは全て上書き

[2017/11/05 2回め]
・sage機能暫定実装
・カタログモードデフォルト値変更

※アップデートは 5u.css 5u_main.html 5u_catalog.html template_ini.php 上書き

■最後に

好きに改造していいので俺に生活費をくれませんかねえ。
