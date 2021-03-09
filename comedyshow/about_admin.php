<?php 

include "connection.php";
include "admin.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="enter.css">
        <title>Admin</title>
    </head>
    
    <body id="admin">
        
        <div class="container">
            <div class="row">
                  <?php 
        
        $query = "SELECT * FROM `admin`";
        $success = mysqli_query($connect, $query);
        if(!$success){
            die("error".mysqli_error($connect));
        }
        while($fetch = mysqli_fetch_assoc($success)){
            $id = $fetch["id"];
            $name = $fetch["name"];
            $email = $fetch["email"];
            $image = $fetch["image"];
        }
        ?>
            <div class="col-md-5">
                <h3 class="text-uppercase"> Name: <?php echo $name; ?></h3><br>
                <img src="media/images/<?php echo $image ?>" alt="admin_image" title="admin_image" class="img2" style=" width: 200px; border-radius: 10px;"> <br>
                <h3> Email: <?php echo $email; ?></h3>
            </div>
            
            </div>
        </div>
      
       
    
    
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>