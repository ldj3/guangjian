<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>http://www.gz-guangjian.com
http://www.gz-guangjian.com/about
http://www.gz-guangjian.com/case
http://www.gz-guangjian.com/news
http://www.gz-guangjian.com/product
http://www.gz-guangjian.com/contactus
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(60,30000,3,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
http://www.gz-guangjian.com<?=$bqsr['titleurl']?>

<?php
}
}
?>
