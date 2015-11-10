
<?php

if(isset($_GET['N']))
{
$arr=array();
  $N = $_GET['N'];
 $arr=explode("+",$N);

   // print_r($arr);


  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  //exec("Rscript sur.R $N");
   //exec("Rscript my_rscript.R $N");
     exec("Rscript survivaln2.R $N");
 
  // return image tag
 
 
				
  
    $file = fopen('foo.csv','r'); 
while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
$goods_list[] = $data;
 }

 $arrp=array();
 
 
foreach ($goods_list as $arr1){

array_push($arrp, $arr1[0]);
   
        
    
} 


  $file = fopen('543.csv','r'); 
while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
$goods_list[] = $data;
 }
 
$file = fopen('da.csv','r'); 
while ($data1 = fgetcsv($file)) { //每次读取CSV里面的一行内容
$da[] = $data1;
 }
$dxy=0.5+abs($da[1][5])/2;
 
 
 $file = fopen('da2.csv','r'); 
while ($data2 = fgetcsv($file)) { //每次读取CSV里面的一行内容
$da2[] = $data2;
 } 
 
 
fclose($file);





   
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>DBPHCC|Search</title>
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

  <div class="health-part">
   
   
   
   
   
	<div class="g_12" id="table_wTabs5">
					<div class="widget_header wwOptions">
						
						<ul class="w_Tabs">
							<li><a href="#table_wTabs-1" title="Tab 1">Search</a></li>
							<li><a href="#table_wTabs-2" title="Tab 2">Multiple Search</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">
						<div id="table_wTabs-1">
						
						
							 <div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_settings_small">Introduction</h4>
						
					</div>
					<div class="widget_contents">
						<span class="label lwParagraph">Functional analysis mainly on the intermolecular function enrichment analysis.
						Includes three portions: GO analysis, PATHWAY analysis and NETWORK analysis .
						GO and PATHWAY analysis is mainly in <a href="http://david.abcc.ncifcrf.gov">DAVID</a> at completion, 
						 NETWORK analysis is mainly done in <a href="http://www.string-db.org">STRING</a> .
						All the molecules  are divided into three part according to the rules:</br>
						1.harmful and protective according to the molecular mechanism, harmful molecule expression has poor prognosis, protection is to have a good prognosis;</br>
						2.divided by the liver virus into HBV  type and HCV type;</br>
						3.according to the location where the molecule into Tumor Tissues, Adjacent Nontumor Tissues and Blood.</br>
						Enrichment analysis and then concluded after classification.</span>
					
					</div>
					
				</div>
						
						
						<div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_data">Molecular List</h4>
					
					</div>
					
					 
						<table class=" tables">
							<thead>
								<tr>
								    
									
									
									<th>GeneSymbol</th>
									<th>P-value</th>
									
									
								</tr>
							</thead>
							<tbody>
							
<?php $count=count($arr);
 
for ($i = 0; $i < $count; $i++) {


 echo "<tr>"; 
 
 echo"<td >{$arr[$i]}</td>";
  echo "<td>{$arrp[$i+1]}</td>"; 
  echo "</tr>"; 

}
?>
							</tbody>
						
						
					</table>
				</div>
					

   <div class="g_12 separator"><span></span></div>					
					
							
			<div class="g_12">
<?PHP  				
   $arr1 = array_map(create_function('$item', 'return "$item .png";'), $arr);//加后缀.png
 foreach($arr1 as $val)
  {

  
   echo("<img src='{$val}' />");
  
  }?>			
  </div>
  
  	
						
						
						</div>
						
						
						<div  id="table_wTabs-2">

						
						
		<div class="g_12" >
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_pie">plot(anova()) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <a href="temp.png">Download image</a></h4>
					</div>
					<div class="widget_contents">
						<?PHP  echo("<img src='temp.png?$nocache' />");?>

				    </div>
				</div>				

   
   <div class="g_12 separator"><span></span></div>	
   
   
   
   
   	
						
								<div class="g_12" >
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_data">Self-verification  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo "The Mark is:".$dxy; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="da.csv">Download the table</a></h4>
					
					</div>
					<div class="widget_contents noPadding">
					
						<table class="tables  resizeable_tables">
							<thead>
								<tr>
								    
									<th>term</th>
									<th>index.orig</th>
									<th>training</th>
									<th>test</th>
									<th>optimism</th>
									<th>index.corrected</th>
									<th>n</th>
									
								
									
								</tr>
							</thead>
							<tbody>
							
							
							<?php


foreach($da as $key=>$val) {
  echo"<tr>";
 foreach($val as $key1=>$val1) 
  {
echo"<td >{$val1}</td>";
 }
 echo"</tr>";
}

 


?>
							</tbody>
						</table>
						
					</div>
				</div>
						
						
						

						<div class="g_12 separator"><span></span></div>
						
   
   
   
   
   
						
								<div class="g_12">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_data">Verified by other microarray &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="da2.csv">Download the table</a></h4>
					
					</div>
					<div class="widget_contents noPadding">
					
						<table class="tables  resizeable_tables">
							<thead>
								<tr>
								    
									<th>term</th>
									<th>index.orig</th>
									<th>training</th>
									<th>test</th>
									<th>optimism</th>
									<th>index.corrected</th>
									<th>n</th>
									
								
									
								</tr>
							</thead>
							<tbody>
							
							
							<?php



foreach($da2 as $key=>$val) {
  echo"<tr>";
 foreach($val as $key1=>$val1) 
  {
echo"<td >{$val1}</td>";
 }
 echo"</tr>";
}



?>
							</tbody>
						</table>
						
					</div>
				</div>
						
						
						

						<div class="g_12 separator"><span></span></div>
					
					
				</div>

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
