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
        <title>Login</title>
    </head>
    
    <body>
    
 
        
        
            <div class="navbar-default">
                <div class="container-fluid">
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
                        <li><a href="hompage.php">HOME</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="register.php">REGISTRATION</a></li>
                        <li><a href="index.php">LOGIN</a></li>
                        <li><a href="admin_login.php">ADMIN</a></li>
                        <li><a href="logout.php" >LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
  
        
         
           
        
        <div class="container">
             <h3 class="text">Log In</h3>
             <br> 
            <p>Come into the cabinet and keep enjoying numerius video</p>
             <br> 
                      <div class="row">
                          <div class="col-md-4">
                    <?php 
                              session_start();
                            
                            if(isset($_POST["submit"])){
                                
                                $email = stripslashes($_POST["email"]);
                                $password = stripslashes($_POST["password"]);
                                $date = date("Y-m-d H:i:s");
                              
                                $email = mysqli_real_escape_string($connect, $email);
                                $password = mysqli_real_escape_string($connect, $password);
                                
                                $query = "SELECT * FROM `users` WHERE email = '$email' and password = '".md5($password)."'";                               
                                $pass = mysqli_query($connect, $query);
                                
                                $success = mysqli_num_rows($pass);
                                if($success == 1){
                                    $_session["submit"] = $submit;
                                    header("location: hompage.php");
                                }
                                else{
                                    die("wrong username or password");
                                }                                                                
                            }
                            else {
                            ?>
                            
                           
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                                        
                                 <div class="form-group">
                                    <label for="email" class="text">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="text">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                
                                <p class="text"><a href="forgot.php">forgot password?</a></p><br>
                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="sign In" class="btn btn-primary btn-block btn-lg">
                                </div>    
                                
                                <p class="text"><a href="register.php">Do not have account</a></p>
                                    
                            </form>
                              <?php } ?>
                            </div> 
                        </div>
        </div>
                        
                   
           
    
        
        
        
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>