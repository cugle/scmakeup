<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="footer">
  	<div  id="footcontainer">
  <div id="friendlink">


<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=025088fead088de23e9fbd30db1c286e&action=type_list&siteid=%24siteid&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'8',));}?>
<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
<li>
    <li>  <a href="<?php echo $v['url'];?>" class="white fontsize12" ><?php echo $v['name'];?></a></li>

</li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         
    </div>
    <div id="subsribe" class="fontsize14">
   	  <p>请输入email地址，订阅最新期刊</p>
         
        <form id="form1" name="form1" method="post" action="">
         <input type="text" size="30" />
           <label>
             <input type="submit" name="button" id="button" value="提交" />
           </label>
         </form>
    </div>
    
    <div id="mediaacountlist">
    	<ul>
    	 <li><a href="#" class="white fontsize14" id="weibo">微博</a></li>
         <li><a href="#"  class="white fontsize14" id="douban">豆瓣</a> </li>
         <li> <a href="#" class="white fontsize14" id="weixin">微信</a> </li>
        </ul>
        <div id="copyright" class="white fontsize14">
    	   @2014 all right servered 
   		</div>
    </div>

    <div id="rc-code">
      <div align="right"><img src="<?php echo IMG_PATH;?>rc_code.jpg"/></div>
    </div>
    </div>
  <!-- end #footer -->
  </div>