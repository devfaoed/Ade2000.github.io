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
        <title>dashboard</title>
    </head>
    
    <body>
        <div class="col-md-2">
            <div class="dip">
                <br><br><br><br>
                <h3><a href="http://freebooks.com" class="liy">Read Online</a></h3>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="result">
                <br><br><br>
                <h3><a href="#" class="li">Result Management</a></h3>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="contact">
                <br><br>
                <h3><a href="#" class="liy">Contact Management</a></h3>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="message">
                <br><br><br><br>
                <h3><a href="messages.php" class="liy">Messages</a></h3>
            </div>
            <br>
        </div>
        
        <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title"><span class="glyphicon glyphicon-calendar"></span><b>Classes Today: Tue-04-DEC-2021</b></p>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Unit Code</th>
                            <th>Starts</th>
                            <th>Ends</th>
                            <th>Venue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EDU 200</td>
                            <td>08:00:00am</td>
                            <td>10:00:00am</td>
                            <td>ETF</td>
                        </tr>
                        <tr>
                            <td>CSC 101</td>
                            <td>10:00:00am</td>
                            <td>12:00:00pm</td>
                            <td>BOT</td>
                        </tr>
                        <tr>
                            <td>CSC 400</td>
                            <td>12:00:00pm</td>
                            <td>02:00:00pm</td>
                            <td>BUT</td>
                        </tr>
                        <tr>
                            <td>EDU 300</td>
                            <td>08:00:00am</td>
                            <td>12:00:00pm</td>
                            <td>1200 sitters</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>