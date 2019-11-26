<?php


 require 'db_config.php';


 $id  = $_POST["uni_id"];
var_dump($id);

 $sql = "DELETE FROM `alldata` WHERE `alldata`.`id` = '".$id."'";
 //"DELETE FROM `alldata` WHERE `alldata`.`id` = 2"

$result = $mysqli->query($sql);
 if($result){
 	echo json_encode([$id]);
 }else{
 	var_dump(result);
 }

 


?>