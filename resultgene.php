<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>mRNA|search result</title>
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


	
		<script type="text/javascript">

		
		$(document).ready(function(){ //这个就是传说的ready    
    $(".tables tr").mouseover(function(){    
       //如果鼠标移到class为stripe的表格的tr上时，执行函数    
      $(this).addClass("over");}).mouseout(function(){    
            //给这行添加class值为over，并且当鼠标一出该行时执行函数    
            $(this).removeClass("over");}) //移除该行的class    
  $(".tables tr:even").addClass("alt");    
    //给class为stripe的表格的偶数行添加class值为alt 
    //www.divcss5.com 整理特效 
  }); 
  


  </script>
	

	
	
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

				<li class="active_tab i_32_search1">
					<a href="searchgene.php" title="Visual Data">
						<span class="tab_label">Search</span>
						<span class="tab_info">Search By Term</span>
					</a>
				</li>
				<li class="i_32_analysis">
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
					<h4 class="i_16_table tab_label"><a href="mrna.php">mRNA</a>><a href="searchgene.php">Search</a>><a href="resultgene.php">Search Result</a></h4>	
									

				
				

				<div class="g_12 separator"><span></span></div>

				
				
				<!-- Simple Table -->
				
				
				<div class="g_12">
					
					<div class="widget_contents noPadding">	
					 <form action="action.php?action=del" method="post" > 
						<table class="datatable tables">
							<thead>
								<tr>
								    
									<th>pubmedID</th>
									<th>entrezGeneID</th>
									<th>GeneSymbol</th>							
									<th>Tissue</th>
									<th>Type</th>
									<th>Prognosis</th>		
								</tr>
							</thead>
							<tbody>							
<?php
@session_start();
$whr=$_SESSION["temp"];
require("dbconfig.php");
$wh=array();
 for($i=0;$i<count($whr);$i++)
{
if($whr[$i]!=""){
$wh[]="GeneSymbol='$whr[$i]'";
}
}

$wh2=implode(",",$wh);
//echo $wh2;

if(!empty($wh)){
$where =implode(" or  ",$wh);
//$where =implode("and ",$wh);
//echo $where;
}
else{
$where="";
//echo"kong";
}

//echo $where;

//2 连接数据库，选择数据
$link = mysql_connect(HOST,USER,PASS) or die ("数据库连接失败!");
mysql_select_db(DBNAME,$link);
//3 执行商品查询信息
$sql="SELECT * from molecular_view where typename='gene' and  {$where}  GROUP BY pubmedID,GeneSymbol ";


////$sql="SELECT molecular.GeneSymbol, molecular.molecularID, molecular.pubmedID, pubmed.HBVNo, pubmed.patientCohort FROM molecular, pubmed WHERE molecular.pubmedID = pubmed.pubmedID AND {$where}  {$page->limit}";
//echo $sql ;
$result=mysql_query($sql,$link);

$hitt=array();
$hit=array();

 while($row=mysql_fetch_assoc($result)){


array_push($hitt, $row['GeneSymbol']);
echo"<tr>";
//为什么不能写成 value="{$row['pubmedID']}"?
echo"<td><a href='http://www.ncbi.nlm.nih.gov/pubmed/?term={$row['pubmedID']}'>{$row['pubmedID']}</a></td>";
echo"<td><a href='http://www.ncbi.nlm.nih.gov/gene/?term={$row['entrezGeneID']}'>{$row['entrezGeneID']}</a.</td>";
echo"<td><a href='seeall.php? molecularID={$row['molecularID']}'>{$row['GeneSymbol']}</a></td>";
echo"<td>{$row['tissue']}</td>";
echo"<td>{$row['typename']}</td>";
echo"<td>{$row['updown']}</td>";
echo"</tr>"; 
}
$hit=array_unique($hitt);
$whr1=implode(", ",$whr);
echo "Your submit list:";
echo "</br>";
echo "$whr1";
echo "</br>";
echo "</br>";
$hit1=implode(", ",$hit);
echo "Found:";
echo "</br>";
echo $hit1;
echo "</br>";
echo "</br>";
$dif=array_diff($whr,$hit);
$dif1=implode(", ",$dif);
echo "Not found:";
echo "</br>";
echo $dif1;
?>
							</tbody>
						</table>
						</form>
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