<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		table,th{
			padding: 10px;
			border: 1px solid black;
		}
	</style>
<script>
            function validate()
            {
                var x = document.mylogin.mailid.value;
                var y = document.mylogin.pass.value;
                if(y=="" || y==null)
                {
                    alert("Input password");
                    return false;
                }else if(x == "" || x == null)
                {
                    alert("Input username");
                }
                return true;
            }
 </script>         
</head>

<body>
<form name = "mylogin" method="POST" action="cookie.php" onsubmit="return validate()">
	<center>
	<table>
	<tr><td>Your mail Please:</td></tr>
	<td><input id ="mail" type="email" name="mailid"  value ="<?php echo Cookie_val(1)?>"><br></td></tr>

	<tr>
	<td><label for="pass">Password:</label><br></td>
	<td><input id="pass" type="password" name="pass" value = "<?php echo Cookie_val(2)?>"/>
		<br>
	</td>
	</tr>
	<tr><td>  <input type="checkbox" name="rem[]" value = "1"/>
                    <label>Remember me</label>
              </td></tr>
	<tr><td><button type="submit">Submit</button></td></tr>
	<tr>
		<td><br></td>
		<td><center>Forgot Password ?<br>
			<a href= "www.change.com">change</a>
		</center> </td></tr>
		
	</table>
</center>

</form>
</body>
<?php
              function Cookie_val($ch)
              {
                  if($ch == 1)
                  {
                      if(isset($_COOKIE['maild']))
                      {
                          return $_COOKIE['mailid'];
                      }else{
                          return;
                      }
                    }
                else{
                      if(isset($_COOKIE['pass'])){
                          return $_COOKIE['pass'];
                       }
                       else{
                              return;
                          }
                      }
                  
              }
              ?>
</html>