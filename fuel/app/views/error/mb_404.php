<!DOCTYPE html>
<html>
  <head>
    <!--metas-->
    <title>404 のっと ふぁうんど！！</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/error/404.css">
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <!--//metas-->
  </head>
  <body>
    <!--container-->
    <div class="continer">
      <!--header-->
      <header>
        <p class="not_found">404 not found</p>
      </header>
      <!--//header-->
      <!--main_contents-->
      <div class="contents">
        <div class="info_text">
          <p>申し訳ございません。</p>
          <p>お探しのページは見つけることができませんでした。</p>
        </div>
        <div>
          <a class="link" onclick="history.back()">>戻る<</a>
        </div>
        <img src='/assets/img/404/<?php echo $img;?>' />
        <div>
          <a class="link" href="/">>TOPに戻る<</a>
        </div>
      </div>
      <!--main_contents-->
      <!--footer-->
      <!--//footer-->
    </div>
    <!--//container-->
  </body>
</html>
