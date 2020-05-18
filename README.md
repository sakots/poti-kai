# POTI-board改

phpお絵かき掲示板スクリプトPOTI-boardを改良していくプロジェクトです。  
Punyu NetのSakaQさん承諾のもと進めております。
  
Punyu Net  
[http://www.punyu.net/php/](http://www.punyu.net/php/)

---

## NEO

> Flashやhtml5のお絵描きサイトはいっぱいあるんだけど、そうじゃないんだ。  
> おじさんは昔のjavaアプレットそっくりの環境が欲しいんだ。  

という [PaintBBS NEO](https://github.com/funige/neo/) を応援するためにphp7に対応させ、改良を進めています。  


## サンプル/サポート

[POTI改公式サイト](https://poti-k.info/) をオープンしました。質問や動作確認にご利用ください。

掲示板設置法等は~~中のテキストファイルを読んで下さい。~~
さとぴあさんが[詳しく書いて下さっています](http://stp.sblo.jp/article/185357941.html)。

## スキンについて

このスクリプトはスキン機能に対応しています。[poti-kai-skins](https://github.com/sakots/poti-kai-skins)でスキンを用意しておりますのでご参照ください。
デフォルトでneeスキンを同梱しております。

---

## 履歴

### [2020/05/12]

- configのデフォルト値調整

### [2020/05/11] v1.55.8 lot.200511

- configのデフォルト値変更、説明追加
- 各所POTI改のURL変更

### [2020/05/11]

- neo更新
- サポートをPOTI改公式サイトに変更
- スキンのリンクも変更

### [2020/05/10] v1.55.7 lot.200510

- コード整理(by さとぴあ)

### [2020/05/05] v1.55.6 lot.200505

- lot.200501のバグ修正(by さとぴあ)

### [2020/05/03] v1.55.6 lot.200501

- 古いスレッドのレスフォームを閉じる機能の追加(by さとぴあ)

### [2020/04/13] v1.55.4 lot.200413

- NEO 1.5.5の新機能「ツールパレット左右切り替え」に対応。  
iPad+Apple Pencilで描く時などに右手がツールに接触して色が意図せず変わるなどの誤動作が起きるのを防止するためのものです。
- それに伴ってキャンバス最小サイズを300pxに拡大。
- スキン更新。
- 正規表現の見直し(by さとぴあ)

### [2020/03/31] v1.55.3 lot.200408

- スペースや改行が入っていてもNGワードで拒絶できるように改良(by さとぴあ)
 くわしくは[ こちら ](https://github.com/sakots/poti-kai/pull/72)

### [2020/03/09] v1.55.1 lot.200308

- ミニレスフォーム使用時の不具合を修正(by さとぴあ)

### [2020/03/05] v1.55.0 lot.200302

- 「使用できない名前」の設定項目を追加など(by さとぴあ)
 くわしくは[ こちら ](https://github.com/sakots/poti-kai/pull/68)

### [2020/01/26]

- getenv("REMOTE_ADDR")でipを取得できないサーバに対応。(by さとぴあ)

### [2020/01/19]

- readme整理。markdown。

### [2020/01/06] v1.54.3 lot.200106

- thumbnail_gd.phpが使えないときに発生するエラーの修正（by さとぴあ）

### [2020/01/05] v1.54.2 lot.200105

- HTMLの幅と高さとサムネイルの実際のサイズが違う問題を修正（by さとぴあ）
- GDがインストールされていないサーバで発生する致命的エラーを修正（by さとぴあ）

### [2019/12/03] v1.53.9 lot.191203

- ユーザーコードと、IPホスト名が記録されたdatファイルをブラウザから閲覧されないように、パーミッションが600になるように他（by さとぴあ）

### [2019/11/27] v1.53.8 lot.191126

- コード整理（by さとぴあ）

### [2019/10/26]

- スキン及びNEO更新

### [2019/10/24] v1.53.6 lot.191024

- コード整理（by さとぴあ）

### [2019/09/26] v1.53.6 lot.190926

- 文法エラー修正ほか（by さとぴあ）

### [2019/08/27] v1.53.1 lot.190827

- 二重投稿のチェックをするしないの判定処理でpassword_verify()が40回実行されていたのを修正ほか（by さとぴあ）

### [2019/08/23] v1.53.0 lot.190823

- セキュリティ強化。config.phpに新規設定項目を追加（by さとぴあ）

### [2019/08/01] v1.52.7 lot.190801

- 日本語広告スパム対策。config.phpに新規設定項目を追加（by さとぴあ）

### [2019/07/03] v1.52.5 lot.190721

- date_default_timezone_set('Asia/Tokyo');と設定しているにもかかわらず、GMT+9時間のままだったのを修正しました。メール通知クラスのコードを整理しました。（by さとぴあ）

### [2019/07/03] v1.52.4 lot.190703

- 管理者は設定にかかわらずURL書き込み可。（by さとぴあ）

### [2019/06/21] v1.52.1 lot.190621

- 文字コード変換の関数の整理 メール通知クラス整理 Notice修正。（by さとぴあ）
- readme整理。

### [2019/06/17] v1.52.0 lot.190617

- 文字コード変換の関数の整理 メール通知クラス整理 Notice修正。（by さとぴあ）

### [2019/06/12] v1.51.9 lot.190612

- MONO WHITEのフル機能を継承したテンプレートで、お絵かき画面からセーブタイプを切り替える機能のための変数が未定義になるのを修正など。（by さとぴあ）

### [2019/06/03] v1.51.8 lot.190603

- クッキーの文字化けに対処 セキュリティ対策。（by さとぴあ）

### [2019/05/23] v1.51.6 lot.190528

- こまかい修正。

### [2019/05/23] v1.51.5 lot.190522

- スキン周り修正。

### [2019/02/12] v1.51.2 lot.190212

- 安定版

### [2019/01/22] v1.51.0 lot.190122

- 管理者パスを突破された場合の被害を最小化するため、管理者モードで使用できるタグを制限　他セキュリティ関連（by さとぴあ）

### [2019/01/15] v1.50.9 lot.190115

- urlに不正な値が入らないように。（by さとぴあ）

### [2019/01/11] v1.50.6 lot.190111

- エラー軽減（by さとぴあ）

### [2019/01/01] v1.50.5 lot.190101

- 自動生成されるログ1の書式関連（by さとぴあ）

### [2018/12/25] v1.50.3 lot.181225

- セキュリティ関連（by さとぴあ）

### [2018/12/16] v1.50.0 lot.181215

- 信頼できないデータに extract() を使用しない。（by さとぴあ）

### [2018/12/02] v1.45.6 lot.181202

- メール通知クラス静的コール警告対応。（by さとぴあ）

### [2018/11/22] v1.45.3 lot.181122

- Notice、Warning対策。投稿直後にブラウザのキャッシュを表示しないようにurlパラメーターを追加。（by さとぴあ）

### [2018/09/23] v1.45.1 lot.180923

- config.phpでシェアボタンを表示する する:1 しない:0を選択できるようにした。対応skinが必要。（by さとぴあ）

### [2018/09/22] v1.45.0 lot.180922

- potiboard.phpに $dat['rooturl'] = ROOT_URL;//設置場所url を追加
- templateで、設置urlを使えるようにした（by さとぴあ）
- php7の非推奨のエラーがでないようにhtmltemplate.incを修正（by さとぴあ）

### [2018/09/15] v1.44.4 lot.180825

- デフォルトスキンを同梱した

### [2018/08/25] v1.44.4 lot.180825

- ソース整理（by さとぴあ）

### [2018/08/22] v1.44.3 lot.180822

- 軽微ななエラー対応（by さとぴあ）
- 文字コードをUTF-8に固定
- スキンのプロジェクトを分離

### [2018/07/14] v1.44 lot.180714

- 「本文中に日本語がなければ拒絶」の改善（by さとぴあ,funige）

### [2018/06/05] v1.42.1 lot.180605

- 軽微ななエラー対応（by さとぴあ）

### [2018/05/07] 改 v1.42 lot.180507

- 削除キーなしで続きを描く機能の仕様変更（by さとぴあ）

### [2018/04/23] 改 v1.41.1 lot.180423

- 「指定文字列+本文へのURLの書き込みで拒絶」の設定を追加 (by さとぴあ)

### [2018/04/20] 改 v1.40 lot.180420

- 本家1.33bを超えた気がするので満を持してバージョンアップ

### [2018/04/20] v1.32.20 lot.180420

- 本文にURLを書き込めなくする設定を追加 (by さとぴあ)
- readme.txtを整理

### [2018/01/30] v1.32.12 lot.180130

- オートリンクで相手のアクセスログにURLが残らないようにした (by さとぴあ)
- 拒絶する文字列の指定で大文字小文字の区別をしないように変更 (by さとぴあ)
- 管理画面の画像へのリンクがおかしかったのを修正 (by さとぴあ)

### [2018/01/24] v1.32.11 lot.180124

- NEOを使う/使わない選択式のスキンに対応
- readme整理

### [2018/01/22] v1.32.10 lot.180122

- phpの些細なエラーを減らした
- githubに公開

### [2018/01/16] v1.32.5 lot.180116

- オートリンク時のURLにリファラを送信しない、またそれにともなう脆弱性修正

### [2018/01/15] v1.32.4 lot.180115

- コメント無しでイラストのみ投稿した場合に設定問わず弾かれる問題を修正
- メール通知クラスphp7対応版を同梱

### [2018/01/13] v1.32.3 lot.180113

- 「拒絶する文字列」の設定が効かない問題を修正
- バージョン表記の仕方を変更

### [2018/01/12] v1.32 lot.050602b

- php7環境で8kB以上の画像が送信できなくなっていた問題を修正

### [2018/01/11] v1.32 lot.050602a

- php7対応
