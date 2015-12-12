<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="big_img">
	<img class="banner" src="<?php echo IMG_PATH;?>guitar/big_img/slide1.jpg" alt="big_img">
	<img class="banner" src="<?php echo IMG_PATH;?>guitar/big_img/slide2.jpg" alt="big_img">
	<img class="banner" src="<?php echo IMG_PATH;?>guitar/big_img/slide3.jpg" alt="big_img">
	<img class="banner" src="<?php echo IMG_PATH;?>guitar/big_img/slide4.jpg" alt="big_img">
	<div class="banner_box">
			在这你能找到<i class="main_word_color f30">最好</i>的吉他教学作品,<br/><span>以及<i class="main_word_color f30">最棒</i>的吉他老师！</span>
	</div>
</div>
<div class="content">
	<div class="index_title pt100 clearfix pb30">
		<h3><span class="main_word_color">最新</span>作品</h3>
		<a href="http://www.omguitar.cn/index.php?m=content&c=index&a=lists&catid=9">>查看全部作品</a>
	</div>
	<ul class="product_list clearfix">
             <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=996f890a5cf8c472bbacbe6b02e83ee7&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
             <?php $categorys = getcache('category_content_'.$siteid,'commons');?>
             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             <?php $category = $categorys[$v[catid]];?>
             <?php $modelid = $category['modelid'];?>
             <?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$v[id])); $views = $_r[views]; ?>
             <?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$v[catid].'-'.$v[id].'-'.$modelid));?> 
				<li id="product_item_1" class="product_list_item">	
					<div class="product_list_item_pic">
						<a href="<?php echo $v['url'];?>">
						<img src="<?php echo thumb($v[thumb],230,230);?>" alt="blues" />
						<div class="title"><?php echo $v['title'];?></div>
						<div class="name"><?php echo $v['author'];?></div>
						</a>
					</div>
					<div class="product_list_item_content">
						<div class="tag clearfix pl10"><span class="tag_name"><?php echo $v['play_type'];?></span><span class="tag_name"><?php echo $v['music_style'];?></span><span class="price_pay fr">免费</span></div>
						<div class="join_number clearfix">
						<i class="see_icon" title="评论过">&nbsp;</i><span class="see_number" title="看过"><?php echo $views;?></span>
<!--<i class="talk_icon" title="评论过">&nbsp;</i><span class="praise_number" title="评论过"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>-->
<i title="难度" class="level fr pr10"><a href="level.html" target="blank"><img src="<?php echo IMG_PATH;?>guitar/level_<?php echo $v['hard'];?>.png" alt="" class="fl"></a></i>
						</div>
					</div>
					  <?php $username = $v[username];$meminfo=get_memberinfo_buyusername($username);$userid=$meminfo['userid']?>
					<p class="clearfix pt10"><a href="teather_detail.html"><img src="<?php echo get_memberavatar($userid ,30,30);?>" alt="" class="th_avatar"><span class="th_name"><?php echo $v['username'];?></span></a><span class="th_time"><?php echo $v['inputtime'];?></span></p>
				</li>	
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               <?php $n++;}unset($n); ?>					
	</ul>
	<div class="index_title pt70 clearfix pb30">
		<h3><span class="main_word_color">热门</span>曲风</h3>
		<!-- <a href="#">>查看全部风格</a> -->
	</div>
	<ul class="style_list clearfix">
		<li class="style_list_item">
			<a href="http://www.omguitar.cn/index.php?m=content&c=index&a=lists&catid=12">
				<img src="<?php echo IMG_PATH;?>guitar/style/blues.jpg" alt="">
				<div class="style_list_item_mask"><div class="mask_txt">布鲁斯</div></div>
			</a>
		</li>
		<li class="style_list_item">
			<a href="http://www.omguitar.cn/index.php?m=content&c=index&a=lists&catid=11">
				<img src="<?php echo IMG_PATH;?>guitar/style/pop.jpg" alt="">
				<div class="style_list_item_mask"><div class="mask_txt">现代流行</div></div>
			</a>
		</li>
		<li class="style_list_item_sp">
			<a href="http://www.omguitar.cn/index.php?m=content&c=index&a=lists&catid=14">
				<img src="<?php echo IMG_PATH;?>guitar/style/jazz.jpg" alt="">
				<div class="style_list_item_mask"><div class="mask_txt">爵士</div></div>
			</a>
		</li>				
	</ul>
</div>
<?php include template("content","footer"); ?>

<script type="text/javascript">
	pos();
	function pos(){
		var banner = $(".banner");
		var len = banner.length;
		var banner_box = $(".banner_box");
		var w = banner_box.width();
		var h = banner_box.height();
		var i = 1;
		banner_box.css({
			left:($(".big_img").width() - w)/2
		});
	}
	window.onload = function(){
		var banner_box = $(".banner_box");
		banner_box.css("visibility","visible");
	}
	window.onresize = function(){
		pos();
	}
</script>

</body>
</html>
