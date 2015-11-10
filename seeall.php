<?php 
//1 导入配置文件
require("dbconfig.php");

//2 连接数据库，选择数据
$link = mysql_connect(HOST,USER,PASS) or die ("数据库连接失败!");
mysql_select_db(DBNAME,$link);



//3 执行商品查询信息
$sql="SELECT * FROM pubmed, molecular WHERE pubmed.pubmedID = molecular.pubmedID and molecularID={$_GET['molecularID']}";
$result=mysql_query($sql,$link);

//判断是否获取成功
if($result&&mysql_num_rows($result)>0){
$bepubmed=mysql_fetch_assoc($result);   //解析出要修改的商品信息
}else{
die("没有找到要修改的商品信息");
}
echo "</br>";

 //导入导航栏 ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>DBPHCC|View</title>
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
  

		
		<script src="js/highcharts.js"></script>
		<script src="js/highcharts-3d.js"></script>
		<script src="js/modules/exporting.js"></script>

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
<body onLoad="setupZoom();">
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
<body>


<!--Site start-->
<div id="wrapper">


<!--Header start-->

<!--Header End-->

<!--Content start-->
<div id="content">
<div class="content">

<div class="left-bg1"></div>
<div class="content-center">

<!--Content Left start-->
<div class="content-left">
<!-- Simple Table -->

<div class="service-text-part">

<div class="find-doctor-part">



<div class="g_12">

<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://www.ncbi.nlm.nih.gov/gene/?term=<?php echo $bepubmed['entrezGeneID']; ?>"></iframe>	
	
</div>



<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Information</h4>
					</div>
					<div class="widget_contents noPadding">
						<div class="line_grid">
						
							
							
							<div class="g_3"><span class="label">PubMed</span></div>
							<div class="g_9">
							<span class="label"><a href="<?php echo $bepubmed['rawData']; ?>" ><?php if($bepubmed['pubmedID']=='') echo "</br>"; else  echo $bepubmed['pubmedID']; ?><a></span>
							</div>
							
							
							<div class="g_3"><span class="label">Patient cohort</span></div>
							<div class="g_9">
							<span class="label"><?php if($bepubmed['patientCohort']=='') echo "</br>"; else   echo $bepubmed['patientCohort']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Patient Source</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['center']=='') echo "</br>"; else  echo $bepubmed['center']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Patient sample size</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['totalSize']=='') echo "</br>"; else  echo $bepubmed['totalSize']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">PubMed</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['patientCohort']=='') echo "</br>"; else  echo $bepubmed['patientCohort']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Classification</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['classification']=='') echo "</br>"; else  echo $bepubmed['classification']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">HBV</span></div>
							<div class="g_9">
							<span class="label"><?php if($bepubmed['HBVNo']=='0') echo "</br>"; else  echo $bepubmed['HBVNo']; ?></span>
							</div>
							
							<div class="g_3"><span class="label">HCV</span></div>
							<div class="g_9">
							<span class="label"><?php if($bepubmed['HCVNo']=='0') echo "</br>"; else  echo $bepubmed['HCVNo']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">treatment</span></div>
							<div class="g_9">
							<span class="label"><?php if($bepubmed['treatment']=='') echo "</br>"; else  echo $bepubmed['treatment']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Technique Platform</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['techniquePlatform']=='') echo "</br>"; else  echo $bepubmed['techniquePlatform']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Data source</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['dataSource']=='') echo "</br>"; else  echo $bepubmed['dataSource']; ?></span>
							</div>
							
							<div class="g_3"><span class="label">Independent Validation</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['independentValidation']=='') echo "</br>"; else  echo $bepubmed['independentValidation']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">MolecularType</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['molecularType']=='') echo "</br>"; else  echo $bepubmed['molecularType']; ?></span>
							</div>
							
							<div class="g_3"><span class="label">Independent Validation</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['independentValidation']=='') echo "</br>"; else  echo $bepubmed['independentValidation']; ?></span>
							</div>
							
							
							</div>
							
							
							<div class="line_grid">
							
							<div class="g_3"><span class="label">Survival Analysis Type</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['surAnaType']=='') echo "</br>"; else  echo $bepubmed['surAnaType']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Tissues</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['tissue']=='') echo "</br>"; else  echo $bepubmed['tissue']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Group 1 : Group 2(or more) </span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['gro1VSgro2']=='') echo "</br>"; else  echo $bepubmed['gro1VSgro2']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Cut Off Point</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['cutoffPoint']=='') echo "</br>"; else  echo $bepubmed['cutoffPoint']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Univariate Or Multivariate</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['uniORmul']=='') echo "</br>"; else  echo $bepubmed['uniORmul']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Other clinical variables</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['otherVar']=='') echo "</br>"; else  echo $bepubmed['otherVar']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">HR(95%CI)</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['HRCI']=='') echo "</br>"; else  echo $bepubmed['HRCI']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">pValue</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['pValue']=='') echo "</br>"; else  echo $bepubmed['pValue']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">Test Methed</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['testMethed']=='') echo "</br>"; else  echo $bepubmed['testMethed']; ?></span>
							</div>
							
							
							<div class="g_3"><span class="label">C-Index/AUC</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['AUC']=='') echo "</br>"; else  echo $bepubmed['AUC']; ?></span>
							</div>
							
							<div class="g_3"><span class="label">multiple testing correction</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['multipleCheck']=='') echo "</br>"; else  echo $bepubmed['multipleCheck']; ?></span>
							</div>
							
							<div class="g_3"><span class="label">Threshold</span></div>
							<div class="g_9">
							<span class="label"><?php  if($bepubmed['threshold']=='') echo "</br>"; else  echo $bepubmed['threshold']; ?></span>
							</div>
							
							
							
							
							
							
						</div>
						
						
						
						
					</div>
				</div>




	















</form>

</div>

</div>
</div>












				
</div>
<!--Content Left End-->



<!--Sidebar start-->

<!--Sidebar End-->


</div>
<div class="right-bg1"></div>


</div>
</div>
<!--Content End-->

<!--Footer start-->

<!--Footer End-->


</div>
<!--Site End-->

	<footer>
		<div class="wrapper">
			<span class="copyright">
				Copyright 2014  ©SHANGHAI CENTER FOR BIOINFORMATION TECHNOLOGY, Inc. All Rights Reserved.
			</span>
		</div>
	</footer>
</body>
</html>
