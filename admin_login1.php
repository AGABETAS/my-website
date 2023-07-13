<?php
    $host="localhost";
    $user="root";
	$password="";
	$dbname="maina_db";

	
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       
       
		$user_id=$_POST['user_id'];
		$id_no=$_POST['id_no'];
		$tel_no=$_POST['tel_no'];
		//$role=$_POST['role'];
		$password=$_POST['password'];
		
		
		

		$password=sha1($password);
	
               
		$sql="INSERT INTO users(user_id, id_no, tel_no, password)
	    VALUES('$user_id', '$id_no', '$tel_no', '$password')";

if ($conn->query($sql) === TRUE) {

	//header("location:login1.php");
	//echo "sucessful created an account";
	header('location: account2.php');
	echo"<script>alert('you have successfully booked!'); window.location ='homepage.php'</script>";
	
} else {

	echo "you have not created an account";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>