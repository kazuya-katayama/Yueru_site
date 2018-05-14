<div class="header-top-group">
  <img src='/assets/img/sirayuki.jpg' class="head-img1"/>
  <div class="head-name">ゆえるのサイト ここの画像募集中及び作成中</div>
</div>

<div id="loader-bg">
  <div id="loader">
    <p class="now_loding">Now Loading...</p>
    <?php $now_loading = Config::load('m_now_loading', 'loading_img');?>
    <img src="/assets/img/loading/<?php echo $now_loading[rand(0,count($now_loading) -1 )];?>" alt="Now Loading..." />
    <p class="now_loding">Now Loading...</p>
  </div>
</div>
