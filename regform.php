<?php
$servername = "localhost";
$dbname = "myDB";

//create connection
$conn = new mysqli($servername, "root","",$dbname);
//check connection
if($conn->connect_error)
{
    die("connection failed : ".$conn->connect_error);
}else{
    extract($_POST); 
    if(isset($_POST['submit']))
    {
        $terms = $_POST['terms1'];
        $t1 ="";
        foreach($terms as $t)
        {
            $t1.= $t.",";
        }
    }
    $sql = "INSERT INTO regform(Name,Phone,Street,City,Country,Gender,DOB,Nationality,Password,RetypePass,Email,retype_email,terms)VALUES('$nm','$phone','$strt','$city','$opt','$gen','$dt','$nat','$pass','$rpass','$email','$reml','$t1')";
    if($conn->query($sql) == TRUE)
    {
        header('Location:login.php');
        exit();
    }else{
        header("Location : register.php?msg=failed");
        exit();
    }
}
$conn->close();
?>