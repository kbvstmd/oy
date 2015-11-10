<?php
//公共信息配置文件


//数据库配置信息
define("HOST","localhost"); //主机名
define("USER","root"); //用户名
define("PASS","scbit123456"); //密码
define("DBNAME","hcc"); //数据库名


/*//设置UTF-8字符集
header("Content-type:text/html;charset=utf-8");

//显示所有报告但是不报告注意
error_reporting(E_ALL ^ E_NOTICE)；

//设置时区
date_default_timezone_set("PRC");

//分页显示数量
$numfy=10;
*/

//商品列表信息
$tissuelist=array(null=>"Select Here...","tumor tissues"=>"tumor tissues","adjacent nontumor tissues"=>"adjacent nontumor tissues","tumor tissues,adjacent nontumor tissues"=>"tumor tissues,adjacent nontumor tissues","blood"=>"blood","others"=>"others");

$HBVorHCVlist=array(null=>"Select Here...","HBV"=>"HBV","HCV"=>"HCV","HBV,HCV"=>"HBV,HCV");

$centerlist=array(null=>"Select Here...","single center"=>"single center","multicenter"=>"multicenter","others"=>"others");

$dataSourcelist=array(null=>"Select Here...","original"=>"original","GSE"=>"GSE","others"=>"others");

$treatmentlist=array(null=>"Select Here...","curative hepatectomy"=>"curative hepatectomy","TACE"=>"TACE","LT"=>"LT","drug"=>"drug","others"=>"others");


$typelist=array(null=>"Select Here...","protein"=>"protein","gene"=>"gene","miRNA"=>"miRNA","others"=>"others");

$Thresholdlist=array(null=>"Select Here...","0.05"=>"0.05","0.01"=>"0.01");

$panduanlist=array(null=>"Select Here...","yes"=>"yes","no"=>"no");

$g1vsg2list=array(null=>"Select Here...","H:L"=>"H:L","L:H"=>"L:H");

$suranatypelist=array(null=>"Select Here...","OS"=>"OS","RFS"=>"RFS","DFS"=>"DFS","TTR"=>"TTR","recurrence"=>"recurrence","early recurrence"=>"early recurrence");

$uniormullist=array(null=>"Select Here...","multivariate analysis"=>"multivariate analysis","univariate analysis"=>"univariate analysis");

$testmetlist=array(null=>"Select Here...","cox"=>"cox","log-rank test"=>"log-rank test");

$prognosislist=array(null=>"Select Here...","up poor prognosis"=>"up poor prognosis","up better prognosis"=>"up better prognosis","down better prognosis"=>"down better prognosis","down poor prognosis"=>"down poor prognosis");







?>
