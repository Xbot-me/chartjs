<?php 
require_once('api/db_config.php');


$sq2 = "SELECT DISTINCT school FROM alldata ";
$result2 = $mysqli->query($sq2);

$sq3 = "SELECT DISTINCT department FROM alldata ";
$result3 = $mysqli->query($sq3);


$sql = "SELECT DISTINCT year FROM alldata ";
$result = $mysqli->query($sql);

$sq4 = "SELECT DISTINCT semester FROM alldata ";
$result4 = $mysqli->query($sq4);

$sq5 = "SELECT DISTINCT major FROM alldata ";
$result5 = $mysqli->query($sq5);


while($row = $result->fetch_assoc()){
    $json[] = $row;
 }

 while($row2 = $result2->fetch_assoc()){
    $json2[] = $row2;
 }


 while($row3 = $result3->fetch_assoc()){
    $json3[] = $row3;
 }

 while($row4 = $result4->fetch_assoc()){
    $json4[] = $row4;
 }

 while($row5 = $result5->fetch_assoc()){
    $json5[] = $row5;
 }
 
 //print_r($json);


require_once('partials/header.php');


?>
<br>
<br>
<header class="navbar float-right">


<a class="" href="index.php"><button class="btn btn-warning">Go Back</button></a>
</header>
<br>
<br>

<div class="container">
<h1>Choose Label & Data to show chart in Comparison:</h1>
<hr>
    <div class="row">

                   <!--  <div class="col-md-4"> -->
                    
                        <!-- </div> -->
    </div>
</div>



<div class="container">
<div class="row">
    <div class="col-md-4">


                            <!-- School "> -->

                             <div class="form-group">
                            <select class="form-control" name="school" id="school">                             
                                <option selected value="all">All School </option>
                        <?php    foreach($json2 as $wtf){ ?>
                                    
                                    <option value="<?=$wtf['school']?>"><?=$wtf['school']?></option>
                                    
                                    
                                   
                          <?php  }
                             ?>   
                                
                            </select>
                        </div>




                        <!-- Department -->

                    <!-- <div class="col-md-4"> -->
                        <div class="form-group">
                            <select class="form-control" name="department" id="department">                             
                                <option selected value="all"> All Department </option>
                        <?php    foreach($json3 as $wtf){ ?>
                                    
                                    <option value="<?=$wtf['department']?>"><?=$wtf['department']?></option>
                                    
                                    
                                   
                          <?php  }
                             ?>   
                                
                            </select>
                        </div>
                    <!-- </div> -->
                        <!-- <div class="col-md-4"> -->




                         <!-- Year -->

                    <!-- <div class="col-md-4"> -->
                        <div class="form-group">
                            <select class="form-control" name="year" id="year">                             
                                <option selected value="all">All Year </option>
                        <?php    foreach($json as $wtf){ ?>
                                    
                                    <option value="<?=$wtf['year']?>"><?=$wtf['year']?></option>
                                    
                                    
                                   
                          <?php  }
                             ?>   
                                
                            </select>
                        </div>
                    <!-- </div> -->
                        <!-- <div class="col-md-4"> -->




                            <!-- Semester -->

                         <div class="form-group">
                            <select class="form-control" name="semester" id="semester">                             
                                <option selected value="all">All Semester</option>
                        <?php    foreach($json4 as $wtf){ ?>
                                    
                                    <option value="<?=$wtf['semester']?>"><?=$wtf['semester']?></option>
                                    
                                    
                                   
                          <?php  }
                             ?>   
                                
                            </select>
                        </div>




                        <!-- Major -->

                         <div class="form-group">
                            <select class="form-control" name="major" id="major">                             
                                <option selected value="all">All Major</option>
                        <?php    foreach($json5 as $wtf){ ?>
                                    
                                    <option value="<?=$wtf['major']?>"><?=$wtf['major']?></option>
                                    
                                    
                                   
                          <?php  }
                             ?>   
                                
                            </select>
                        </div>







    <!--                     <div class="form-group">
                        <select class="form-control" name="data" id="data">       
                            <option selected value="all">All</option>
                            <option value="school">School</option>           
                            <option value="department">Departments</option>
                            <option value="year">Year</option>
                            <option value="semester">Semester</option>
                            <option value="major">Major</option>
                            <option value="student">Students</option>
                            
                        </select>
                        </div> -->
<button id="chart_change" class="btn btn-warning">Change Chart</button>

    </div>
<div class="col-md-8 space">
    <div class="wraper">
    <h1 id="text-head">asdasdasfdfds</h1>
	<canvas id="myChart" width="400" height="400"></canvas>
    <button class="btn btn-warning" id="print">PRINT</button>   
    </div>
                         
</div>	

</div>

</div>

</body>

</html>
