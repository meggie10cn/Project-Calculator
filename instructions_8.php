<?php
/**********************************************************
 Copyright (C) The Regents of the University of Minnesota

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 version 2 as published by the Free Software Foundation.
   
 This program is distributed in the hope that it will be useful,  
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License in COPYRIGHT for more details.



File: instructions8.php
Original Author: John Hickey (a former student worker)
Modified:  Shane Nackerud snackeru@tc.umn.edu
Last Modified: 15.July.2016 lixia zhao <lxzhao16@gmail.com>
***********************************************************
Comments:
This is the main file of steps for the Assignment Calculator.
The steps are located in a big array called $instructions[].
The decimal point in the array describes the amount of time 
each step should take.  Make sure that your numbers equal 1
(one), or in other words make sure it equals 100% of the time.

The file also contains various functions necessary for the AC.

Jan 2012: MJB Changed this from numerically indexed sub-arrays
to a proper associative array 
**********************************************************/


//main array.  Each element has three parts.  A decimal that 
//represents fraction of total time, a description, and an 
//array of tips

$instructions = array(

//Step 1
array(
  "time" => .04,
  "title" => "Understand your assignment",
  "items" => array(
     "<a href='http://libguides.reynolds.edu/collegewriting'>College Write</a>",
     "<a href='http://library.reynolds.edu/services/researchconsultation.html'>Meet With a Librarian</a>"
  ),
  "due" => NULL
),

//Step 2 
array(
  "time" => .10,
  "title" => "Narrow your topic",
  "items" => array(
    "<a href='http://libguides.reynolds.edu/c.php?g=143583&p=939853'>Refine a Topic</a>"
    //,
   //"<a href='http://libguides.reynolds.edu/c.php?g=143588&p=939516'>College Writing</a>",
  // "<a href='http://library.reynolds.edu/services/index.html'>Make an appointment with a Librarian</a>
  // to provide guidance on locating information and resources",
 // "<a href='http://library.reynolds.edu/services/researchconsultation.html'>Research Consultant Request </a>"
  ),
  "due" => NULL
),

//Step 3
array(
  "time" => .10,
  "title" => "Gathering resources",
  "items" => array(
   "<a href='http://libguides.reynolds.edu/az.php'> Find articles - library Databases</a>",
    "<a href='http://dc02kg0519na.hosted.exlibrisgroup.com/F/IC7N5L4CPJ518B5PSDHI663HSFMI9I4LNPL8XJNNL4HAR24ERX-49302?func=find-b-0&local%5Fbase=jsrcc&pds%5Fhandle=GUEST&pds_handle=GUEST'>Find books or DVDs - Library Catalog</a>",
    //"<a href='http://library.reynolds.edu/research/populardatabases.html?ebscoa9h'>Popular Databases</a>",
   // "<a href='http://libguides.reynolds.edu/'>Reynolds Research Guides</a>",
   // "<a href='http://library.reynolds.edu/research/index.html'> Reynold Research Portal</a>",
   // "<a href='http://libguides.reynolds.edu/research'>Research @ Reynolds Library </a>",
   // "<a href='http://libguides.reynolds.edu/cdl001'>Orientation to Learning Online - Library Resources & Services Tutorial</a>"
    "<a href='http://www.easybib.com/'>EasyBib</a>"
     
  ),
  "due" => NULL
),

//Step 4
array(
  "time" => .10,
  "title" => "Evaluate resources",
  "items" => array(
    //"<a href='http://libguides.reynolds.edu/c.php?g=143583&p=939011'>Module 3- Find Books -Research @ Reynolds Library",
    //"<a href='http://libguides.reynolds.edu/c.php?g=143583&p=938848'>Module 4- Find Articles -Research @ Reynolds Library",
    //"<a href='http://libguides.reynolds.edu/c.php?g=143583&p=939451'>Module 5- Use Open Web Source -Research @ Reynolds Library",
   "<a href='http://libguides.reynolds.edu/c.php?g=143583&p=939253'>Evaluate Resources</a>"
  ),
  "due" => NULL
),

//Step 5
array(
  "time" => .24,
  "title" => "Write the 1st draft and create citations",
  "items" => array(
    //"<p>Start with an outline:</p>
   // <ul><li>Organize your ideas</li>
  //<li>Organize your notes</li>
  //<li>Outline the format of your paper</li></ul>",
  "<a href='https://owl.english.purdue.edu/owl/resource/544/1/'>Start with an Outline</a>",
  "<a href='https://owl.english.purdue.edu/owl/resource/545/1/'>Thesis Statement Tips</a>",
  "<a href='https://owl.english.purdue.edu/owl/section/1/1/'>The Writing Process</a>",
  "<a href='http://www.easybib.com/'>Citation Manager: EasyBib</a>",
  "<a href='http://libguides.reynolds.edu/mla'>Citation Style: MLA</a>",
  "<a href='http://libguides.reynolds.edu/apa'>Citation Style: APA</a>"
  ),
  "due" => NULL
),

//Step 6
array(
  "time" => .10,
  "title" => "Revise, rewrite, and turn in paper",
  "items" => array(
   // "Keep careful notes, with source clearly indicated",
   // "Reread your assignment",
   // "Keep looking for more resources that support your thesis or argument",
   // "You may want to consult with your instructor if your thesis has changed significantly"
    "<a href='http://libguides.reynolds.edu/c.php?g=143588&p=938590/'>Tutoring in the Academic Support Center</a>",
   "<a href='https://owl.english.purdue.edu/owl/resource/561/1/'>Guide to Proofreading</a>",
   "<a href='http://library.reynolds.edu/services/ask.htm'>Chat with a Librarian 24/7!</a>"
     ),
  "due" => NULL
/*),

//Step 7
array(
  "time" => .20,
  "title" => "Revise and Rewrite (Second Draft)",
  "items" => array(
    "<a href='http://libguides.reynolds.edu/c.php?g=143588&p=938590'>Tutor Provided by Academic Support Center</a>",
    "<a href='http://library.reynolds.edu/services/ask.htm'> Chat @ Reynolds Library</a>",
    "<a href='https://owl.english.purdue.edu/owl/resource/561/1/'> Proofreading</a>"


  ),
  "due" => NULL
),

//Step 8
array(
  "time" => .12,
  "title" => "Put Paper/Presentation in Final Form",
  "items" => array(
    "<a href='http://libguides.reynolds.edu/apa'>Citation Style: APA</a>",
    "<a href='http://libguides.reynolds.edu/mla'>Citation Style: MLA</a>",
    "<a href='https://signin.my.vccs.edu/cas/login?service=http://library.vccs.edu/license-bin/linker.plx?state=cas_service%26link=VCJ36vmeijz5'>EasyBib</a>",

  ),
  "due" => NULL
  */
)

//Step 9
// array(
//   "time" => .10,
//   "title" => "Write 1st draft",
//   "items" => array(
//     "<a href='http://www.owc.umn.edu/Handouts/YourFirstDraft.cfm'>Writing Your First Draft</a>",
//     "<a href='http://www.owc.umn.edu/'>Online Writing Center at the U of M</a>",
//     "<a href='http://swc.umn.edu/'>CLA Student Writing Center in Lind Hall</a>",
//     "<a href='http://www.lrs.umn.edu/'>Reserve computer lab time on the Lab Reservation System</a>"
//   ),
//   "due" => NULL
// ),

// //Step 10
// array(
//   "time" => .10,
//   "title" => "Conduct additional research as necessary",
//   "items" => array(
//     "<a href='http://tutorial.lib.umn.edu/infomachine.asp?moduleID=9'>QuickStudy: Evaluating Sources</a>",
//     "<a href='http://infopoint.lib.umn.edu/'>'Ask Us' at the University Libraries</a>"
//   ),
//   "due" => NULL
// ),

// //Step 11
// array(
//   "time" => .20,
//   "title" => "Revise & rewrite",
//   "items" => array(
//     "<a href='http://www.owc.umn.edu/Handouts/RevisingYourWork.cfm'>Revising Your Work</a>",
//     "<a href='http://www.owc.umn.edu/'>Online Writing Center at the U of M</a> ",
//     "<a href='http://swc.umn.edu/'>CLA Student Writing Center in Lind Hall</a>"
//   ),
//   "due" => NULL
// ),

// //Step 12
// array(
//   "time" => .06,
//   "title" => "Put paper in final form",
//   "items" => array(
//     "<a href='http://tutorial.lib.umn.edu/infomachine.asp?moduleID=10'>QuickStudy: Citing Sources</a>",
//     "<a href='http://owl.english.purdue.edu/handouts/general/gl_proof.html'>Proofreading Strategies</a>",
//     "<a href='http://www.bartleby.com/141/'>The Elements of Style - William Strunk, Jr.</a>",
//     "<a href='http://owl.english.purdue.edu/handouts/general/gl_sentclar.html'>Strategies for Improving Sentence Clarity</a>"
//   ),
//   "due" => NULL
// )
);


/**********************************************************
Function: days_between
Author: John Hickey
Last Modified: 2001
***********************************************************
Purpose:
Generates the number of days between two dates
**********************************************************/ 
function days_between($time1, $time2) {

	$time =  $time2 - $time1;
	return ($time/86400);

}


/**********************************************************
Function: out_of_time
Author: John Hickey
Last Modified: 2012 by Michael Berkowski
***********************************************************
Purpose:
Breaks up the steps into the times designated by the decimals
in the $instructions array

2012: Michael Berkowski made the due dates a component of the
$instructions array rather than a separate array
NOTE: $instructions_array is passed by reference now...
**********************************************************/ 
function out_of_time($time1, $time2, &$instructions_array, $bedTime, $ampm) {

	$time= abs($time1-$time2);
	//depending on the number of day and the number of divisons, we choose different date formats.

		// No idea what $div_array was for...
		if(days_between($time1, $time2)>sizeof($div_array)) {
		
			$format="D M d, Y";
			$stages = $time1; //keep the running total.

			foreach ($instructions_array as &$step) {
				$stages += ($time * $step['time']);	
				$step['due'] = date($format, $stages);
			}
		} else {	
	
		$format="g a D M d";

		$stages = $time1; //keep the running total.

			foreach ($instructions_array as &$step) {
				$stages += ($time * $step['time']);
				$hour24 = date("G", $stages);
				if ($hour24 > 12) $hour24 = $hour24-24; //this keeps the time centered around midnight. 2 is 2 am and -2 is 10pm
				if( ($ampm == 'am' && $hour24 > $bedTime && $hour24 < $bedTime + 10) or ($ampm == 'pm' && $hour24 > $bedTime-12 && $hour24 < $bedTime-2)){//if the time is later than a person wants to get to sleep
					$step['due'] = "$bedTime $ampm " . date("D M d", $stages);
				} else {
					$step['due'] = date($format, $stages);
				}
			}

		}
	return;
}

/**********************************************************
Function: pres_date
Author: John Hickey
Last Modified: 2012 by Michael Berkowski (fixed attribute quoting)
***********************************************************
Purpose:
Generates the form for Start Date and Due Date information
**********************************************************/ 
function pres_date($number = "", $myDay = "", $myMon = "", $myYear = "") {
	
	print "<input type= 'text' name='month$number' size='2' maxlength='2' value='$myMon'> - \n";
	print "<input type= 'text' name='day$number' size='2' maxlength='2' value='$myDay'> - \n";
	print "<input type= 'text' name='year$number' size='4' maxlength='4' value='$myYear'>\n";

}

?>
