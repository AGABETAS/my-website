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
       
      
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$phone_no=$_POST['phone_no'];
		$service=$_POST['service'];
	
		
		
		

		$password=sha1($password);
	
               
		$sql="INSERT INTO customer( first_name, last_name,phone_no, service )
		 VALUES('$first_name', '$last_name','$phone_no','$service')";

if ($conn->query($sql) === TRUE) {
//$sql = "SELECT * FROM user WHERE Priviledges = 'Landlord' AND Passsword='password' AND Priviledges !='Landlord'" ;
	//header('location: login_rms.php');
	//echo "you are registered";
	header('location: customer2.php');
	echo"<script>alert('you have successfully submitted!'); window.location ='customer.php'</script>";
	
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>