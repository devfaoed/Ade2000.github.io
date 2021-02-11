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
                <div class="col-md-4">
                    <h2>Create Account</h2>
                    <?php if(isset($_POST["submit"])){
                            $username = stripslashes($_POST["username"]);
                            $password = stripslashes($_POST["password"]);
                            $fullname = stripslashes($_POST["fullname"]);
                            $parentname = stripslashes($_POST["parentname"]);
                            $level = stripslashes($_POST["level"]);
                            $date_of_birth = stripslashes($_POST["date_of_birth"]);
                            $email = stripslashes($_POST["email"]);
                            $nationality = stripslashes($_POST["nationality"]);
                            $date = date("Y-m-d H:i:s");
                              
                            $username = mysqli_real_escape_string($connection, $username);
                            $password = mysqli_real_escape_string($connection, $password);
                            $fullname = mysqli_real_escape_string($connection, $fullname);
                            $parentname = mysqli_real_escape_string($connection, $parentname);
                            $level = mysqli_real_escape_string($connection, $level);
                            $date_of_birth = mysqli_real_escape_string($connection, $date_of_birth);
                            $email = mysqli_real_escape_string($connection, $email);
                            $nationality = mysqli_real_escape_string($connection, $nationality);
                    
                            $query = "INSERT INTO `register`(username, password, fullname, parentname, level, date_of_birth, email, nationality, reg_date) VALUES('$username', '".md5($password)."', '$fullname', '$parentname', '$level', '$date_of_birth', '$email', '$nationality', '$date')";                               
                            $pass = mysqli_query($connection, $query);
                                if(!$pass){
                                    die("unable to create account".mysqli_error($connection));
                                }
                                else{
                                    echo "account created successfully";
                                    header("Location: index.php");
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
                                    <label for="parentname">Parent name</label>
                                    <input type="text" name="parentname" id="parentname" class="form-control">
                                </div>
                 
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <input type="text" name="level" id="level" class="form-control">
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
                                    <label for="nationality">Nationality</label>
                                    <input type="text" name="nationality" id="nationality" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="submit" value="REGISTER" class="btn btn-primary btn-block btn-lg">
                                </div>
                                  <p class="text"><a href="login.php">Already create account</a></p>   
                            </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>