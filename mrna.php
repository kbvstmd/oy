<?PHP
ECHO "</br>";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>mRNA|browse</title>
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
				<li class=" i_32_analysis">
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
				
					<h4 class="i_16_table tab_label"><a href="mrna.php">mRNA</a>><a href="mrna.php">Browse</a></h4>		
<div class="g_12 separator"><span></span></div>					
	              <div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_settings_small">Introduction</h4>
						
					</div>
					<div class="widget_contents">
						<span class="label lwParagraph">The protein molecule markers include mRNA which have impact on prognosis for HCC.</span>
					
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



$result=mysql_query("SELECT * FROM `molecular_view` WHERE typename='gene' GROUP BY pubmedID,GeneSymbol");



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
						<h4 class="widget_header_title wwIcon i_16_tabs">mRNA</h4>
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
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	9,164,174,213,229,267,285,324,331,347,526,595,635,771,875,890,898,925,999,1013,1019,1029,1088,1231,1235,1410,1728,1748,1789,1806,1843,2065,2209,2705,2896,3091,3099,3122,3148,3159,3177,3313,3398,3569,3925,3950,4049,4072,4100,4316,4318,4321,4482,4613,4837,5037,5156,5228,5347,5352,5460,5563,5578,5599,5629,5649,6347,6367,6480,6502,6548,6580,6615,6657,6690,6696,6756,6790,6850,6929,7015,7098,7099,7124,7128,7178,7422,7429,7431,7791,7805,8607,8658,8733,8788,8842,9071,9097,9212,9232,9639,9768,10276,10397,10521,10641,10855,10856,10912,11065,11186,11197,23213,23657,23678,25959,27348,50506,51084,51514,53905,54596,54904,55818,55959,57460,64900,79727,79977,83593,83758,84513,84681,92755,137970,203074,203076,253260,259197,286097,340273,346389,378938,387535,389624,389639,389651,392188,443396,645402,778347,6775079,100124700,100196322,&tool=chartReport&annot=GOTERM_BP_FAT" target="_blank"></iframe>	
				
						</div>
					
						
			<div id="table_wTabs-112">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=	9,164,174,213,229,267,285,324,331,347,526,595,635,771,875,890,898,925,999,1013,1019,1029,1088,1231,1235,1410,1728,1748,1789,1806,1843,2065,2209,2705,2896,3091,3099,3122,3148,3159,3177,3313,3398,3569,3925,3950,4049,4072,4100,4316,4318,4321,4482,4613,4837,5037,5156,5228,5347,5352,5460,5563,5578,5599,5629,5649,6347,6367,6480,6502,6548,6580,6615,6657,6690,6696,6756,6790,6850,6929,7015,7098,7099,7124,7128,7178,7422,7429,7431,7791,7805,8607,8658,8733,8788,8842,9071,9097,9212,9232,9639,9768,10276,10397,10521,10641,10855,10856,10912,11065,11186,11197,23213,23657,23678,25959,27348,50506,51084,51514,53905,54596,54904,55818,55959,57460,64900,79727,79977,83593,83758,84513,84681,92755,137970,203074,203076,253260,259197,286097,340273,346389,378938,387535,389624,389639,389651,392188,443396,645402,778347,6775079,100124700,100196322&tool=chartReport&annot=GOTERM_MF_FAT" target="_blank"></iframe>	
				
						</div>
						
						<div id="table_wTabs-113">
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=9,164,174,213,229,267,285,324,331,347,526,595,635,771,875,890,898,925,999,1013,1019,1029,1088,1231,1235,1410,1728,1748,1789,1806,1843,2065,2209,2705,2896,3091,3099,3122,3148,3159,3177,3313,3398,3569,3925,3950,4049,4072,4100,4316,4318,4321,4482,4613,4837,5037,5156,5228,5347,5352,5460,5563,5578,5599,5629,5649,6347,6367,6480,6502,6548,6580,6615,6657,6690,6696,6756,6790,6850,6929,7015,7098,7099,7124,7128,7178,7422,7429,7431,7791,7805,8607,8658,8733,8788,8842,9071,9097,9212,9232,9639,9768,10276,10397,10521,10641,10855,10856,10912,11065,11186,11197,23213,23657,23678,25959,27348,50506,51084,51514,53905,54596,54904,55818,55959,57460,64900,79727,79977,83593,83758,84513,84681,92755,137970,203074,203076,253260,259197,286097,340273,346389,378938,387535,389624,389639,389651,392188,443396,645402,778347,6775079,100124700,100196322&tool=chartReport&annot=GOTERM_CC_FAT" target="_blank"></iframe>	
				
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

							<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=9,164,174,213,229,267,285,324,331,347,526,595,635,771,875,890,898,925,999,1013,1019,1029,1088,1231,1235,1410,1728,1748,1789,1806,1843,2065,2209,2705,2896,3091,3099,3122,3148,3159,3177,3313,3398,3569,3925,3950,4049,4072,4100,4316,4318,4321,4482,4613,4837,5037,5156,5228,5347,5352,5460,5563,5578,5599,5629,5649,6347,6367,6480,6502,6548,6580,6615,6657,6690,6696,6756,6790,6850,6929,7015,7098,7099,7124,7128,7178,7422,7429,7431,7791,7805,8607,8658,8733,8788,8842,9071,9097,9212,9232,9639,9768,10276,10397,10521,10641,10855,10856,10912,11065,11186,11197,23213,23657,23678,25959,27348,50506,51084,51514,53905,54596,54904,55818,55959,57460,64900,79727,79977,83593,83758,84513,84681,92755,137970,203074,203076,253260,259197,286097,340273,346389,378938,387535,389624,389639,389651,392188,443396,645402,778347,6775079,100124700,100196322&tool=chartReport&annot=KEGG_PATHWAY" target="_blank"></iframe>	
						
						</div>
						
						
						<div  id="table_wTabs-122">
				
				<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://david.abcc.ncifcrf.gov/api.jsp?type=ENTREZ_GENE_ID&ids=9,164,174,213,229,267,285,324,331,347,526,595,635,771,875,890,898,925,999,1013,1019,1029,1088,1231,1235,1410,1728,1748,1789,1806,1843,2065,2209,2705,2896,3091,3099,3122,3148,3159,3177,3313,3398,3569,3925,3950,4049,4072,4100,4316,4318,4321,4482,4613,4837,5037,5156,5228,5347,5352,5460,5563,5578,5599,5629,5649,6347,6367,6480,6502,6548,6580,6615,6657,6690,6696,6756,6790,6850,6929,7015,7098,7099,7124,7128,7178,7422,7429,7431,7791,7805,8607,8658,8733,8788,8842,9071,9097,9212,9232,9639,9768,10276,10397,10521,10641,10855,10856,10912,11065,11186,11197,23213,23657,23678,25959,27348,50506,51084,51514,53905,54596,54904,55818,55959,57460,64900,79727,79977,83593,83758,84513,84681,92755,137970,203074,203076,253260,259197,286097,340273,346389,378938,387535,389624,389639,389651,392188,443396,645402,778347,6775079,100124700,100196322&tool=chartReport&annot=BIOCARTA" target="_blank"></iframe>	
						
				
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
<iframe frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" src="http://string-db.org/api/image/network?identifiers=9%0D164%0D174%0D213%0D229%0D267%0D285%0D324%0D331%0D347%0D526%0D595%0D635%0D771%0D875%0D890%0D898%0D925%0D999%0D1013%0D1019%0D1029%0D1088%0D1231%0D1235%0D1410%0D1728%0D1748%0D1789%0D1806%0D1843%0D2065%0D2209%0D2705%0D2896%0D3091%0D3099%0D3122%0D3148%0D3159%0D3177%0D3313%0D3398%0D3569%0D3925%0D3950%0D4049%0D4072%0D4100%0D4316%0D4318%0D4321%0D4482%0D4613%0D4837%0D5037%0D5156%0D5228%0D5347%0D5352%0D5460%0D5563%0D5578%0D5599%0D5629%0D5649%0D6347%0D6367%0D6480%0D6502%0D6548%0D6580%0D6615%0D6657%0D6690%0D6696%0D6756%0D6790%0D6850%0D6929%0D7015%0D7098%0D7099%0D7124%0D7128%0D7178%0D7422%0D7429%0D7431%0D7791%0D7805%0D8607%0D8658%0D8733%0D8788%0D8842%0D9071%0D9097%0D9212%0D9232%0D9639%0D9768%0D10276%0D10397%0D10521%0D10641%0D10855%0D10856%0D10912%0D11065%0D11186%0D11197%0D23213%0D23657%0D23678%0D25959%0D27348%0D50506%0D51084%0D51514%0D53905%0D54596%0D54904%0D55818%0D55959%0D57460%0D64900%0D79727%0D79977%0D83593%0D83758%0D84513%0D84681%0D92755%0D137970%0D203074%0D203076%0D253260%0D259197%0D286097%0D340273%0D346389%0D378938%0D387535%0D389624%0D389639%0D389651%0D392188%0D443396%0D645402%0D778347%0D6775079%0D100124700%0D100196322"></iframe>	
					
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