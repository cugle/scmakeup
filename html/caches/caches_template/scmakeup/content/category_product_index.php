<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SC美妆连锁加盟</title>
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="<?php echo JS_PATH;?>jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.slideBox.min.js" type="text/javascript"></script>
<script>
jQuery(function($){
	$('#demo1').slideBox();
	$('#pic_news_box').slideBox({
		direction : 'top',//left,top#方向
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		startIndex : 1//初始焦点顺序
	});
	$('#demo3').slideBox({
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		hideClickBar : false,//不自动隐藏点选按键
		clickBarRadius : 10
	});
	$('#demo4').slideBox({
		hideBottomBar : true//隐藏底栏
	});
});
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<link href="<?php echo CSS_PATH;?>productcat.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
  <?php include template("content","header"); ?>
  <div id="mainContent">
  <div id="location"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > <?php echo catpos($catid);?>列表</div>
    <div  class="pic_news">
        	<h4 align="center">最新动态</h4>
            
        
            
<div id="pic_news_box" class="slideBox">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bc77f9b907460b567b5114146b7f82cc&action=lists&catid=6&thumb=1&order=rand%28%29&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','thumb'=>'1','order'=>'rand()','limit'=>'4',));}?>
  <ul class="items">
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>一"><img src="<?php echo thumb($r[thumb],300,200);?>" title="<?php echo $r['title'];?>" width="300" height="200"/></a></li>
    <?php $n++;}unset($n); ?>
    </ul>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
     

    </div>
    <div class="ProductcatList">
		  <h2 align="center">SC产品分类</h2>
          
          
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7588a606c1ac1852286fa98198f49bed&action=category&catid=14&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<?php $i=1?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <div class="productList">
                 <a href="<?php echo $v['url'];?>"><h3><?php echo $v['catname'];?></h3></a>
                
                 <ul>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=19940144273ee90213fc69dd92dac68f&action=category&catid=%24k&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li> <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 </ul>
              </div>
    		<?php if($i%3==0) { ?><div class="clear"></div> <?php } ?>
			<?php $i++?>
            <?php $n++;}unset($n); ?>
   		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 
    </div>
    <div class="recommended">
    	<h3 align="center">推荐阅读</h3>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9cf08f198920e11869f520d20313fd4f&action=lists&catid=6&thumb=1&order=rand%28%29&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','thumb'=>'1','order'=>'rand()','limit'=>'2',));}?>
           	<ul id="recommendedlist"> 
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>    
                <li><a href="<?php echo $r['url'];?>" class="link">
                 	<img src="<?php echo thumb($r[thumb],242,120);?>" title="<?php echo $r['title'];?>" width="242px" height="120px"/>
                     <h4><?php echo str_cut($r[title],38);?></h3>
                     <p><?php echo str_cut($r['description'],120);?></p>
                 </a></li> 
                 
                <?php $n++;}unset($n); ?>


            </ul>  
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>       
    <div class="clear"></div>       
	<!-- end #mainContent -->
  </div>
  <?php include template("content","footer"); ?> 
<!-- end #container -->
</div>
</body>
</html>
