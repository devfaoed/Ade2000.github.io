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
        <title>Hompage</title>
    </head>
    
    <body>
        <div class="navbar navbar-default">
            <div class="container">
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
                        <li class="active"><a href="index.php">LOGIN</a></li>
                        <li><a href="admin_login.php">ADMIN</a></li>
                        <li><a href="logout.php" >LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="jumbotron squad">
            <p class="text-center"> Comedyshow the best place to download your comedy series, video, skits & promote your talent</p>
        </div>
        
        <article>
            <marquee>Checkout our lastest comedy movies below and give us feed back</marquee>
        </article>
        <br>
        <div class="container-fluid">
            <img src="media/images/comedy.jpg" alt="logo" class="logo" title="logo">
        </div>
        <br>
        
            <div class="container-fluid">
            <div class="row">    
        <?php 
              
                
                
                        $query = "SELECT * FROM `video` ORDER BY id DESC";
                        $pass = mysqli_query($connect, $query);
                    
                    while($faith = mysqli_fetch_assoc($pass)){
                        $id = $faith["id"];
                        $comedy_video = $faith["comedy_video"];
                        $comedian = $faith["comedian"];
                        $date = $faith["date"];
             
                    ?>
        
        
                <div class="col-md-3">
                     <video src="media/video/comedy/<?php echo $comedy_video; ?>" controls class="video"></video><br><br>
                </div>
            
                        <?php } ?>
                
           </div>
        </div>
                
           
    
    <script type="text/javascript" src="enter.js"></script>
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>