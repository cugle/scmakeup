<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SC美妆连锁加盟</title>
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.7.2.min.js"></script>
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
    	<h2 align="center">关于我们</h2>
        <div id="productdetail"> 
               <div class="thisproductcat">
                <ul>
                  <li style="background-color:#CCCCCC;"> <h3 style="padding:0px; margin:0px;">关于我们</h3></li>
                  <?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                	<li><a href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
				  <?php $n++;}unset($n); ?>
                </ul>
       </div>
       
         <div> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aa0716723fcd0d12f918820753a9fa82&sql=SELECT+%2A+FROM+sc_page+where+catid%3D2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM sc_page where catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
            <?php echo strip_tags($val[content]);?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>     </div>
      </div>  

    </div>
    <div class="wrapProductList">
		  <h3 align="center">SC产品分类</h3>
          <div class="productList">
              <h3>脸部</h3>
                <ul>
                  <li> <a href="#">底妆</a></li>
                  <li> <a href="#">遮瑕</a></li>
                  <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/脸部/powder/fr-powders-蜜粉.html">蜜粉</a> </li>
                  <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/脸部/blush/fr-blush-腮红.html">腮红</a> </li>
                </ul>
         </div>
                    
         <div class="productList">
             <h3>眼部</h3>
             <ul>
                 <li>  <a href="/beauty/zh_cn/香氛与美容/彩妆/眼部/mascaras/fr-mascaras-睫毛膏.html">睫毛膏</a></li>
                 <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/眼部/eyeshadows/fr-eyeshadows-眼影.html">眼影</a> </li>
                 <li>  <a href="/beauty/zh_cn/香氛与美容/彩妆/眼部/eyeliner/fr-liners-眼线.html">眼线</a> </li>
                 <li>  <a href="/beauty/zh_cn/香氛与美容/彩妆/眼部/eyebrows/fr-eyebrows-眉部.html">眉部</a> </li>
             </ul>
      </div>
                    
          <div class="productList">
             <h3>唇部</h3>
             <ul>
                  <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/唇部/lipsticks/fr-lipsticks-唇膏.html">唇膏</a> </li>
                  <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/唇部/gloss/fr-gloss-唇彩.html">唇彩</a></li>

                  
             </ul>
 
      </div>         
         <div class="productList">
              <h3>指甲</h3>
              <ul>
                <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/指甲/nail-lacquers/fr-naillacquers-指甲油.html">指甲油</a></li>
                <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/指甲/manicure/fr-manicure-美甲.html">美甲</a> </li>
              </ul>
      </div>
                    
          <div class="productList">
                <h3>化妆工具</h3>
                <ul>
                <li> <a href="/beauty/zh_cn/香氛与美容/彩妆/化妆工具/accessories/fr-brushes-专业化妆刷.html">专业化妆刷</a> </li>
                </ul>
      </div>
    </div>
    <div class="clear"></div>       
	<!-- end #mainContent -->
  </div>
<?php include template("content","footer"); ?>
<!-- end #container -->
</div>
</body>
</html>