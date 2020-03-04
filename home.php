<html>
<title>Home</title>

<header>


<head>
  <img class="icon" src="C:\Users\Sandeepan Paul\Desktop\web proj\icon.png" alt="">
  <h1>Topcutoff.com</h1>

  <nav class="navbar">
    <a href="file:///C:/Users/Sandeepan%20Paul/Desktop/web%20proj/login.html">Login</a> |
    <a href="file:///C:/Users/Sandeepan%20Paul/Desktop/web%20proj/register.html">Register </a></a>|
    <a href="file:///C:/Users/Sandeepan%20Paul/Desktop/web%20proj/aboutus.html">About Us</a> |
    <a href="file:///C:/Users/Sandeepan%20Paul/Desktop/web%20proj/contact.html">Contact</a>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Gelasio|Josefin+Sans&display=swap" rel="stylesheet">
  </nav>
</head>
</header>
<body>
<div class="top-container">


  <h2>Hello!</h2>
  <p>Just finished school exams and looking to get into SRM?</p>
  <p>Here is the cutoff:</p>
  </div>
  <div class="middle-container">
  <h2><u>Kattankulathur:</u></h2>
<br>
  <table>
    <tr>
      <th>S.No</th>
      <th>Course</th>
      <th>Closing rank</th>
    </tr>
    <tr>
      <td>1.</td>
      <td>Civil Engineering</td>
      <td>7000</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Computer Science and Engineering</td>
      <td>6500</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Electrical and Electronics Engineering</td>
      <td>7000</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Electronics and Communication Engineering</td>
      <td>7000</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Information Technology</td>
      <td>6500</td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Mechanical Engineering</td>
      <td>6000</td>
    </tr>

  </table>
    </div>
    <div class="table2">
      <h2><u>Ramapuram:</u></h2>
    <br>
      <table>
        <tr>
          <th>S.No</th>
          <th>Course</th>
          <th>Closing rank</th>
        </tr>
        <tr>
          <td>1.</td>
          <td>Civil Engineering</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Computer Science and Engineering</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Electrical and Electronics Engineering</td>
          <td>11000</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Electronics and Communication Engineering</td>
          <td>14000</td>
        </tr>
        <tr>
          <td>5.</td>
          <td>Information Technology</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>6.</td>
          <td>Mechanical Engineering</td>
          <td>12000</td>
        </tr>

      </table>
    </div>
    <div class="table3">
      <h2><u>Vadalapani:</u></h2>
    <br>
      <table>
        <tr>
          <th>S.No</th>
          <th>Course</th>
          <th>Closing rank</th>
        </tr>
        <tr>
          <td>1.</td>
          <td>Civil Engineering</td>
          <td>20000</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Computer Science and Engineering</td>
          <td>20000</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Electrical and Electronics Engineering</td>
          <td>25000</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Electronics and Communication Engineering</td>
          <td>30000</td>
        </tr>
        <tr>
          <td>5.</td>
          <td>Information Technology</td>
          <td>30000</td>
        </tr>
        <tr>
          <td>6.</td>
          <td>Mechanical Engineering</td>
          <td>22000</td>
        </tr>

      </table>
    </div>
    <div class="bottom-container">
      <footer>
        
        <?php session_start(); ?>
        <nav class="section">
           <a href="aboutus.html">
        	About us
           </a> | <a href="projects.html"> Projects</a>
         <?php
        		                     if (isset($_SESSION['Sname'])){
                                        echo "Welcome, ".$_SESSION['Sname']."!";
        			            ?> <a href = "main.php">logout</a>
                        <?php } else { ?>
                                <a href = "login.php"> Login</a>
                                <a href = "registration.html"> Register</a>
                                <?php }
                               if(isset($_SESSION['Sname'])){
                                 unset($_SESSION['Sname']);
                            } ?>
        </nav>



        © Sandeepan Paul 2020</footer>
    </div>

</body>
</html>
