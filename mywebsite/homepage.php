<?php
	session_start();
?>
<html>
<head>
		<title>Homepage</title>
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

			
	
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color:#ffffff;
}
.container{
    width: 85vmin;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 57%;
    left: 80%;
    overflow: hidden;
    border: 0px solid #ffffff;
    border-radius: 0px;
    box-shadow: 10px 25px 30px rgba(30,30,200,0.3);
}
.wrapper{
    width: 100%;
    display: flex;
    animation: slide 16s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
img{
    width: 100%;
}

	/* Dropdown Button */
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
    
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>

<body>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Log in</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="admin_login.php"><i class="fa fa-home" aria-hidden="true"></i><em style="color:red" > Admin Only</em></a>
    
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    
 <center>      
	<h2 id="title">JOBS SERVICES AVAILABLE 	</h2>	
     <br/> <br/>
</center>
		<div>
			<ul>
				<li><a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="about_us.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="conduct_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
                <li><a href="about_us.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Services Offerd</a></li>
                
		  </ul>
		</div>

<br/><br/>
 
     
<div style="margin-left:2%; pading:1px 16px; height:200px;">
    
  <h2 >Basic Info</h2>
 
<h4 style="color:green" >
  
   
   This website invites you as a client to view<br/>
 available services that we can offer to you<br/>
  at an affordable price and we work at a great<br/>
  efficient with no error work. we provide quality<br/>
   work, TRY it and see yourself.<br/>
    we feel great appriciateful for your convinience.<br/><br/>
       
  
</h4>

 <li><a href="about_us.php"><i class="fa fa-home" aria-hidden="true"></i><em style="color:blue" > Click here to view our services</em></a></li>


 </div>
  

<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<br/><br/>
<center>
<h4 style="background-color:#030337;">
<p style="color:white;">
<strong>
	
    <br/><br/>  
     
    Help center 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Conduct us	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Availability & accessbility.<br/><br/>
     
    Return policy	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Corporate & bulky purchases<br/><br/><br/><br/>
     
    Become our client<br/><br/><br/><br/>
    
    RJ company with partnership program &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Report if possible<br/><br/>
     
    Conduct & pic up point application<br/><br/>
    Terms & condition<br/><br/>
    
     </strong>
    </p>
  </h4> 
   
  <p>  
    <h2>CONDUCT US</h2>
    Postal address: <br/>
    P.O BOX 1699-50200  <br/>
    BUNGOMA - KENYA <br/>
    Location : Bungoma <br/>
    Country: Kenya <br/>
    Telephone Number: +254 707 221 593 <br/>
    Email: agm@gmail.com <br/>
    company website: https://agmwebsite.ac.ke
    <br/><br/>
   
    All Rights Reserved.   <br/><br/> 
  </p> 
</center> 
		
	         
    <center>
    <div class="container">
     <div class="wrapper">
        <img src="img/image.jpg" width="600" height="450"> 
        <img src="img/image1.jpg" width="600" height="450"> 
        <img src="img/image2.jpg" width="600" height="450"> 
        <img src="img/image4.jpg" width="600" height="450"> 
           
    </div>
    </div>     
    </center>
 
      

</body>
</html>