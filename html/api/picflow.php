<?php
header("Content-Type:text/html;charset=utf-8");
header('Content-type:text/json');     //这句是重点，它告诉接收数据的对象此页面输出的是json数
defined('IN_PHPCMS') or exit('No permission resources.'); 

/**
 * 获取瀑布流图像
 */
$db = '';
$db = pc_base::load_model('content_model');

$db->table_name = 'sc_news';

if (isset($_GET['catid'])){
	$catid=intval($_GET['catid']);
}

if (isset($_GET['page'])){
	$page=intval($_GET['page']);
}
else{

	$page=1;
}
$siteid = get_siteid() ? get_siteid() : 1 ;
//echo 'status=99 And thumb!=""    LIMIT '.($page-1)*2 .' , ' . $page*2 .''  ;

//thumb("http://localhost/scmakeup/uploadfile/2014/0305/20140305104625979.jpg", 190,0 ,1, 'nopic.gif');
$data = $db->select('status=99 And thumb!="" and  '.get_sql_catid("category_content_".$siteid , $catid).'    LIMIT '.($page-1)*10 .' , ' . 10 .''       ,'*');

//$_childs=$CATEGORY[$catid][arrchildid]
  foreach($data as $key=>$value) {

	    $value['thumb']=thumb($value['thumb'], 190,0 ,1, 'nopic.gif');
		$value['title']=str_cut($value['title'], 28);
		$value['description']=str_cut($value['description'], 80);
      	$rowset[] = $value;

   }
   
$data=$rowset;
echo json_encode($data); 

function gbk2utf8($data)

{

  if(is_array($data))

    {

        return array_map('gbk2utf8', $data);

    }

  return iconv('gbk','utf-8',$data);

}


?>
