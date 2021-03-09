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
        <title>Contact</title>
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
        
          <h2>Contact Us</h2>
            <br>
        <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h2 class="panel-title"><b>FOR ADVERT PLACEMENT <a href="#">Click here</a></b></h2>
                        </div>
                        
                        <div class="panel-body">
                        <p> &nbsp; &nbsp; &nbsp; &nbsp; Suggestion, feedback or question regarding this site, is always welcome. Please fill out this form. We value all ComedyShow users and we will try to get in touch with you asap.</p>
                            
                        <p> &nbsp; &nbsp; &nbsp; &nbsp; Please be detailed and specific if you are asking a  question, so we can reply to you with the most useful answer to your problem or question.</p>
                            
                            <?php 
                            
                            if(isset($_POST["submit"])){
                                $name = stripslashes($_POST["name"]);
                                $email = stripslashes($_POST["email"]);
                                $message = stripslashes($_POST["message"]);
                                $date = date("Y-m-d H:i:sla");
                                
                                $name = mysqli_real_escape_string($connect, $name);
                                $email = mysqli_real_escape_string($connect, $email);
                                $message = mysqli_real_escape_string($connect, $message);
                                
                                $query = "INSERT INTO `contact`(Name, Email, Message, Date) VALUES('$name', '$email', '$message', '$date')";
                                $pass = mysqli_query($connect, $query);
                                if(!$pass){
                                    die("unable to add comment to the database".mysqli_error($connect));
                                }
                                else{
                                    echo "comment added successfully";
                                }
                            }
                            
                            
                            
                            ?>
                            
                            <div class="col-md-5">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                <div class="form-group">
                                    <label for="name">Name <span class="star">*</span>:</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email <span class="star">*</span>:</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                 <div class="form-group">
                                    <label for="message">Your message <span class="star">*</span>:</label>
                                    <textarea class="form-control" cols="4" rows="10" name="message" id="message"></textarea>
                                </div>
                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="Send Message" class="btn btn-primary btn-block">
                                </div>                                    
                                    
                            </form>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
        
        
        
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>