<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>protein|function analysis<</title>
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
				<li class="active_tab i_32_analysis">
					<a href="pathway1.php" title="Kit elements">
						<span class="tab_label">Analysis</span>
						<span class="tab_info">FunctionAnalysis</span>
					</a>
				</li>
				
			</ul>
		</aside>
		<div class="contents">
			<div class="grid_wrapper">

				<div class="g_12 contents_header">
					<h4 class="i_16_table tab_label"><a href="protein.php">protein</a>><a href="funcprotein.php">Analysis</a></h4>		
					<div class="g_12 separator"><span></span></div>
					
									
					<!-- FAQ -->
    <div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_settings_small">Introduction</h4>
						
					</div>
					<div class="widget_contents">
						<span class="label lwParagraph">Functional analysis can be performed mainly by the intermolecule function enrichment analysis.
						Including three portions: GO analysis, PATHWAY analysis and NETWORK analysis .
						GO and PATHWAY analysis are mainly completed by <a href="http://david.abcc.ncifcrf.gov">DAVID</a> ,
						NETWORK analysis is mainly done by <a href="http://www.string-db.org">STRING</a>  .
						
						</span>
					
					</div>
					
				</div>
						<div class="g_12 separator"><span></span></div>
				

			
				
	
				
				
				
				
	
				
				
				
				
				
				
			
				<!-- Table With Tabs -->
				
<!-- all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        all        -->
				
		
				
				
				

	


	
	
<!--TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE----TISSUE---->
	



						

					
					
							<div class="g_12" id="table_wTabs2">
					<div class="widget_header wwOptions">
						
						<ul class="w_Tabs">
							
							<li><a href="#table_wTabs-2" title="Tab 2">FUNCTION ANALYSIS</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">
											
						
						<div  id="table_wTabs-2">
						
								<div class="g_6">
					
		<form action="action.php?action=searchmany1" method="post" > 
<textarea  id='sp' rows="21"  cols="52"  name="id"></textarea>
<input type="submit" name="submit" value="analysis" class="submitIt simple_buttons"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reste" value="clear" class="submitIt simple_buttons"/>
</form>
				</div>
				
				
				
			<div class="g_6">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_settings_small">NOTE</h4>
						
					</div>
					<div class="widget_contents">
						<span class="label lwParagraph">&nbsp;&nbsp;Submit your molecule list through left panel,only by EntrezGeneID.If you want to do Gene ID Conversion you can use <a href="http://david.abcc.ncifcrf.gov/conversion.jsp">Gene ID Conversion Tool(DAVID)</a> or <a href="http://www.ncbi.nlm.nih.gov/">NCBI</a> All the IDs can separated by (,) | (;) | (\n)| (\s) | (\t) | (\r) | (\') | (') . </BR>
&nbsp;&nbsp;Example: 	Copy/paste IDs to "left box" -> Click "submit" button, if you put the wrong id and want to restart it ->Click "clear" button.</br>
<input type="button"  class="submitIt simple_buttons" value="example" onclick="document.getElementById('sp').value='207\n387\n595\n596\n648\n1019\n1027\n1436\n1956\n2064\n2735\n3558\n3725\n4193\n4233\n4609\n5159\n5584\n5879\n5894\n5925\n7471\n151\n342'" /></br>

207&nbsp;1956&nbsp;5159</br>
387&nbsp;2064&nbsp;5584</br>
595&nbsp;2735&nbsp;5879</br>
596&nbsp;3558&nbsp;5894</br>
648&nbsp;3725&nbsp;5925</br>
1019&nbsp;4193&nbsp;7471</br>
151&nbsp;1027&nbsp;4233</br>	
342&nbsp;1436&nbsp;4609</br>





		</span >
						</div>
				</div>

					
					
					
				</div>

</div>


</div>
					
					
					
				
						
						



		
<!-- Harm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & ProtectedHarm & Protected-->						

						
				
<!-- END HARM & PRO  END HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PROEND HARM & PRO-->	
						
						
						
						
						
						
						
					</div>
				</div>
				
				
				<!-- Separator -->
				
				<!-- Table With Options on Header -->
				
				
				
				
				<!-- Separator -->
				
				
			</div>		
		</div>
	</div>

	<footer>
		<div class="wrapper">
			<span class="copyright">
					Copyright 2014  ©SHANGHAI CENTER FOR BIOINFORMATION TECHNOLOGY, Inc. All Rights Reserved.</span>
		</div>
	</footer>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>