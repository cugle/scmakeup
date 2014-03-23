<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta http-equiv="x-ua-compatible" content="ie=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo $SEO['description'];?>" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>articlelist.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>img/assets/application.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>img/assets/home.css" media="screen" rel="stylesheet" type="text/css" />
<link rel='stylesheet' href='<?php echo CSS_PATH;?>img/assets/pp.css' media='screen' />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo CSS_PATH;?>img/assets/html5.js"></script>
<![endif]-->
<script src="<?php echo CSS_PATH;?>img/assets/blocksit.min.js"></script>
<script>
$(document).ready(function() {

	//第一次加载

	//getMore(1);


	
	//blocksit define
	$(window).load( function() {
		$('#container_waterfall').BlocksIt({
			numOfCol: 4,
			offsetX: 8,
			offsetY: 8
		});
	});
	
	//window resize
	var currentWidth = 980;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 980) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 980;
			col = 4;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container_waterfall').width(conWidth);
			$('#container_waterfall').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
});
</script>
</head>
<body>
 
<div id="container">
  <?php include template("content","header"); ?>
  <div id="mainContent">
  <div id="location"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > <?php echo catpos($catid);?>列表</div>
  <div id="article">
    	<h2 align="center">新闻资讯</h2>
        
<!-- Content -->
<section id="wrapper">
  <div id="container_waterfall">

 	

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="grid">
                 <div class="imgholder"> <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],190,0);?>" width="190px" /></a> </div>
                  <strong><a href="{$r[url]" target="_blank"><?php echo str_cut($r[title],25);?></a></strong>
                  <p><?php echo str_cut($r[title],40);?></p>
                  <div class="meta">by scmakeup.com</div>
                </div>
                
                
 
				<?php $n++;}unset($n); ?>

    		    
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                

  </div>
</section>

    </div>
    <div id="loading">正在加载……</div>
    <div class="clear"><input type="hidden" id="isloadall" value="0"/></div>       
	<!-- end #mainContent -->
  </div>

<script>
function reLoad() {

		$('#container_waterfall').BlocksIt({
			numOfCol: 4,
			offsetX: 8,
			offsetY: 8
		});
}
/*无限加载*/
var i=1;
function getMore(i){

	$("#loading").show();	

	var json = "<?php echo APP_PATH;?>api.php?op=picflow&catid=<?php echo $catid;?>&page=" + i;

		//window.open(json);
		$.getJSON(json, function(data){	
				if(!data){
				$("#loading").text("没有更多内容了!")
				$("#isloadall").val(1);
				}
				
				$.each(data,function(j){
				var image=data[j].thumb;	
				var title=data[j].title;
				var description=data[j].description;
				var url = data[j].url;
				var html="<div class='grid'><div class='imgholder'><a href='" + url + "' target='_blank'><img src='" + image + "' /></a></div><strong><a href='" + url + "' target='_blank'>" + title + "</a></strong><p>" + description +"</p><div class='meta'>by scmakeup.com</div></div>"
				$("#container_waterfall").append(html);		
					$("#loading").hide();
				});
				
				reLoad();

		});
	};
/*滚动到底部的时候*/
 $(window).bind("scroll",function(){
	if( $(document).scrollTop() + $(window).height() > $(document).height() - 10 && i<10000) {
	//i=0;
		//alert("22");
		if($("#isloadall").val()==0){
		getMore(i);
		i= i + 1;
		}
	
	}
 });

</script>
 
<?php include template("content","footer"); ?>
<!-- end #container -->
</div>
</body>
</html>
