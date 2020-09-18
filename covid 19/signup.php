<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Covid_19</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
   
    <div class="img-responsive" style="margin: 20px; padding: 10px; ">
    <img src="images/images%20(34).jpeg" alt="image" title="covid_19 image" height="650px" width="700px">
    </div>
   
    <div class="container"  style="margin-right: -320px; margin-top: -650px;">
      
       <h2 class="page-header">Welcome To <br> The People's Voice Platform</h2><br/>
        <p><b> Create your account here</b></p>
        
        <?php 
        
        require "database.php";
        
        if(isset($_REQUEST["username"])){
            $first = stripslashes($_REQUEST["first"]);
            $last = stripslashes($_REQUEST["last"]);
            $birth = stripslashes($_REQUEST["birth"]);
            $email = stripslashes($_REQUEST["email"]);
            $state = stripslashes($_REQUEST["state"]);
            $sex = stripslashes($_REQUEST["sex"]);
            $username = stripslashes($_REQUEST["username"]);
            $password = stripslashes($_REQUEST["password"]);
            $date = date("Y-m-d H:i:s");
                
            $first = mysqli_real_escape_string($connection, $first);
            $last = mysqli_real_escape_string($connection, $last);
            $birth = mysqli_real_escape_string($connection, $birth);
            $email = mysqli_real_escape_string($connection, $email);
            $state = mysqli_real_escape_string($connection, $state);
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            
            $query = "INSERT INTO `user` (first, last, birth, email, state, sex, username, password, date) VALUES('$first', '$last', '$birth', '$email', '$state', '$sex', '$username', '".md5($password)."', '$date')";
            $result = mysqli_query($connection, $query);
            if($result){
            echo "
                <div class='col-md-4'>
                    <h3>Account created successfully</h3>
                    click here to <a href='login.php'>Login</a>
                </div>
            ";
            }
            else{
                die("unable to creeate account". mysqli_error($connection));
            }
        }
        ?>
        
        <div class="col-md-7">
          
            <form action="signup.php" name="create" method="post">
                <div class="form-group">
                    <input name="first" type="text" placeholder="First Name" class="form-control">
                </div>
                
                <div class="form-group">
                    <input name="last" type="text" placeholder="Last Name" class="form-control">
                </div>
                            
                <div class="form-group">
                    <input name="birth" type="date" class="form-control">
                </div>
                
                <div class="form-group">
                    <input name="email" type="email" placeholder="Email Address" class="form-control">
                </div>
                
                <div class="form-group">
                    <select name="state" id="state of origin">
                        <option>Abuja</option>
                        <option>Adamawa</option>
                        <option>Anambra</option>
                        <option>Abia</option>
                        <option>Akwa-ibom</option>
                        <option>Bauchi</option>
                        <option>Imo</option>
                        <option>Enugu</option>
                        <option>Bayelsa</option>
                        <option>Ogun</option>
                        <option>Osun</option>
                        <option>Ekiti</option>
                        <option>Lagos</option>
                        <option>Oyo</option>
                        <option>Ondo</option>
                        <option>Kogi</option>
                        <option>Kwara</option>
                        <option>Kanu</option>
                        <option>Kastina</option>
                        <option>Kaduna</option>
                        <option>Benue</option>
                        <option>Borno</option>
                        <option>Cross River</option>
                        <option>Delta</option>
                        <option>Ebonyi</option>
                        <option>Gombe</option>
                        <option>Jigawa</option>
                        <option>Kebbi</option>
                        <option>Nasarawa</option>
                        <option>Niger</option>
                        <option>Plateau</option>
                        <option>Rivers</option>
                        <option>Sokoto</option>
                        <option>Taraba</option>
                        <option>Yobe</option>
                        <option>Zamfara</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <select name="sex" id="state of origin">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                
                <div class="form-group">
                <label for="username">Create Username</label>
                <input name="username" type="text" placeholder="username" class="form-control">
                </div>
                
                <div class="form-group">
                <label for="password">Create Password</label>
                <input name="password" type="password" placeholder="password" class="form-control">
                </div>
                            
                <div class="form-group">
                    <input name="submit" type="submit" value="CREATE ACCOUNT" class="btn btn-primary">
                </div>
            </form>
        </div>
        </div>
</body>
</html>