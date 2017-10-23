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
      <a href="/" class="non-line menu-name"><?php echo $cont_params['name']?></a>
    <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div>
<div id="loader-bg">
  <div id="loader">
    <p>Now Loading...</p>
    <?php $loader_img = array("chiya","cocoa","rize","syaro","tino");?>
    <img src="/assets/img/neon_<?php echo $loader_img[rand(0,count($loader_img) -1 )];?>.jpeg" alt="Now Loading..." />
    <p>Now Loading...</p>
  </div>
</div>
<div id="wrap">
  ロード後に表示させたい内容
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function() {
  var h = $(window).height();

  $('#wrap').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});

$(window).load(function () { //全ての読み込みが完了したら実行
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
  $('#wrap').css('display', 'block');
});

//10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',10000);
});

function stopload(){
  $('#wrap').css('display','block');
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
}
</script>
