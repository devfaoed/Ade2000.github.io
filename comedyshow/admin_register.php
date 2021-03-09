<?php 

include "connection.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="enter.css">
        <title>Ademin Register</title>
    </head>
    
    <body>
    
    <!--    
        
         <div class="container-fluid">
            <div class="navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">ComedyShow</a>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav nav navbar-right">
                        <li><a href="news.php">NEWS</a></li>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="#">SIGN IN</a></li>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="admin.php">ADMIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
     --->   
        
          <h2 class="text-center">Admin should create account here</h2>
            <br>
        
        <div class="container con">
                      <div class="row">
                          <div class="col-md-5">
                    <?php 
                            if(isset($_POST["submit"])){
                                $name = stripslashes($_POST["name"]);
                                $email = stripslashes($_POST["email"]);
                                $image = stripslashes($_POST["file"]);
                                $username = stripslashes($_POST["username"]);
                                $password = stripslashes($_POST["password"]);
                                $date = date("Y-m-d H:i:sla");
                                
                                $name = mysqli_real_escape_string($connect, $name);
                                $email = mysqli_real_escape_string($connect, $email);
                                $image = mysqli_real_escape_string($connect, $image);
                                $username = mysqli_real_escape_string($connect, $username);
                                $password = mysqli_real_escape_string($connect, $password);
                                
                                $query = "INSERT INTO `admin`(name, email, image, username, password, date) VALUES('$name', '$email', '$image', '$username', '".md5($password)."', '$date')";
                                
                                $pass = mysqli_query($connect, $query);
                                if(!$pass){
                                    die("unable to account".mysqli_error($connect));
                                }
                                else{
                                    echo "account created successfully";
                                }
                            }
                            
                            ?>
                              
                              <?php 
                              $image_des = "media/images/";
                              $image_tar = $image_des . basename($_FILES["file"]["name"]);
                              $success = 1;
                              $pathinfo = strtolower(pathinfo($image_tar, PATHINFO_EXTENSION));
                              
                              if($success == 0){
                                  echo "error in uploading image";
                              }
                              else{
                                  if(move_uploaded_file($_FILES["file"]["temp_name"], $image_tar)){
                                      echo "image uploaded successfully";
                                  }
                                  else{
                                      die("image not uploaded bsuccessfully");
                                  }
                                }
                              ?>
                              
                            <form method="post" action="admin_register.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name <span class="star">*</span>:</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email <span class="star">*</span>:</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="image">Image <span class="star">*</span>:</label>
                                    <input type="file" name="file" id="file">
                                </div>
                                
                                 <div class="form-group">
                                    <label for="username">Username <span class="star">*</span>:</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Password <span class="star">*</span>:</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="Create Account" class="btn btn-primary btn-block">
                                </div>                                      
                            </form>
                            </div> 
                        
                        </div>
              <a href="admin_login.php"><p>Already a member</p></a>
           
        </div>
                        
                   
           
    
        
        
        
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>