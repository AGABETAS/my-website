<?php 
session_start();
define("alert", "Wrong Password Try Again!", true);

if (isset($_POST['login']))
{
	$db=mysqli_connect("localhost", "root", "", "maina_db");
$user_id = $_POST['user_id'];
$password =$_POST['password'];
$password=sha1($password);

$sql = "SELECT * FROM users WHERE user_id = '$user_id' AND password='$password'" ;
$result = mysqli_query($db, $sql);
$num = mysqli_num_rows($result);
if(mysqli_num_rows($result) ==1 )
	{
$_SESSION['message']="you are loged in";
$_SESSION['user_id']=$user_id;
header("location:summary.php");//redirects to home page.
echo "welcome";
   }


else{
  echo alert;
 // alert_fade_out =2.0 seconds;
//	echo "<h4><i><b> Wrong Password/Username Combination, Try Again </b></i></h4>";
	
}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin login</title>
<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>


<body>
	

	<br />
    <br />
    <br />
   




<form class="float_form" style="padding-left: 500px" action="admin_login.php" method="POST">
<fieldset style="width:100px">
	<legend>Login Details:-</legend>
  <strong>Username:</strong><br  />
<td class="fix_table"><input type="text" name="user_id"  placeholder="Username" /required></td><br /> <br /> 
  <br /> <br /> 
  

  <strong>password:</strong><br />
  <input type="password" name="password" id="textfield2" /required>
  <br /> <br /> 

	<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>


<input type="submit" name="login" value="Login">
</fieldset>

<br />
<a href="account.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
<br />
<a href="homepage.php"><i class="fa fa-user-plus" aria-hidden="true"></i>  Click To Go Back</a>

</form>

</body>

</center>
</html>