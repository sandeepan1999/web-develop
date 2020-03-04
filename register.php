<html>
    <head>
        <title>Registeration</title>
    </head>
    <body>
        <?php
         extract($_POST);
         $mysqli = new mysqli('localhost', 'root',"",'register');
         if($mysqli->connect_errno > 0)
                {
                     die('Unable to connect to database [' . $register->connect_error . ']');
                }
                $query = "INSERT INTO regdb (name,email,password,phone,zip,gender,language,country,address)VALUES ('$Name','$EMail','$Pass','$Tel','$Zip','$GenM','$eng','$Country','$Add')";
                $insert_row = $mysqli->query($query);

         ?>
         </body>
         </html>
