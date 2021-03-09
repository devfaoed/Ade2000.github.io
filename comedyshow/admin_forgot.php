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
        <title>admin_reset password</title>
    </head>
    
    <body>
    
 
        
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
             <h3>Admin Update Page for Username & Psssword</h3>
             <br> 
                <p><b>Provide your email address in order to reset your username and password</b></p>
                      <div class="row">
                          <div class="col-md-4">
                    <?php 
                            
                            $up = "SELECT * FROM admin";
                            $ty = mysqli_query($connect, $up);
                              
                            while($tr = mysqli_fetch_assoc($ty)){
                                $id = $tr["id"];
                                $name = $tr["name"];
                                $email = $tr["email"];
                                $image = $tr["image"];
                                $username = $tr["username"];
                                $password = $tr["password"];
                        }
                              
                            if(isset($_POST["submit"])){
                                $email = stripslashes($_POST["email"]);
                                $username = stripslashes($_POST["username"]);
                                $password = stripslashes($_POST["password"]);
                                $date = date("Y-m-d H:i:s");
                              
                                $email = mysqli_real_escape_string($connect, $email);
                                $username = mysqli_real_escape_string($connect, $username);
                                $password = mysqli_real_escape_string($connect, $password);
                                
                                $query = "UPDATE `admin` SET username = '$username', password = '".md5($password)."' WHERE email = '$email' ";
                                
                                $pass = mysqli_query($connect, $query);
                                if(!$pass){
                                    die("wrong email address, so unable to update password".mysqli_error($connect));
                                }
                                else{
                                    echo "username and password updated successfully";
                                }
                            
                                    }
                            ?>
                            
                           
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                                        
                                 <div class="form-group">
                                    <label for="email" class="text">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="username" class="text">New Username</label>
                                    <input type="text" name="username" id="password" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="text">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="Update Password" class="btn btn-primary btn-block btn-lg">
                                </div>    
                                
                                <p class="text"><a href="admin_login.php">Admin login</a></p>
                                    
                            </form>
                            </div> 
                        </div>
        </div>
                        
                   
           
    
        
        
        
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>