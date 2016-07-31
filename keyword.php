
<!-- start php --> 
    <?php 
     $time1 = $_GET['time1'];
     //$time1_F = date_format($time1, 'Y-m-d');

     $time2 = $_GET['time2'];
     //$time2_F = date_format($time2, 'Y-m-d');
    
    $username = "user21"; 
    $password = "6k1kTPLe";   
    $host = "localhost";
    $database="user21db";
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

     $myquery1 ="SELECT subject, count(*) as counts FROM assignment
     where created >= '$time1' and created <='$time2'
     Group by subject";

     
     $myquery2 ="SELECT keyword, count(*) as counts FROM assignment
     where created >= '$time1' and created <='$time2'
     Group by keyword";
     
     // count subject
      $query = mysql_query($myquery1);
      // count keyword

    

      
      $query2 = mysql_query($myquery2);
    
    if ( ! $query || ! $query2) {
       echo mysql_error();
        die;
    }
    
    
    $data = array();
    $data1 = array();
    

     for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
     }
     //print $data json
     //echo json_encode($data); 

     //write to json file
     $fp = fopen('subject.json', 'w');
     fwrite($fp, json_encode($data));
    fclose($fp);
     $string = file_get_contents("subject.json");


   for ($x = 0; $x < mysql_num_rows($query2); $x++) {
        $data1[] = mysql_fetch_assoc($query2);
    }
    
    // print data2 json
    //echo json_encode($data1);

     //  write to json file
    $fp1 = fopen('keyword.json', 'w');
    fwrite($fp1, json_encode($data1));
    fclose($fp1);
     
     
    mysql_close($server);

    include("googlecharts.php"); 


   ?>

