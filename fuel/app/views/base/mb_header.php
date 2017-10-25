<div class="header-top-group">
  <img src='/assets/img/sirayuki.jpg' class="head-img1"/>
  <div class="head-name">ゆえるのサイト ここの画像募集中及び作成中</div>
</div>

<div id="loader-bg">
  <div id="loader">
    <p class="now_loding">Now Loading...</p>
    <?php $loading_img = Config::load('m_loading_img', 'loading_img');?>
    <img src="/assets/img/<?php echo $loading_img[rand(0,count($loading_img) -1 )];?>" alt="Now Loading..." />
    <p class="now_loding">Now Loading...</p>
  </div>
</div>
