<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>mRNA|Functional|Check</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/Flot/excanvas.js"></script>
	<![endif]-->
	<!-- The Fonts -->
	<!-- 谷歌广告，非常耗时 -->
		<!--<link href="http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700" rel="stylesheet" />-->
	<!-- The Main CSS File -->
	<link rel="stylesheet" href="css/style.css" />
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
	<!-- jQuery -->
	<script src="js/jQuery/jquery-1.7.2.min.js"></script>
	<!-- Flot -->
	<script src="js/Flot/jquery.flot.js"></script>
	<script src="js/Flot/jquery.flot.resize.js"></script>
	<script src="js/Flot/jquery.flot.pie.js"></script>
	<!-- DataTables -->
	<script src="js/DataTables/jquery.dataTables.min.js"></script>
	<!-- ColResizable -->
	<script src="js/ColResizable/colResizable-1.3.js"></script>
	<!-- jQuryUI -->
	<script src="js/jQueryUI/jquery-ui-1.8.21.min.js"></script>
	<!-- Uniform -->
	<script src="js/Uniform/jquery.uniform.js"></script>
	<!-- Tipsy -->
	<script src="js/Tipsy/jquery.tipsy.js"></script>
	<!-- Elastic -->
	<script src="js/Elastic/jquery.elastic.js"></script>
	<!-- ColorPicker -->
	<script src="js/ColorPicker/colorpicker.js"></script>
	<!-- SuperTextarea -->
	<script src="js/SuperTextarea/jquery.supertextarea.min.js"></script>
	<!-- UISpinner -->
	<script src="js/UISpinner/ui.spinner.js"></script>
	<!-- MaskedInput -->
	<script src="js/MaskedInput/jquery.maskedinput-1.3.js"></script>
	<!-- ClEditor -->
	<script src="js/ClEditor/jquery.cleditor.js"></script>
	<!-- Full Calendar -->
	<script src="js/FullCalendar/fullcalendar.js"></script>
	<!-- Color Box -->
	<script src="js/ColorBox/jquery.colorbox.js"></script>
	<!-- Kanrisha Script -->
	<script src="js/kanrisha.js"></script>
	<!-- FAQ Script -->
	<script type="text/javascript" src="js/utility.js"></script>


	
	
	

	
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
	<!-- Change Pattern --><!-- Top Panel -->
	

	
<header class="main_header">
	<div class="top_panel">

	
<!--Header start-->
<div id="header">
<div class="header">

<!--Logo Part start-->
<div class="logo-part">

<div class="logo"><a href="index.html"><img src="Images/logo2.png" width="1000" height="90" alt="" /></a></div>


</div>
<!--Logo Part End-->

<!--Menu and Banner Part start-->
<div class="menu-and-banner">

<!--Menu Part start-->
<div class="menu-part">

<ul>
<li><a href="index.html">Home</a></li>
<li><a href="statistics.php">Statistics</a></li>
<li><a href="protein.php">protein</a></li>
<li><a href="mrna.php">mrna</a></li>
<li><a href="microrna.php">microrna</a></li>
<li><a href="combin.php">combine</a></li>
<li><a href="download.php">download</a></li>
<li><a href="content.html">AboutUs</a></li>
</ul>

</div>
<!--Menu Part End-->



</div>
<!--Menu and Banner Part End-->

</div>
</div>
<!--Header End-->

</div>
</header>

	
	
     <div class="wrapper small_menu">
		<ul class="menu_small_buttons">
			<li><a title="General Info" class="i_22_dashboard smActive" ></a></li>
		
		
		
		</ul>
	</div>


	<div class="wrapper contents_wrapper">
		
		
		
		
			<aside class="sidebar">
			<ul class="tab_nav">
				<li class=" i_32_dashboard">
					<a href="mrna.php" title="General Info">
						<span class="tab_label">Browse</span>
						<span class="tab_info">Basic Infor</span>
					</a>
				</li>

				<li class=" i_32_search1">
					<a href="searchgene.php" title="Visual Data">
						<span class="tab_label">Search</span>
						<span class="tab_info">Search By Term</span>
					</a>
				</li>
				<li class="active_tab i_32_analysis">
					<a href="funcmrna.php" title="Kit elements">
						<span class="tab_label">Analysis</span>
						<span class="tab_info">FunctionAnalysis</span>
					</a>
				</li>
				
			</ul>
		</aside>
		
		

		<div class="contents">
			<div class="grid_wrapper">

				<div class="g_12 contents_header">
					<h4 class="i_16_table tab_label"><a href="mrna.php">mRNA</a><a href="funcmrna.php">Analysis</a>><a href="checkmrna.php">Select Function Analysis</a></h4>		
					<div class="g_12 separator"><span></span></div>

				
				
				<!-- Simple Table -->
				<div class="g_12">
					<div class="widget_header">
					
					</div>
					<div class="widget_contents noPadding">
						<table class="tables">
							<thead>
								<tr>
									<th colspan='3'>Your list</th>
									<th colspan='3'>List in the database</th>
									<th>Not found in mRNA </th>
								</tr>
							</thead>
							<tbody>
								
								<?php

@session_start();
require("dbconfig.php");

//print_r($_SESSION["temp"]);


$whr=$_SESSION["temp"];

$wh=array();
 for($i=0;$i<count($whr);$i++)
{
$wh[]="entrezGeneID=$whr[$i]";
}

$wh2=implode(",",$wh);
//echo $wh2;

if(!empty($wh)){
$where = "and ".implode(" or  ",$wh);
//$where =implode("and ",$wh);
//echo $where;
}
else{
$where="";
//echo"kong";
}


//2 连接数据库，选择数据
$link = mysql_connect(HOST,USER,PASS) or die ("数据库连接失败!");
mysql_select_db(DBNAME,$link);
//3 执行商品查询信息
$sql="SELECT * FROM `molecular` WHERE  `entrezGeneID`!='' {$where} GROUP BY entrezGeneID";
////$sql="SELECT molecular.GeneSymbol, molecular.molecularID, molecular.pubmedID, pubmed.HBVNo, pubmed.patientCohort FROM molecular, pubmed WHERE molecular.pubmedID = pubmed.pubmedID AND {$where}  {$page->limit}";
//echo $sql ;
$result=mysql_query($sql,$link);

$hit=array();

 while($row=mysql_fetch_assoc($result)){

array_push($hit, $row['entrezGeneID']);


}



$whr1=implode(",",$whr);
$hit1=implode(", ",$hit);
$hit2=implode('%0D',$hit);
$hit3=htmlentities($hit2);
$dif=array_diff($whr,$hit);
$dif1=implode(", ",$dif);

/*echo "Your submit list:";
echo "$whr1";
echo "</br>";
echo "</br>";
echo "Found:";
echo $hit1; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "<a href='http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids={$hit1}&tool=summary'>Enrichment analysis by DAVID</a>";   
echo "</br>";
echo "</br>";
echo "{$hit2}";
echo"<a href='go1.php? ID={$hit1}'>GO</a>";
echo"<a href='pathway1.php? ID={$hit1}'>PATHWAY</a>";
echo"<a href='go2.html? ID1={$hit1}'>NETWORK</a>";
echo "Not found:";
echo $dif1; */


echo"<tr>";
//为什么不能写成 value="{$row['pubmedID']}"?
echo"<td colspan='3' style='word-break:break-all; word-wrap:break-word;'>{$whr1}</td>";
echo"<td colspan='3' style='word-break:break-all; word-wrap:break-word;'>{$hit1}</td>";
echo"<td  style='word-break:break-all; word-wrap:break-word;'>{$dif1}</td>";
echo"</tr>";

echo"<tr>";
echo"<td style='word-break:break-all; word-wrap:break-word;'><a href='go1.php? ID={$whr1}'>GO</td> <td></a><a href='pathway1.php? ID={$whr1}'>PATHWAY</td>    <td> </a><a href='network1.php? ID={$whr1}'>NETWORK</a></td>";
echo"<td style='word-break:break-all; word-wrap:break-word;'><a href='go1.php? ID={$hit1}'>GO</td> <td></a><a href='pathway1.php? ID={$hit1}'>PATHWAY</td>    <td>   </a><a href='network1.php? ID={$hit1}'>NETWORK</a></td>";

echo"</tr>";



?>
								
								
							</tbody>
						</table>
					</div>
				</div>
				
	
				<!-- Donut Charts -->
				
				

				
				
				
				



					
					
				
				<!-- Separator -->
				
				
			</div>		
		</div>
	
	
	
	</div>

	<footer>
		<div class="wrapper">
			<span class="copyright">
					Copyright 2014  ©SHANGHAI CENTER FOR BIOINFORMATION TECHNOLOGY, Inc. All Rights Reserved.
			</span>
		</div>
	</footer>

</body>
</html>