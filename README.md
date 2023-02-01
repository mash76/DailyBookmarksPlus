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
<kbd>
<img width="1041" alt="Screenshot 2023-02-01 at 18 37 11" src="https://user-images.githubusercontent.com/1288268/216006254-fad8e16e-2bc0-4963-8541-4dbab21dc0c0.png"></kbd>



# 別手段との比較

私がこれまで試した手段との比較です。

・DaylyBookmarksPlus
    面倒：Aタグを書く、PHPが必要
    利点：レイアウトが自由、画面を見ずにキーボード操作できる
・複数ディスプレイ 
    面倒：首を動かしたり目の焦点を合わせるのが大変、場所をとる、解像度が違うと目が疲れる
    利点：つなぐだけで簡単。
・複数デスクトップの切り替え
    面倒：切り替えアニメーションを省略できない
    利点：細かいウィンドウ配置まで
・Command + Escでアプリを切り替え
    面倒：画面を見て選ぶ必要がある、起動してるものしか出ない
    利点：Macの標準機能である
・ブラウザのブックマークバー
    面倒：数が多くなると埋もれる
    利点：ブックマーク操作がマウスで引っ張るだけで簡単、名前変更が簡単、フォルダ分けできる
・ブラウザのブックマークマネージャ
    ブックマークバーと同様
・アプリAlfred
    ・Mac標準のSpotlight検索を拡張したようなアプリ
    他アプリとのインテグレーションなどすごいのですが、わたしの用途には向かなかった。
・アプリManico
    optionキーなどで表示できるランチャー。キーボードに各アプリをひもづけて呼び出せる
    かつてそこそこ便利に使っていました。
・アプリControlax
    Manicoに近いアプリ
