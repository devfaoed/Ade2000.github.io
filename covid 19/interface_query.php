<?php 
include "database.php";
include "session.php";


function inter(){
    global $connection;
    
$query = "SELECT * FROM post";
$comt = mysqli_query($connection, $query);
if(!$comt){
    die("error" . mysqli_error($connection));
}

while($top = mysqli_fetch_assoc($comt)){
    $title = $top["title"];
    $date = $top["date"];
    $intro = $top["introduction"];
    $pre = $top["prevention"];
    $vita = $top["vitamin"];
    $nut = $top["nutrion"];
?>    
<p><?php echo $title; ?></p>
<p><?php echo $date; ?></p>
<p><?php echo $intro; ?></p>
<p><?php echo $pre; ?></p>
<p><?php echo $vita; ?></p>
<p><?php echo $nut; ?></p>



<?php 
    
}
}


?>
