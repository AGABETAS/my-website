<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>account</title>
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
<br><br /><br><br />
		
<form class="float_form" style="padding-left: 500px" action="admin_login1.php" method="POST">
<br /> 
<br /> 
<fieldset style="width:100px">
	<legend>Create New User Account:-</legend>

  <strong>User Name:</strong><br  />
  
   <input type="text" name="user_id" id="textfield1" / required>
  <br />
  <br /> 
  
  
   <strong>Phone number:</strong><br  />

  <input type="text" name="tel_no" id="textfield1" /required>
 <br /> 
 <br /> 
  
   <strong>password:</strong><br  />
    
  <br /> 

  <input type="password" name="password" id="textfield2" / required>
  <br />
  <br />  
  
</p>

<input type="submit" name="register" value="submit">

</fieldset>
<br />

<a href="admin_login.php"><i class="fa fa-user-plus" aria-hidden="true"></i> If you already have an account Click Here </a>
</form>

</body>


</html>