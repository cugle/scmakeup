<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
  <div id="header">
  	<div id="headcontainer">
	<div id="logo"><img src="<?php echo IMG_PATH;?>logo.jpg" /></div>
    <div id="search"><form id="searchform" name="form1" method="post" action="">
         <input name="keywords" type="text" />
           <label>
             <input type="submit" name="button" id="button" value="搜索" />
           </label>
         </form></div>
    <div id="menu">
    	 <div class="menudiv">
         <ul id="menu"> 
            <li id="menuitem"><a href="<?php echo siteurl($siteid);?>">首页</a><span>|</span></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
           <li id="menuitem"><a href="articlelist.html" class="link"> <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><span>|</span></li> 
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       	 </ul> 
	   	 </div>
    </div>
	</div>
 	 <!-- end #header -->
  </div>
  
<div id="flashbanner">
    <div id="slideshow" rel="auto-play">
	<div class="img">
		<span>
			<a href="#" target="_blank"><img width="930" height="400" alt="" src="<?php echo IMG_PATH;?>/1.jpg" /></a>
			<a href="#" target="_blank"><img width="930" height="400" alt="" src="<?php echo IMG_PATH;?>/2.jpg" /></a>
			<a href="#" target="_blank"><img width="930" height="400" alt="" src="<?php echo IMG_PATH;?>/3.jpg" /></a>
		</span>
		<div class="paging pattern"></div>
		<div class="paging subpattern"></div>
	</div>
</div>
</div>  
<script type="text/javascript" src="http://www.scmakeup.com/statics/js/jquery.slider.js"></script>