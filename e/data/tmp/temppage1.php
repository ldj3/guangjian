<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?='<?xml version="1.0" encoding="UTF-8"?>'?>
   <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://www.gz-guangjian.com/index.html</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.gz-guangjian.com/about/index.html</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.gz-guangjian.com/case/index.html</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.gz-guangjian.com/news/index.html</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.gz-guangjian.com/product/index.html</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.gz-guangjian.com/contactus/index.html</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(59,30000,3,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <url>
        <loc>http://www.gz-guangjian.com<?=$bqsr['titleurl']?></loc>
        <lastmod><?=date('Y-m-d',$bqr[newstime])?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php
}
}
?>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(60,30000,3,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <url>
        <loc>http://www.gz-guangjian.com<?=$bqsr['titleurl']?></loc>
        <lastmod><?=date('Y-m-d',$bqr[newstime])?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php
}
}
?>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(61,30000,3,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <url>
        <loc>http://www.gz-guangjian.com<?=$bqsr['titleurl']?></loc>
        <lastmod><?=date('Y-m-d',$bqr[newstime])?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php
}
}
?>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(64,30000,3,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <url>
        <loc>http://www.gz-guangjian.com<?=$bqsr['titleurl']?></loc>
        <lastmod><?=date('Y-m-d',$bqr[newstime])?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php
}
}
?>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(97,30000,3,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <url>
        <loc>http://www.gz-guangjian.com<?=$bqsr['titleurl']?></loc>
        <lastmod><?=date('Y-m-d',$bqr[newstime])?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php
}
}
?>


</urlset>