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
        
        <div class="col-md-5 reg">
            <div class="col-md-10 rew">
                <h2 class="ht"><a href="#">SIMS</a></h2>
                <h1 id="ht">Sign up for your free account</h1>
                <p class="head">
                    “We deal with students’ data, information which comes with serious privacy requirements. We wouldn’t be able to do what we do without Pusher.”
                </p>
            </div>
        </div>
    
        <div class="col-md-offset-7 wq">
            <h2>Sign up to SIMS</h2>   
            <p><a href="login.php" class="btn btn-primary btn-lg">Already a member Log In here</a>
            </p>
            <br>
            <p class="tew"><b>OR</b></p>
            
            <div class="col-md-8 im">
                 <?php if(isset($_POST["submit"])){
                            $username = stripslashes($_POST["username"]);
                            $password = stripslashes($_POST["password"]);
                            $fullname = stripslashes($_POST["fullname"]);
                            $date_of_birth = stripslashes($_POST["date_of_birth"]);
                            $email = stripslashes($_POST["email"]);
                            $date = date("Y-m-d H:i:s");
                              
                            $username = mysqli_real_escape_string($connection, $username);
                            $password = mysqli_real_escape_string($connection, $password);
                            $fullname = mysqli_real_escape_string($connection, $fullname);
                            $date_of_birth = mysqli_real_escape_string($connection, $date_of_birth);
                            $email = mysqli_real_escape_string($connection, $email);
    
                            $query = "INSERT INTO `register`(username, password, fullname,  date_of_birth, email, date) VALUES('$username', '".md5($password)."', '$fullname', '$date_of_birth', '$email', '$date')";                               
                            $pass = mysqli_query($connection, $query);
                                if(!$pass){
                                    die("unable to create account".mysqli_error($connection));
                                }
                                else{
                                    echo "account created successfully";
                                    header("Location: login.php");
                                    }
                                }
                            else{
                                
                        ?>
                    
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">                   
                                 <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" >Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="date_of_birth">date_of_birth</label>
                                    <input type="date" name="date_of_birth" id="password" class="form-control">
                                </div>
                                    
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="submit" value="REGISTER" class="btn btn-primary btn-block btn-lg">
                                </div>
                            </form>
                    <?php } ?>
            </div>
            
        </div>
        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html