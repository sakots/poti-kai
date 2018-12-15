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
	potiboard.zip がスクリプト一式です。<br>
	ディレクトリ内に未圧縮ソースが入っています。
	掲示板設置法等は中のテキストファイルを読んで下さい。
</p>
<h2>スキンについて</h2>
	このスクリプトはスキン機能に対応しています。
	<a href="https://github.com/sakots/poti-kai-skins">「poti-kai-skins」</a>
	でスキンを用意しておりますのでご参照ください。
	デフォルトでneewhiteスキンを同梱しております。
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
[2018/09/23] v1.45.1 lot.180923
【仕様変更】
	<!-- <dt class="ver"></dt>
	<dd class="con"></dd>
	<dd></dd> -->
	<dt class="ver">[2018/12/16] v1.50.0 lot.181215</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>信頼できないデータに extract() を使用しない。（by さとぴあ）</dd>
	<dt class="ver">[2018/12/02] v1.45.6 lot.181202</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>メール通知クラス静的コール警告対応。（by さとぴあ）</dd>
	<dt class="ver">[2018/11/22] v1.45.3 lot.181122</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>Notice、Warning対策。投稿直後にブラウザのキャッシュを表示しないようにurlパラメーターを追加。（by さとぴあ）</dd>
	<dt class="ver">[2018/09/23] v1.45.1 lot.180923</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>config.phpでシェアボタンを表示する する:1 しない:0を選択できるようにした。対応skinが必要。（by さとぴあ）</dd>
	<dt class="ver">[2018/09/22] v1.45.0 lot.180922</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>potiboard.phpに $dat['rooturl'] = ROOT_URL;//設置場所url を追加</dd>
	<dd>templateで、設置urlを使えるようにした（by さとぴあ）</dd>
	<dd>php7の非推奨のエラーがでないようにhtmltemplate.incを修正（by さとぴあ）</dd>
	<dt class="ver">[2018/09/15] v1.44.4 lot.180825</dt>
	<dd class="con">【仕様整理】</dd>
	<dd>デフォルトスキンを同梱した</dd>
	<dt class="ver">[2018/08/25] v1.44.4 lot.180825</dt>
	<dd class="con">【仕様整理】</dd>
	<dd>ソース整理（by さとぴあ）</dd>
	<dt class="ver">[2018/08/22] v1.44.3 lot.180822</dt>
	<dd class="con">【障害対応】</dd>
	<dd>軽微ななエラー対応（by さとぴあ）</dd>
	<dd class="con">【仕様変更】</dd>
	<dd>文字コードをUTF-8に固定</dd>
	<dd>スキンのプロジェクトを分離</dd>
	<dt class="ver">[2018/07/14] v1.44 lot.180714</dt>
	<dd class="con">【機能追加】</dd>
	<dd>「本文中に日本語がなければ拒絶」の改善（by さとぴあ,funige）</dd>
	<dt class="ver">[2018/06/05] v1.42.1 lot.180605</dt>
	<dd class="con">【障害対応】</dd>
	<dd>軽微ななエラー対応（by さとぴあ）</dd>
	<dt class="ver">[2018/05/07] 改 v1.42 lot.180507</dt>
	<dd class="con">【仕様変更】</dd>
	<dd>削除キーなしで続きを描く機能の仕様変更（by さとぴあ）</dd>
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
