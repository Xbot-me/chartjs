<?php

require 'db_config.php';


if($_GET){
  $school = $_GET['school'];
  $dept = $_GET['dept']; 
  $year = $_GET['year'];
  $semester = $_GET['semester'];
  $major = $_GET['major'];
  
  if($school){
    if($year){
      $sql = "SELECT `student` FROM `alldata` WHERE `year` = '$year' AND `school` = '$school'";
      $result = $mysqli->query($sql);
  //print_r($result);

  while($row = $result->fetch_assoc()){
    $json[] = $row;
    
 }
 
 $data['data'] = $json;
/* var_dump($data['data'][0]);
$data['data'][0]; */

echo json_encode($data);//
die();
    }
  }

 




 $sql = "SELECT * FROM alldata";
 // var_dump($sql);

  $result = $mysqli->query($sql);
  //print_r($result);

  while($row = $result->fetch_assoc()){
    $json[] = $row;
    
 }
 
 $data['data'] = $json;
/* var_dump($data['data'][0]);
$data['data'][0]; */

echo json_encode($data);//

}else{

  $sqlTotal = "SELECT * FROM alldata";

  $result = $mysqli->query($sqlTotal);
  
    while($row = $result->fetch_assoc()){  
       $json[] = $row;
    }
  
    $data['data'] = $json;
  
  echo json_encode($data);
}





?>