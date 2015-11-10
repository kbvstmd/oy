<?PHP
ECHO "</br>";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>protein|browse</title>
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
	<script src = "bottom.js"/></script> 
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
	
	
	 <style type="text/css"> 
	    .sample{border:0px solid #92cdec;}
		  p,dl{margin-bottom:20px}
		  dl,dt,dd{padding:0;margin:0}
		.faqs{padding-top:1px}
		.faqs dt{font-weight:bold;background:url(images/q.gif) 0 4px no-repeat;padding:3px 0 15px 30px;position:relative;}
		.faqs dt:hover{cursor:pointer}
		.faqs dd{background:url(images/a.gif) 0 2px no-repeat;padding:0 0 5px 30px;position:relative;color:#333}
		.faqs .hover{color:#990000;text-decoration:underline}
      </style>
	
	
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
				<li class="active_tab i_32_dashboard">
					<a href="protein.php" title="General Info">
						<span class="tab_label">Browse</span>
						<span class="tab_info">Basic Infor</span>
					</a>
				</li>

				<li class=" i_32_search1">
					<a href="searchprotein.php" title="Visual Data">
						<span class="tab_label">Search</span>
						<span class="tab_info">Search By Term</span>
					</a>
				</li>
				<li class=" i_32_analysis">
					<a href="funcprotein.php" title="Kit elements">
						<span class="tab_label">Analysis</span>
						<span class="tab_info">FunctionAnalysis</span>
					</a>
				</li>
				
			</ul>
		</aside>

		<div class="contents">
		
			<div class="grid_wrapper">
  
				<div class="g_12 contents_header">
				
					<h4 class="i_16_table tab_label"><a href="protein.php">protein></a><a href="protein.php">Browse</a></h4>		
<div class="g_12 separator"><span></span></div>					
	              <div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_settings_small">Introduction</h4>
						
					</div>
						<div class="widget_contents">
						<span class="label lwParagraph">The protein molecule markers include proteins which have impact on prognosis for HCC.</span>
					
					</div>
					<div class="widget_contents">
						<span class="label lwParagraph">In this interface we provide all the information about the molecules in our database. such as entrezGeneID, GeneSymbol, tissue, type, The level of expression,
						HR, frequency and so on. The following table shows some basic information, if you want to know all the information about the molecules in our database, you can click the GeneSymbol term. If you want to know the information about the molecules in
						<a href="http://www.ncbi.nlm.nih.gov/">NCBI</a>, you can get it by EntrezGeneID term. In the table you can search any key word to see if there is any information about it in our database. Multiple search is provided on the left bar if you need. Some biological analysis such as GO analysis, 
						Pathway Analysis and Network Analysis can be performed by clicking in the Analysis bar on the left. 
						</span>
					
					</div>
					
				</div>
				
				

				<div class="g_12 separator"><span></span></div>

				
				<div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_data">molecule List</h4>
					
					</div>
					<div class="widget_contents noPadding">
					 <form action="action.php?action=del" method="post" > 
						<table class="datatable tables">
							<thead>
								<tr>
								    
									<th>pubmedID</th>
									<th>entrezGeneID</th>
									<th>GeneSymbol</th>						
									<th>Tissue</th>
									<th>HBV|HCV</th>
									<th>moleculeType</th>
									<th>Prognosis</th>
									<th>Frequency</th>
									
								</tr>
							</thead>
							<tbody>
							
							
							<?php

//2 连接数据库，选择数据

include_once('connect.php');



$result=mysql_query("SELECT * FROM `molecular_view` WHERE typename='protein' GROUP BY pubmedID,GeneSymbol");



 while($row=mysql_fetch_assoc($result)){



echo"<tr>";
echo"<td><a href='http://www.ncbi.nlm.nih.gov/pubmed/?term={$row['pubmedID']}'>{$row['pubmedID']}</a></td>";
echo"<td><a href='http://www.ncbi.nlm.nih.gov/gene/?term={$row['entrezGeneID']}'>{$row['entrezGeneID']}</a.</td>";
echo"<td><a href='seeall.php? molecularID={$row['molecularID']}'>{$row['GeneSymbol']}</a></td>";
echo"<td>{$row['tissue']}</td>";
echo"<td>{$row['HBVorHCV']}</td>";
echo"<td>{$row['typename']}</td>";
echo"<td>{$row['updown']}</td>";
echo"<td>{$row['frequency']}</td>";
echo"</tr>";

}

?>
							</tbody>
						</table>
						</form>
					</div>
				</div>
				
	
				<!-- Donut Charts -->
				
			
				
				
				
				
				
				
				
				
				
			
				
				
					<div class="g_12 separator"><span></span></div>
					
						
			
					
	


	
	
<!--TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE---->
	
	

					
					
					<div class="g_12" id="table_wTabs1">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_tabs">protein</h4>
						<ul class="w_Tabs">
						
							<li><a href="#table_wTabs-11" title="Tab 11">GO</a></li>
							<li><a href="#table_wTabs-12" title="Tab 12">PATHWAY</a></li>
							<li><a href="#table_wTabs-13" title="Tab 13">NETWORK</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">
					
					
					
					
					
					
					
					<div id="table_wTabs-11">
					
					<div class="g_12" id="table_wTabs11">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_tabs">GO</h4>
						<ul class="w_Tabs">
							<li><a href="#table_wTabs-111" title="Tab 111">BP</a></li>
							<li><a href="#table_wTabs-112" title="Tab 112">MF</a></li>
							<li><a href="#table_wTabs-113" title="Tab 113">CC</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">
				
					<div id="table_wTabs-111">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	43,127,174,207,213,249,250,285,324,328,331,332,356,387,389,444,595,596,634,648,652,682,826,836,857,890,898,900,919,934,941,942,947,960,968,977,999,1000,1015,1017,1019,1026,1027,1028,1029,1030,1050,1092,1116,1163,1191,1236,1268,1269,1366,1401,1435,1436,1441,1485,1490,1495,1499,1500,1544,1636,1786,1843,1854,1874,1890,1893,1956,1969,1991,2017,2022,2033,2064,2146,2147,2149,2185,2272,2302,2305,2321,2678,2719,2735,2886,3065,3066,3068,3082,3091,3099,3106,3123,3135,3148,3181,3297,3308,3309,3313,3320,3397,3455,3479,3486,3490,3558,3576,3589,3600,3605,3606,3620,3622,3655,3667,3725,3814,3838,3858,3880,3939,3952,3953,4018,4035,4085,4089,4171,4193,4233,4282,4288,4311,4312,4313,4318,4322,4323,4582,4609,4684,4830,4846,4904,4915,4920,4968,5037,5058,5111,5133,5156,5159,5170,5228,5230,5284,5347,5460,5584,5594,5595,5599,5604,5629,5654,5715,5716,5724,5728,5733,5743,5747,5770,5781,5873,5874,5879,5894,5925,5950,6194,6198,6382,6495,6502,6513,6514,6615,6624,6648,6659,6662,6692,6696,6720,6767,6774,6777,6850,6935,7018,7040,7048,7074,7076,7077,7153,7157,7161,7184,7291,7295,7422,7424,7429,7430,7442,7471,7474,7490,7531,7532,7707,7803,7852,8125,8290,8531,8600,8678,8754,8788,8795,8797,8809,8841,8842,8941,9021,9071,9112,9167,9212,9271,9370,9429,9564,9787,9839,10085,10103,10163,10276,10397,10413,10763,10783,10840,10855,10987,11082,11140,22943,23411,25873,25898,26137,26503,26574,27086,27087,29126,50943,51147,51162,51280,51341,51514,54556,54658,54739,55272,55353,56998,57007,57016,57447,64061,64328,64798,79923,80023,80198,80279,80329,80380,84557,90627,114793,116071,149951,153090,176870,192343,245711,338413,&tool=chartReport&annot=GOTERM_BP_FAT" target="_blank"></iframe>	
				
						</div>
					
						
			<div id="table_wTabs-112">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	43,127,174,207,213,249,250,285,324,328,331,332,356,387,389,444,595,596,634,648,652,682,826,836,857,890,898,900,919,934,941,942,947,960,968,977,999,1000,1015,1017,1019,1026,1027,1028,1029,1030,1050,1092,1116,1163,1191,1236,1268,1269,1366,1401,1435,1436,1441,1485,1490,1495,1499,1500,1544,1636,1786,1843,1854,1874,1890,1893,1956,1969,1991,2017,2022,2033,2064,2146,2147,2149,2185,2272,2302,2305,2321,2678,2719,2735,2886,3065,3066,3068,3082,3091,3099,3106,3123,3135,3148,3181,3297,3308,3309,3313,3320,3397,3455,3479,3486,3490,3558,3576,3589,3600,3605,3606,3620,3622,3655,3667,3725,3814,3838,3858,3880,3939,3952,3953,4018,4035,4085,4089,4171,4193,4233,4282,4288,4311,4312,4313,4318,4322,4323,4582,4609,4684,4830,4846,4904,4915,4920,4968,5037,5058,5111,5133,5156,5159,5170,5228,5230,5284,5347,5460,5584,5594,5595,5599,5604,5629,5654,5715,5716,5724,5728,5733,5743,5747,5770,5781,5873,5874,5879,5894,5925,5950,6194,6198,6382,6495,6502,6513,6514,6615,6624,6648,6659,6662,6692,6696,6720,6767,6774,6777,6850,6935,7018,7040,7048,7074,7076,7077,7153,7157,7161,7184,7291,7295,7422,7424,7429,7430,7442,7471,7474,7490,7531,7532,7707,7803,7852,8125,8290,8531,8600,8678,8754,8788,8795,8797,8809,8841,8842,8941,9021,9071,9112,9167,9212,9271,9370,9429,9564,9787,9839,10085,10103,10163,10276,10397,10413,10763,10783,10840,10855,10987,11082,11140,22943,23411,25873,25898,26137,26503,26574,27086,27087,29126,50943,51147,51162,51280,51341,51514,54556,54658,54739,55272,55353,56998,57007,57016,57447,64061,64328,64798,79923,80023,80198,80279,80329,80380,84557,90627,114793,116071,149951,153090,176870,192343,245711,338413,&tool=chartReport&annot=GOTERM_MF_FAT" target="_blank"></iframe>	
				
						</div>
						
						<div id="table_wTabs-113">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	43,127,174,207,213,249,250,285,324,328,331,332,356,387,389,444,595,596,634,648,652,682,826,836,857,890,898,900,919,934,941,942,947,960,968,977,999,1000,1015,1017,1019,1026,1027,1028,1029,1030,1050,1092,1116,1163,1191,1236,1268,1269,1366,1401,1435,1436,1441,1485,1490,1495,1499,1500,1544,1636,1786,1843,1854,1874,1890,1893,1956,1969,1991,2017,2022,2033,2064,2146,2147,2149,2185,2272,2302,2305,2321,2678,2719,2735,2886,3065,3066,3068,3082,3091,3099,3106,3123,3135,3148,3181,3297,3308,3309,3313,3320,3397,3455,3479,3486,3490,3558,3576,3589,3600,3605,3606,3620,3622,3655,3667,3725,3814,3838,3858,3880,3939,3952,3953,4018,4035,4085,4089,4171,4193,4233,4282,4288,4311,4312,4313,4318,4322,4323,4582,4609,4684,4830,4846,4904,4915,4920,4968,5037,5058,5111,5133,5156,5159,5170,5228,5230,5284,5347,5460,5584,5594,5595,5599,5604,5629,5654,5715,5716,5724,5728,5733,5743,5747,5770,5781,5873,5874,5879,5894,5925,5950,6194,6198,6382,6495,6502,6513,6514,6615,6624,6648,6659,6662,6692,6696,6720,6767,6774,6777,6850,6935,7018,7040,7048,7074,7076,7077,7153,7157,7161,7184,7291,7295,7422,7424,7429,7430,7442,7471,7474,7490,7531,7532,7707,7803,7852,8125,8290,8531,8600,8678,8754,8788,8795,8797,8809,8841,8842,8941,9021,9071,9112,9167,9212,9271,9370,9429,9564,9787,9839,10085,10103,10163,10276,10397,10413,10763,10783,10840,10855,10987,11082,11140,22943,23411,25873,25898,26137,26503,26574,27086,27087,29126,50943,51147,51162,51280,51341,51514,54556,54658,54739,55272,55353,56998,57007,57016,57447,64061,64328,64798,79923,80023,80198,80279,80329,80380,84557,90627,114793,116071,149951,153090,176870,192343,245711,338413,&tool=chartReport&annot=GOTERM_CC_FAT" target="_blank"></iframe>	
				
						</div>
					

					</div>
				</div>
						</div>
						
						
					

					
					<div  id="table_wTabs-12">
				
						<div class="g_12" id="table_wTabs10">
				
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_tabs">PATHWAY</h4>
						<ul class="w_Tabs">
							<li><a href="#table_wTabs-121" title="Tab 121">KEGG_PATHWAY</a></li>
							<li><a href="#table_wTabs-122" title="Tab 122">BIOCARTA_PATHWAY</a></li>
							
						</ul>
					</div>
					<div class="widget_contents noPadding">
					
					
					
	<div id="table_wTabs-121">

							<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=43,127,174,207,213,249,250,285,324,328,331,332,356,387,389,444,595,596,634,648,652,682,826,836,857,890,898,900,919,934,941,942,947,960,968,977,999,1000,1015,1017,1019,1026,1027,1028,1029,1030,1050,1092,1116,1163,1191,1236,1268,1269,1366,1401,1435,1436,1441,1485,1490,1495,1499,1500,1544,1636,1786,1843,1854,1874,1890,1893,1956,1969,1991,2017,2022,2033,2064,2146,2147,2149,2185,2272,2302,2305,2321,2678,2719,2735,2886,3065,3066,3068,3082,3091,3099,3106,3123,3135,3148,3181,3297,3308,3309,3313,3320,3397,3455,3479,3486,3490,3558,3576,3589,3600,3605,3606,3620,3622,3655,3667,3725,3814,3838,3858,3880,3939,3952,3953,4018,4035,4085,4089,4171,4193,4233,4282,4288,4311,4312,4313,4318,4322,4323,4582,4609,4684,4830,4846,4904,4915,4920,4968,5037,5058,5111,5133,5156,5159,5170,5228,5230,5284,5347,5460,5584,5594,5595,5599,5604,5629,5654,5715,5716,5724,5728,5733,5743,5747,5770,5781,5873,5874,5879,5894,5925,5950,6194,6198,6382,6495,6502,6513,6514,6615,6624,6648,6659,6662,6692,6696,6720,6767,6774,6777,6850,6935,7018,7040,7048,7074,7076,7077,7153,7157,7161,7184,7291,7295,7422,7424,7429,7430,7442,7471,7474,7490,7531,7532,7707,7803,7852,8125,8290,8531,8600,8678,8754,8788,8795,8797,8809,8841,8842,8941,9021,9071,9112,9167,9212,9271,9370,9429,9564,9787,9839,10085,10103,10163,10276,10397,10413,10763,10783,10840,10855,10987,11082,11140,22943,23411,25873,25898,26137,26503,26574,27086,27087,29126,50943,51147,51162,51280,51341,51514,54556,54658,54739,55272,55353,56998,57007,57016,57447,64061,64328,64798,79923,80023,80198,80279,80329,80380,84557,90627,114793,116071,149951,153090,176870,192343,245711,338413,&tool=chartReport&annot=KEGG_PATHWAY" target="_blank"></iframe>	
						
						</div>
						
						
						<div  id="table_wTabs-122">
				
				<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=43,127,174,207,213,249,250,285,324,328,331,332,356,387,389,444,595,596,634,648,652,682,826,836,857,890,898,900,919,934,941,942,947,960,968,977,999,1000,1015,1017,1019,1026,1027,1028,1029,1030,1050,1092,1116,1163,1191,1236,1268,1269,1366,1401,1435,1436,1441,1485,1490,1495,1499,1500,1544,1636,1786,1843,1854,1874,1890,1893,1956,1969,1991,2017,2022,2033,2064,2146,2147,2149,2185,2272,2302,2305,2321,2678,2719,2735,2886,3065,3066,3068,3082,3091,3099,3106,3123,3135,3148,3181,3297,3308,3309,3313,3320,3397,3455,3479,3486,3490,3558,3576,3589,3600,3605,3606,3620,3622,3655,3667,3725,3814,3838,3858,3880,3939,3952,3953,4018,4035,4085,4089,4171,4193,4233,4282,4288,4311,4312,4313,4318,4322,4323,4582,4609,4684,4830,4846,4904,4915,4920,4968,5037,5058,5111,5133,5156,5159,5170,5228,5230,5284,5347,5460,5584,5594,5595,5599,5604,5629,5654,5715,5716,5724,5728,5733,5743,5747,5770,5781,5873,5874,5879,5894,5925,5950,6194,6198,6382,6495,6502,6513,6514,6615,6624,6648,6659,6662,6692,6696,6720,6767,6774,6777,6850,6935,7018,7040,7048,7074,7076,7077,7153,7157,7161,7184,7291,7295,7422,7424,7429,7430,7442,7471,7474,7490,7531,7532,7707,7803,7852,8125,8290,8531,8600,8678,8754,8788,8795,8797,8809,8841,8842,8941,9021,9071,9112,9167,9212,9271,9370,9429,9564,9787,9839,10085,10103,10163,10276,10397,10413,10763,10783,10840,10855,10987,11082,11140,22943,23411,25873,25898,26137,26503,26574,27086,27087,29126,50943,51147,51162,51280,51341,51514,54556,54658,54739,55272,55353,56998,57007,57016,57447,64061,64328,64798,79923,80023,80198,80279,80329,80380,84557,90627,114793,116071,149951,153090,176870,192343,245711,338413,&tool=chartReport&annot=BIOCARTA" target="_blank"></iframe>	
						
				
						</div>

						
						
						
					
	
					
					
                   </div>
				
				</div>
						</div>
						
						
					

					
		
					
										
					<div id="table_wTabs-13">
					
					<div class="g_12" id="table_wTabs8">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_tabs">NETWORK</h4>
						
					</div>
					<div class="widget_contents noPadding">
					
					
					
		<div class="g_12" id="table_wTabs5">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://string-db.org/api/image/network?identifiers=43%0D127%0D174%0D207%0D213%0D249%0D250%0D285%0D324%0D328%0D331%0D332%0D356%0D387%0D389%0D444%0D595%0D596%0D634%0D648%0D652%0D682%0D826%0D836%0D857%0D890%0D898%0D900%0D919%0D934%0D941%0D942%0D947%0D960%0D968%0D977%0D999%0D1000%0D1015%0D1017%0D1019%0D1026%0D1027%0D1028%0D1029%0D1030%0D1050%0D1092%0D1116%0D1163%0D1191%0D1236%0D1268%0D1269%0D1366%0D1401%0D1435%0D1436%0D1441%0D1485%0D1490%0D1495%0D1499%0D1500%0D1544%0D1636%0D1786%0D1843%0D1854%0D1874%0D1890%0D1893%0D1956%0D1969%0D1991%0D2017%0D2022%0D2033%0D2064%0D2146%0D2147%0D2149%0D2185%0D2272%0D2302%0D2305%0D2321%0D2678%0D2719%0D2735%0D2886%0D3065%0D3066%0D3068%0D3082%0D3091%0D3099%0D3106%0D3123%0D3135%0D3148%0D3181%0D3297%0D3308%0D3309%0D3313%0D3320%0D3397%0D3455%0D3479%0D3486%0D3490%0D3558%0D3576%0D3589%0D3600%0D3605%0D3606%0D3620%0D3622%0D3655%0D3667%0D3725%0D3814%0D3838%0D3858%0D3880%0D3939%0D3952%0D3953%0D4018%0D4035%0D4085%0D4089%0D4171%0D4193%0D4233%0D4282%0D4288%0D4311%0D4312%0D4313%0D4318%0D4322%0D4323%0D4582%0D4609%0D4684%0D4830%0D4846%0D4904%0D4915%0D4920%0D4968%0D5037%0D5058%0D5111%0D5133%0D5156%0D5159%0D5170%0D5228%0D5230%0D5284%0D5347%0D5460%0D5584%0D5594%0D5595%0D5599%0D5604%0D5629%0D5654%0D5715%0D5716%0D5724%0D5728%0D5733%0D5743%0D5747%0D5770%0D5781%0D5873%0D5874%0D5879%0D5894%0D5925%0D5950%0D6194%0D6198%0D6382%0D6495%0D6502%0D6513%0D6514%0D6615%0D6624%0D6648%0D6659%0D6662%0D6692%0D6696%0D6720%0D6767%0D6774%0D6777%0D6850%0D6935%0D7018%0D7040%0D7048%0D7074%0D7076%0D7077%0D7153%0D7157%0D7161%0D7184%0D7291%0D7295%0D7422%0D7424%0D7429%0D7430%0D7442%0D7471%0D7474%0D7490%0D7531%0D7532%0D7707%0D7803%0D7852%0D8125%0D8290%0D8531%0D8600%0D8678%0D8754%0D8788%0D8795%0D8797%0D8809%0D8841%0D8842%0D8941%0D9021%0D9071%0D9112%0D9167%0D9212%0D9271%0D9370%0D9429%0D9564%0D9787%0D9839%0D10085%0D10103%0D10163%0D10276%0D10397%0D10413%0D10763%0D10783%0D10840%0D10855%0D10987%0D11082%0D11140%0D22943%0D23411%0D25873%0D25898%0D26137%0D26503%0D26574%0D27086%0D27087%0D29126%0D50943%0D51147%0D51162%0D51280%0D51341%0D51514%0D54556%0D54658%0D54739%0D55272%0D55353%0D56998%0D57007%0D57016%0D57447%0D64061%0D64328%0D64798%0D79923%0D80023%0D80198%0D80279%0D80329%0D80380%0D84557%0D90627%0D114793%0D116071%0D149951%0D153090%0D176870%0D192343%0D245711%0D338413"></iframe>	
					
				</div>	
						
						
						
				
					

					</div>
				</div>
						</div>
						
						
						
												
						
						

						
						
						
						
						
					</div>
				</div>
						




						
						



		
<!-- Harm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & Protected-->						

						
				
<!-- END HARM & PRO  END HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PRO-->	
						
						
						
						
						
						
				
			
				
				
				
				
				
				
					
			
				
				
		
				
			
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