<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?>--<?=$public_r['add_site_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>" />
<link rel="stylesheet" type="text/css" href="/skin/guangjian/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/skin/guangjian/css/style.css" >
<script type="text/javascript" src="/skin/guangjian/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/skin/guangjian/js/focus_lr.js"></script>
</head>
<body>
<div class="box">
    <div class="header">
        <div class="logo"><a href="/"><img src="/skin/guangjian/images/logo.png" alt="广建水泥制品有限公司" /></a></div>
        <ul class="nav"  id="menu">
             <li><a href="/">广建首页</a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 order by myorder,classid asc",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址
$style="";
if($GLOBALS[navclassid])
{
$fcr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
$topbclassid=$fcr[1]?$fcr[1]:$GLOBALS[navclassid];//取得当前栏目的一级栏目ID
if($bqr[classid]==$topbclassid)
{
$style="current-menu-item";
}
}
?>

            <li><a href="<?=$classurl?>"><?=$bqr[classname]?></a>
            	<ul class="sub_menu">
                    <?php
    //取得栏目下的子栏目       
    $newsclass=$empire->query("select classid,classname from ".$dbtbpre."enewsclass where bclassid=".$bqr[classid]." order by myorder,classid asc limit 11");
 while($classr=$empire->fetch($newsclass))
    {  
    $classrurl=sys_ReturnBqClassname($classr,9); //取得子栏目地址
        ?>
 <li><a href="<?=$classrurl?>"><?=$classr[classname]?></a></li>
  <?php
    }
    ?>
                </ul>
            </li>
            
     
<?php
}
}
?>   
        </ul>
    </div>
    <span class="blank5_jun"></span>
</div>    
<div class="banner_s"  id="solid">
    <ul>
        <li><img src="/skin/guangjian/upload/banner01.jpg" alt="企业展示banner"/></li>           
    </ul>   
</div>
<span class="blank5_jun"></span>


<div class="box">
	<div class="box_content2" >      
       <div class="main_box_left">
            <div class="nav_box nav_box_menu">
                <div class="nav_title"><span  class="nav_sign">产品展示/Product</span><span  class="nav_more"></span></div>
                <div class="nav_menu">
                    <ul id="rootul_104">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid='".$class_r[$GLOBALS[navclassid]][bclassid]."' order by myorder,classid asc",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?> 
<?php
$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址
$c_now="";
if($bqr[classid]==$GLOBALS[navclassid])//当前栏目ID 
{
$c_now="now";
} 
?>
 <li class=<?=$c_now?>><a href="<?=$classurl?>" title="<?=$bqr[classname]?>"><?=$bqr[classname]?></a></li>
 <?php
}
}
?> 
                    </ul>
                </div>
            </div>
            <div class="cp">
                <div class="cp_1"><img src="/skin/guangjian/images/qa92.png" alt="广建水泥制品有限公司"></div>
                <div class="cp_2">
                    <div class="cp_2_1"><a href="http://www.gz-guangjian.com/product/" title="产品中心">产品中心</a></div>/
                    <div class="cp_2_2"><a href="http://www.gz-guangjian.com/product/" title="PRODUCT">PRODUCT</a></div>
                </div>
            </div>
                
            <div class="dz">
                <div class="dz_1"><span>联系我们</span> / Contact us</div>
                <div><a href="http://www.gz-guangjian.com/contactus/" title="联系我们"><img src="/skin/guangjian/images/dz.jpg" alt="联系我们"></a></div>
            </div>    
        </div>
            
        <div class="main_box_right">
            <div class="current_location ">
                <ul>
                    <li class="current_location_1"><?=$grurl?></li>
                    <!--<li class="current_location_2">产品展示</li>-->
                </ul>
            </div>
            <div class="sublanmu_box" style="padding:0 8px;">   
                <span class="blank5_jun"></span>
                <div class="pro_d">
                    <h2><?=$grpagetitle?></h2>
                    <div class="art_time">发布者：<?=$ecms_gr[username]?> ; 发布时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?> </div>
                    <span class="blank5_jun"></span>
                    <div class="pro_details">
                          <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
                       
                    </div>         
                </div>
                <span class="blank5_jun"></span>
                <div class="next_pre">
                    上一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?>
                    下一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?>
                </div>
          		<span class="blank5_jun"></span>
            </div>
        </div>
 
  
        <span class="blank15_jun"></span>
        
	</div>        
</div>

<span class="blank15_jun"></span>
<div class="friendlink">
	<ul>
    	<li><a href="javascript:">友情链接:</a></li>
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=1 order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqr[lurl]?>" target="_blank" title="<?=$bqr[lname]?>"><?=$bqr[lname]?></a></li>
        <?php
}
}
?>
    </ul>
</div>


<span class="blank15_jun"></span>
<div class="box">
 	<div class="footer_bottom" id="footer">
             <?=$public_r['add_footer']?>
       </div>
</div>

<script>
function ct(){
	return document.compatMode == "BackCompat"? document.body.clientHeight:document.documentElement.clientHeight;
}
var f=document.getElementById("footer");
(window.onresize=function(){
  if(document.body.scrollHeight<ct()){
	  f.style.position='absolute';
	  f.style.bottom=0;
  } else {
		
  }
})();
</script>


<script>
function disableselect(e){
	return false;
}
function reEnable(){
	return true;
}
file://if IE4+
document.onselectstart=new Function ("return false")
file://if NS6
if (window.sidebar){
	document.onmousedown=disableselect;
	document.onclick=reEnable;
}
</script>
</body>
</html>


 