<html>
    <head>
        <title>Registeration</title>
    </head>
    <body>
        <?php
         extract($_POST);
         $mysqli = new mysqli('localhost', "root","",'dbconnect');
         if($mysqli->connect_errno > 0)
                {
                     die('Unable to connect to database [' . $dbconnect->connect_error . ']');
                }
                $query = "INSERT INTO db (name,email,password,zip,phone,gender,country,address)VALUES ('$Name','$EMail','$Pass','$Zip','$Tel','$GenM','$GenF','$Country','$Add')";
                $insert_row = $mysqli->query($query);


         ?>
         </body>
         </html>
