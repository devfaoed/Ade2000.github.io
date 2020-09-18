
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Covid_19</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div style="margin: 20px; padding: 10px;">
        <img src="images/images%20(36).jpeg" alt="images" title="covid_19 image 2">
    </div>
       <?php 
        
    require ("database.php");
    session_start();
        
            if(isset($_POST["username"]))    {
            $username = stripslashes($_REQUEST["username"]);
            $password = stripslashes($_REQUEST["password"]);
            
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            
            $query = "SELECT * FROM `user` WHERE username = '$username' and password = '".md5($password)."'";
            $success = mysqli_query($connection, $query) or die(mysqli_error());
            
            $complete = mysqli_num_rows($success);
                
            if($complete == 1){
                $_SESSION["username"] = $username;
                header("Location: count.php");
            }else{
               echo "
                <div class='col-md-4'>
                <h2>Wrong username or password</h2><br />
                click here to <a href='login.php'>login</a>
                </div> 
               "; 
            }
        }
        else 
        {
            
          ?>
    <div class="container" style="margin-right: -350px; margin-top: -400px;">
        <h2>Welcome Back TO <br> The People's Voice Platform </h2>
        <p> Login here to access the platform</p>
        
        <div class="col-md-4">
                  
            <form action="" method="post">
                <div class="form-group">
                    <input name="username" type="text" placeholder="enter username" class="form-control">
                </div>
                
                 <div class="form-group">
                    <input name="password" type="password" placeholder="enter password" class="form-control">
                </div>
                
                 <div class="form-group">
                    <input name="submit" type="submit" value="LOGIN" class="btn btn-secondary">
                </div>
            </form>
            
            <div> Don't have an account? <a href="signup.php">Sign Up here </a></div>
        </div>
    </div>
    <?php  } ?>
</body>
</html>