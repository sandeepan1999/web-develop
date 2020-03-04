<?php
$servername = "localhost";
$dbname = "register";

//create connection
$conn = mysqli_connect($servername, "root","",$dbname);
//check connection
if(mysqli_connect_errno())
{
    die("connection failed : ". mysqli_connect_error());
    exit();
}
    extract($_POST);
    /*if(isset($_POST['submit']))
    {
        $terms = $_POST['rem'];
        $t1 ="";
        foreach($terms as $t)
        {
            $t1.= $t."";
        }
    }*/
    $sql = "SELECT * FROM logdb WHERE email='$mailid' AND password = '$pass' ";

    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);


   if($count >= 1)
    {
        $row = mysqli_fetch_row($res);
        $name = $row[0];
        session_start();
        $_SESSION['Sname'] = $name;
       echo $_SESSION['status'] . "Session status : Login successful";

        if(isset($_POST['rem']))
        {
            setcookie("email", $mailid, time()+60*60*24);
            setcookie("password", $pass, time()+60*60*24);
        }

        else{
            setcookie("email","",time()-5);
            setcookie("password","",time()-5);
        }
        header("location:main.php");
    }
    else{
       /* unset($_SESSION['Sname']);
        unset($_SESSION['status']);
        echo "Login Failed!!!";
        header("location:login.php");*/
       session_start();
        if(isset($_SESSION['Sname'])){
            unset($_SESSION['Sname']);
        }
    }
mysqli_close($conn);
    ?>
