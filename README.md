<h1>POTI-board改</h1>
<p>
	phpお絵かき掲示板スクリプトPOTI-boardを改良していくプロジェクトです。<br>
	Punyu NetのSakaQさん承諾のもと進めております。
</p>
<p>
	Punyu Net <br>
	<a href="http://www.punyu.net/php/">http://www.punyu.net/php/</a>
</p>
<blockquote>
	Flashやhtml5のお絵描きサイトはいっぱいあるんだけど、そうじゃないんだ。  <br>
	おじさんは昔のjavaアプレットそっくりの環境が欲しいんだ。
</blockquote>
<p>
	という <a href="https://github.com/funige/neo/">PaintBBS NEO</a>
	を応援するためにphp7に対応させ、改良を進めています。
</p>
<p>
	potiboard.zip がスクリプト一式、
	nee.zip/5u.zip/5r.zip が拙作テンプレート一式です。
	(neeがおすすめ)<br>
	ディレクトリ内に未圧縮ソースが入っています。
	掲示板設置法等は中のテキストファイルを読んで下さい。
</p>
<h2>サンプル/サポート掲示板</h2>
<p>
	サンプルとして<a href="https://sakots.red/nee/">「nee」</a>
	<a href="https://sakots.red/5u/">「5u」</a>
	<a href="https://sakots.red/5r/">「5r」</a>
	をオープンしました。 <br>
	質問や動作確認にご利用ください。
</p>
<h2>履歴</h2>
<dl>
	<!-- <dt class="ver"></dt>
	<dd class="con"></dd>
	<dd></dd> -->
	<dt class="ver">[2018/04/23] 改 v1.41.1 lot.180423</dt>
	<dd class="con">【機能追加】</dd>
	<dd>「指定文字列+本文へのURLの書き込みで拒絶」の設定を追加 (by さとぴあ)</dd>
	<dt class="ver">[2018/04/20] 改 v1.40 lot.180420</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>本家1.33bを超えた気がするので満を持してバージョンアップ</dd>
	<dt class="ver">[2018/04/20] v1.32.20 lot.180420</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>本文にURLを書き込めなくする設定を追加 (by さとぴあ)</dd>
	<dd>readme.txtを整理</dd>
	<dt class="ver">[2018/01/30] v1.32.12 lot.180130</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>オートリンクで相手のアクセスログにURLが残らないようにした (by さとぴあ)</dd>
	<dd>拒絶する文字列の指定で大文字小文字の区別をしないように変更 (by さとぴあ)</dd>
	<dd>管理画面の画像へのリンクがおかしかったのを修正 (by さとぴあ)</dd>
	<dt class="ver">[2018/01/24] v1.32.11 lot.180124</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>NEOを使う/使わない選択式のスキンに対応</dd>
	<dd>readme整理</dd>
	<dt class="ver">[2018/01/22] v1.32.10 lot.180122</dt>
	<dd class="con">【仕様改善】</dd>
	<dd>phpの些細なエラーを減らした</dd>
	<dd>githubに公開</dd>
	<dt class="ver">[2018/01/16] v1.32.5 lot.180116</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>オートリンク時のURLにリファラを送信しない、またそれにともなう脆弱性修正</dd>
	<dt class="ver">[2018/01/15] v1.32.4 lot.180115</dt>
	<dd class="con">【障害対応】</dd>
	<dd>コメント無しでイラストのみ投稿した場合に設定問わず弾かれる問題を修正</dd>
	<dd class="con">【仕様追加】</dd>
	<dd>メール通知クラスphp7対応版を同梱</dd>
	<dt class="ver">[2018/01/13] v1.32.3 lot.180113</dt>
	<dd class="con">【障害対応】</dd>
	<dd>「拒絶する文字列」の設定が効かない問題を修正</dd>
	<dd class="con">【仕様変更】</dd>
	<dd>バージョン表記の仕方を変更</dd>
	<dt class="ver">[2018/01/12] v1.32 lot.050602b</dt>
	<dd class="con">【障害対応】★picpost.php</dd>
	<dd>php7環境で8kB以上の画像が送信できなくなっていた問題を修正</dd>
	<dt class="ver">[2018/01/11] v1.32 lot.050602a</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>php7対応</dd>
	<!-- <dt class="ver"></dt>
	<dd class="con"></dd>
	<dd></dd> -->
</dl>
<h2>テンプレートneeの履歴</h2>
<dl>
	<dt class="ver">[2018/04/25] v1.00 lot.180425</dt>
	<dd>nee_cssを廃止して、直接nee_main.cssを読み込むようにして色指定を対処</dd>
	<dt class="ver">[2018/04/23] v0.99b2 lot.180423</dt>
	<dd>nee.cssでNEOの色指定をするように変更</dd>
	<dd>テンプレートの著作権表示を整理</dd>
	<dt class="ver">[2018/04/22] v0.99b1 lot.180422</dt>
	<dd>バージョン表記を追加</dd>
	<dd>色指定scssファイルを分割</dd>
	<dt class="ver">[2018/04/21]</dt>
	<dd>URLボタンなどが途中で改行される不具合修正</dd>
	<dd>アイコンをFontAwesomeへ直接リンクを貼る方法に変更</dd>
	<dd>cssファイルとsassファイルで設定できる項目を追加</dd>
	<dt class="ver">[2018/04/20]</dt>
	<dd>デフォルトスタイルをよりかっこよく</dd>
	<dd>カタログモードの画像サイズをcssで指定できるように変更</dd>
	<dt class="ver">[2008/04/18]</dt>
	<dd>お絵かきレス時の表示幅を変更</dd>
	<dt class="ver">[2018/04/16]</dt>
	<dd>コードの記述ミスを修正</dd>
	<dt class="ver">[2018/04/11]</dt>
	<dd>公開</dd>
</dl>
<p>
	アップデート方法等は各readme.txt参照。
</p>