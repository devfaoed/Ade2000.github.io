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
                        <li><a href="index.php">HOME</a></li>
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
             <h3 class="text">LOG IN page for Admin</h3>
             <br> 
                  <div class="row">
                          <div class="col-md-4">
                    <?php 
                              session_start();
                              
                            
                            if(isset($_POST["submit"])){
                                
                                $username = stripslashes($_POST["username"]);
                                $password = stripslashes($_POST["password"]);
                              
                                $username = mysqli_real_escape_string($connect, $username);
                                $password = mysqli_real_escape_string($connect, $password);
                                
                                $query = "SELECT * FROM `admin` WHERE username = '$username' and password = '".md5($password)."'";
                                $pass = mysqli_query($connect, $query);
                
                                $through = mysqli_num_rows($pass);
                                if($through == 1){
                                    $_session["submit"] = $submit;
                                    header("location: admin.php");
                                }
                                else{
                                    die(" wrong username or password".mysqli_error($connect));
                                }
                                
                            }
                            else{
                            ?>
                            
                           
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                                        
                                 <div class="form-group">
                                    <label for="username" class="text">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="text">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                
                                <p class="text"><a href="admin_forgot.php">Forgot Password?</a></p><br>
                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="sign In" class="btn btn-primary btn-block btn-lg">
                                </div>   
                                
                                
                                    
                            </form>
                              <?php } ?>
                            </div> 
                        </div>
        </div>
                        
                   
           
    
        
        
        
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>