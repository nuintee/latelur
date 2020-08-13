<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!-- アドレスバー等のブラウザのUIを非表示 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- default（Safariと同じ） / black（黒） / black-translucent（ステータスバーをコンテンツに含める） -->
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!-- ホーム画面に表示されるアプリ名 -->
<meta name="apple-mobile-web-app-title" content="Latelur">
<!-- ホーム画面に表示されるアプリアイコン -->
<link rel="apple-touch-icon" href="./images/logo_app192x192.png">
<title>Latelur</title>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class ="top-part">
            <img src = "./images/logo_header.svg">
        </div>

        <div class ="bottom-part">
            <?php 
            #Page Name
            require "orientation.php";
            echo "<h3>".$pageLocation."</h3>";
            ?>
        </div>
    </header>

    <div id = "loading">
        <img src = "./images/logo_header.svg">
        <p>version 1.0</p>
    </div>

    <style>
        header{
            margin:32px 16px 0 0px;
            padding:8px;
            border-bottom:2px solid #484848;
            text-align:center;
            font-family:'Raleway', sans-serif;
            color:#FFF;
        }

        #loading{
          /* 画面一杯にローディング画面を広げる */
            height: 100%;
            width: 100%;
            background: #333;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 100;
            /* flexboxを使ってローディングアイコンを画面の中央に寄せる */
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
    </style>

<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!--Loading Screen -->
<script>
    $(window).on('load', function(){
    $('#loading').hide();
});
</script>