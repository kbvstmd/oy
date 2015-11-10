

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>DBPHCC|Upload</title>
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





<form action="action.php?action=add" method="post" enctype="multipart/form-data"> 

<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Upload your data</h4>
					</div>
					<div class="widget_contents noPadding">
						<div class="line_grid">
							<div class="g_3"><span class="label">PubMed ID</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="pubmedID"/>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">RawData:</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="rawData"/>
							</div>
						</div>
						<div class="line_grid">
							<div class="g_3"><span class="label">Patient Cohort</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="patientCohort" />
							</div>
						</div>
						<div class="line_grid">
							<div class="g_3"><span class="label">Patient number</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="totalSize"/>
							</div>
						</div>
						<div class="line_grid">
							<div class="g_3"><span class="label">Center</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($centerlist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="center"  class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						<div class="line_grid">
							<div class="g_3"><span class="label">Classification</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="classification" />
							</div>
						</div>
						
							<div class="line_grid">
							<div class="g_3"><span class="label">HBV/HCV</span></div>
							<div class="g_9">
									
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($HBVorHCVlist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="HBVorHCV"  class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
						
								<div class="field_notice">Please select the most patients infected liver virus species </div>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Tissue</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($tissuelist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="tissue"  class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						<div class="line_grid">
							<div class="g_3"><span class="label">Treatment</span></div>
							<div class="g_9">
									<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($treatmentlist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="treatment"  class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						<div class="line_grid">
							<div class="g_3"><span class="label">Technique Platform</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="techniquePlatform" />
							</div>
						</div>
						
						 <div class="g_12 separator"><span></span></div>	
						
					
						
					
						
						<div class="line_grid">
							<div class="g_3"><span class="label">molecular name in your article</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="name" />
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Gene Symbol</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="GeneSymbol" />
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">EntrezGene ID</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="entrezGeneID" />
							</div>
						</div>
						
						
							<div class="line_grid">
							<div class="g_3"><span class="label">MolecularType</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($typelist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="typename"   class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Survival Analysis Type</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($suranatypelist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="surAnaType"    class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Differential Expression</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="gro1VSgro2"/>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Cut Off Point</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="cutoffPoint"/>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">HR</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="HR" />
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">HR(95%CI)</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="HRCI" />
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">p-Value</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="pValue" />
							</div>
						</div>
						
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Prognosis</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($prognosislist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="prognosis"    class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Univariate Or Multivariate</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($uniormullist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="uniORmul"    class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						
						
						
						<div class="line_grid">
							<div class="g_3"><span class="label">C-Index/AUC</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="AUC"/>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Test Methed</span></div>
							<div class="g_9">
								<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($testmetlist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="testMethed"  class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Threshold</span></div>
							<div class="g_9">
									<div style="position:relative;">
<span style="margin-left:645px;width:20;overflow:hidden;">
<select  class="search-input2" style="width:695px;margin-left:-645px" onchange="this.parentNode.nextSibling.value=this.value">
<?php
include("dbconfig.php");
foreach($Thresholdlist as $k=>$v)  
{
echo "<option value='{$k}'>{$v}</option>";
}
?>
</select></span><input name="threshold" class="search-input"  style="width:670px;position:absolute;left:0px;">
</div>
							</div>
						</div>
						
						<div class="line_grid">
							<div class="g_3"><span class="label">Target Gene</span></div>
							<div class="g_9">
								<input class="simple_field" type="text" name="targetGene"  />
								<div class="field_notice">Only to miRNA</div>
							</div>
						</div>
						
						
						<div class="line_grid">
								<div class="g_3"><span class="label">Submit</span></div>
								<div class="g_9">
									<input type="submit" value="submit" class="submitIt simple_buttons" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="reset" value="reset" name="reset" class="submitIt simple_buttons" />
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
