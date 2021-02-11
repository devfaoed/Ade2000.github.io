<?php 

include "database.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="project.css">
        <title>Index</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                 <div class="col-md-5">
                     <h2>Sign In here</h2>
                    <?php 
                              session_start();
                            
                            if(isset($_POST["submit"])){
                                
                                $username = stripslashes($_POST["username"]);
                                $password = stripslashes($_POST["password"]);
                                $date = date("Y-m-d H:i:s");
                              
                                $username = mysqli_real_escape_string($connection, $username);
                                $password = mysqli_real_escape_string($connection, $password);
                                
                                $query = "SELECT * FROM `register` WHERE username = '$username' and password = '".md5($password)."'";                               
                                $pass = mysqli_query($connection, $query);
                                
                                $success = mysqli_num_rows($pass);
                                if($success == 1){
                                    $_session["submit"] = $submit;
                                    header("location: management.php");
                                }
                                else{
                                    die("wrong username or password");
                                }                                                                
                            }
                            else {
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
                                                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="sign In" class="btn btn-primary btn-block btn-lg">
                                </div>    
                                
                                <p class="text"><a href="register.php">Do not have account</a></p>
                                    
                            </form>
                              <?php } ?>
                            </div> 
            </div>
        </div>
        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>