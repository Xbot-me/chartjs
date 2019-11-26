<?php


require 'db_config.php';


$post = $_POST;

    
$sql = "INSERT INTO alldata (school,department,year,semester,major,student) VALUES ('".$post['school']."','".$post['department']."','".$post['year']."','".$post['semester']."','".$post['major']."','".$post['student']."')";


//$result = $mysqli->query($sql);
if (!mysqli_query($mysqli,$sql))
  {
  $data = mysqli_error($mysqli);
  }else{
    $data = "Data inserted";
  }





  
echo json_encode($data);
  
?>
  
  