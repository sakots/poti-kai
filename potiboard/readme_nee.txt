
POTI-board用テンプレート「nee」v1.10 lot.180521
by sakots >> https://sakots.red/

このファイル一式はPOTI-board改 v1.40 以降用に作成されたデザインテンプレートです。
標準でHTML5、レスポンシブ対応。PaintBBSNEOを組み込ませていただきました。

■追記

PaintBBSNEOの組み込みを許可していただきました。figuneさんありがとうございます。
https://github.com/funige/neo/
NEOのバージョンアップは、最新版のneo.jsファイルとneo.cssファイルを上書きしてください。
NEO専用ですのでアプレットのjarファイル要りません。


■各ファイル説明

template_ini.php  テンプレート設定ファイル
nee_main.html     メイン＆レス テンプレート
nee_other.html    その他 テンプレート
nee_paint.html    お絵かき テンプレート
nee_catalog.html  カタログ テンプレート
nee_main.css      デザインスタイルシート
nee_main.css.map  デバック用
nee_main.scss     編集用sassファイル 使える人は使ってみて
_nee_conf.scss    sassの色とかの設定ファイル ここで指定してsassをコンパイルするとすごく便利
siihelp.php       専用しぃHELP
palette.txt       専用パレットデータ
meta.php          head内追加メタファイル
neo.js            neo本体
neo.css           neo本体

■設定

[ config.php ]

お絵かき機能を使用する場合、設定は 2 にして下さい。
　define(USE_PAINT, 2);

利用するアプレットは何を選んでもNEO一択です。
　define(APPLET, 0);

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

[2018/10/17] v1.11 lot.181017
・NEO1.4.5の動画記録対応

※アップデートは nee_main.html nee_paint.html template_ini.php 上書き
　config.php 再設定

[2018/05/21] v1.10 lot.180521
・画像を同じウィンドウでプレビューするように

※アップデートは nee_main.html nee_catalog.html template_ini.php 上書き

[2018/05/14] v1.02 lot.180514
・POTI改1.42対応
・狭いブラウザで画像がはみ出ないように修正

※アップデートは nee_paint.html nee_main.css nee_main.scss nee_main.css.map template_ini.php 上書き

[2018/04/27] v1.01.2 lot.180428
・オートコンプリートの設定さらに修正

※アップデートは nee_main.html nee_other.html template_ini.php 上書き

[2018/04/27] v1.01.1 lot.180427a
・オートコンプリートの設定修正

※アップデートは nee_main.html nee_other.html nee_catalog.html template_ini.php 上書き

[2018/04/26] v1.01 lot.180427
・色設定できる場所を追加（テキスト入力欄など）
・要らなそうなオートコンプリートの解除

※アップデートは nee_main.html nee_main.css nee_main.scss nee_main.css.map template_ini.php 上書き

[2018/04/25] v1.00 lot.180425
・nee_cssを廃止して、直接nee_main.cssを読み込むようにして色指定を対処

※アップデートは nee_main.html nee_catalog.html nee_paint.html nee_other.html
　nee_main.css nee_main.scss nee_main.css.map template_ini.php 上書き

[2018/04/23] v0.99b2 lot.180423
・nee.cssでNEOの色指定をするように変更
・テンプレートの著作権表示を整理

※アップデートは meta.php 以外すべて上書き

[2018/04/22] v0.99b1 lot.180422
・バージョン表記を追加
・色指定scssファイルを分割

※アップデートは nee_main.css nee_main.scss nee_main.css.map template_ini.php 上書き
　_nee_conf.scss 追加

[2018/04/21]
・cssファイルとsassファイルで設定できる項目を追加

※アップデートは nee_main.css nee_main.scss nee_main.css.map 上書き

[2018/04/21]
・アイコンをFontAwesomeへ直接リンクを貼る方法に変更

※アップデートは cssフォルダ sassフォルダ 削除
　nee_paint.html nee_main.css template_ini.php 上書き

[2018/04/21]
・URLボタンなどが途中で改行される不具合修正

※アップデートは ./css/nee_main.css template_ini.php 上書き

[2018/04/20]
・デフォルトスタイルをよりかっこよく
・カタログモードの画像サイズをcssで指定できるように変更

※アップデートは nee_main.html nee_paint.html nee_main.css template_ini.php 上書き
　cssフォルダ sassフォルダをアップロード
　PaintBBS.css PaintBBS.js を neo.css neo.js にリネームor上書き

[2018/04/17]
・お絵かきレス時の表示幅を変更

※アップデートは nee_main.html nee_paint.html nee_main.css template_ini.php 上書き

[2018/04/16]
・コードの記述ミスを修正

※アップデートは nee_main.html nee_paint.html template_ini.php 上書き

[2018/04/11]
・公開

■最後に

好きに改造していいので俺に生活費か仕事をくれませんかねえ。
