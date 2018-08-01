<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广州市广建水泥制品有限公司--全国唯一官方网站 </title>
<meta name="keywords" content="环保彩砖|透水砖|建菱砖|路面砖|广场砖|植草砖|电缆沟盖板|电力盖板|水泥隔离墩|水泥防撞墩|交通隔离墩|仿花岗岩路侧石|水泥排水管|钢筋混凝土排水管|路侧石|预制件|球墨铸铁井盖" />
<meta name="description" content="广州市广建水泥制品有限公司主要生产、销售环保彩砖|透水砖|建菱砖|植草砖|环保砖|路面砖|人行道砖|广场砖|水泥砖|烧结砖|电缆沟盖板|电力盖板|水泥隔离墩|水泥防撞墩|交通隔离墩|水泥墩|仿花岗岩路侧石|路平石|路侧石|预制件|球墨铸铁井盖等各种水泥制品。服务热线-020-39965653" />
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
	<div class="box_content" >
        <div class="part01" >
            <dl>
                <dt><a href="http://www.gz-guangjian.com/news/"><img src="/skin/guangjian/upload/gj01.jpg" alt="广建动态资讯" /></a></dt>
                <dd class="d1"><a href="http://www.gz-guangjian.com/news/" title="广建动态资讯">动态资讯</a></dd> 
                <dd class="d2"><?=$public_r['add_index_news']?></dd>
                <dd class="d3"><a href="http://www.gz-guangjian.com/news/"><span>+</span>MORE</a></dd> 
            </dl>
            <dl>
                <dt><a href="http://www.gz-guangjian.com/product/"><img src="/skin/guangjian/upload/gj02.jpg" alt="广建产品展示" /></a></dt>
                <dd class="d1"><a href="http://www.gz-guangjian.com/product/" title="产品展示">产品展示</a></dd> 
                <dd class="d2"><?=$public_r['add_index_product']?></dd>
                <dd class="d3"><a href="http://www.gz-guangjian.com/product/"><span>+</span>MORE</a></dd> 
            </dl>
            <dl>
                <dt><a href="http://www.gz-guangjian.com/about/"><img src="/skin/guangjian/upload/gj03.jpg" alt="广建公司简介" /></a></dt>
                <dd class="d1"><a href="http://www.gz-guangjian.com/about/" title="公司简介">公司简介</a></dd> 
                <dd class="d2"><?=$public_r['add_index_aboutus']?></dd>
                <dd class="d3"><a href="http://www.gz-guangjian.com/about/"><span>+</span>MORE</a></dd> 
            </dl>
        </div>
        <span class="blank15_jun"></span>
        <div class="show_product_list">
        	<div class="show_product_title"></div>

            <ul class="ul1">
                 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(80,10,0,0,0,"id desc");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                  <?
$newimg="";
if(date("m-d",$bqr[truetime]) == date("m-d"))
{
    $newimg = "new";
}
?>
 <!--<?=$newimg?>-->
                 <li>
                    <div class="news_img"><img src="<?=$bqr[titlepic]?>"  alt="<?=$bqr[title]?>" ></div>  
                    <a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=DoTitleFont($bqr[titlefont],esub($bqr[title],60))?><em><?=date('Y-m-d',$bqr[newstime])?></em></a>
                    <p><?=esub($bqr[smalltext],160)?>...<a href="<?=$bqsr[titleurl]?>">[详情]</a></p>
                  </li> 
                  <?php
}
}
?>
            </ul>
            <ul class="ul1">
                 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(89,10,0,0,0,"id desc");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                  <?
$newimg="";
if(date("m-d",$bqr[truetime]) == date("m-d"))
{
    $newimg = "new";
}
?> 
                 <li>
                    <div class="news_img"><img src="<?=$bqr[titlepic]?>"  alt="<?=$bqr[title]?>" ></div> 
                    <a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=DoTitleFont($bqr[titlefont],esub($bqr[title],60))?><em><?=date('Y-m-d',$bqr[newstime])?></em></a>
                    <p><?=esub($bqr[smalltext],160)?>...<a href="<?=$bqsr[titleurl]?>">[详情]</a></p>
                  </li> 
                  <?php
}
}
?>
            </ul>
            <span class="blank15_jun"></span>
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