<?php 

require ("database.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Covid_19 count</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-md-8">
            <h1>
                CORONA VIRUS:
                <small>Nigeria's Case Update <br>AUG. 24 2020</small>
            </h1>
          
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>State</th>
                            <th>New Cases</th>
                            <th>Total Cases</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                     
                        <?php 
            $query = "select * from info";
            $complete = mysqli_query($connection, $query);
            if(!$complete){
                die("unable to complete request". mysqli_error($connection));
            }
            
                while($react = mysqli_fetch_assoc($complete)){
                 $id = $react["id"];
                 $state = $react["State"];
                 $new = $react["New"];
                 $total = $react["Cases"];
                    
                    echo "
                    <tr>
                    <td>$id</td>
                    <td>$state</td>
                    <td>$new</td>
                    <td>$total</td>
                    </tr>
                    ";
                    
                    }
                 ?>
                 
                 
               </tbody> 
                </table>
            </div>
            
            
            <div class="col-md-3">
              
               <?php
                $query = "SELECT * FROM `rround up`";
                $request = mysqli_query($connection, $query);
                if(!$request){
                    die("cant proceed with the request" . mysqli_error($connection));
                }
                
                while($faith = mysqli_fetch_assoc($request)){
                    $confirm = $faith["Confirmed"];
                    $discharge = $faith["Discharge"];
                    $death = $faith["Death"];
                    $test = $faith["Tested"]; 
                    }
                ?>
                   
                <h4>TOTAL CONFIRMED CASES:
                    <p class="btn btn-primary"><?php echo $confirm;  ?></p>
                </h4>
                
                    
                <h4>TOTAL DISCHARGED CASES:
                    <p class="btn btn-warning"><?php echo $discharge;  ?></p>
                </h4>
                
                 <h4>TOTAL DEATH CASES:
                    <p class="btn btn-danger"><?php echo $death;  ?></p>
                </h4>
                   
                <h4>SAMPLES TESTED:
                    <p class="btn btn-info"><?php echo $test;  ?></p>
                </h4>
               
          
                
                
            </div>
        </div>
    </div>
</body>
</html>