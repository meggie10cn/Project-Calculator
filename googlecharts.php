<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Google Charts Jquery</title>
<style>
body {
    width:80%;
    margin:10% auto;
    background:#e6e6e6;
}
/***
#subjectChart {
    border:1px solid gray;
    position: relative;
    padding-bottom: 80%;
    height: 0;
    overflow:hidden;
}
#chart_div {
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:100%; **/
}
</style>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="ajaxGetPost.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>

/*******************************************/
// draw subject
function charts(data,ChartType)
{
var c=ChartType;
var jsonData=data;
google.load("visualization", "1", {packages:["corechart"], callback: drawVisualization});


function drawVisualization() 
{
var data = new google.visualization.DataTable();


data.addColumn('string', 'Subject');
data.addColumn('number', 'Counts of Subject');
$.each(jsonData, function(i,jsonData)
{

  var value=parseInt(jsonData.counts);
  var name=jsonData.subject;
  data.addRows([ [name, value]]);
});


var options = {
title : "Count of Each Subject",
// bar: {
//     groupWidth: 10
// },
/******
  width: '100%',
        height: '100%',
        axisTitlesPosition: 'out',
        'isStacked': true,
        pieSliceText: 'percentage',

 chartArea: {
            left: "25%",
            top: "3%",
            height: "80%",
            width: "100%"
        },

  /****/

colorAxis: {colors: ['#54C492', '#cc0000']},
defaultColor: '#dedede',
vAxis:  {
          minValue:0,
          format: '#',
          //ticks: [0,2,4,6,8,10,12],
          gridlines: {color: '#ccc'}
      
   },
 
 hAxis: { 
 	      minValue:0,
          format: '#',
 	      gridlines: { color: '#0B3B0B'}
  }
};

var chart;
if(c=="ColumnChart")
chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
else if(c=="PieChart")
chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
else if(c=="BarChart")
chart = new google.visualization.BarChart(document.getElementById('bar_div'));

chart.draw(data, options);
}
}

$(document).ready(function () 
{
url='subject.json';
ajax_data('GET',url, function(data)
{
charts(data,"ColumnChart");	
charts(data,"PieChart");	
charts(data,"BarChart");

});
});

/*********************************************/
/*******************************************/
// draw keyword
function charts1(data,ChartType)
{
var c=ChartType;
var jsonData=data;
google.load("visualization", "1", {packages:["corechart"], callback: drawVisualization1});


function drawVisualization1() 
{
var data = new google.visualization.DataTable();


data.addColumn('string', 'Keyword');
data.addColumn('number', 'Counts of Keyword');
$.each(jsonData, function(i,jsonData)
{

  var value=parseInt(jsonData.counts);
  var name=jsonData.keyword;
  data.addRows([ [name, value]]);
});

var options = {
title : "Count of Each Keyword",
colorAxis: {colors: ['#54C492', '#cc0000']},
defaultColor: '#dedede',
vAxis:  {
          minValue:0,
          format: '#',
          //ticks: [0,2,4,6,8,10,12],
          gridlines: {color: 'ccc'}
      
   },
 
 hAxis: { 
 	      minValue:0,
          format: '#',
          // bar: { groupWidth: '75%' },
 	      gridlines: { color: '#0B3B0B'}
  }
};

var chart1;
if(c=="ColumnChart")
chart1 = new google.visualization.ColumnChart(document.getElementById('chart_div_keyword'));
else if(c=="PieChart")
chart1 = new google.visualization.PieChart(document.getElementById('piechart_div_keyword'));
else if(c=="BarChart")
chart1 = new google.visualization.BarChart(document.getElementById('bar_div_keyword'));

chart1.draw(data, options);
}
}

$(document).ready(function () 
{
url='keyword.json';
ajax_data('GET',url, function(data)
{
charts1(data,"ColumnChart");	
charts1(data,"PieChart");	
charts1(data,"BarChart");

});
});
</script>
<style>
body{font-family:arial}
</style>
</head>
<body style="text-align:center">


  <h1 style="color:#2E9AFE;"> Usage Statistics of the Assignment Calculator</h1>
    <h4> Choose Time Period </h4>
    <form name = "chooseTime" action="keyword.php">
      From: <input type="date" text="date" name="time1">
      To:   <input type="date" text="date" name="time2">
      <br/>
    <button type="submit" class="btn btn-Primary-lg">Check Usage</button>
    </form>
    
<h1 style="color:Orange;">Count of Subject From <?php $d1 = $_GET['time1'];
echo $d1; ?> to 
<?php $d2 = $_GET['time2'];
echo $d2; ?>
</h1>
<div id = "subjectChart"></div>

<div id="chart_div"></div>
<div id="piechart_div" style="width: 900px; height: 900px;"></div>
<div id="bar_div" style="width: 900px; height: 500px;"></div>

<h1 style="color:orange;">Count of Keyword From 
	<?php $d1 = $_GET['time1'];
echo $d1; ?>
	to <?php $d2 = $_GET['time2'];
echo $d2; ?>
	 </h1>

<div id="chart_div_keyword"></div>
<div id="piechart_div_keyword" style="width: 900px; height: 900px;"></div>
<div id="bar_div_keyword" style="width: 900px; height: 500px;"></div>

</body>
</html>