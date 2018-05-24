<?php $top_anchor = Config::load('m_top_anchor', 'top_anchor');	//top_anchor画像の一覧を取得?>
<p id="pagetop"><a href="#site_top"><img src="/assets/img/top_anchor/<?php echo $top_anchor[rand(0,count($top_anchor) -1 )];?>" height="70" width="70" alt="ページトップ"></a></p>
<script>
	$(function(){
    	// 「ページトップへ戻るボタン」の要素を隠します
    	$('#pagetop').hide();
    	// スクロールした場合のアクションが記されています
    	$(window).scroll(function(){
        	// スクロール位置が200pxを超えた場合に「ページトップへ戻るボタン」をフェードインで出現させる
        	if ($(this).scrollTop() &gt; 200) {
            	$('#pagetop').fadeIn();
        	}
        	// スクロール位置が200px以下の場合は「ページトップへ戻るボタン」を消しておく（フェードアウトで消える）
        	else {
            	$('#pagetop').fadeOut();
        	}
    	});
    	// 「ページトップへ戻るボタン」をクリックした場合のページトップへ戻るスピードの速さが記されています
    	$('#pagetop').click(function(){
        	$('html,body').animate({
            	scrollTop: 0 }, 500);
        	return false;
    	});
	});
</script>
<div id="footer">
  <div class="copyright">
    <div class="floatL pl5 pt10">Copyright©Yueru.Company co.,ltd. All Rights Reserved.</div>
  </div>
</div>
