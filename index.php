<?php 
include("ac-header.php"); 
include("instructions_8.php");
?>
<body>
<div class="well">
	<!--
    <h3 class="badge-important">Assignment/Research Calculator</h3>  to compromise with reynolds library style sheet -->
 <h1 align="center"><span class="label label-Primary">Research Calculator</span></h1> 
 <br/>
<div class="ACbody">
<div id="introduction">
<h5>Use the <em>Assignment/Research Calculator</em> to help plan your research assignments.</h5>
<h5>The sooner you start your research, the more time you will have to write a successful paper.</h5>
</div>
</br>
<!--<form action = "date.php" method = "post">-->
<!--
<div id ="keyword">
Keyword of Your Assignment: <input type ="text" id="keyword" name="keyword"><br>
</div> -->
<form name = "date" action = "date.php">
<div id ="keywordSection">
Topic of Your Assignment: <input type ="text" id="keyword" name="keyword"><br>
</div>
<br/>
<!--<table align="center" border="0"> -->
<table  border="0">
<tr>
<td align="center" colspan="2">
<?php
// Added Jan 2012 to display an error if not everything is filled in
if (isset($_GET['err']) && $_GET['err'] == 1) {
	print "<em> Please enter all dates </em>";
}
?>
</td>
</tr>
<tr>
<td><h4><span class="label label-info">Date you will begin the assignment:</span></h4></td>
</tr>
<td valign="top">

<?php pres_date("one", date("j"), date("n"), date("Y")); ?>
<hr>
</td>
</tr>

<tr><td><h4><span class="label label-info">Date the assignment is due:</span></h4></td></tr>

<tr><td valign=top>

<?php pres_date("two", "", "", date("Y")); ?>

</td></tr>

<tr><td width="280" ><h4><span class="label label-info">Subject area of the assignment:</span></h4></td>
<td width="18" align="right">&nbsp;</td>
<td align="left">
<select name="SubjectID" id = "SubjectID" size="7">
<option value = "Accounting" >Accounting</option>
<option value = "Administration of Justice">Administration of Justice</option>
<option value = "American Sign Language">American Sign Language</option>
<option value = "Architectural and Engineering Technology" >Architectural and Engineering Technology</option>
<option value = "Automotive Technology" >Automotive Technology</option>
<option value = "Business Administration" >Business Administration</option>
<option value = "Culinary Arts" >Culinary Arts</option>
<option value = "Dental Laboratory Technlogy" >Dental Laboratory Technlogy</option>
<option value = "Emergency Medical Service" >Emergency Medical Service</option>
<option value = "Early Chidhood Development" >Early Chidhood Development</option>
<option value = "Fire Science Technology" >Fire Science Technology</option>
<option value = "Human Services" >Human Services</option>
<option value = "Horticulture" >Horticulture</option>
<option value = "Hospitality Management" >Hospitality Management</option>
<option value = "Information Systems Technology" >Information Systems Technology</option>
<option value = "Liberal Arts" >Liberal Arts</option>
<option value = "Management" >Management</option>
<option value = "Medical Laboratory Technology" >Medical Laboratory Technology</option>
<option value = "Nursing" >Nursing</option>
<option value = "Opticianry" >Opticianry</option>
<option value = "Paralegal Studies" >Paralegal Studies</option>
<option value = "Respiratory Therapy" >Respiratory Therapy</option>
<option value = "Social Science" >Social Science</option>
<option value = "Hospitality Services" >Hospitality Services</option>
</select>

</td> </tr>


</table>
<br/>
<hr/>
<!--<center><input type="submit" value="Calculate Assignment Schedule!"></center>-->
<div class="cal_button" align="center"><button type="submit" class="btn btn-Primary btn-lg">Calculate  Schedule</button></div>


</form>
 </div> <!--acbody class-->
</div> <!--end well class -->

<?php include("ac-footer.php"); ?>
















