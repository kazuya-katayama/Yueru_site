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
        <a href="/" class="non-line menu-name"><?php echo $cont_params['name']?></a>
      <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div>

<script>
$(function(){
	var glovalHeader = $('.header-menu-bar');　//　グローバルナビゲーションのセレクタ
	var HeaderOffset = glovalHeader.offset().top; //　ブラウザの一番上からナビゲーションまでの位置

	// スクロールした時
	$(window).scroll(function () {
		// スクロールがナビゲーション位置に来たら
		if ($(this).scrollTop() > HeaderOffset) {
			// ナビゲーションをfixedさせる
			glovalHeader.css({
				'position':'fixed',
				'top':0,
				'width':'100%',
			});
			// ここは重要な部分で、fixedするとその分高さがなくなるので、margin-topを高さ分つけてあげます。
		} else {
			// ifのtrueでない場合、つまり、ナビゲーション位置に来ていない時はrelativeで元に戻す。staticでも可
			glovalHeader.css('position','relative');
			$('.header-menu-bar').css('margin-top','auto');
		}
	});
});
</script>
