<div class="header-top-group">
  <img src='/assets/img/sirayuki.jpg' class="head-img1"/>
  <div class="head-name">ゆえるのサイト ここの画像募集中及び作成中</div>
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
