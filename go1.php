<?PHP
echo "</br>";
$a=$_GET['ID']; 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>Functional|GO</title>
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
				
				<li class="active_tab i_32_charts">
					<a href="go1.php" title="Visual Data">
						<span class="tab_label">GO</span>
						<span class="tab_info">Gene Ontology</span>
					</a>
				</li>
				<li class="i_32_ui">
					<a href="pathway1.php?ID=<?php echo $a; ?>" title="Kit elements">
						<span class="tab_label">Pathway</span>
						<span class="tab_info">KEGG|BIOCARTA</span>
					</a>
				</li>
				<li class="i_32_inbox">
					<a href="network1.php?ID=<?php echo $a; ?>" title="Your Messages">
						<span class="tab_label">Network</span>
						<span class="tab_info">STRING Network</span>
					</a>
				</li>
				
				
			</ul>
		</aside>

		<div class="contents">
			<div class="grid_wrapper">
			
			
			
				
				<div class="g_12" id="table_wTabs5">
					<div class="widget_header wwOptions">
						
						<ul class="w_Tabs">
							<li><a href="#table_wTabs-1" title="Tab 1">BP</a></li>
							<li><a href="#table_wTabs-2" title="Tab 2">MF</a></li>
							<li><a href="#table_wTabs-3" title="Tab 3">CC</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">
						<div id="table_wTabs-1">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	<?php echo "{$_GET['ID']}"; ?>&tool=chartReport&annot=GOTERM_BP_FAT" target="_blank"></iframe>	
				
						</div>
						
						
						<div  id="table_wTabs-2">
				<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	<?php echo "{$_GET['ID']}"; ?>&tool=chartReport&annot=GOTERM_MF_FAT" target="_blank"></iframe>	
					
				
						</div>
						
						<div  id="table_wTabs-3">
				
				<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	<?php echo "{$_GET['ID']}"; ?>&tool=chartReport&annot=GOTERM_CC_FAT" target="_blank"></iframe>	
						
				
						</div>
					</div>
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
