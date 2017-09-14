<div class="header-top-group">
  <img src='/assets/img/sirayuki.jpg' class="head-img1"/>
  <div class="head-name">ゆえるのサイト ここの画像募集中及び作成中</div>
</div>
<div class="header-menu-bar">
  <ul class="menu-">
    <?php foreach($contents as $cont_params) {?>
    <li class="menu-case">
      <?php if(isset($cont_params['cont'])) { ?>
      <div class="menu-name"><?php echo $cont_params['name']?></div>
      <ul class="menu-list">
        <?php foreach ($cont_params['cont'] as $key => $value) {?>
          <li class="menu-one">
            <a href="<?php echo $value ?>" class="non-line"><?php echo $key ?></a>
          </li>
        <?php } ?>
      </ul>
    <?php } else { ?>
      <a href="/" class="non-line"><?php echo $cont_params['name']?></a>
    <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div>
<!-- #contents START -->
<div id="contents">

<p><a id="modal-open">【クリックでモーダルウィンドウを開きます。】</a></p>
<p class="page-txt">ここからページ本文<br>
<br>
↓↓↓　スクロールしてください ↓↓↓</p>

</div><!--/#contents-->
<script>

//modal
$(function(){

	$("#modal-open").click(function(){

		$("body").append('<div id="modal-bg"></div>');

		modalResize();

		$("#modal-bg").fadeIn("slow");
		$("#modal-main").fadeIn("slow");
		$("#modal-bg,#modal-main").click(function(){
			$("#modal-main,#modal-bg").fadeOut("slow",function(){

				$('#modal-bg').remove() ;
			});

		});

		$(window).resize(modalResize);

		function modalResize(){

			var w = $(window).width();
			var h = $(window).height();

			var cw = $("#modal-main").outerWidth();
			var ch = $("#modal-main").outerHeight();

			$("#modal-main").css({"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"});

		}

	});

});
</script>
