<!DOCTYPE html>
<html>
<head>
	<title>Print Page</title>

	<!--  ------------------ CSS links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="new_one.css">

	<!--  ------------------ Font Awesome links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--  ------------------ Bootstrap links  ---------------------- -->

	<!--  ------------------ JQuery links ---------------------- -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<style type="text/css">

	@page { size: auto;  margin: 0mm; }

	body{
		font-family: default;
	}
	 tr td{
		/*border: 1px solid grey;*/
		/*box-shadow: 1px 1px 1px 1px black;*/
	}

	div{
		border: 1px solid black;
		width: auto;
	}
	table{

	/*	border-collapse: collapse;
		border: none;
	*/}

	#contact-table{
		margin-bottom: 50px;
	}

	#stu-info-table, #parents-info-table, #education-info-table,#contact-info-table,#biographic-info-table,#preference-info-table{
		height: 25px;
		border: 1px solid grey;
		vertical-align: bottom;
		width: 170px;
		padding-left: 5px;
		font-weight: bold;
	}


	#parents-info-table-fill, #stu-info-table-fill, #education-info-table-fill, #contact-info-table-fill, #biographic-info-table-fill{
		width: 340px;
		border: 1px solid grey;
		padding-left: 5px;
	}

	#preference-info-table-fill{
		width: 400px;
		border: 1px solid grey;
		padding-left: 5px;
	}




	/*---------------- PAGE PRINT CSS----------------------------*/

	 @media print{

		tr td{
	/*	border: none;
	*/}

	#education-table-jee{page-break-after: always;}
	}

	div{
		border: none;
		width: auto;
	}
	table{

		/*border-collapse: collapse;
		*//*border: none;*/
		padding:10px;
	}

	h2, h3{
		padding-left: 12px;
	}

	}

	hr {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
}
.print {
	border-radius: 7px;
	background-color: black;
	color: #FFFFFF;
	font-size: 20px;
	width: 120px;
	height: 40px;
	transition: all 0.7s;
	cursor: pointer;
	float: right;
}
.print:hover{
	color: black ;
	background-color:white;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}





</style>
<script type="text/javascript">

function p1() {
	document.getElementById('b1').style.display='none';
	window.print();
    document.getElementById('b1').style.display='block';

}

</script>
</head>
<body>
	<?php
  $count=0;
 
  $conn = new mysqli("localhost","root","","student_registration", 3307);
  if (!$conn) {
    die("error <br>");
  }
  $sql1 = "SELECT * FROM tbl_personal ORDER BY `serial_no` DESC LIMIT 1";
  $result = $conn->query($sql1);
  if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
           $serial_no=  $row['serial_no'];
		   $register_date=  $row['register_date'];
           $student_name= $row['student_name'];
           $DOB= $row['DOB'] ;
           $category= $row['category'] ;
           $religion= $row['religion'];
           $nationality= $row['nationality'] ;
           $father_name= $row['father_name'];
           $father_occupation= $row['father_occupation'];
           $father_phone=$row['father_phone'] ;
           $father_email= $row['father_email'];
           $mother_name=$row['mother_name'] ;
           $mother_occupation=  $row['mother_occupation'] ;
           $mother_phone=$row['mother_phone'] ;
           $mother_email= $row['mother_email'] ;
           $adhar_no= $row['adhar_no'] ;
           $SSSM=$row['SSSM'];
           $count++;
  }
  else{
      // echo "no matching records";
   }


   $sql1 = "SELECT * FROM tbl_education ORDER BY `serial_no` DESC LIMIT 1";
   $result = $conn->query($sql1);
   if (mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_assoc($result);
            $serial_no=  $row['serial_no'];
            $school_name_10= $row['school_name_10'];
            $board_name_10= $row['board_name_10'] ;
            $percent_10= $row['percent_10'] ;
            $year_pass_10= $row['year_pass_10'];
            $school_name_12= $row['school_name_12'] ;
            $board_name_12= $row['board_name_12'];
            $percent_12= $row['percent_12'];
            $year_pass_12= $row['year_pass_12'];
            $stream=$row['stream'] ;
            $jee_mains=  $row['jee_mains'] ;
            $jee_advance=$row['jee_advance'] ;
            $UG_college= $row['UG_college'] ;
            $UG_university= $row['UG_university'] ;
            $UG_grades=$row['UG_grades'];
            $UG_year_of_pass=  $row['UG_year_of_pass'] ;
            $PG_college=$row['PG_college'] ;
            $PG_university= $row['PG_university'] ;
            $PG_grades= $row['PG_grades'] ;
            $PG_year_of_pass=$row['PG_year_of_pass'];
            $achievements=$row['achievements'] ;
            $count++;
   }
   else{
       // echo "no matching records";
    }



    $sql1 = "SELECT * FROM tbl_contact ORDER BY `serial_no` DESC LIMIT 1";
    $result = $conn->query($sql1);
    if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
             $serial_no=  $row['serial_no'];
             $student_phone= $row['student_phone'];
             $student_alt_phone= $row['student_alt_phone'] ;
             $student_email= $row['student_email'] ;
             $student_alt_email= $row['student_alt_email'];
             $residential_address= $row['residential_address'] ;
             $residential_state= $row['residential_state'];
             $residential_pin_code= $row['residential_pin_code'];
             $permanent_address=$row['permanent_address'] ;
             $permanent_state= $row['permanent_state'];
             $permanent_pin_code=$row['permanent_pin_code'] ;
             $count++;
    }
    else{
        // echo "no matching records";
     }



     $sql1 = "SELECT * FROM tbl_biographic ORDER BY `serial_no` DESC LIMIT 1";
     $result = $conn->query($sql1);
     if (mysqli_num_rows($result) > 0) {
           $row = mysqli_fetch_assoc($result);
              $serial_no=  $row['serial_no'];
              $gender= $row['gender'];
              $blood_group= $row['blood_group'] ;
              $height= $row['height'] ;
              $disability= $row['disability'];
              $body_marks= $row['body_marks'] ;
              $count++;
     }
     else{
         // echo "no matching records";
      }



      $sql1 = "SELECT * FROM tbl_signature ORDER BY `serial_no` DESC LIMIT 1 ";
      $result = $conn->query($sql1);
      if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
               $serial_no=  $row['serial_no'];
               $student_photo= $row['student_photo'];
               $student_signature= $row['student_signature'] ;
               $count++;
               //echo "done";
      }
      else{
        //  echo "no matching records";
       }

       $sql1 = "SELECT * FROM tbl_preferences ORDER BY `serial_no` DESC LIMIT 1";
       $result = $conn->query($sql1);
       if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
               $serial_no=  $row['serial_no'];
               $faculty1= $row['faculty_1'];
               $branch1= $row['branch_1'] ;
               $faculty2= $row['faculty_2'];
               $branch2= $row['branch_2'] ;
               $faculty3= $row['faculty_3'];
               $branch3= $row['branch_3'] ;
               $faculty4= $row['faculty_4'];
               $branch4= $row['branch_4'] ;
               $faculty5= $row['faculty_5'];
               $branch5= $row['branch_5'] ;
               $count++;
               //echo "done";
      }

			 ?>

<div  style=" border: 1px solid black; margin: 10px 10px;">
	<table align="center" style="border: 3px solid black;">
		<tr><td width="1000">




	<!------------------Logo and Heading  /  Photo and Signature------------------>

	<table >
		<tr>

			<td rowspan="2"><img src="img/medicaps.jpg"></td>
			<td style="vertical-align: top;">
				<div class="row">
					<div class="col-md-12">
						<center><img src="img/logo.png" style="margin-top: 20px; width: 70%; height: 80%;"></center>
					</div>
				</div>
			</td>

			<td style="vertical-align: bottom;" rowspan="2">
			<div class="attachments" style="margin-top: 10px">
				<img src="<?php echo $student_photo ?> " style="width: 155px; height: 160px;">
				<img src="<?php echo $student_signature ?> " style="width: 155px; height: 40px;">
			</div>
			</td>
		</tr>
		<tr>
			<td>
				<center><h3>Student Registration Form<br> MOAP- 2020</h3></center>
			</td>
		</tr>
	</table>


	<!---------------------------Basic Information------------------------->


	<table id="serial-table" style="margin-top: 20px; margin-left: 0px; font-weight: bold; border-top: 3px solid black; border-bottom: 3px solid black; font-size: 20px">
		<tr height="45">

			<td id="serial-info-table" style="width: 100px;">&nbsp; Name:</td>
			<td id="serial-info-table-fill" style="width: 250px; padding-left: 5px;"><?php echo $student_name ?></td>
			<td id="serial-info-table" style="width: 170px;">Serial No.</td>
			<td id="serial-info-table-fill" style="width: 200px;"><?php echo $serial_no ?></td>
			<td id="serial-info-table" style="width: 80px;">Date:</td>
			<td id="serial-info-table-fill" style="width: 160px;"><?php echo $register_date ?></td>
		</tr>

	</table><br><br>


	<!----------------------Personal Details-------------------->
<!--
<hr style="border-color: #000; margin-left: 35px; margin-right: 20px; border-width: 2px;"> -->
<h3><i class="fas fa-info-circle"></i> Personal Details </h3>
	<table id="personal-table" style="margin: 20px;">
		<tr height="30">
			<td id="stu-info-table" colspan="4" style="font-size: 20px;">Student's Information</td>
		</tr>
		<tr>
			<td id="stu-info-table">Student's Name:</td>
			<td id="stu-info-table-fill"><?php echo $student_name ?></td>

			<td id="stu-info-table">Date Of Birth:</td>
			<td id="stu-info-table-fill"><?php echo $DOB ?></td>
		</tr>

		<tr>
			<td id="stu-info-table">Nationality:</td>
			<td id="stu-info-table-fill"><?php echo $nationality?></td>
			<td id="stu-info-table">Category:</td>
			<td id="stu-info-table-fill"><?php echo $category?></td>
		</tr>

		<tr>
			<td id="stu-info-table">Religion:</td>
			<td id="stu-info-table-fill"><?php echo $religion?></td>
			<td id="stu-info-table">Student's Contact:</td>
			<td id="stu-info-table-fill"><?php echo $student_phone?></td>
		</tr>

		<tr>
			<td id="stu-info-table">Adhar Number: </td>
			<td id="stu-info-table-fill"><?php echo $adhar_no ?></td>
			<td id="stu-info-table">SSSM ID: </td>
			<td id="stu-info-table-fill"><?php echo $SSSM ?></td>
		</tr>

		<tr height="30"><td id="parents-info-table" colspan="4" style="font-size: 20px;">Father's Information</td></tr>
        <tr>
			<td id="parents-info-table">Name:</td>
			<td id="parents-info-table-fill"><?php echo $father_name ?></td>

			<td id="parents-info-table">Occupation:</td>
			<td id="parents-info-table-fill"><?php echo $father_occupation ?></td>
		</tr>
		<tr>
			<td id="parents-info-table">Contact:</td>
			<td id="parents-info-table-fill"><?php echo $father_phone ?></td>

			<td id="parents-info-table">Email:</td>
			<td id="parents-info-table-fill"><?php echo $father_email ?></td>
		</tr>

	    <tr height="30"><td id="parents-info-table" colspan="4" style="font-size: 20px;">Mother's Information</td></tr>
	    <tr>
			<td id="parents-info-table">Name:</td>
			<td id="parents-info-table-fill"><?php echo $mother_name ?></td>

			<td id="parents-info-table">Occupation:</td>
			<td id="parents-info-table-fill"><?php echo $mother_occupation ?></td>
		</tr>

		<tr>
			<td id="parents-info-table">Contact:</td>
			<td id="parents-info-table-fill"><?php echo $mother_phone ?></td>

			<td id="parents-info-table">Email:</td>
			<td id="parents-info-table-fill"><?php echo $mother_email ?></td>
		</tr>
	</table><br>



	<!-------------------Educational Qualifications--------------------->

							<!--10th Standard-->


	<h3><i class="fas fa-user-graduate" aria-hidden="true"></i> Educational Qualification</h3>
	<!-- <h3 style="padding-top: 5px;">Standard 10<sup>th</sup></h3> -->
	<h4  style="margin-left: 20px; margin-bottom: -10px; margin-top: 20px;">Pre-University Course</h4>
	<table id="education-table-10" style="margin: 20px;">


		<tr height="30">
			<td id="education-info-table" colspan="4" style="font-size: 20px">Standard 10<sup>th</sup></td>
		</tr>
		<tr>
			<td id="education-info-table" >School Name:</td>
			<td id="education-info-table-fill"><?php echo $school_name_10 ?></td>
			<td id="education-info-table">Board Name:</td>
			<td id="education-info-table-fill"><?php echo $board_name_10 ?></td>
		</tr>
		<tr>
			<td id="education-info-table">CGPA/Percentage:</td>
			<td id="education-info-table-fill"><?php echo $percent_10 ?></td>
			<td id="education-info-table">Year Of Passing:</td>
			<td id="education-info-table-fill"><?php echo $year_pass_10 ?></td>

		</tr>

		<tr height="30">
			<td id="education-info-table" colspan="4" style="font-size: 20px">Standard 12<sup>th</sup></td>
		</tr>
		<tr>
			<td id="education-info-table">School Name:</td>
			<td id="education-info-table-fill"><?php echo $school_name_12 ?></td>
			<td id="education-info-table">Board Name:</td>
			<td id="education-info-table-fill"><?php echo $board_name_12 ?></td>
		</tr>
		<tr>
			<td id="education-info-table">CGPA/Percentage:</td>
			<td id="education-info-table-fill"><?php echo $percent_12 ?></td>
			<td id="education-info-table">Year Of Passing:</td>
			<td id="education-info-table-fill"><?php echo $year_pass_12 ?></td>
		</tr>
		<tr>
		    <td id="education-info-table">Stream:</td>
			<td id="education-info-table-fill"><?php echo $stream ?></td>
			<td id="education-info-table">Achievements:</td>
			<td id="education-info-table-fill"><?php echo $achievements ?></td>
		</tr>

		<tr height="30" id="stream1">
			<td id="education-info-table" colspan="4" style="font-size: 20px">JEE Score</td>
		</tr>

		<tr id="stream2">
			<td id="education-info-table">JEE Mains:</td>
			<td id="education-info-table-fill"><?php echo $jee_mains ?></td>
			<td id="education-info-table">JEE Advance:</td>
			<td id="education-info-table-fill"><?php echo $jee_advance ?></td>

		</tr>
	</table>


	<h4 id='ug' style="margin-left: 20px; margin-bottom: -10px;">Graduation Course</h4>

	<table id="education-table-graduate" style="margin: 20px;">
		<tr height="30">
			<td id="education-info-table" colspan="4" style="font-size: 20px">Under-Graduation</td>
		</tr>

		<tr>
			<td id="education-info-table">College Name:</td>
			<td id="education-info-table-fill"><?php echo $UG_college ?></td>
			<td id="education-info-table">University:</td>
			<td id="education-info-table-fill"><?php echo $UG_university ?></td>

		</tr>
		<tr>
			<td id="education-info-table">CGPA:</td>
			<td id="education-info-table-fill"><?php echo $UG_grades ?></td>
			<td id="education-info-table">Year Of Passing:</td>
			<td id="education-info-table-fill"><?php echo $UG_year_of_pass ?></td>
		</tr>

	    <tr height="30" id="pg" >
			<td id="education-info-table" colspan="4" style="font-size: 20px">Post-Graduation</td>
			</tr>

		<tr id="pg1">
			<td id="education-info-table">College Name:</td>
			<td id="education-info-table-fill"><?php echo $PG_college ?></td>
			<td id="education-info-table">University:</td>
			<td id="education-info-table-fill"><?php echo $PG_university ?></td>

		</tr>
		<tr id="pg2">
			<td id="education-info-table">CGPA:</td>
			<td id="education-info-table-fill"><?php echo $PG_grades ?></td>
			<td id="education-info-table">Year Of Passing:</td>
			<td id="education-info-table-fill"><?php echo $PG_year_of_pass ?></td>
		</tr>
		<!-- <tr>
			<td id="education-info-table">Achievements</td>
			<td id="education-info-table-fill" colspan="3"></td>
		</tr> -->
	</table><br>




	<!-----------------------Biographic Details--------------------------->



	<h3 style="padding-top: 5px;"><i class="fas fa-fingerprint" aria-hidden="true"></i> Biographic Details</h3>

	<table id="biographic-table" style="margin: 20px;">
		<tr>
			<td id="biographic-info-table">Gender:</td>
			<td id="biographic-info-table-fill"><?php echo $gender ?></td>
			<td id="biographic-info-table">Blood Group:</td>
			<td id="biographic-info-table-fill"><?php echo $blood_group ?></td>

		</tr>
		<tr>
			<td id="biographic-info-table">Height:</td>
			<td id="biographic-info-table-fill"><?php echo $height ?></td>
			<td id="biographic-info-table">Disability:</td>
			<td id="biographic-info-table-fill"><?php echo $disability ?></td>
		</tr>

		<tr>
			<td id="biographic-info-table">Body Marks:</td>
			<td id="biographic-info-table-fill" colspan="3"><?php echo $body_marks ?></td>

		</tr>

	</table><br>


              <!-------------------- Contacts and Address------------------>

<h3 style="padding-top: 5px;"><i class="fas fa-phone" aria-hidden="true"></i> Address and Contacts</h3>

	<table id="contact-table" style="margin: 20px">
		<tr>
			<td id="contact-info-table">Phone:</td>
			<td id="contact-info-table-fill"><?php echo $student_phone ?></td>

			<td id="contact-info-table">Alternate Phone:</td>
			<td id="contact-info-table-fill"><?php echo $student_alt_phone ?></td>
		</tr>

		<tr>
			<td id="contact-info-table">Email:</td>
			<td id="contact-info-table-fill"><?php echo $student_email ?></td>

			<td id="contact-info-table">Alternate Email:</td>
			<td id="contact-info-table-fill"><?php echo $student_alt_email ?></td>

		</tr>

		<tr>
			<td id="contact-info-table">Residential Address:</td>
			<td id="contact-info-table-fill" colspan="3"><?php echo $residential_address ?></td>
		</tr>

		<tr>
			<td id="contact-info-table">Residential State:</td>
			<td id="contact-info-table-fill"><?php echo $residential_state  ?></td>

			<td id="contact-info-table">Pin Code:</td>
			<td id="contact-info-table-fill"><?php echo $residential_pin_code ?></td>
		</tr>

		<tr>
			<td id="contact-info-table">Permanent Address:</td>
			<td id="contact-info-table-fill" colspan="3"><?php echo $permanent_address ?></td>
		</tr>

		<tr>
			<td id="contact-info-table">Permanent State:</td>
			<td id="contact-info-table-fill"><?php echo $permanent_state ?></td>

			<td id="contact-info-table">Pin Code:</td>
			<td id="contact-info-table-fill"><?php echo $permanent_pin_code ?></td>
		</tr>


	</table><br>

<h3 style="padding-top: 5px;"><i class="far fa-list-alt"></i> Preferences</h3>
<table id="Preferences-table" style="margin: 20px">
	<tr align="center">
		<th id="preference-info-table" >Preferences</th>
		<th id="preference-info-table-fill">Faculty</th>
		<th id="preference-info-table-fill">Branch/Course</th>
	</tr>
	<tr>
		<td id="preference-info-table">Preference-1</td>
		<td id="preference-info-table-fill"><?php echo $faculty1 ?></td>
		<td id="preference-info-table-fill"><?php echo $branch1 ?></td>	
	</tr>
	<tr>
		<td id="preference-info-table">Preference-2</td>
		<td id="preference-info-table-fill"><?php echo $faculty2 ?></td>
		<td id="preference-info-table-fill"><?php echo $branch2 ?></td>	
	</tr>
	<tr>
		<td id="preference-info-table">Preference-3</td>
		<td id="preference-info-table-fill"><?php echo $faculty3 ?></td>
		<td id="preference-info-table-fill"><?php echo $branch3 ?></td>	
	</tr>
	<tr>
		<td id="preference-info-table">Preference-4</td>
		<td id="preference-info-table-fill"><?php echo $faculty4 ?></td>
		<td id="preference-info-table-fill"><?php echo $branch4 ?></td>	
	</tr>
	<tr>
		<td id="preference-info-table">Preference-5</td>
		<td id="preference-info-table-fill"><?php echo $faculty5 ?></td>
		<td id="preference-info-table-fill"><?php echo $branch5 ?></td>	
	</tr>


</table>


<button onclick='p1()' class='print' id='b1' style="float:left; font-size: 18px; margin-left: 20px; margin-bottom: 5px;"> Print  <i class='fas fa-print' style="font-size:16px;"></i> </button>
<button  class='print' style="float:right; width:200px; font-size: 18px; margin-right: 20px; margin-bottom: 5px" id='b1' > Proceed to Payment   </button>
</td></tr>
</table>
</div>
</body>
</html>
<script type="text/javascript">
	if("<?php echo $UG_college ; ?>"=="")
	{
		document.getElementById("ug").style.display='none';
		document.getElementById("education-table-graduate").style.display='none';
	}

	if("<?php echo $PG_college ; ?>"=="")
	{
		document.getElementById("pg").style.display='none';
		document.getElementById("pg1").style.display='none';
		document.getElementById("pg2").style.display='none';
	}
	if("<?php echo $stream ; ?>"!="Science")
	{
		document.getElementById("stream1").style.display='none';
		document.getElementById("stream2").style.display='none';
	}

</script>
