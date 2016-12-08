Asazuke
=========

Asazuke は、Pickles 2の支援ツールです。

- サイトのマップの作成
- <strike>旧サイトのHtmlのLintを行う。</strike> tidyの問題があり廃止
- HTMLのモジュール作成機能≒HTMLのスクレイピング

## インストール手順 - Install

Asazuke のインストールは、`composer` コマンドを使用します。

```
$ git clone https://github.com/misak1/m-asazuke.git
$ cd asazuke
$ composer update
$ composer darwin-chmod
```

## 設定変更
```
$ vim src/AsazukeConf.php
```
-サイト解析を行うurlを変更して下さい。

## 実行手順 - run
```
$ composer run

$ composer test もしくは　composer run-script test
```

## その他コマンド
|コマンド|コマンド説明|
|---|---|
|$ php index.php darwin-chmod|sqliteを使う為に書込権限の変更|
|$ php index.php win32-copy-conf|設定ファイルコピー(Windows)|
|$ php index.php |設定を表示|
|$ php index.php file-sql|SQLファイルの実行|
|$ php index.php file-sql-json|SQLファイルの実行、結果をjsonで出力|
|$ php index.php conf-json|設定をjson形式で出力|
|$ php index.php site-scan0|ディレクトリツリーを作成(新規)|
|$ php index.php site-scan|ディレクトリツリーを作成(再開)|
|$ php index.php csv <数値>|CSV出力、<数値>に1が指定された場合't_1st'をCSV出力|
|$ php index.php show <数値>|標準出力、<数値>に1が指定された場合't_1st'を標準出力|
|$ php index.php table|テーブル一覧を表示|
|$ php index.php schema <テーブル名>|CREATE文を標準出力、<テーブル名>に指定した場合テーブルのCREATE文を表示|
|$ php index.php rm-dat|*.datを削除|
|$ php index.php rm-html|*.htmlを削除|
|$ php index.php site-validation|sitescanデータを元にリモートサイト解析、素のhtmlをダウンロード|
|$ php index.php site-validation-show|解析データを表示|
|$ php index.php site-validation-json|解析データをJSONで表示（デスクトップ版用）|
|$ php index.php site-validation-csv|解析データをCSV出力(Pixles2 サイトマップCSV形式)|
|$ php index.php site-validation-csv-origin|解析データをCSV出力|
|$ php index.php site-validation-result|解析データの確認用に|
|$ php index.php rm-scraping|HTML切り出しデータの削除|
|$ php index.php scraping|HTML切り出し|
|$ php index.php rm-cssworks|URL補完データ削除|
|$ php index.php cssworks|URL補完（リンクをhttp://〜形式に変更）|
|$ php index.php inline| CSSをインライン化（duplicated）｜
|$ composer test|ユニットテストを実行|
|$ sudo php -S localhost:8899 -t src/data/SampleSite src/data/SampleSite/router.php|作成したSampleSiteをサーバー上で確認|


フォルダ構造

```
index.php エントリーポイント
src
├── Asazuke.php　サイト解析、エラーチェック、コンテンツ取得、　サイトマップCSV作成用
├── AsazukeConf.php　設定ファイル
├── AsazukeDB.php　DB（SQLite）接続＆SQL作成
├── AsazukeInlineCSS.php　CSSインライン化
├── AsazukeMessage.php　Asazuke内で使うテキスト、エラーコードなど
├── AsazukeSiteScan.php　　サイトスキャン
├── AsazukeUtil.php　ユーティリティ
├── AsazukeUtilConsole.php　ターミナル関連のユーティリティ
├── AsazukeUtilFile.php　ファイル操作のユーティリティ
├── data
│   ├── SampleSite　
│   ├── SampleSite-testParam
│   ├── asazuke.log
│   ├── asazuke.sqlite
│   ├── cssWorks
│   ├── htmlCache
│   ├── inlineCSS
│   ├── lintResult
│   ├── scraping
│   └── scripts
└── libs
    └── phpQuery-onefile.php

10 directories, 12 files
```
