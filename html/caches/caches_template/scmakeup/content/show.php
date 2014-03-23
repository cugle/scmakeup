<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SC美妆连锁加盟</title>
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://www.scmakeup.com/statics/js/jquery.slider.js"></script>

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

<link href="<?php echo CSS_PATH;?>product.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
  <?php include template("content","header"); ?>

  <div id="mainContent">
  <div id="location"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > <?php echo catpos($catid);?>正文</div>
  <div id="product">
    	<h2 align="center"><?php echo $title;?></h2>
        <div id="productdetail"> 
        <div class="thisproductcat">
                  <ul>
                  <li style="background-color:#CCCCCC;"> <h3 style="padding:0px; margin:0px;">
				<?php echo $CATEGORYS[$CAT['parentid']]['catname'];?>
                   </h3></li>

                  
                  
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=601ecd01304b3bc86775b21a81ccdfef&action=category&catid=%24CAT%5Bparentid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CAT[parentid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
            
                </ul>
                </div>
	 <div><?php echo $content;?></div>
      </div>  
      
    </div>
    <div class="prorecommended">
    	<h3 align="center">推荐资讯</h3>
        
        
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=18163727666e61ef56a992a493275663&action=lists&catid=6&thumb=1&order=rand%28%29&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','thumb'=>'1','order'=>'rand()','limit'=>'3',));}?>
            <ul id="prorecommendedlist">  
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>    
                <li><a href="<?php echo $r['url'];?>" class="link">
                 	<img src="<?php echo thumb($r[thumb],312,181);?>" title="<?php echo $r['title'];?>" width="312px" height="181px"/>
                     <h3><?php echo str_cut($r[title],40);?></h3>
                     <p><?php echo str_cut($r['description'],80);?></p>
                 </a></li> 
                 
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    

    </div>
<div class="wrapProductList">
		  <h3 align="center">SC产品分类</h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7588a606c1ac1852286fa98198f49bed&action=category&catid=14&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <div class="productList">
                 <h3><?php echo $v['catname'];?></h3>
                
                 <ul>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=19940144273ee90213fc69dd92dac68f&action=category&catid=%24k&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li> <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 </ul>
              </div>
    
            <?php $n++;}unset($n); ?>
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
