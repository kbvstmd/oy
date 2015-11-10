<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>DBPHCC|Download</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/Flot/excanvas.js"></script>
	<![endif]-->
	<!-- The Fonts -->
	
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


<div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_settings_small">Statement</h4>
						
					</div>
					<div class="widget_contents">
						<span class="label lwParagraph">We are happy if you find data in this database is helpful to your scientific research. All data in this database are available for downloading,
						also you can <a href="upload.php"> upload</a> your data to our database,thank you .
						If you have any questions please contact us. Note:SCBIT holds the ownership of the database.
						<span>
						</div>
				</div>


				<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_tables"></h4>
					</div>
					<div class="widget_contents noPadding">
						<table class="tables">
							<thead>
								<tr>
									<th>File</th>
									<th>Description</th>
									<th>Size</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="downloads/DBPHCC_TXT.rar">DBPHCC_TXT.rar<a></td>
									<td rowspan='4'>&nbsp;&nbsp;&nbsp;&nbsp;The database contain 4 tables;
									table “pubmed” contains all the papers information we selected from pubmed;;
									table molecule is about the molecule relate to prognosis to HCC from papers;
                                    table “country” includes all countries the patients came from;
									table “mirnatarget” contains all the targets of HCC prognostic miRNAs collected in this database, predicted from database mirBASE.
									 </td>
									<td>2.62 MB</td>
								</tr>
								<tr>
									<td><a href="downloads/DBPHCC_XML.rar">DBPHCC_XML.rar<a></td>
									
									<td>2.7 MB</td>
								</tr>
								<tr>
									<td><a href="downloads/DBPHCC_SQL.rar">DBPHCC_SQL.rar<a></td>
								
									<td>2.81 MB</td>
								</tr>
								<tr>
									<td><a href="downloads/DBPHCC_EXCLE.rar">DBPHCC_EXCLE.rar<a></td>
								
									<td>252 KB</td>
								</tr>
								
								<tr>
									<td><a href="downloads/harm&protection.xlsx">harm&protection.xlsx<a></td>
									<td >&nbsp;&nbsp;&nbsp;&nbsp;Here we divided all the molecules into two groups. “harmful” term means poor prognosis, “protective” term indicates good prognosis.
									 </td>
									<td>18 KB</td>
								</tr>
								
								<tr>
									<td><a href="downloads/HBV&HCV.xlsx">HBV&HCV.xlsx<a></td>
									<td >&nbsp;&nbsp;&nbsp;&nbsp;HBV group indicate HCC patients sufferring HBV infection, HCV means HCC patients with HCV infection.
									 </td>
									<td>24 KB</td>
								</tr>
								
								<tr>
									<td><a href="downloads/molecule_Frequency.xlsx">molecule_Frequency.xlsx<a></td>
									<td >&nbsp;&nbsp;&nbsp;&nbsp;We partitioned molecules into tumor, adjacent nontumor, blood and so on, according to the tissue from which the molecules were reported.
									 </td>
									<td>29 KB</td>
								</tr>
								
								<tr>
									<td><a href="downloads/miRNAtarget.xlsx">miRNAtarget.xlsx<a></td>
									<td >&nbsp;&nbsp;&nbsp;&nbsp;We can see both the miRNA and its target molecule level relate to the prognosis of HCC. The table is distributed on two sheets: miRNA--->target and target--->miRNA.
									 </td>
									<td>132 KB</td>
								</tr>
								
								<tr>
									<td><a href="downloads/molecule_Frequency.xlsx">molecule_Frequency.xlsx<a></td>
									<td >&nbsp;&nbsp;&nbsp;&nbsp;One molecule may be reported in more than one paper, here is the list of frequency of molecules, i.e., how many times any one molecule were reported as prognostic for HCC .
									 </td>
									<td>21 KB</td>
								</tr>
								
								
							</tbody>
						</table>
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
