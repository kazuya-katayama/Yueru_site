<!DOCTYPE html>
<html>
  <head>
    <!--metas-->
    <?php echo $metas;  //metas.phpファイルを読み込む?>
    <!--//metas-->
  </head>
  <body>
    <!--container-->
    <div id="container">
      <!--header-->
        <?php echo $header; //header.phpファイルを読み込む?>
        <?php echo $header_menu; //header_menu.phpファイルを読み込む?>
      <!--//header-->
      <div id="contents">
        <?php echo $content;  //メインコンテンツの読み込み?>
      </div>
      <?php if (isset($side_menu)) {?>
        <!--side_menu-->
        <?php echo $side_menu;  //side_menu.phpを読み込み?>
        <!--//side_menu-->
      <?php } ?>
      <!--footer-->
        <?php echo $footer; //footer.phpを読み込み?>
      <!--//footer-->
    </div>
    <!--//container-->
  </body>
</html>
