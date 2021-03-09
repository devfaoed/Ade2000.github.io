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
        <title>About post</title>
    </head>
    
    <body>
        
        <div class="container">
            <div class="row"> 
            <?php 
                
            if(isset($_GET["info"])){
                $article = $_GET["info"];
            
            
            $query = "SELECT * FROM `news` WHERE id = $article";
            $pass = mysqli_query($connect, $query);
            if(!$pass){
                die("error".mysqli_error($connect));
            }
            while($faith = mysqli_fetch_assoc($pass)){
                $id = $faith["id"];
                $title = $faith["title"];
                $authur = $faith["authur"];
                $date = $faith["date_time"];
                $image = $faith["image"];
                $article = $faith["article"];
            
            ?>
            <div class="col-md-7 text-justify">
                <p><b> <?php echo $title; ?> </b></p>
                <p><b> <?php echo $authur; ?> </b></p>
                <p><b> <?php echo $date; ?> </b></p>
                <p>
                    <img src="media/images/<?php echo $image ?>" style="height: 200px; width:300px;">
                </p>
                <p><?php echo $article; ?></p>
            </div>
                <?php }} ?>
        </div>
    </div>
        
    
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>