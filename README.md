Mac専用です  

# 毎日使うサイトやファイル、アプリ、フォルダにキーボードで素早くたどり着く
Web/App/Folder Bookmarks with Incremental Keyboard Shortcuts  
PHP1ファイル完結のキーボード増分ショートカットつきのWeb/アプリ/フォルダランチャーです  
HTMLであるDailyBookmarksと比べて、PlusはMac内のアプリとフォルダやファイルへの直リンクができます。

利用にはHTMLを書ける必要があり、また動作にはプログラム言語PHPを利用します。

「あとで読む」のような一時的ブックマークではなく、仕事や作業をしながら一日50回くらい使うことを想定しており、
DailyBookmarksという名前をつけました。


<kbd><img width="500" alt="Screenshot 2023-01-29 at 15 05 00" src="https://user-images.githubusercontent.com/1288268/215308281-af03ddf9-3915-47ba-bfc1-2dbb8b354880.png"></kbd>

# 2分で利用開始

最近のMacにはPHPが入っておらず、まずそこからです。
Mac用パッケージ管理ツールのHomebrewを入れ、BrewでPHPを入れるのが一般的でしょう。

Homebrewサイト。トップページにインストール方法が書いてあります。
https://brew.sh/index_ja

次にターミナルから以下のようにHomebrewを使ってPHPを入れます。
```
brew install php 
```

次に、以下のリンクからこのツールをダウンロードして解凍、中にdaily_bookmarks_plus.phpがあります。これが本体です。  
https://github.com/mash76/DailyBookmarksPlus/archive/refs/heads/main.zip

daily_bookmarks.plus.phpのあるフォルダにターミナルで移動して
```
PHP -S 0.0.0.0:8000
```
でPHPのビルトインサーバーを起動します。
その上でブラウザに
http://0.0.0.0:8000/daily_bookmarks_plus.php
と入れるとブックマーク画面が表示されます。

**j**と押したらジモティのサイトに遷移します。  
**disk**と入力したらディスクユーティリティのアプリが起動します。  
**sl**と入力したらslackのアプリが起動します。
**mo**と入力したらMoviesのフォルダが開きます。

これら初期情報はサンプルとして登録してあります。
シンプルなHTML1ファイルなので、仕事や興味の変化に応じて日々Aタグを書き換えてご利用ください。

# しくみ
HTML内のAタグのscという属性をつけ、ショートカット文字列として扱っています。  
この場合、aと押せばamazonに飛びます。 

```
<a sc="amazon" href="http://amazon.co.jp">amazonサイト</a>
<a sc="desktop" href="?open=<?=urlencode("Desktop")?>">Desktopフォルダ</a>
<a sc="syspre" href="?openapp=<?=urlencode("System Settings") ?>">システム環境設定アプリ</a>
```


当初は長いプログラムを書きましたが、生活や状況の早い変化にブックマーク集を対応させるには、細かく作り込むよりHTMLの自由さを解放するべきと考えました。

# 応用
私はこのリンク集をブラウザのスタートページにしたり、BetterTouchToolというMacのカスタマイズツールでトラックパッドの4本指下スワイプに割り当てたりしています。
このブックマークHTML自体にたどりつきやすくすることも重要です。

# 別手段との比較
