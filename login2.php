<?php
if (isset($_POST['sign_IN'])){

	// echo "<script>alert('Login Successful') </script>";
  if (empty($_POST['Username'])) {
   $user="";
   echo "<script>alert('enter username ') </script>";
    } else {
    $username=$_POST['Username'];


  if (empty($_POST['Password'])) {
    $password="";
    echo "<script> alert('enter Password') </script>";
    } else {
    $password=$_POST['Password'];

  $conn = mysqli_connect("localhost", "root", "", "login_db", 3307);

  $sql1 = "SELECT * FROM 	tbl_register WHERE Email = '$username' ";
  $result = $conn->query($sql1);
    if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
             $password1=  $row['Contact'];
             if($password1==$password)
             {
               // echo "<script>alert('Login Successful') </script>";
               header("Location: new_one.php");
             }
             else{
                 echo "<script>alert('password incorrect') </script>";
              }
    }
    else{
        echo "<script>alert(' username incorrect') </script>";
     }

   mysqli_close($conn);
  }
  }
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>MOAP 2020</title>

	<!--  ------------------ CSS links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="index.css">


	<!--  ------------------ Font Awesome links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/
	font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">


	<!--  ------------------ Bootstrap links  ---------------------- -->

	<!--  ------------------ JQuery links ---------------------- -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	<style type="text/css">

/* .logo-medi{
  width: 30%;
  height: 30%;
} */

body
{

   background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(img/i3.jpeg);
   background-repeat: no-repeat;
/*   background-image: linear-gradient(rgba(245,176,65,0.5),rgba(245,176,65,0.3)),url(img/shade.jpg);
*/
   background-position: center;
   background-size: cover;
   background-attachment: fixed;

}

#Register_screen{
	display: none;
	}

@media screen,handheld (max-width: 999px){
.main-box{
  width: 440px;
	box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 black;
	 /* box-shadow: 0 0 30px 8px black; */
   border-radius: 8px 8px 8px 8px;
	 background: white;
	 margin: 20px 550px;
	 text-align: center;
   margin: 0 auto;
   margin-top: 50px;
   margin-bottom: 50px;
}
}


/*	@media screen,handheld (max-width: 999px){

         .main-box{
       		width: 440px;
         	margin: 40px 14px;
         }

	}*/

	/*@media only screen and (max-width: 360px){

         .main-box{
           text-align: center;
           margin: 30px 60px;
           background: white;
          width: auto;
         }

	}*/


.placeicon{
	font-family: fontawesome;
}


.form-control:focus {
			border-color: #000;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(0, 0, 0, 0.5);
 }



.box input[type = "text"]{
   border:0;
   background:  none;
   display: block;
   margin: 20px auto;
   margin-bottom: 0px;
   border: 1px solid #000;
   padding: 14px 10px;
   outline: none;
   color: black;
   transition: 0.25s;
}

.box input[type = "password"]{
   border:0;
   background:  none;
   display: block;
   margin: 20px auto;
   margin-bottom: 40px;
   border: 1px solid #000;
   padding: 14px 10px;
   outline: none;
   color: black;
   transition: 0.25s;
}

.form-group{
	margin: 10px 40px;
}


.box input[type = "text"]:focus,.box input[type = "tel"]:focus,.box input[type = "password"]:focus{

   border-color:  slategray;

}
.box input[type = "text"]:hover,.box input[type = "tel"]:hover,.box input[type = "password"]:hover{

	 font-weight: bold;
	    border-color:  slategray;
	    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(0, 0, 0, 0.5);

}

.form-title{
   font-family: verdana;
   padding: 25px 5px;
   font-size: 20px;
}



.box input[type = "tel"]{
   border:0;
   display: block;
   margin: 0px auto;

   border: 1px solid #000;
   border-right:  none;
   padding: 10px 10px;
   outline: none;
   color: black;

   transition: 0.25s;

}



.submit-button{
	margin-top: 30px;
}

.signIN-button{
	margin-top: -10px;

}


.button-group{
	width: 100%;
	border: 0;
	background-color: #000;
	color: white;
	padding: 10px ;

}



.placebutton{
	margin: 0px auto;
	color: white;
	background: black;

}
.otp-group{
	margin: 20px 40px;
	padding-right: 80px;
}

.icon-field{
  display: none;
  margin-top: -2px;
  text-align: left;

}

.icon-field i.fa-exclamation-circle{
  opacity: 0;
  color: #CD0000;

}

.form-group i.fa-asterisk{
			position: absolute;
			margin-top: -30px;
			margin-left: 39%;
			opacity: 1;
			font-size: 11px;
			color: red;
		}



	</style>


</head>


	<script type="text/javascript">




	function show_hide(id){

		if(id.value=='Register'){

			document.getElementById('Register_screen').style.display="block";
			document.getElementById('Signin_screen').style.display="none";
		}
		else if(id.value=='Signin'){
			document.getElementById('Signin_screen').style.display="block";
			document.getElementById('Register_screen').style.display="none";
		}



	}

	 function name_validation(id,icon,error){
    if(id.value=='' || id.value.length<3 || !(isNaN(id.value))  ){
      document.getElementById('icon-field'+icon).style.display="block";
      document.getElementById('icon'+icon).style.opacity="1";
      document.getElementById('icon'+icon).style.color="#CD0000";
      document.getElementById('error'+error).textContent="Enter valid name";
      document.getElementById('error'+error).style.color="#CD0000";


    }
    else{
        document.getElementById('icon-field'+icon).style.display="none";
        document.getElementById('icon'+icon).style.opacity="0";
        document.getElementById('error'+error).textContent="";

    }
}



function validate_email(){
	var email = document.getElementById("Email").value;
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(re.test(email)==false){
      document.getElementById('icon-field3').style.display="block";
		document.getElementById("icon3").style.opacity="1";
		document.getElementById("error3").textContent="Enter valid email";
		document.getElementById("error3").style.color="#CD0000";

	}

	else{
      document.getElementById('icon-field3').style.display="none";
		document.getElementById("icon3").style.opacity="0";
		document.getElementById("error3").textContent="";

	}
}


 function validate_contact(){
                             var p = document.getElementById("Contact").value;
                             if(p<0||p.length!=10||isNaN(p)){
                             	document.getElementById('icon-field4').style.display="block";
                             document.getElementById("icon4").style.opacity="1";
                              document.getElementById("error4").textContent="Enter valid number";
                              document.getElementById("error4").style.color="#CD0000";
                             }
                             else{
       						 document.getElementById('icon-field4').style.display="none";
		                      document.getElementById("icon4").style.opacity="0";
                              document.getElementById("error4").textContent="";
                             }
                            }



</script>

<?php $msg=''; ?>

<?php


if(isset($_POST['register_details'])){

	$hostname = "localhost";
	$username = "root";
	$password = "";
  $port=3307;
	$databaseName = "login_db";




    $connect = mysqli_connect($hostname, $username, $password, $databaseName, 3307);


  // if(preg_match("/^([a-zA-Z' ]+)$/",$First_name)){

    if(empty($_POST['First_name']) || empty($_POST['Last_name']) || empty($_POST['Email']) || empty($_POST['Contact'])){

      $msg='Fields cannot be empty';
    }
    else{

    $fname=$_POST['First_name'];
    $lname=$_POST['Last_name'];
    $email=$_POST['Email'];
    $contact=$_POST['Contact'];

      if(strlen($fname)<3 || strlen($lname)<3){
          $msg="Enter valid details";
     }


     else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $msg = "Enter valid details";
      }


     else if(!preg_match('/^[0-9]{10}+$/', $contact)){
       $msg="Enter valid details";
     }

     else{
      $msg="";
     }

    $sql1="SELECT * FROM `tbl_register` WHERE Email='$email' ";
    $sql2="SELECT * FROM `tbl_register` WHERE Contact='$contact' ";

    $result1 = mysqli_query($connect, $sql1);
    $result2 = mysqli_query($connect, $sql2);





   if(  mysqli_num_rows($result1)==0 || mysqli_num_rows($result2)==0 ){
     if($msg==""){
     $query= "INSERT INTO `tbl_register` (`Email`,`Contact`) VALUES('$email','$contact')";
     $result = mysqli_query($connect,$query);

      if($result){
         echo "Inserted";
        }
      else{
     	echo "NOT Inserted";
      }
    }
    else{
      $msg="Enter valid details";
    }
 		}
 		else{
            $msg="Email and contact already exist";

 		}

  }

     mysqli_close($connect);
}


?>


<body>



 <!--   <div class="modal-dialog modal-md text-center">
   	<div class="col-sm-8 main-section" >
   		<div class="modal-content" > -->
   			<div class="main-box" id="main-box">
          <div class="logo-img">
    <center>
      <img class="logo-medi" src="img/logo.jpg" style="width: 90%; height: 90%;">
    </center>
  </div>
   			<div class="form-title">
   				<span id="form-title">Medi-Caps Online Admission Process (MOAP)-2020</span>
   			</div>

   			<div id="Register_screen">
   			<form class="col-12 box" method="post" action="">
   				<!-- <h4><span style="font-family: sans-serif; font-weight: bold;">Register</span></h4> -->


          <div class="form-group">
            <input type="text" class="form-control placeicon" name="First_name" id="First_name" autocomplete="off" placeholder="&#xf007;   First Name" onkeyup ="name_validation(this,1,1)">
						<!-- <i class="fas fa-asterisk"></i> -->
            <div class="icon-field" id="icon-field1">
            <i id="icon1" class="fa fa-exclamation-circle" aria-hidden="true"></i>
          	<span class="error" id="error1"></span>
          </div>
          </div>


   				<div class="form-group">
   					<input type="text" class="form-control placeicon" name="Last_name" id="Last_name" autocomplete="off" placeholder="&#xf234;   Last Name" onkeyup ="name_validation(this,2,2)">
						<!-- <i class="fas fa-asterisk"></i> -->
   					<div class="icon-field" id="icon-field2">
            <i id="icon2" class="fa fa-exclamation-circle" aria-hidden="true"></i>
          <span class="error" id="error2"></span>
          </div>
   				</div>


   				 <div class="form-group">
            <input type="text" class="form-control  placeicon" name="Email" id="Email" autocomplete="off" placeholder="&#xf0e0;   Email" onkeyup ="validate_email()">
						<!-- <i class="fas fa-asterisk"></i> -->
            <div class="icon-field" id="icon-field3">
            <i id="icon3" class="fa fa-exclamation-circle" aria-hidden="true"></i>
          <span class="error" id="error3"></span>
          </div>
          </div>


   				<div class="form-group">
   					<input type="text" class="form-control placeicon" name="Contact" id="Contact" autocomplete="off" placeholder="&#xf095;  Contact" onkeyup ="validate_contact()">
						<!-- <i class="fas fa-asterisk"></i> -->
   					<div class="icon-field" id="icon-field4">
            <i id="icon4" class="fa fa-exclamation-circle" aria-hidden="true"></i>
          <span class="error4" id="error4"></span>
          </div>
   				</div>



   				<div class="input-group md-3 otp-group">
   					<input type="tel" class="form-control otp placeicon" placeholder="&#xf023;  OTP" aria-label="Recipient's username" aria-describedby="button-addon2" >
   					<div class="input-group-append" >
   						<button class="btn btn-outline-secondary placebutton" type="button" id="button-addon2" style="border: 0;" >Send</button>
   					</div>
   				</div>

   				<span id="message" style="font-size: 20px; color: red; font-weight: bold;"><?php echo $msg; ?></span>

   				<div class="form-group submit-button">
   					<button type="submit" class="button-group" name="register_details">Submit Registration</button>
   				</div>

   				<div class="form-group">
   					<label style="font-size: 17px"> Already Registered? </label>
   				</div>


   				<div class="form-group signIN-button">
   					<button type="button" class="button-group" name="sign IN" id="Signin" value="Signin" onclick="show_hide(this)" style="	margin-bottom: 30px;">Sign In</button>
   				</div>


   			</form>
   		</div>

   		<div id="Signin_screen">
   			<form class="col-12 box" method="post" action="">
   				<h4><span style="font-family: sans-serif; font-weight: bold;">Sign In</span></h4>
   				<div class="form-group">
   					<input type="text" class="form-control placeicon" name="Username" autocomplete="off" placeholder="&#xf0e0;   User ID">
   				</div>
   				<div class="form-group">
   					<input type="password" class="form-control placeicon" name="Password" autocomplete="off" placeholder="&#xf023;   Password">
   				</div>
   				<div class="form-group signIN-button">
						<input type="submit" formaction="#" class="button-group" name="sign_IN" value="Sign_In">
   				</div>
   				<div class="form-group">
   					<label style="font-size: 17px"> Not Registered? </label>
   				</div>
   				<div class="form-group signIN-button">
   					<button type="button" class="button-group" name="Register" id="Register" value="Register" onclick="show_hide(this)" style="	margin-bottom: 30px;">Register</button>
   				</div>


   			</form>
   			</div>
   		</div>

</body>
</html>

<script type="text/javascript">


 	var msg = '<?php echo $msg;?>';
 	var check;

	if(msg!='')
	 {
			document.getElementById('Register_screen').style.display="block";
			document.getElementById('Signin_screen').style.display="none";

	 }
	</script>
