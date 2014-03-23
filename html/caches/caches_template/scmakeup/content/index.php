<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.7.2.min.js"></script>

</head>
<body>
<div id="container">
<?php include template("content","header"); ?>
    
  <div id="mainContent">
  	<div id="news">
   		<h2 align="center">新闻动态</h2>
    	<div id="leftnews">
          <p align="center"><embed allowfullscreen="true" allowscriptaccess="always" flashvars="from=ku6" height="224" src="http://player.ku6.com/refer/ZT6OBQSMpj1mb0Wn_6zj7Q../v.swf" type="application/x-shockwave-flash" width="270"></p>
          <div id="latestnew">
          <h4 align="center">【SC品牌简介】</h3>
          <p class="gray"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aa0716723fcd0d12f918820753a9fa82&sql=SELECT+%2A+FROM+sc_page+where+catid%3D2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM sc_page where catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
            <?php echo str_cut(strip_tags($val[content]),700,"");?>......<a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>" class="gray">查看全文&gt;&gt;&gt;</a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>      		</p>
           
                 
				
          </ul>
          </div>
        </div>
  <div id="rightnews">

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7f68113c8000ea8c4574542bbf4adcee&action=position&catid=6&posid=2&order=listorder+DESC&thumb=1&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('catid'=>'6','posid'=>'2','order'=>'listorder DESC','thumb'=>'1','limit'=>'4',));}?>
            <ul id="newslist">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>    
                <li><a href="<?php echo $r['url'];?>" class="link">
                 	<img src="<?php echo thumb($r[thumb],312,181);?>" title="<?php echo $r['title'];?>" width="312" height="181"/>
                 	 <h5><?php echo $CATEGORYS[$catid]['catname'];?></h5>
                     <h3><?php echo str_cut($r[title],40);?></h3>
                    <p><?php echo str_cut($r['description'],150);?></p>
                 </a></li> 
                 
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  

      </div>
    </div>
    <div id="product">
    	<h2 align="center">SC最新产品</h2>
        
        
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b6510c51b7a92aeef23aa30e86c3b6f7&action=lists&catid=14&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>
            <ul id="productlist">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>    
                <li><a href="<?php echo $r['url'];?>" class="link">
                 	<img src="<?php echo thumb($r[thumb],312,181);?>" title="<?php echo $r['title'];?>"/>
                 	 <h5><?php echo $CATEGORYS[$catid]['catname'];?></h5>
                     <h3><?php echo str_cut($r[title],20);?></h3>
                    <p><?php echo str_cut($r['description'],100);?></p>
                 </a></li> 
                 
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
            

    </div>
  <div id="school">
    	<h2 align="center">SC学堂</h2>
        
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=586ae45074125d0f15458934136eb4e4&action=lists&catid=36&thumb=1&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','thumb'=>'1','order'=>'listorder DESC','limit'=>'3',));}?>
            <ul id="schooltlist">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>    
                <li><a href="<?php echo $r['url'];?>" class="link">
                 	<img src="<?php echo thumb($r[thumb],300,175);?>" title="<?php echo $r['title'];?>" width="300px" height="175px"/>
                     <h3><?php echo str_cut($r[title],40);?></h3>
                    <p><?php echo str_cut($r['description'],80);?></p>
                 </a></li> 
                 
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    
<div class="wrapProductList">
		  <h2 align="center">SC产品分类</h2>
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

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.slider.js"></script>
</body>
</html>