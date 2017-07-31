<!DOCTYPE html>
<html>
  <head>
    <?php //metas.phpファイルを読み込む ?>
    <!--metas-->
    <?php echo $metas; ?>
    <!--//metas-->
  </head>
  <body>
    <div id="container">
      <?php //header.phpファイルを読み込む ?>
      <!--header-->
      <?php echo $header; ?>
      <!--//header-->
        <div id="wrapper">
            <div id="contents">
              <?php //メインコンテンツの読み込み ?>
              <?php echo $content; ?>
            </div>
        <?php //side_menu.phpを読み込み ?>
        <!--side_menu-->
        <?php echo $side_menu; ?>
        <!--//side_menu-->
        <?php //side_menu.phpを読み込み ?>
        <!--footer-->
        <?php echo $footer; ?>
        <!--//footer-->
      </div>
    </div>
  </body>
</html>
