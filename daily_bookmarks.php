<?php
$openapp = isset($_REQUEST["openapp"]) ? $_REQUEST["openapp"] : "";
if ($openapp) {
    $shell ='open -a "' . rawurldecode($openapp) . '" ';
    system($shell);
    exit();
}
// フォルダとアプリをopen
$open = isset($_REQUEST["open"]) ? $_REQUEST["open"] : "";
if ($open) {
    $home_cmd = 'echo $HOME';
    $home = trim(`$home_cmd`);
    $shell ='open "' . $home . '/' . rawurldecode($open) . '"';
    $ret = system($shell);
    exit();
}
?>
<html>
<head>
    <meta http-equiv="content-language" content="ja" charset="UTF-8">
    <title>daily bookmarks</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style>
		body{color:#666; font-family:sans-serif,helvetica; }
		a:link{color:#1e90ff; text-decoration:none; }
		a:visited{color:#1e90ff; text-decoration:none; }
		a:hover{color:#1e90ff; text-decoration:underline;}

        .top_nowrap {vertical-align:top; white-space:nowrap;}
        silver {color:silver; }

		.flex-item {margin-left:15px; margin-bottom:20px; width:300px; }
        .flex-container {display: flex; flex-wrap:wrap; }
	</style>
</head>
<body>
    <div class="flex-container">
        <div class="flex-item" > 
            <b>アプリ</b> <hr/>
            <a sc="syspre" href="?openapp=<?=urlencode("System Settings") ?>">システム環境設定</a> 
            <br/>
            <a sc="chess" href="?openapp=<?=urlencode("Chess") ?>">Chess</a> 
            <br/>
            <a sc="line" href="?openapp=<?=urlencode("Line") ?>">LINE</a> 
            <br/>
            <a sc="slack" href="?openapp=<?=urlencode("Slack") ?>">Slack</a> 
            <br/>
            <a sc="discord" href="?openapp=<?=urlencode("Discord") ?>">Discord</a>             
        </div>
        <div class="flex-item" > 
            <b>フォルダ</b> <hr/>
            <a sc="desktop" href="?open=<?=urlencode("Desktop")?>">Desktop</a>
            <a sc="movies" href="?open=<?=urlencode("Movies")?>">Movies</a>
        </div>
        <div class="flex-item" > 
        
            <b>生活</b> <hr/>
            <a sc="syukujitu" href="https://www.google.com/search?q=%E4%BB%8A%E5%B9%B4%E3%81%AE%E7%A5%9D%E6%97%A5">祝日</a>
            <a sc="ondo" href="https://www.google.com/search?q=%E6%B8%A9%E5%BA%A6">温度</a>  

            <br/>
            <a sc="hotpepper" href="https://beauty.hotpepper.jp/CSP/my/myPage/">HotPepperBeauty</a>
            <br/>
            <a sc="amazon" href="http://amazon.co.jp">amazon</a>
            <br/>

            googleツール <br/>
            <a sc="doc" href="https://docs.google.com/document/">Doc</a> 
            <a sc="sheet" href="https://docs.google.com/spreadsheets/">Sheet</a>  
            <a sc="gmail" href="https://mail.google.com/mail/u/0/?pli=1#inbox">GMail</a>
            <a sc="calender" href="https://calendar.google.com/calendar/u/0/r/month">Calender</a>

        </div>
        <div class="flex-item" > 
            <b>マネー</b> <hr/>
            相場          
            <a sc="nikkei225" href="https://www.google.com/search?q=nikkei225">Nikkei225</a>   
            <a sc="usdjpy" href="https://www.google.com/search?q=usdjpy">USDJPY</a>   
            <br/>
            銀行
            <a sc="paypaybank" href="https://www.paypay-bank.co.jp/">PayPay銀行</a>
            <a sc="yuutyo" href="https://direct.jp-bank.japanpost.jp/tp1web/U010101WAK.do?link_id=ycDctLgn">ゆうちょ</a>
            <br/>

        </div>
        <div class="flex-item" > 
            <b>配送など</b> <hr/>
            配送 <br/>
            <b><a sc="yamato" href="https://cmypage.kuronekoyamato.co.jp/portal/entrance?id=kojintop">ヤマト</a></b>

            <a href="http://www.kuronekoyamato.co.jp/ytc/customer/send/services/takkyubin/">宅急便</a> 
            <silver>3辺60-200cm</silver> 
            <br/>

            <a sc="sagawa" href="https://www.e-service.sagawa-exp.co.jp/portal/do/login/show"><b>佐川</b></a>
            <br/>
            郵便局 <br/>
            <a href="https://webyubin.jpi.post.japanpost.jp/webyubin/snt/DYFR900.do">Webゆうびん/速達</a>
            <br/>
            <a sc="clickpost" href="https://clickpost.jp/">クリックポスト</a> <silver>188円 34x25x5</silver>
            <br/>
            公共料金 <br/>
            <a sc="gas" href="https://members.tokyo-gas.co.jp/">東京ガス</a> 
        </div>
        <div class="flex-item" >   
            <b>サブスク課金確認(頭にs)</b> <hr/>
                Amazon 
                    <a sc="skindle" href="https://www.amazon.co.jp/kindle-dbs/ku/ku-central?_encoding=UTF8&ref_=d2_ss_kindle_unlimited">KindleUL</a>
                    <a sc="smusic" href="https://www.amazon.co.jp/music/settings">MusicUL</a>
                    <br/>
                動画
                    <a sc="netflix" href="https://www.netflix.com/jp/">netflix</a> 
                    <a sc="syoutube" href="https://www.youtube.com/paid_memberships">Youtubeプレミアム</a>
                    <br/>
                音楽
                    <a sc="sspotify" href="https://www.spotify.com/jp/account/subscription/">spotify</a> 
                    <br/>
                書籍
                    <a sc="sdmagazine" href="https://d.dmkt-sp.jp/common/mypage_setting/index.html">d-magazine</a><br/>
                ポータル
                    <a sc="syahoo" href="https://premium.yahoo.co.jp/">Yahooプレミアム</a><br/>

                Saas
                <a sc="sdropbox" href="https://www.dropbox.com/account/plan">Dropbox</a>
                <a href="https://www.evernote.com/Settings.action/">Evernote</a>             

                <br/>
                開発    
                    <a sc="sadobe" href="https://account.adobe.com/plans">adobe</a>    
        </div>
        <div class="flex-item" >
            <b>東京</b> <hr/>
            <a sc="bunbetsu" href="https://www.city.shinjuku.lg.jp/content/000259254.pdf">新宿ごみ分別 </a>
            <a sc="sodai" href="http://sodai.tokyokankyo.or.jp/Sodai/V2WebNotes/13104/0/">粗大ごみ</a>
            <br/>

            <br/>フリマ<br/>
            <a sc="mercali" href="https://www.mercari.com/jp/">mercali</a> 
            <a sc="msyu" href="https://jp.mercari.com/mypage/listings">出品</a>
            <a sc="mkou" href="https://jp.mercari.com/mypage/purchases">購入</a> 

            <br/>
            <a sc="yafu" href="https://auctions.yahoo.co.jp/">ヤフオク</a>  
            <br/> 
            <a sc="jimoty" href="https://jmty.jp/web_mail/posts">ジモティ</a>                  
        </div>
        <div class="flex-item" >    
                <b>娯楽</b> <hr/>

                CD/DVDレンタル
                <a sc="discus" href="https://movie-tsutaya.tsite.jp/netdvd/dvd/top.do?i=0&pT=0">DISCUS</a>
                <a sc="geo" href="https://rental.geo-online.co.jp/">GEO</a>  
                <br/>
                Book
                <a sc="dmagazine" href="https://magazine.dmkt-sp.jp/">dマガジン</a>
                <br/>
                Game 
                <a sc="wordle" href="https://www.nytimes.com/games/wordle/index.html">wordle</a>
                <a sc="sushida" href="https://sushida.net/">寿司打</a>
        </div>
        <div class="flex-item" >    
            <b>SNS</b> <hr/>
            <a sc="fb" href="https://www.facebook.com/">facebook</a>
            <a sc="twitter" href="https://twitter.com/home">twitter</a>
        </div>  

    </div> <!-- flex container -->

    <!-- 入力表示ウィンドウ -->
    <div id="enter" style="position:absolute; border-radius:20px; width:600px; 
                            opacity:0.8; top:200px; left:400px;
                            padding-left:20px; padding-right:20px; padding-bottom:20px;">
        <div id="input_words" style="font-size:600%; "></div>
        <table><tr>
            <td id="kouho_shortcuts" style="font-size:150%; color:gray; "></td>
            <td id="kouho_lists" style="font-size:150%; "></td>
        </tr></table>
    </div>
    <script>

        let input_chars = ""
        $(document).ready(function() {
            // ショートカットキー
            $(document).keydown(function(event){ 
                if (event.key === 'Enter' ) input_chars = "" //enterで入力リセット
                if (event.key.length == 1 ) input_chars += event.key.toLowerCase() //一文字なら追記していく metaやshift enterはx
                // 一つだけ該当すれば遷移
                $('a').css('border','').css('background','') // 該当aタグの赤枠をまず全除去
                let matchs = $('a[sc^=' + escapeJquerySelector(input_chars) + ']')
                // 1件絞れたらなら開く 
                if (matchs.length == 1) {

                    // ?openで始まるならajax
                    let url = $(matchs[0]).attr('href')
                    if (url.startsWith('?open')){
                        $.get(url)
                    }else{
                        window.open(url) 
                    }
                    // 戻ってきた時すぐ使えるよう初期化
                    matchs =[] 
                    input_chars = ""
                }
                showKouhos(matchs)
            })
        })

        // 入力中文字列と候補リストを表示/非表示
        function showKouhos(matchs){

            if (input_chars.length == 0 ) {
                $('#enter').css('display','none')
            }else{
                $('#enter').css('display','block')                
            }
            $('#input_words').html(input_chars );
            if (matchs.length == 0 ) {
                $('#enter').css('background','red').css('color','white')
            }else{
                $('#enter').css('background','#f0f0ff').css('color','')       
            }

            let kouho_names = []
            let kouho_shortcuts =[]
            matchs.each(function(ind,obj){
                let shortcut_str = $(obj).attr('sc').toLowerCase()
                kouho_shortcuts.push( (kouho_names.length + 1) + ' ' + shortcut_str.replace(input_chars,'<b>' + input_chars + '</b>')) //マッチ分太字
                kouho_names.push($(obj).text())
                $(obj).css('border','1px solid red').css('background','#fff8f8') // 該当Aタグに赤枠つける   
            })
            $('#kouho_lists').html(kouho_names.join('<br/>'))
            $('#kouho_shortcuts').html(kouho_shortcuts.join('<br/>'))
        }
        // jqueryにセットする用にエスケープ id="val[1]" の項目を選択するときなど
        function escapeJquerySelector(val){
            return val.replace(/[ !"#$%&'()*+,.\/:;<=>?@\[\\\]^`{|}~]/g, "\\$&");
        }   
    </script>
</body>
</html>
