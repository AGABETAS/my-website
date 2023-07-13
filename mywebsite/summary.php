<?php
include 'conn.php';
?>
<html>


 <title> Records of Booked Flights</title>
<style type="text/css">
body {
	margin-left: 5cm;
	margin-top: 2cm;
	margin-right: 5cm;
	margin-bottom: 2cm;
}
</style>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body  >
<br /><br /><br />
<center>

<div class="container">
 <div class="row">
  <div class="col-md-12">
  <fieldset style="width:500px">
  <h2 align="center"><u>RECEIVED SUMMARY</u></h2>
  <hr style="color:black; border-up-style:double;"/>
     <table align="center" class="table table border"> 
	 <thead>
	<tr>
    
   
	 <th></th><th></th>
	 <th>NAME</th>
	 <th></th><th></th>
	 <th>PHONE</th>
	 <th></th><th></th>
     <th>SERVICE</th>
	 <th></th><th></th>
	 
	 </tr>
	 </thead>
	 <link rel="stylesheet" type="text/css" href="print.css" media="print"> 
	 <tbody>
	 <?php
	 $sn=1;
	 $customer_qry="select * from customer";
	 $customer_res=mysqli_query($db1,$customer_qry);
	 
	 while($customer_data=mysqli_fetch_assoc($customer_res))
	 {
     ?>
	<tr>
     
	 <td> </td>	 <td> </td>
	 <td><?php echo $customer_data['first_name']; ?></td>
	 <td> </td>	 <td> </td>
	 <td><?php echo $customer_data['phone_no']; ?></td>
     <td> </td>	 <td> </td>
	 <td><?php echo $customer_data['service']; ?></td>
	 
	 </tr>
	 
		<?php
		$sn++;
		}
		?> 
	 <tbody>
	 </table>
	 <br><br>
	 <center><label>
     </label> Date:  <?php echo date ('D') ?> <?php echo date ('d') ?> <?php echo date ('M') ?> <?php echo date('Y') ?> </p></center>
	 <div class="text-center">
	 </div> </br>
	 <center><button onClick="window.print();" id="print-btn" style="color:white;background-color: green;">Print</button></center>
     </fieldset>
     <br />
   <a href="admin_login.php"><i class="fa fa-home" aria-hidden="true"></i><em style="color:green" > Click To Go Back</em></a>
     
  </div>
 </div>
</div>
</center>
</body>
</html>
