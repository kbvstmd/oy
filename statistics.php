<?php
include_once('connect.php');
//treatment static0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
$res=mysql_query("SELECT  `treatment` FROM  `pubmed` where `treatment`!=''");	 
$arr=array();
while($row = mysql_fetch_array($res)){
array_push($arr, $row['treatment']);
}
//为了消除元素中多项因素的影响，先以一定规则合成字符串
$str=implode(",",$arr);
//然后再解析字符串到新数组中，这样可以把元素中多项解析成单项数据
$arr=explode(",",$str);
//统计数组中的各个元素及元素个数
$arrtj=array_count_values( $arr );
//print_r( $arrtj );
//print_r($arr1);


//把一维数组变成二维数组
$arr2wei = Array();
foreach ($arrtj as $key => $value) {
    $arr2wei[]=Array($key,$value);
}
//print_r($arr2wei);
$data = json_encode($arr2wei);

//patientCohort static1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
$res1=mysql_query("SELECT  `patientCohort` FROM  `pubmed` where `patientCohort`!=''");	 
$arr1=array();
while($row1 = mysql_fetch_array($res1)){
array_push($arr1, $row1['patientCohort']);

}

//为了消除元素中多项因素的影响，先以一定规则合成字符串
$str1=implode(",",$arr1);
//然后再解析字符串到新数组中，这样可以把元素中多项解析成单项数据
$arr1=explode(",",$str1);
//统计数组中的各个元素及元素个数
$arrtj1=array_count_values( $arr1 );
//print_r( $arrtj );
//print_r($arr1);

$k=array_filter($arrtj1);
//把一维数组变成二维数组
$arr2wei1 = Array();
foreach ($arrtj1 as $key => $value) {
    $arr2wei1[]=Array($key,$value);
}
//print_r($arr2wei);
$data1 = json_encode($arr2wei1);
$data11 = json_encode($k);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="Images/favicon.ico" type="image/x-icon">
	<title>DBPHCC|Browse</title>
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
﻿﻿$(function () {

//treatment0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
    $('#treatment').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'The Treatment Distribution'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                     format: '<b>{point.name}</b>: {point.percentage:.2f} %' //显示类型和百分比
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: <?php echo $data;?>
        }]
    });
	
	
	
	//patientCohort111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
	 $('#patientCohort').highcharts({
        chart: {
            renderTo: 'container',
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 1,
                beta: 1,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'patient countries and regions'
        },
        subtitle: {
            text: ''
        },
		//X轴自定义显示
		xAxis: {
            categories:<?php echo $data11;?> ,
            labels: {
                rotation: -45,
                align: 'right',
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
		
        plotOptions: {
            column: {
                depth: 25
            }
        },
		
		
        series: [{
		    name: 'patient area',
            data: <?php echo $data1;?> 
			
			
        }]
    });
    

 
	

	
	
	//moleculeType 444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444
	 $('#moleculeType').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'The moleculetype Distribution '
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                     format: '<b>{point.name}</b>: {point.percentage:.2f} %' //显示类型和百分比
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Protein',   320.0],
                
                {
                    name: 'mRNA',
                    y:  154.0,
                    sliced: true,
                    selected: true
                },
                ['miRNA',    88.0],
                ['Methylation',     6.0],
                ['Phosphorylation',   9.0],
				 ['Others',   5.0]
				
            ]
        }]
    });
	
	
	
	
	
});							
		</script>
	
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

<div class="left-bg"></div>
<div class="content-center">

<!--Content Left start-->
<div class="content-left">
<div class="health-text">
<h1></h1>
<h3>&nbsp;&nbsp;Here we selected 645 papers from <a href="http://www.ncbi.nlm.nih.gov/pubmed/">Pubmed</a>, resulted from 19 searching key words which were published in the past 13 (2002-2014) years.</br>
     &nbsp;&nbsp;This database has a total of 1479 data records, over 60,000 patient samples from 25 countries and regions around the world.</h3>
</div>
  <div class="health-part">
   


   
   

<!--moleculeType-->
  <div class="health-list">
 <div id="moleculeType" style="min-width:950px;height:600px"></div>

<div class="health-text-part">
<div class='g_12'>
					
					<div class="widget_contents noPadding">
						<table class="tables">
							<thead>
								
								
								<tr>
									
									<th>Type</th>
									<th>Number</th>
									
									
									
								</tr>
							</thead>
							<tbody>
							<tr>
								<td>Protein</td>	
								<td>311</td>	
									</tr>
									
									<tr>
								<td>gene</td>	
								<td>154</td>	
									</tr>
									
									<tr>
								<td>miRNA</td>	
								<td>88</td>	
									</tr>
									
									<tr>
								<td>Methylation</td>	
								<td>6</td>	
									</tr>
									
									<tr>
								<td>Phosphorylation</td>	
								<td>8</td>	
									</tr>
									
									<tr>
								<td>Others</td>	
								<td>5</td>	
									</tr>
								
								
								
							</tbody>
						</table>
					</div>
					</div>
					
					<div class='g_12'>
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_tables">TOP 10 high frequency molecule exclude AFP(22 times) and VEGFA(21 times)</h4>
					</div>
					<div class="widget_contents noPadding">
						<table class="tables">
							<thead>
								<tr>
									<th colspan='2' ><font color="#3333FF">All molecule</font></th>
									<th colspan='2' ><font color="#FF3366">Protein molecule</font></th>
									<th colspan='2' ><font color="#00CC66">mRNA molecule</font></th>
								
								</tr>
								
								<tr>
									
									<th>GeneSymbol</th>
									<th>Number</th>
									<th>GeneSymbol</th>
									<th>Number</th>
									<th>GeneSymbol</th>
									<th>Number</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><font color="#3333FF">SPP1</font></td>
									<td><font color="#3333FF">11</font></td>
								
									<td><font color="#FF3366">ACE</font></td>
									<td><font color="#FF3366">9</font></td>
								
									<td><font color="#00CC66">AURKB</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">KRT19</font></td>
									<td><font color="#3333FF">9</font></td>
								
									<td><font color="#FF3366">KRT19</font></td>
									<td><font color="#FF3366">9</font></td>
								
									<td><font color="#00CC66">CDH1</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">CDH1</font></td>
									<td><font color="#3333FF">8</font></td>
								
									<td><font color="#FF3366">SPP1</font></td>
									<td><font color="#FF3366">9</font></td>
								
									<td><font color="#00CC66">COX2</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">MMP9</font></td>
									<td><font color="#3333FF">8</font></td>
								
									<td><font color="#FF3366">TP53</font></td>
									<td><font color="#FF3366">8</font></td>
								
									<td><font color="#00CC66">DUSP1</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">TP53</font></td>
									<td><font color="#3333FF">8</font></td>
								
									<td><font color="#FF3366">MKI67</font></td>
									<td><font color="#FF3366">7</font></td>
								
									<td><font color="#00CC66">HIF1A</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">HIF1A</font></td>
									<td><font color="#3333FF">7</font></td>
								
									<td><font color="#FF3366">MMP9</font></td>
									<td><font color="#FF3366">7</font></td>
								
									<td><font color="#00CC66">ID2</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">CTNNBIP1</font></td>
									<td><font color="#3333FF">6</font></td>
								
									<td><font color="#FF3366">CTNNBIP1</font></td>
									<td><font color="#FF3366">6</font></td>
								
									<td><font color="#00CC66">POU5F1</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">PROM1</font></td>
									<td><font color="#3333FF">6</font></td>
								
									<td><font color="#FF3366">HIF1A</font></td>
									<td><font color="#FF3366">6</font></td>
								
									<td><font color="#00CC66">PRKAA2</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									<tr>
									<td><font color="#3333FF">ALB</font></td>
									<td><font color="#3333FF">5</font></td>
								
									<td><font color="#FF3366">BIRC5</font></td>
									<td><font color="#FF3366">5</font></td>
								
									<td><font color="#00CC66">RASSF1</font></td>
									<td><font color="#00CC66">2</font></td>
									
								</tr>
								
									
								
								
								
							</tbody>
						</table>
					</div>
					</div>

<h4><img src="Images/divater-comment.png" width="950" height="2" alt="" /></h4>
</div>
</div>

   
   
   
  <!--treatment-->  
  <div class="health-list">
 <div id="treatment" style="min-width:950px;height:600px"></div>

<div class="health-text-part">
<div class="health-text">

<p>Most of the patients underwent hepatectomy, the others may have taken drug treatment, liver transplantation(LT) or transarterial chemoembolization(TACE).</p>
</div>
<h4><img src="Images/divater-comment.png" width="950" height="2" alt="" /></h4>
</div>
</div>

<!--patientCohort-->
  <div class="health-list">
 <div id="patientCohort" style="min-width:950px;height:600px"></div>

<div class="health-text-part">


	<div class="g_6">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_pie">HBV</h4>
					</div>
					<div class="widget_contents">
						<img src="Images/browse/hbv.png" border="0" alt="" />
					
				</div>
				</div>
				
					<div class="g_6">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_pie">HCV</h4>
					</div>
					<div class="widget_contents">
						<img src="Images/browse/hcv.png" border="0" alt="" />
					
				</div>
					</div>
					<div class="health-text">
					<p>Patients came from 25 countries and regions, the top six countries include China, Japan,Korea, USA, Germany and Italy. When we look at the HBV infected group the top three come from China, Korea and Germany, while top three HCV infected groups include Japan, USA and Italy.</p>
					</div>

<h4><img src="Images/divater-comment.png" width="950" height="2" alt="" /></h4>
</div>
</div>






     <!--treatment-->  
  <div class="health-list">
 <div  class="health-list-img"><img src="Images/browse/tissue.png" alt="" /></div>

<div class="health-text-part">
<div class="health-text">

<p>Most molecules were identified in one tissue but there are some molecules that were identified in different tissues and reported in different papers. The table below is about molecules identified in tumour tissue and adjacent nontumor tissue. </p>
</div>
<div class='g_12'>
					
					<div class="widget_contents noPadding">
						<table class="tables">
							<thead>
								
								
								<tr>
									
									<th>GeneSymbol</th>
									<th>In tumor tissue(pubmedID)</th>
									<th>In adjacent nontumor tissue (pubmedID)</th>
									
									
									
								</tr>
							</thead>
							<tbody>
							<tr>
								<td>HIF1A</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=18465238">18465238</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=20165955">20165955</a></td>
                             							
									</tr>
									
									
									<tr>
								<td>NPRL2</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=19274676">19274676</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=19274676">19274676</a></td>
                             							
									</tr>
									
									
									<tr>
								<td>PGF</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=22521360">22521360</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=19451266">19451266</a></td>
                             							
									</tr>
									
									
									
									<tr>
								<td>IL17A</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21760911">21760911</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=19329213">19329213</a></td>
                             							
									</tr>
									
									
									
									<tr>
								<td>MMP2</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21104440">21104440</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=17415090">17415090</a></td>
                             							
									</tr>
									
									
									<tr>
								<td>PTGS2</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=20401641">20401641</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=20652159">20652159</a></td>
                             							
									</tr>
									
									
									<tr>
								<td>ENG</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=17311868">17311868</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=15633211">15633211</a></td>
                             							
									</tr>
									
									
									<tr>
								<td>MIR126</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=22552153">22552153</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21298008">21298008</a></td>
                             							
									</tr>
									
									<tr>
								<td>MIR24-1</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=22552153">22552153</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21298008">21298008</a></td>
                             							
									</tr>
									
									<tr>
								<td>MIR191</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=22552153">22552153</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21298008">21298008</a></td>
                             							
									</tr>
									
									
									<tr>
								<td>MIR21</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=20978511">20978511</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21298008">21298008</a></td>
                             							
									</tr>
									
									<tr>
								<td>MIR222</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=20103675">20103675</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21298008">21298008</a></td>
                             							
									</tr>
									
									<tr>
								<td>MIR148A</td>	
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=18176954">18176954</a></td>
								<td><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=21298008">21298008</a></td>
                             							
									</tr>
									
									
								
								
							</tbody>
						</table>
					</div>
					</div>
<h4><img src="Images/divater-comment.png" width="950" height="2" alt="" /></h4>
</div>
</div>







</div>


</div>
<!--Content Left End-->



<!--Sidebar start-->

<!--Sidebar End-->


</div>
<div class="right-bg"></div>


</div>
</div>
<!--Content End-->

<!--Footer start-->

<!--Footer End-->


</div>
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
