<?php
@session_start();
require("dbconfig.php");

//require("fun2.php");

 



//2.连接MYSQL，选择数据库
$link = mysql_connect(HOST,USER,PASS) or die ("数据库连接失败!");
mysql_select_db(DBNAME,$link);


//3.获取action参数的值，并做对应的操作
	switch($_GET["action"]){

	case "add":  //添加
	//1.获取添加信息
		$pubmedID=$_POST["pubmedID"];
		$rawData=$_POST["rawData"];
		$patientCohort=$_POST["patientCohort"];
		$center=$_POST["center"];
		$totalSize=$_POST["totalSize"];
		$classification=$_POST["classification"];
		$HBVorHCV=$_POST["HBVorHCV"];
		$tissue=$_POST["tissue"];
		$techniquePlatform=$_POST["techniquePlatform"];
		$treatment=$_POST["treatment"];
		$molecularID=$_POST["molecularID"];
		$name=$_POST["name"];
		$entrezGeneID=$_POST["entrezGeneID"];
		$GeneSymbol=$_POST["GeneSymbol"];
		$typename=$_POST["typename"];
		$surAnaType=$_POST["surAnaType"];
		$gro1VSgro2=$_POST["gro1VSgro2"];
		$cutoffPoint=$_POST["cutoffPoint"];
		$HRCI=$_POST["HRCI"];
		$HR=$_POST["HR"];
		$pValue=$_POST["pValue"];
		$updown=$_POST["prognosis"];
		$uniORmul=$_POST["uniORmul"];
		$AUC=$_POST["AUC"];
		$testMethed=$_POST["testMethed"];
		$threshold=$_POST["threshold"];
		$targetGene=$_POST["targetGene"];

//2.验证（）
if(empty($_POST["pubmedID"]))
die("pubmedID 不能为空");

if(empty($_POST["totalSize"]))
$totalSize='NULL';

if(empty($_POST["entrezGeneID"]))
$entrezGeneID='NULL';


if(empty($_POST["HR"]))
$HR='NULL';

if(empty($_POST["pValue"]))
$pValue='NULL';

if(empty($_POST["threshold"]))
$threshold='NULL';




//5.拼装sql语句，并执行添加
 $sql= "insert into uppubmed values('{$pubmedID}','{$rawData}','{$patientCohort}','{$center}',$totalSize,'{$classification}','{$HBVorHCV}','{$tissue}','{$techniquePlatform}','{$treatment}')";
//echo $sql;
 mysql_query($sql,$link);


  $sql1= "insert into upmolecular values('0','{$pubmedID}','{$name}',$entrezGeneID,'{$GeneSymbol}','{$surAnaType}','{$tissue}','{$gro1VSgro2}','{$cutoffPoint}','{$uniORmul}','{$HRCI}',$HR,'{$updown}',$pValue,'{$testMethed}','{$AUC}',$threshold,'{$targetGene}','{$typename}')";
 
 mysql_query($sql1,$link);
 


//6.判断输出结果

if(mysql_insert_id($link)>0){
echo'<script type="text/javascript">alert("success!");location.href="upload.php"</script>';

}else{
echo'<script type="text/javascript">alert("success!");location.href="upload.php"</script>';
}

//header("Location:upload.php");


break;

case"searchmany1":

$tmp=$_POST;
$whr=array();
if(!empty($tmp['id'])){
 
    $str = preg_replace('/\s(?=\s)/', '', $tmp['id']);  
    $str =preg_replace("/(\n)|(\s)|(\t)|(\r)|(;)|(\')|(')|(，)/" ,',' ,$str); 
	//echo $str;
 $k=explode(",",$str);
 for($i=0;$i<count($k);$i++)
{
$whr[]="entrezGeneID=$k[$i]";
}
}
$_SESSION["temp"]=$k;
echo "<script>location.href='checkgene.php'</script>";
break;




case"searchgene":

$tmp=$_POST;
$whr=array();
if(!empty($tmp['id'])){
 
    $str = preg_replace('/\s(?=\s)/', '', $tmp['id']);  
    $str =preg_replace("/(\n)|(\s)|(\t)|(\r)|(;)|(\')|(')|(，)/" ,',' ,$str); 
	//echo $str;
 $k=explode(",",$str);
 for($i=0;$i<count($k);$i++)
{
$whr[]="GeneSymbol=$k[$i]";
}
}
$_SESSION["temp"]=$k;

echo "<script>location.href='resultgene.php'</script>";



break;



case"searchprotein":

$tmp=$_POST;
$whr=array();
if(!empty($tmp['id'])){
 
    $str = preg_replace('/\s(?=\s)/', '', $tmp['id']);  
    $str =preg_replace("/(\n)|(\s)|(\t)|(\r)|(;)|(\')|(')|(，)/" ,',' ,$str); 
	//echo $str;
 $k=explode(",",$str);
 for($i=0;$i<count($k);$i++)
{
$whr[]="GeneSymbol=$k[$i]";
}
}
$_SESSION["temp"]=$k;
echo "<script>location.href='resultprotein.php'</script>";

break;


case"searchgene1":

$tmp=$_POST;
$whr=array();
if(!empty($tmp['id'])){
 
    $str = preg_replace('/\s(?=\s)/', '', $tmp['id']);  
    $str =preg_replace("/(\n)|(\s)|(\t)|(\r)|(;)|(\')|(')|(，)/" ,',' ,$str); 
	//echo $str;
 $k=explode(",",$str);
 for($i=0;$i<count($k);$i++)
{
$whr[]="GeneSymbol=$k[$i]";
}
}
$_SESSION["temp"]=$k;
echo "<script>location.href='resultmirna.php'</script>";
break;





}

//4.关闭数据库
mysql_close($link);

?>
