<?php 

include "database.php";
include "management.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="project.css">
        <title>Exam</title>
    </head>
    
    <body>
        
           
            <div class="col-md-9">
                <h2 class="text-center"> General Exam Timetable</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>8am - 10am</th>
                            <th>10am - 12pm</th>
                            <th>12pm - 2pm</th>
                        </tr>
                    </thead>
                    
                       <?php 
                    $query = "SELECT * FROM `exam`";
                    $success = mysqli_query($connection, $query);
                    if(!$success){
                        die("database selection error".mysqli_error($connection));
                    }
                    while($go = mysqli_fetch_assoc($success)){
                        $day	= $go["Day"];
                        $first	= $go["8am - 10am"];               
                        $second	= $go["10am - 12pm"];               
                        $third	= $go["12pm - 2pm"]; 
                    ?>
                    
                   
                    
                    <tbody>
                        <tr>
                            <td><?php echo $day; ?></td>
                            <td><?php echo $first; ?></td>
                            <td><?php echo $second; ?></td>
                            <td><?php echo $third; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
                </table>
                <?php ?>
            </div>
        
        <div class="col-md-9">
            
            <ul class="list-group">
                <h4 class="list-group-item text-center">EXAM CODE & CONDUCT</h4>
                <li class="list-group-item"><b>You must arrive at the scheduled exam venue early (at least 15 minutes) to be seated and ready to commence at this time.</b></li>
                <li class="list-group-item"><b>Late students will not be admitted to exam rooms after the first 30 minutes of writing time.</b></li>
                <li class="list-group-item"><b>All students may take pens, pencils, erasers and rulers into the examination room.</b></li>
                <li class="list-group-item"><b>Students may take unwrapped sweets into the exam room. Wrapped sweets create disturbance to other
                students and are not permitted. You may bring a wallet sized purse into the exam room. </b></li>
                <li class="list-group-item"><b>Mobile phones, smart watches and any other electronic devices (excluding calculators where permitted in
                your exam) are banned from all venues. Smart watches are also banned. Students
                found to be in possession of a mobile phone or smart device, including smart watches, will have a case of
                formal academic misconduct reported.</b></li>
                <li class="list-group-item"><b>You must listen carefully to, and comply with, the opening announcements, which will not be repeated. You
                must read all instructions on the examination paper and answer books. A copy of the answer book cover
                and instructions appears on the last page of this document. </b></li>
                <li class="list-group-item"><b>All students must cease writing immediately when instructed to do so and must remain seated and silent
                until all answer books and question papers have been collected and the instruction to leave the room has
                been given.</b></li>
            </ul>
        </div>
       
                

        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>