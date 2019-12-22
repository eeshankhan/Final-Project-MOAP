<?php

// php code to Insert data into mysql database from input text
       if(isset($_POST['save_button']))
       {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "student_registration";
        $port=3307;

    // get values form input text and number


        $student_name=$_POST['student_name'];
        $DOB=$_POST['DOB'];
        $category=$_POST['category'];
        $religion=$_POST['religion'];
        $nationality=$_POST['nationality'];
        $father_name=$_POST['father_name'];
        $father_occupation=$_POST['father_occupation'];
        $father_phone=$_POST['father_phone'];
        $father_email=$_POST['father_email'];
        $mother_name=$_POST['mother_name'];
        $mother_occupation=$_POST['mother_occupation'];
        $mother_phone=$_POST['mother_phone'];
        $mother_email=$_POST['mother_email'];
        $adhar_no=$_POST['adhar_no'];
        $SSSM=$_POST['SSSM'];
        $school_name_10=$_POST['school_name_10'];
        $board_name_10=$_POST['board_name_10'];
        $percent_10=$_POST['percent_10'];
        $year_pass_10=$_POST['year_pass_10'];
        $school_name_12=$_POST['school_name_12'];
        $board_name_12=$_POST['board_name_12'];
        $percent_12=$_POST['percent_12'];
        $year_pass_12=$_POST['year_pass_12'];
        $stream=$_POST['stream'];
        $jee_mains=$_POST['jee_mains'];
        $jee_advance=$_POST['jee_advance'];
        $UG_college=$_POST['UG_college'];
        $UG_university=$_POST['UG_university'];
        $UG_grades=$_POST['UG_grades'];
        $UG_year_of_pass=$_POST['UG_year_of_pass'];
        $PG_college=$_POST['PG_college'];
        $PG_university=$_POST['PG_university'];
        $PG_grades=$_POST['PG_grades'];
        $PG_year_of_pass=$_POST['PG_year_of_pass'];
        $achievements=$_POST['achievements'];
        $gender=$_POST['gender'];
        $blood_group=$_POST['blood_group'];
        $height=$_POST['height'];
        $disability=$_POST['disability'];
        $body_marks=$_POST['body_marks'];
        $student_phone=$_POST['student_phone'];
        $student_alt_phone=$_POST['student_alt_phone'];
        $student_email=$_POST['student_email'];
        $student_alt_email=$_POST['student_alt_email'];
        $residential_address=$_POST['residential_address'];
        $residential_state=$_POST['residential_state'];
        $residential_pin_code=$_POST['residential_pin_code'];
        $permanent_address=$_POST['permanent_address'];
        $permanent_state=$_POST['permanent_state'];
        $permanent_pin_code=$_POST['permanent_pin_code'];
        $table_to_faculty_array=json_decode($_POST['table_to_faculty_array']);
        $table_to_branch_array=json_decode($_POST['table_to_branch_array']);
        
         $register_date=  date('Y/m/d');
         





  //print_r($_FILES["uploadfile"]);
        $filename1 = $_FILES["student_photo"]["name"];
        $tempname1 = $_FILES["student_photo"]["tmp_name"];
        $folder1 = "student_photos/".$filename1;
    //ech0 $folder;
        move_uploaded_file($tempname1, $folder1);



        $filename2 = $_FILES["student_signature"]["name"];
        $tempname2 = $_FILES["student_signature"]["tmp_name"];
        $folder2 = "student_signatures/".$filename2;
    //ech0 $folder;
        move_uploaded_file($tempname2, $folder2);





    // connect to mysql database using mysqli

        $connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);

    // mysql query to insert data

        $query1 = "INSERT INTO `tbl_personal` (`register_date`,`student_name`,`DOB`,`category`,`religion`,`nationality`,`father_name`,`father_occupation`,`father_phone`,`father_email`,`mother_name`,`mother_occupation`,`mother_phone`,`mother_email`,`adhar_no`,`SSSM`) VALUES ('$register_date','$student_name','$DOB','$category','$religion','$nationality','$father_name','$father_occupation','$father_phone','$father_email','$mother_name','$mother_occupation','$mother_phone','$mother_email','$adhar_no','$SSSM')";



        $query2= "INSERT INTO `tbl_education` (`school_name_10`,`board_name_10`,`percent_10`,`year_pass_10`,`school_name_12`,`board_name_12`,`percent_12`,`year_pass_12`,`stream`,`jee_mains`,`jee_advance`,`UG_college`,`UG_university`,`UG_grades`,`UG_year_of_pass`,`PG_college`,`PG_university`,`PG_grades`,`PG_year_of_pass`,`achievements`) VALUES ('$school_name_10','$board_name_10','$percent_10','$year_pass_10','$school_name_12','$board_name_12','$percent_12','$year_pass_12','$stream','$jee_mains','$jee_advance','$UG_college','$UG_university','$UG_grades','$UG_year_of_pass','$PG_college','$PG_university','$PG_grades','$PG_year_of_pass','$achievements')";


        $query3= "INSERT INTO `tbl_biographic` (`gender`,`blood_group`,`height`,`disability`,`body_marks`) VALUES ('$gender','$blood_group','$height','$disability','$body_marks')";

        $query4="INSERT INTO `tbl_contact` (`student_phone`,`student_alt_phone`,`student_email`,`student_alt_email`,`residential_address`,`residential_state`,`residential_pin_code`,`permanent_address`,`permanent_state`,`permanent_pin_code`) VALUES ('$student_phone','$student_alt_phone','$student_email','$student_alt_email','$residential_address','$residential_state','$residential_pin_code','$permanent_address','$permanent_state','$permanent_pin_code')";

        $query5="INSERT INTO `tbl_signature` (`student_photo`,`student_signature`) VALUES ('$folder1','$folder2')";

        $query6="INSERT INTO `tbl_preferences` (`faculty_1`,`branch_1`,`faculty_2`,`branch_2`,`faculty_3`,`branch_3`,`faculty_4`,`branch_4`,`faculty_5`,`branch_5`) VALUES ('$table_to_faculty_array[0]','$table_to_branch_array[0]','$table_to_faculty_array[1]','$table_to_branch_array[1]','$table_to_faculty_array[2]','$table_to_branch_array[2]','$table_to_faculty_array[3]','$table_to_branch_array[3]','$table_to_faculty_array[4]','$table_to_branch_array[4]')";





        $result1 = mysqli_query($connect,$query1);
        $result2 = mysqli_query($connect,$query2);
        $result3 = mysqli_query($connect,$query3);
        $result4 = mysqli_query($connect,$query4);
        $result5 = mysqli_query($connect,$query5);
        $result6 = mysqli_query($connect,$query6);


    // check if mysql query successful

        if($result1 && $result2 && $result3 && $result4 && $result5 && $result6){
         // echo "Inserted";
          header("location: print-form1.php");
        }

        else{
         echo "Error";
        }

   // mysqli_free_result($result);
        mysqli_close($connect);
       }

       ?>



<!DOCTYPE html>
<html>
<head>
	<title>MOAPS 2020</title>



	<!--  ------------------ CSS links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="new_one.css">

	<!--  ------------------ Font Awesome links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

	<!--  ------------------ Bootstrap links  ---------------------- -->

	<!--  ------------------ JQuery links ---------------------- -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">

<!--  --------------  Internal CSS  -------------------------------  -->

	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Lato:300|Oswald);
		body{
			background-repeat: no-repeat;
			background-size: cover;
			/* background-image: url("https://i.imgur.com/QVFUaZP.jpg?1"); */
			 /* background-image: linear-gradient(   #e6e6e6,  #ffffff); */
		}

		.Registration_form{
	text-align: justify;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(0, 0, 0, 0.5);
	margin: 60px 110px;
	/*padding: 20px 40px;*/

}

.logo-medi{
	 padding: 20px 50px;
}

.form-control{
				/* background-color: #f2f2f2; */

				/*			border-color: #000;*/
			/* box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(0, 0, 0, 0.5); */
			border-color: #595959;

}

		.form-control:focus {
			border-color: #000;
			background-color: #f2f2f2;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 7px rgba(0, 0, 0, 0.5);
		}

  .form-control:hover {
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 7px rgba(0, 0, 0, 0.5);
		}


		.icon-field i.fa-asterisk{
			position: absolute;
			top: 8px;
			margin-left: 102%;
			opacity: 1;
			font-size: 11px;
			color: #CD0000;
		}

  a{
   cursor: pointer;
  }


  #choice-filling{
 position: relative;
 width: 800px;
 height: 500px;
 margin-left: 5%;
}


input[type=date]::-webkit-inner-spin-button
{
	  -webkit-appearance: none;
/*	  display: none;
*/}




/*#biographic, #education,#contact,#signature,#choice-filling{
 display: none;
}*/

.contact-us{
   background-color: black;
}




/* active tabs css */


.tile
{
 	width: auto;
  margin: 10px auto;
 
}

#tile-1 .tab-pane
{
  padding:15px;
  margin: 30px 30px;
}
#tile-1 .nav-tabs
{
  position:relative;
  border:none!important;
  background-color: black;
/*   box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2); */

}
#tile-1 .nav-tabs li
{
  margin:0px!important;
	/* max-width: 100px; */
}
#tile-1 .nav-tabs li a
{
  position:relative;
  margin-right:0px!important;
  padding: 20px 40px!important;
  border:none!important;
  font-size: 16px;
  font-family: 'Lexend Deca';

	/* max-width: 100px; */
}
/* #tile-1 .nav-tabs a:hover
{
  background-color:#1a1a1a!important;
  border:none;
} */
#tile-1 .slider
{
  display:inline-block;
  width:30px;
  height:100%;

  background-color:#333333;
  position:absolute;
  bottom:0;
  transition:all .4s linear;
	/* max-width: 100px; */
}
#tile-1 .nav-tabs .active
{
  background-color:transparent!important;
  border:none!important;

}
#tile-1 .nav-tabs li a span{
	font-size: 20px;
}
#tile-1 .nav-tabs li a i{
	font-size: 27px;
}

@media screen and (max-width: 1190px) {
	#tile-1 .nav-tabs li a
	{
		width: 30%;
		text-align: center;
	}
	#tile-1 .nav-tabs li a span{
		font-size: 0px;
	}
	#tile-1 .nav-tabs li a i{
		font-size: 40px;
		margin-top: 20px;
	}
	#tile-1 .slider
	{
		width: 5%;
	}
}

.b1 {
	border-radius: 7px;
	background-color: black;
	color: #FFFFFF;
	font-size: 23px;
	width: 160px;
	height: 50px;
	transition: all 0.7s;
	cursor: pointer;
}
.b1:hover{
	color: black ;
	background-color:white;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}


#previous_btn{
	display: none;
}




	</style>
	<style>

	@import url('https://fonts.googleapis.com/css?family=Open+Sans');
body{
	/*margin:0;*/
}

.topnav {
  overflow: hidden;
  background-color: #000;
  padding:9px;
  position: sticky;
	 z-index: 4;
  

}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-family: 'Lexend Deca';
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1220px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1220px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>


</head>








<!--    ------------------  PHP code  ------------------------ -->

<?php

//  ----------  initialize disabled & opacity attributes  ---------------

$i = 1;
while($i < 53){
	${'disabled'.$i}='';
	${'opacity'.$i}=0;

	$i++;
}
$arr_attr = [];
$arr_edu = [];
$count = 0;

$arr_attr1 = [];
$arr1 = [];
$count1 = 0;


$arr_attr2 = [];
$arr2 = [];
$count2 = 0;


$arr_attr3 = [];
$arr3 = [];
$count3 = 0;


$arr_attr4 = [];
$arr4 = [];
$count4 = 0;


?>


<?php

//  ----------  Fetch data from tbl_education ---- database: admin_control --------
//  ----------  check for visible & mandatory  'yes' or 'no' ----------------------

$hostname = "localhost";
$username = "root";
$password = "";
$port=3307;
$databaseName = "admin_control";


	/*$school_name_10=$_POST['school_name_10'];
	$school_name_10_1=$_POST['school_name_10_1'];


	$board_name_10=$_POST['board_name_10'];
	$board_name_10_1=$_POST['board_name_10_1'];

	$percent_10=$_POST['percent_10'];
	$percent_10_1=$_POST['percent_10_1'];


	$year_pass_10=$_POST['year_pass_10'];
	$year_pass_10_1=$_POST['year_pass_10_1'];


	$school_name_12=$_POST['school_name_12'];
	$school_name_12_1=$_POST['school_name_12_1'];


	$board_name_12=$_POST['board_name_12'];
	$board_name_12_1=$_POST['board_name_12_1'];


	$percent_12=$_POST['percent_12'];
	$percent_12_1=$_POST['percent_12_1'];


	$year_pass_12=$_POST['year_pass_12'];
	$year_pass_12_1=$_POST['year_pass_12_1'];


	$stream=$_POST['stream'];
	$stream_1=$_POST['stream_1'];


	$jee_mains=$_POST['jee_mains'];
	$jee_mains_1=$_POST['jee_mains_1'];


	$jee_advance=$_POST['jee_advance'];
	$jee_advance_1=$_POST['jee_advance_1'];


	$UG_college=$_POST['UG_college'];
	$UG_college_1=$_POST['UG_college_1'];


	$UG_university=$_POST['UG_university'];
	$UG_university_1=$_POST['UG_university_1'];


	$UG_grades=$_POST['UG_grades'];
	$UG_grades_1=$_POST['UG_grades_1'];


	$UG_year_of_pass=$_POST['UG_year_of_pass'];
	$UG_year_of_pass_1=$_POST['UG_year_of_pass_1'];


	$PG_college=$_POST['PG_college'];
	$PG_college_1=$_POST['PG_college_1'];


	$PG_university=$_POST['PG_university'];
	$PG_university_1=$_POST['PG_university_1'];


	$PG_grades=$_POST['PG_grades'];
	$PG_grades_1=$_POST['PG_grades_1'];


	$PG_year_of_pass=$_POST['PG_year_of_pass'];
	$PG_year_of_pass_1=$_POST['PG_year_of_pass_1'];


	$achievements=$_POST['achievements'];
	$achievements_1=$_POST['achievements_1'];*/




	$conn = mysqli_connect($hostname, $username, $password, $databaseName, $port);

	$query1 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_education` ";
 $query2 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_biographic` ";
 $query3 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_signature` ";
 $query4 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_personal` ";
 $query5 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_contact` ";



//  loop for  EDUCATIONAL QUALIFICATION BLOCK ------------------------------


 $result1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($result1)>0){

		$i=1;


		while($row=mysqli_fetch_assoc($result1))
		{
	   			//echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';

			if($row['attributes']=='School_name_10' || $row['attributes']=='Board_name_10' || $row['attributes']=='Percent_10' ||
				$row['attributes']=='Year_pass_10' || $row['attributes']=='School_name_12' || $row['attributes']=='Board_name_12' || $row['attributes']=='Percent_12' || $row['attributes']=='Year_pass_12' || $row['attributes']=='Stream' || $row['attributes']=='Jee_mains' || $row['attributes']=='Jee_advance' || $row['attributes']=='UG_college'  || $row['attributes']=='UG_university' || $row['attributes']=='UG_grades' || $row['attributes']=='UG_year_of_pass' || $row['attributes']=='PG_college' || $row['attributes']=='PG_university' || $row['attributes']=='PG_grades' || $row['attributes']=='PG_year_of_pass' || $row['attributes']=='Achievements'){

				if($row['visible']=='yes'){

					${'disabled'.$i} = '';
				}

				else{
					${'disabled'.$i} = 'disabled';
				}


				if($row['mandatory']=='yes'){

					${'opacity'.$i} = 1;
					$arr_edu[$i] = 1;
					++$count;
				}

				else{
					${'opacity'.$i} = 0;
					$arr_edu[$i] = 0;

				}

       $arr_attr[$i] = $row['attributes'];

		}

			$i++;

		}

	}
	else{
		echo 'Problem Occured';
	}

	//echo $count;




//  loop for  BIOGRAPHIC DETAILS BLOCK ------------------------------


  $result2 = mysqli_query($conn, $query2);

if(mysqli_num_rows($result2)>0){

  $i=21;


  while($row=mysqli_fetch_assoc($result2))
  {
       //echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


   if($row['attributes']=='Gender' || $row['attributes']=='Blood_group' || $row['attributes']=='Height' || $row['attributes']=='Disability' || $row['attributes']=='Body_marks'){

    if($row['visible']=='yes'){

     ${'disabled'.$i} = '';
    }

    else{
     ${'disabled'.$i} = 'disabled';
    }


    if($row['mandatory']=='yes'){

     ${'opacity'.$i} = 1;
     $arr1[$i] = 1;
     ++$count1;
    }

    else{
     ${'opacity'.$i} = 0;
     $arr1[$i] = 0;

    }

       $arr_attr1[$i] = $row['attributes'];

  }

   $i++;

  }
 }
 else{
  echo 'Problem Occured';
 }



//  loop for  PHOTO & SIGNATURE BLOCK ------------------------------


 $result3 = mysqli_query($conn, $query3);

if(mysqli_num_rows($result3)>0){

  $i=26;


  while($row=mysqli_fetch_assoc($result3))
  {
       //echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


   if($row['attributes']=='Student_photo' || $row['attributes']=='Student_signature' ){

    if($row['visible']=='yes'){

     ${'disabled'.$i} = '';
    }

    else{
     ${'disabled'.$i} = 'disabled';
    }


    if($row['mandatory']=='yes'){

     ${'opacity'.$i} = 1;
     $arr2[$i] = 1;
     ++$count2;
    }

    else{
     ${'opacity'.$i} = 0;
     $arr2[$i] = 0;

    }

       $arr_attr2[$i] = $row['attributes'];

  }

   $i++;

  }

 }
 else{
  echo 'Problem Occured';
 }



 //loop for  PERSONAL DETAILS BLOCK ------------------------------



 $result4 = mysqli_query($conn, $query4);

if(mysqli_num_rows($result4)>0){

  $i=28;


  while($row=mysqli_fetch_assoc($result4))
  {
       //echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


   if($row['attributes']=='Student_name' || $row['attributes']=='DOB' || $row['attributes']=='Category' || $row['attributes']=='Religion' || $row['attributes']=='Nationality' || $row['attributes']=='Father_name' || $row['attributes']=='Father_occupation' || $row['attributes']=='Father_phone' || $row['attributes']=='Father_email' || $row['attributes']=='Mother_name' || $row['attributes']=='Mother_occupation' || $row['attributes']=='Mother_phone' || $row['attributes']=='Mother_email' || $row['attributes']=='Adhar_no' || $row['attributes']=='SSSM' ){

    if($row['visible']=='yes'){

     ${'disabled'.$i} = '';
    }

    else{
     ${'disabled'.$i} = 'disabled';
    }


    if($row['mandatory']=='yes'){

     ${'opacity'.$i} = 1;
     $arr3[$i] = 1;
     ++$count3;
    }

    else{
     ${'opacity'.$i} = 0;
     $arr3[$i] = 0;

    }

       $arr_attr3[$i] = $row['attributes'];

  }

   $i++;

  }

 }
 else{
  echo 'Problem Occured';
 }






//  loop for ADDRESS & CONTACT BLOCK ------------------------------



 $result5 = mysqli_query($conn, $query5);

if(mysqli_num_rows($result5)>0){

  $i=43;


  while($row=mysqli_fetch_assoc($result5))
  {
       //echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


   if($row['attributes']=='Student_phone' || $row['attributes']=='Student_alt_phone' || $row['attributes']=='Student_email' || $row['attributes']=='Student_alt_email' || $row['attributes']=='Permanent_address' || $row['attributes']=='Permanent_state' || $row['attributes']=='Permanent_pin_code' || $row['attributes']=='Residential_address' || $row['attributes']=='Residential_state' || $row['attributes']=='Residential_pin_code' ){

    if($row['visible']=='yes'){

     ${'disabled'.$i} = '';
    }

    else{
     ${'disabled'.$i} = 'disabled';
    }


    if($row['mandatory']=='yes'){

     ${'opacity'.$i} = 1;
     $arr4[$i] = 1;
     ++$count4;
    }

    else{
     ${'opacity'.$i} = 0;
     $arr4[$i] = 0;

    }

       $arr_attr4[$i] = $row['attributes'];

  }

   $i++;

  }

 }
 else{
  echo 'Problem Occured';
 }


	?>


	<?php

     		$hostname = "localhost";
        $username = "root";
        $password = "";
        $port=3307;
        $databaseName = "admin_control";

        $connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);

        $query = "SELECT * FROM `tbl_preferences`";

        $result = mysqli_query($connect, $query);

        $faculty_names = [];
        $branch_list_names = [];

        while($row = mysqli_fetch_assoc($result)){
        	$faculty_names[] = $row['Faculty'];
        	$branch_list_names[] = $row['Branch/course'];
        }

         //foreach ($faculty_names as $key => $value){
         // echo $value;echo '<br>';
         // }
         // echo '<br>';echo '<br>';
         // foreach ($branch_list_names as $key => $value) {
         // 	echo $value;echo '<br>';
         // }
 
        $i=0;        
        foreach ($branch_list_names as $value) {
          $arr=[];
         	$arr = explode('###',$value);
         	$branch_list_names[$i] = $arr;
         	$i++;
        }

        //   echo '<br>';echo '<br>';
        // foreach ($branch_list_names as $values) {
        //  	foreach ($values as $value) {
        //  echo $value.' ';
         
        //   	}echo '<br>';
        //  }


?>




<!--  ------------------  HTML  Body   -----------------  -->

	<body>

		<!--  --------------------Navigation bar-----------------------  -->
<!-- 		<div class="nav-bar" >
			<nav class="navbar navbar-expand-lg" style="background-color: black; ">
				<a class="navbar-brand" href="#"><img src="img/medicaps.jpg"></a><p id="links">&nbsp;&nbsp;Medi-Caps University, Indore</p>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="http://www.medicaps.ac.in/">HOME </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#info">ABOUT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="http://www.medicaps.ac.in/FAQ.pdf">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">CONTACT</a>
						</li>
					</ul>
				</div>
			</nav>
		</div> -->

		<div class="topnav" id="myTopnav">
  <a href="" class="active">Home</a>
  <a href="Programs_Offered.html">Courses Offered & Fees Structure</a>
  <a href="Online_Admission_Process.html">Online Admission Process</a>
  <a href="Tentative_Counselling_Schedule.html">Tentative Counselling Schedule</a>
  <a href="Cancellation_Policy.html">Cancellation Policy</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




		<!--  -------------------- Tabs- details-----------------------  -->
		<!-- <div class="tabs">
			<ul>
				<li id="tab1">
					<a id="nav-link-1" class="nav-link">Personal Details</a>
				</li>
				<li id="tab2" ><a id="nav-link-2" class="nav-link">Educational Qualifications</a></li>
				<li id="tab3"><a id="nav-link-3" class="nav-link">Biographic Details</a></li>
				<li id="tab4"><a id="nav-link-4" class="nav-link">Address & Contacts</a></li>
				<li id="tab5"><a id="nav-link-5" class="nav-link">Photo & Signature</a></li>
			</ul>
		</div> -->
		<form action="?" method="post" enctype="multipart/form-data">

		<div class="Registration_form" style="background-color: white;">
				<!-- -------------------Header------------------- -->


<a href="#" id="tab_click"></a>
		<div class="logo-medi">
		<center>
			<img id="logo" src="img/logo.jpg" style="width: 578px;">
		 </center>
		</div>



			<div class="tile" id="tile-1">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <div class="slider" ></div>
     <li class="nav-item">
        <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal-block" role="tab" aria-controls="home" aria-selected="true" style="pointer-events: none; " ><i class="fas fa-info-circle fa-lg" style="color: white;"></i> <br> <span class="s1" style="color: white;"> &nbsp;Personal</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="education-tab" data-toggle="tab" href="#education-block" role="tab" aria-controls="profile" aria-selected="false" style="pointer-events: none"><i class="fas fa-user-graduate" aria-hidden="true" style=" color: white;"></i> <br> <span style="color: white; "> &nbsp;Education</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="biographic-tab" data-toggle="tab" href="#biographic-block" role="tab" aria-controls="contact" aria-selected="false" style="pointer-events: none"><i class="fas fa-fingerprint" aria-hidden="true" style="color: white;"></i> <br> <span style="color: white; "> &nbsp;Biographic</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-block" role="tab" aria-controls="setting" aria-selected="false" style="pointer-events: none"><i class="fas fa-phone" aria-hidden="true" style=" color: white;"></i> <br> <span style="color: white; "> &nbsp;Contact</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="attachments-tab" data-toggle="tab" href="#attachment-block" role="tab" aria-controls="setting" aria-selected="false" style="pointer-events: none" ><i class="fas fa-paperclip fa-lg" style="color: white;"></i> <br> <span style="color: white;"> &nbsp;Attachments</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="preferences-tab" data-toggle="tab" href="#preferences-block" role="tab" aria-controls="setting" aria-selected="false" style="pointer-events: none"><i class="far fa-list-alt" style="color: white; "></i> <br> <span style="color: white; "> &nbsp;Preferences</span></a>
      </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   <div class="tab-pane fade show active" id="personal-block" role="tabpanel" aria-labelledby="home-tab">

   	<div id="personal"><br>
					<h2>Personal Details</h2><br>
					<table>
						<tr><td id="head">Student Details</td></tr>
						<tr>

							<td>
								<div class="icon-field">
									<input type="text" placeholder="Name" name="student_name" class="form-control" id="Student_name" <?php echo $disabled28; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity28; ?>"></i>
								</div>
							</td>

							<td>
								<div class="icon-field">
									<input type="text" placeholder="Date Of Birth" name="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="DOB" <?php echo $disabled29; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity29; ?>"></i>
								</div>
							</td>


						</tr>

						<tr>

							<td>
								<div class="icon-field">
									<input type="text" placeholder="Category" name="category" class="form-control" id="Category" <?php echo $disabled30; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity30; ?>"></i>
								</div>
							</td>

							<td>
								<div class="icon-field">
									<input type="text" placeholder="Religion" name="religion" class="form-control" id="Religion" <?php echo $disabled31; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity31; ?>"></i>
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Nationality" name="nationality" class="form-control" id="Nationality"<?php echo $disabled32; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity32; ?>"></i>
								</div><br>
							</td>
						</tr>

						<tr><td id="head">Father's Details</td></tr>
						<tr>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Father's Name" name="father_name" class="form-control" id="Father_name" <?php echo $disabled33; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity33; ?>"></i>
								</div>
							</td>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Occupation" name="father_occupation" class="form-control" id="Father_occupation" <?php echo $disabled34; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity34; ?>"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Phone" name="father_phone" class="form-control error-val-in-me" id="Father_phone" <?php echo $disabled35; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity35; ?>"></i><i id="iconp1" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconp2" class="fa fa-exclamation-circle" aria-hidden="true"></i>
									<span class="error" id="errorp1"></span>
								</div>
							</td>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Email" name="father_email" class="form-control error-val-in-me" id="Father_email" <?php echo $disabled36; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity36; ?>"></i>
									<i id="iconp3" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconp4" class="fa fa-exclamation-circle" aria-hidden="true"></i>
									<span class="error" id="errorp2"></span>
								</div>
							</td>
						</tr>
						<tr><td id="head">Mother's Details</td></tr>
						<tr>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Mother's Name" name="mother_name" class="form-control" id="Mother_name" <?php echo $disabled37; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity37; ?>"></i>
								</div>
							</td>
							<td>
								<div class="icon-field">
									<input type="text" placeholder="Occupation" name="mother_occupation" class="form-control" id="Mother_occupation" <?php echo $disabled38; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity38; ?>"></i>
									</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="icon-field">
											<input type="text" placeholder="Phone"  name="mother_phone" class="form-control error-val-in-me" id="Mother_phone" <?php echo $disabled39; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity39; ?>"></i>
											<i id="iconp5" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconp6" class="fa fa-exclamation-circle" aria-hidden="true"></i>
											<span class="error" id="errorp3"></span>
										</div>

									</td>
									<td>
										<div class="icon-field">
											<input type="text" placeholder="Email" name="mother_email" class="form-control error-val-in-me" id="Mother_email" <?php echo $disabled40; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity40; ?>"></i>
											<i id="iconp7" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconp8" class="fa fa-exclamation-circle" aria-hidden="true"></i>
											<span class="error" id="errorp4"></span>	</div>
										</td>
									</tr>

									<tr><td id="head">ID Proof</td></tr>
									<tr>
										<td>
											<div class="icon-field">
												<input type="text" placeholder="Adhar No." id ="Adhar_no" name="adhar_no" class="form-control error-val-in-me" <?php echo $disabled41; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity41; ?>"></i><i id="iconp9" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconp10" class="fa fa-exclamation-circle" aria-hidden="true"></i>
												<span class="error" id="errorp5"></span>
											</div>
										</td>
										<td>
											<div class="icon-field">
												<input type="text" placeholder="SSSM ID" id ="SSSM" name="SSSM" class="form-control error-val-in-me" <?php echo $disabled42; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity42; ?>"></i><i id="iconp11" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconp12" class="fa fa-exclamation-circle" aria-hidden="true"></i>
												<span class="error" id="errorp6"></span>
											</div>
										</td>
									</tr>
								</table>

							</div>




   </div>


  <div class="tab-pane fade" id="education-block" role="tabpanel" aria-labelledby="profile-tab">

  <!--  ------------------ Educational Qualification -------------------- -->

							<div id="education"><br>
								<h2>Educational Qualification</h2><br>
								<div>
									<table width="800px">

										<tr>
											<td>
												<label for="exampleInputEmail1">Standard 10<sup>th</sup></label>
												<div class="icon-field">
													<input type="text" name="school_name_10" class="form-control" id="School_name_10" aria-describedby="emailHelp" placeholder="Enter School Name"  <?php echo $disabled1; ?> ><i class="fas fa-asterisk" style="opacity: <?php echo $opacity1; ?>"></i><i id="icon1" class="fa fa-check-circle" aria-hidden="true"></i><i id="icon2" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error1"></span>
												</div>
											</td>
											<td>

												<label>&nbsp;</label><div class="icon-field">
													<input type="text" name="board_name_10" class="form-control" id="Board_name_10" aria-describedby="emailHelp" placeholder="Enter Board Name" <?php echo $disabled2; ?> ><i class="fas fa-asterisk" style="opacity: <?php echo $opacity2; ?>"></i><i id="icon3" class="fa fa-check-circle" aria-hidden="true"></i><i id="icon4" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error2"></span>
												</div>
											</td>
										</tr>

										<tr>
											<td>
												<div class="icon-field">
													<input type="text" name="percent_10" class="form-control error-val-in-me" id="Percent_10" aria-describedby="emailHelp" placeholder="Enter CGPA/Percentage" onfocusout="check(this,5,6,3)" <?php echo $disabled3; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity3; ?>"></i><i id="icon5" class="fa fa-check-circle" aria-hidden="true" ></i><i id="icon6" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error3"></span>
												</div>
											</td>
											<td>
												<div class="icon-field">
													<input type="text" name="year_pass_10" class="form-control error-val-in-me" id="Year_pass_10" aria-describedby="emailHelp" placeholder="Year Of Passing" onfocusout="check(this,7,8,4)" <?php echo $disabled4; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity4; ?>"></i><i id="icon7" class="fa fa-check-circle" aria-hidden="true" ></i><i id="icon8" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error4"></span>
												</div>
											</td>
										</tr>


										<tr>
											<td>
												<label for="exampleInputEmail1">Standard 12<sup>th</sup></label>
												<div class="icon-field">
													<input type="text" name="school_name_12" class="form-control" id="School_name_12" aria-describedby="emailHelp" placeholder="Enter School Name" <?php echo $disabled5; ?> ><i class="fas fa-asterisk" style="opacity: <?php echo $opacity5; ?>"></i><i id="icon9" class="fa fa-check-circle" aria-hidden="true"></i><i id="icon10" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error5"></span>
												</div>
											</td>

											<td>
												<label>&nbsp;</label>
												<div class="icon-field">
													<input type="text" name="board_name_12" class="form-control" id="Board_name_12" aria-describedby="emailHelp" placeholder="Enter Board Name" <?php echo $disabled6; ?> ><i class="fas fa-asterisk" style="opacity: <?php echo $opacity6; ?>"></i><i id="icon11" class="fa fa-check-circle" aria-hidden="true"></i><i id="icon12" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error6"></span>
												</div>
											</td>


										</tr>

										<tr>
											<td>

												<div class="icon-field">
													<input type="text" name="percent_12" onfocusout="check(this,13,14,7)" class="form-control error-val-in-me" id="Percent_12" aria-describedby="emailHelp" placeholder="Enter CGPA/Percentage" <?php echo $disabled7; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity7; ?>"></i><i id="icon13" class="fa fa-check-circle" aria-hidden="true" ></i><i id="icon14" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error7"></span>
												</div>
											</td>
											<td>

												<div class="icon-field">
													<input type="text" name="year_pass_12" class="form-control error-val-in-me" id="Year_pass_12" aria-describedby="emailHelp" placeholder="Year Of Passing" onfocusout="check(this,15,16,8)" <?php echo $disabled8; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity8; ?>"></i><i id="icon15" class="fa fa-check-circle" aria-hidden="true" ></i><i id="icon16" class="fa fa-exclamation-circle" aria-hidden="true"></i>
													<span class="error" id="error8"></span>
												</div>
											</td>
										</tr>


									</table>
								</div>
								<table>
									<tr>

										<td>
											<label>Choose Stream </label><sup><i class="fas fa-asterisk" style="color: red; margin-left: 8px; font-size: 11px; opacity: <?php echo $opacity9; ?>"></i></sup>&nbsp;&nbsp;&nbsp;&nbsp;
											<div class="icon-field">
												<input type="radio" name="stream" value="Science" id="Science" aria-label="Radio button for following text input" onclick="Jee_show()" checked <?php echo $disabled9; ?>>Science&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="stream" value="Commerce" id="Stream" aria-label="Radio button for following text input" onclick="Jee_show()" <?php echo $disabled9; ?>>Commerce&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" name="stream" value="Arts" id="Stream" aria-label="Radio button for following text input" onclick="Jee_show()" <?php echo $disabled9; ?>>Arts
												<i id="icon17" class="fa fa-exclamation-circle" aria-hidden="true"></i>
												<span class="error" id="error9"></span>
											</div>
										</td>
									</tr>

									<tr id="Jee_show">
										<td>
											<label for="exampleInputEmail1">JEE Score</label>
											<div class="icon-field">
												<input type="text" name="jee_mains" class="form-control error-val-in-me" id="Jee_mains" aria-describedby="emailHelp" placeholder="Enter JEE Score" onfocusout="check(this,18,19,10)" <?php echo $disabled10; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity10; ?>"></i><i id="icon18" class="fa fa-check-circle" aria-hidden="true"></i><i id="icon19" class="fa fa-exclamation-circle" aria-hidden="true"></i>
												<span class="error" id="error10"></span>
											</div>
										</td>

										<td>
											<label for="exampleInputEmail1">&nbsp;</label>
											<div class="icon-field">
												<input type="text" name="jee_advance" class="form-control error-val-in-me" id="Jee_advance" aria-describedby="emailHelp" placeholder="Enter Advance Score" onfocusout="check(this,20,21,11)" <?php echo $disabled11; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity11; ?>"></i><i id="icon20" class="fa fa-check-circle" aria-hidden="true"></i><i id="icon21" class="fa fa-exclamation-circle" aria-hidden="true"></i>
												<span class="error" id="error11"></span>
											</div>
										</td>
									</tr>


								</table>



								<div>
									<table width="800px">

										<tr>
											<td>
												<label>Graduation course</label><br>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="icon-field">
													<input type="checkbox" class="form-check-input" id="UG_check" onclick="Graduation1()" >Under-graduate course <sup><i class="fas fa-asterisk" style="<?php if($opacity12 || $opacity13 || $opacity14 || $opacity15) {?> opacity: 1;<?php } else{?>opacity: 0;<?php } ?> margin-left: 8px;"></i></sup></div>
												</td>
												<td>
													<label>&nbsp;</label><br>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="icon-field">
														<input type="checkbox" class="form-check-input" id="PG_check" onclick="Graduation1()" >Post-graduate course <sup><i class="fas fa-asterisk" style="<?php if($opacity16 || $opacity17 || $opacity18 || $opacity19){?> opacity: 1;<?php } else{?>opacity: 0;<?php } ?> margin-left: 8px;"></i></sup></div>
													</td>

												</tr>

											</table>
										</div>


										<div id="graduation-tables" style=" float:left;">

											<table class="graduation">


												<tr id="Graduation1">
													<td >
														<div class="icon-field">
															<input type="text"name="UG_college" class="form-control" id="UG_college" aria-describedby="emailHelp"  placeholder="Enter UG College" <?php echo $disabled12; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity12; ?>"></i></div></td>

														<td>
															<div class="icon-field">
																<input type="text"name="UG_university" class="form-control" id="UG_university" aria-describedby="emailHelp" placeholder="Enter University" <?php echo $disabled13; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity13; ?>"></i></div>
															</td>

														</tr>


														<tr id="Graduation2" >
															<td >
																<div class="icon-field">
																	<input type="text"name="UG_grades" class="form-control" id="UG_grades" aria-describedby="emailHelp" placeholder="Enter UG Grades" <?php echo $disabled14; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity14; ?>"></i></div>
																</td>

																<td >
																	<div class="icon-field">
																		<input type="text"name="UG_year_of_pass" class="form-control" id="UG_year_of_pass" aria-describedby="emailHelp" placeholder="Year of Passing" <?php echo $disabled15; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity15; ?>"></i></div>

																	</td>

																</tr>

															</table>



															<table class="graduation">

																<tr id="Graduation3">

																	<td>
																		<div class="icon-field">
																			<input type="text"name="PG_college" class="form-control" id="PG_college" aria-describedby="emailHelp" placeholder="Enter PG College" <?php echo $disabled16; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity16; ?>"></i></div>
																		</td>

																		<td>
																			<div class="icon-field">
																				<input type="text"name="PG_university" class="form-control" id="PG_university" aria-describedby="emailHelp" placeholder="Enter PG University" <?php echo $disabled17; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity17; ?>"></i></div>
																			</td>


																		</tr>



																		<tr id="Graduation4" >
																			<td >
																				<div class="icon-field">
																					<input type="text"name="PG_grades" class="form-control" id="PG_grades" aria-describedby="emailHelp" placeholder="Enter PG Grades" <?php echo $disabled18; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity18; ?>"></i></div>
																				</td>

																				<td>
																					<div class="icon-field">
																						<input type="text"name="PG_year_of_pass" class="form-control" id="PG_year_of_pass" aria-describedby="emailHelp" placeholder="Year of Passing" <?php echo $disabled19; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity19; ?>"></i></div>
																					</td>
																				</tr>

																			</table>
																		</div>


																			<div id="achievements-table">
																				<table style="width: 500px;">
																					<tr>

																						<td colspan=3>
																							<br><br>
																							<label>Achievements</label><div class="icon-field" style="width: 450px;">
																								<textarea class="form-control z-depth-1" name="achievements" id="Achievements" rows="3" placeholder="Enter here" <?php echo $disabled20; ?>></textarea><i class="fas fa-asterisk" style="opacity: <?php echo $opacity20; ?>"></i></div>
																								<br><br>
																							</td>
																						</tr>
																					</table>
																				</div>

																			</div>
																		</div>








  <div class="tab-pane fade" id="biographic-block" role="tabpanel" aria-labelledby="contact-tab">

  			<!--  ------------------ Biographic Details -------------------- -->

																		<div id="biographic">
																			<br>
																			<h2>Biographic Details</h2><br>
																			<table>
																				<tr>
																					<td>
																						<label> Gender</label><sup><i class="fas fa-asterisk" style="color: red; margin-left: 8px; font-size: 11px; opacity: <?php echo $opacity21; ?>"></i></sup>

																						<div class="icon-field">
																							<input type="radio" name="gender" value="" id="Gender" <?php echo $disabled21; ?> onclick="getGender(this,'M')"> Male &emsp;&emsp;
																							<input type="radio" name="gender" value="" id="Gender" <?php echo $disabled21; ?> onclick="getGender(this,'F')"> Female<br>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<div class="icon-field">
																							<select name="blood_group" class="form-control" id="Blood_group" <?php echo $disabled22; ?>>

																								<option value="" selected disabled>Blood Group</option>
																								<option value="A+">A+</option>
																								<option value="A-">A-</option>
																								<option value="B+">B+</option>
																								<option value="B-">B-</option>
																								<option value="AB+">AB+</option>
																								<option value="AB-">AB-</option>
																								<option value="O+">O+</option>
																								<option value="O-">O-</option>
																							</select><i class="fas fa-asterisk" style="opacity: <?php echo $opacity22; ?>"></i>

																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<div class="icon-field">
																							<input type="text" placeholder="Height (in cm)"  id ="Height" name="height"  class="form-control error-val-in-me" <?php echo $disabled23; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity23; ?>"></i>
																							<i id="iconb1" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconb2" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																							<span class="error" id="errorb1"></span>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<label>Disabilities</label>
																							<div class="icon-field">
																								<textarea class="form-control z-depth-1" name="disability" id="Disability" rows="3" placeholder="Enter here" <?php echo $disabled24; ?>></textarea><i class="fas fa-asterisk" style="opacity: <?php echo $opacity24; ?>"></i>
																							</div>
																						</td>
																					</tr>
																					<tr>
																						<td><br>
																							<label>Body marks</label>
																							<div class="icon-field">
																								<textarea class="form-control z-depth-1" name="body_marks" id="Body_marks" rows="3" placeholder="Enter here" <?php echo $disabled25; ?>></textarea><i class="fas fa-asterisk" style="opacity: <?php echo $opacity25; ?>"></i>
																							</div>
																						</td>
																					</tr>

																				</table>


																			</div>


 </div>

  <div class="tab-pane fade" id="contact-block" role="tabpanel" aria-labelledby="setting-tab">
  <!--  ------------------ Address & contacts  -------------------- -->

																			<div id="contact"><br>
																				<h2>Address & Contact</h2><br>
																				<table>
																					<tr>

																						<td>
																							<label>Student's Mobile No.</label>
																							<div class="icon-field">
																								<input type="text" placeholder="Student's Phone No." class="form-control error-val-in-me" id ="Student_phone" name="student_phone" <?php echo $disabled43; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity43; ?>"></i><i id="iconc1" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconc2" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																								<span class="error" id="errorc1"></span></div>

																							</td>
																							<td>
																								<label>&nbsp;</label>
																								<div class="icon-field">
																									<input type="text" placeholder="Alternate Phone No." id ="Student_alt_phone" class="form-control error-val-in-me" name="student_alt_phone" <?php echo $disabled44; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity44; ?>"></i><i id="iconc3" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconc4" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																									<span class="error" id="errorc2"></span></div>
																								</td>
																							</tr>
																							<tr>

																								<td><label>Student's Email</label>
																									<div class="icon-field">
																										<input type="text" placeholder="Student's Email" id ="Student_email" class="form-control error-val-in-me"  name="student_email" <?php echo $disabled45; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity45; ?>"></i><i id="iconc5" class="fa fa-check-circle" aria-hidden="true" ></i><i id="iconc6" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																										<span class="error" id="errorc3"></span></div>
																									</td>
																									<td>
																										<label>&nbsp;</label>
																										<div class="icon-field">
																											<input type="text" placeholder="Alternate Email" id ="Student_alt_email" class="form-control error-val-in-me"  name="student_alt_email" <?php echo $disabled46; ?>><i class="fas fa-asterisk" style="opacity: <?php echo $opacity46; ?>"></i><i id="iconc7" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconc8" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																											<span class="error" id="errorc4"></span></div>
																										</td>
																									</tr>
																									<tr>
																										<td><label>Residential Address</label>
																											<div class="icon-field">
																												<textarea name="residential_address" placeholder="Enter Address" id="Residential_address" class="form-control" <?php echo $disabled47; ?>></textarea><i class="fas fa-asterisk" style="opacity: <?php echo $opacity47; ?>"></i>
																												<i id="iconc9" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconc10" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																												<span class="error" id="errorc5"></span></div>
																											</td>
																											<td>

																												<div class="icon-field">
																													<select name="residential_state" class="form-control" id="Residential_state" <?php echo $disabled48; ?>>
																														<option value="" disabled selected>Select State</option>
																														<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
																														<option value="Andhra Pradesh">Andhra Pradesh</option>
																														<option value="Arunachal Pradesh">Arunachal Pradesh</option>
																														<option value="Assam">Assam</option>
																														<option value="Bihar">Bihar</option>
																														<option value="Chandigarh">Chandigarh</option>
																														<option value="Chhattisgarh">Chhattisgarh</option>
																														<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
																														<option value="Daman and Diu">Daman and Diu</option>
																														<option value="Delhi">Delhi</option>
																														<option value="Goa">Goa</option>
																														<option value="Gujarat">Gujarat</option>
																														<option value="Haryana">Haryana</option>
																														<option value="Himachal Pradesh">Himachal Pradesh</option>
																														<option value="Jammu and Kashmir">Jammu and Kashmir</option>
																														<option value="Jharkhand">Jharkhand</option>
																														<option value="Karnataka">Karnataka</option>
																														<option value="Kerala">Kerala</option>
																														<option value="Lakshadweep">Lakshadweep</option>
																														<option value="Madhya Pradesh">Madhya Pradesh</option>
																														<option value="Maharashtra">Maharashtra</option>
																														<option value="Manipur">Manipur</option>
																														<option value="Meghalaya">Meghalaya</option>
																														<option value="Mizoram">Mizoram</option>
																														<option value="Nagaland">Nagaland</option>
																														<option value="Orissa">Orissa</option>
																														<option value="Pondicherry">Pondicherry</option>
																														<option value="Punjab">Punjab</option>
																														<option value="Rajasthan">Rajasthan</option>
																														<option value="Sikkim">Sikkim</option>
																														<option value="Tamil Nadu">Tamil Nadu</option>
																														<option value="Tripura">Tripura</option>
																														<option value="Uttaranchal">Uttaranchal</option>
																														<option value="Uttar Pradesh">Uttar Pradesh</option>
																														<option value="West Bengal">West Bengal</option>
																													</select><i class="fas fa-asterisk" style="opacity: <?php echo $opacity48; ?>"></i>
																												</div>
																											</td>
																											<td>
																												<div class="icon-field"><br>
																													<input type="text" placeholder="Pin Code"  id ="Residential_pin_code" class="form-control error-val-in-me"  name="residential_pin_code" <?php echo $disabled49; ?>><i class="fas fa-asterisk" style="top: 32px; opacity: <?php echo $opacity49; ?>"></i><i id="iconc11" class="fa fa-check-circle" aria-hidden="true" style="top: 32px;"></i><i id="iconc12" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																													<span class="error" id="errorc6"></span></div>
																												</td>
																											</tr>
																											<tr>
																												<td><label>Permanent Address</label>
																													<div class="icon-field">
																														<textarea name="permanent_address" placeholder="Enter Address" id="Permanent_address" class="form-control" <?php echo $disabled50; ?> ></textarea><i class="fas fa-asterisk" style="opacity: <?php echo $opacity50; ?>"></i>
																														<i id="iconc13" class="fa fa-check-circle" aria-hidden="true"></i><i id="iconc14" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																														<span class="error" id="errorc7"></span></div>
																													</td>
																													<td>
																														<div class="icon-field">
																															<select name="permanent_state" class="form-control" id="Permanent_state" <?php echo $disabled51; ?>>
																																<option value="" disabled selected>Select State</option>
																																<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
																																<option value="Andhra Pradesh">Andhra Pradesh</option>
																																<option value="Arunachal Pradesh">Arunachal Pradesh</option>
																																<option value="Assam">Assam</option>
																																<option value="Bihar">Bihar</option>
																																<option value="Chandigarh">Chandigarh</option>
																																<option value="Chhattisgarh">Chhattisgarh</option>
																																<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
																																<option value="Daman and Diu">Daman and Diu</option>
																																<option value="Delhi">Delhi</option>
																																<option value="Goa">Goa</option>
																																<option value="Gujarat">Gujarat</option>
																																<option value="Haryana">Haryana</option>
																																<option value="Himachal Pradesh">Himachal Pradesh</option>
																																<option value="Jammu and Kashmir">Jammu and Kashmir</option>
																																<option value="Jharkhand">Jharkhand</option>
																																<option value="Karnataka">Karnataka</option>
																																<option value="Kerala">Kerala</option>
																																<option value="Lakshadweep">Lakshadweep</option>
																																<option value="Madhya Pradesh">Madhya Pradesh</option>
																																<option value="Maharashtra">Maharashtra</option>
																																<option value="Manipur">Manipur</option>
																																<option value="Meghalaya">Meghalaya</option>
																																<option value="Mizoram">Mizoram</option>
																																<option value="Nagaland">Nagaland</option>
																																<option value="Orissa">Orissa</option>
																																<option value="Pondicherry">Pondicherry</option>
																																<option value="Punjab">Punjab</option>
																																<option value="Rajasthan">Rajasthan</option>
																																<option value="Sikkim">Sikkim</option>
																																<option value="Tamil Nadu">Tamil Nadu</option>
																																<option value="Tripura">Tripura</option>
																																<option value="Uttaranchal">Uttaranchal</option>
																																<option value="Uttar Pradesh">Uttar Pradesh</option>
																																<option value="West Bengal">West Bengal</option>
																															</select><i class="fas fa-asterisk" style="opacity: <?php echo $opacity51; ?>"></i>
																														</div>
																													</td>
																													<td>
																														<div class="icon-field"><br>
																															<input type="text" placeholder="Pin Code" class="form-control error-val-in-me"  id ="Permanent_pin_code"  name="permanent_pin_code" <?php echo $disabled52; ?>><i class="fas fa-asterisk" style="top: 32px; opacity: <?php echo $opacity52; ?>"></i><i id="iconc15" class="fa fa-check-circle" aria-hidden="true" style="top: 32px;"></i><i id="iconc16" class="fa fa-exclamation-circle" aria-hidden="true"></i>
																															<span class="error" id="errorc8"></span></div>
																														</td>
																													</tr>
																												</table>
																											</div>

					 </div>


   <div class="tab-pane fade" id="attachment-block" role="tabpanel" aria-labelledby="setting-tab">
<!--  ------------------ Photo & Signature -------------------- -->

																											<div id="signature"><br>
																												<h2>Photo & Signature</h2><br>

																												<div class="row">
																													<div class="col-sm-4 col-sm-offset-1">
																														<div class="picture-container">
																															<div class="picture">
																																<img src="img/profile.png" class="picture-src" id="Student_photo_file" title=""/>
																																<input type="file" name="student_photo" id="Student_photo"  <?php echo $disabled26; ?>>
																															</div><div class="icon-field" >
                               <h6>Upload Photo <sup><i class="fas fa-asterisk" style=" margin-left: 5px; opacity: <?php echo $opacity26; ?>"></i></sup></h6></div>
																														</div>
																													</div>



																													<div class="col-sm-4 col-sm-offset-1">
																														<div class="picture-container">
																															<div class="picture">
																																<img src="img/signature.png" class="picture-src" id="Student_signature_file" title=""/>
																																<input type="file" name="student_signature" id="Student_signature" <?php echo $disabled27; ?>>
																															</div><div class="icon-field" >
																															<h6>Upload Signature <sup><i class="fas fa-asterisk" style=" margin-left: 5px; opacity: <?php echo $opacity27; ?>"></i></sup></h6></div>
																														</div>
																													</div>
																												</div>


																												

																										
																										


																											</div>


</div>


   <div class="tab-pane fade" id="preferences-block" role="tabpanel" aria-labelledby="setting-tab">


                         <div id="choice-filling"><br>
                         <h2>Choice Preferences</h2><br>

                           <div class="row">
                           <table>
                            <tr>
                             <td>
                             <label for="exampleInputEmail1">Select Faculty</label>
                             <div class="icon-field">
                             <select name="faculty_list" id="faculty_list" class="form-control">                 				 
                           			</select>
                             </div>
                             </td>

                              <td>
                              <label for="exampleInputEmail1">Select Branch/Course</label>
                              <div class="icon-field">
                               <select name="branch_course_list" id="branch_course_list" class="form-control">
                           							<option value="" selected disabled>Branch/Courses</option>
                           			</select>
                              </div>
                              </td>
                             </tr>

                             <tr>
                              <td></td>
                              <td align="center"><br>
                             <input type="button"  onclick="addRow();" class="btn btn-primary" value="Add Preferences">
                             <input type="hidden" name="table_to_faculty_array" id="table_to_faculty_array">
                             <input type="hidden" name="table_to_branch_array" id="table_to_branch_array">
                            </td>
                             </tr>
                              </table>

                              </div><br>


                             <div class="row"><div id="prefernce-table-div">
                             	<table><tr>
                              <td>
                              <label for="exampleInputEmail1">My Preferences</label></td></tr>
                              <tr><td>
                              <div class="icon-field">
                             <table id="choice-filling-table" border="1px solid black"; width="530px;">
                              <tr><th><center>Order</center></th><th><center>Faculty</center></th><th><center>Branch/Course</center></th><th><center>Delete</center></th></tr>
                             </table>
                            </div></td></tr></table></div>



                           </div>
                            <br><br>

                            </div>




</div>


  </div>

</div>

<div style=" padding: 15px 10px; ">
	<table width="100%">
		<tr>
 <td>
<!-- 	<i class="fa fa-arrow-circle-o-left" aria-hidden="true" name="prev" id="previous_btn" onclick="changeDisplay1(this)" style="padding: 5px 30px; font-size: 86px; color: black; display: none;" ></i> -->
	<button type="button" class="b1"  aria-hidden="true" name="prev" id="previous_btn" onclick="changeDisplay1(this)">&laquo Previous</button>
 </td>
 <td style="float: right">
	<!-- <i class="fa fa-arrow-circle-o-right" aria-hidden="true" name="next" id="next_btn" onclick="changeDisplay2(this)" style="padding: 5px 30px; font-size: 86px; color: black;"></i> -->
	<div id="next-button-div"><button type="button" class="b1" aria-hidden="true" name="next" id="next_btn" onclick="changeDisplay2(this)">Next &raquo</button>
 </div>
		<div id="save-button-div" style="display: none;">
			<button type="submit" class="b1" name="save_button" id="save" formaction="new_one.php">Save Details
			</button>
		</div>


     <!-- <div id="print-button-div" style="display: none;">
      <button type="submit" formaction="print-form1.php" class="b1" name="display-print" id="display-print" formaction="print-form1.php"  >Display
      </button>
    </div>
 -->
	</td>
</tr>
</table>



</div>

</div>
</form>




				<!-- <div id="info">
					<table style="width:850px;">
						<tr style="height: 400px;">
							<td style="width: 400px;"><br><h2>About University</h2><br>
								Medi-Caps has been a brand name in the arena of technical education. Since its inception in July 2000, Medi-Caps has consistently aimed at creating an ideal ambiance for budding technocrats and managers; and helping them to grow like true professionals. With its highly qualified faculty there seems an optimal blend of academic brilliance and industry exposure, supplemented by highly specialized visiting faculty and industry experts,
							</td>

							<td> </td>

							<td style="width: 400px;"><br><h2>&emsp;</h2><br>

								senior professionals from various segments of different industries and business houses.
								It was time now to spread wings and move out for more exposure and widening of the periphery. Hence the foundation of Medi-Caps University has been laid down. With a strong foundation of the Group since 15 years, Medi-Caps University wishes to maintain the same objective of imparting quality education and producing sound professionals for the benefit of the society at large.
							</td>

						</tr>

						<tr style="height: 400px;">
							<td style="width: 400px;"><br><h2>University Academics</h2><br>
								A University has diverse responsibilities like maintaining requisite standards of professional excellence by giving admissions, based on merit and making it equally accessible to eligible students through a fair and transparent admission procedure. This is an obligatory service that can be achieved only with greater autonomy of admission, infrastructure, investments, fee and salaries being devised by “unaided” professional institutions.Mere expansion is of little use,
							</td>

							<td> </td>

							<td style="width: 400px;"><br><h2>&emsp;</h2><br>

								without efforts to improve quality to reach the standards of excellence.
								It was time now to spread wings and move out for more exposure and widening of the periphery. Hence the foundation of Medi-Caps University has been laid down. With a strong foundation of the Group
								since 15 years, Medi-Caps University wishes to maintain the same objective of imparting quality education and producing sound professionals for the benefit of the society at large.
							</td>

						</tr>
					</table>
				</div>

 -->

				<!--  ------------------ Personal Details -------------------- -->












                             <!-- -------------------- Choice Filling --------------------- -->










																									<!-- ---------------  Modal  --------------------------- -->
																							<!-- 		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																										<div class="modal-dialog modal-dialog-centered" role="document">
																											<div class="modal-content">
																												<div class="modal-header">
																													<h5 class="modal-title" id="exampleModalCenterTitle"></h5>
																													<button type="button" id="close_modal-button" class="close" data-dismiss="modal" aria-label="Close">
																														<span aria-hidden="true">&times;</span>
																													</button>
																												</div>
																												<div class="modal-body">
																													<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
																													<h2 id="success_heading">Successful</h2>
																													<h3 id="success_heading">Your registration ID is: <span id="serial"></span></h3>
																												</div>
																												<div class="modal-footer">

																												</div>
																											</div>
																										</div>
																									</div>
 -->

																									<br><br><br><br>




																									<!-- -------------------------- Contact US------------------- -->

																									<div class="contact-us" id="contact-us">
																										<br>
																										<div class="container text-center">
																											<h1>Contact Us</h1>
																											<p>Medi-Caps University
																												A.B. Road, Pigdamber, Rau
																												Fax: 0731-4259501

																												<br>
																												City Office:<br>
																												201, Pushpratna Paradize, <br>
																												9/5, New Palasia, Indore - 452001<br><br>
																											</p>

																											<div class="row">
																												<div class="col-md-4">
																													<i class="fa fa-phone fa-3x"></i>
																													<a href="tel:0731-453331">
																														<p id="links">0731-453331</p>
																													</a>
																												</div>

																												<div class="col-md-4">
																													<i class="fa fa-envelope fa-3x"></i>
																													<a href="mailto:info@medicaps.ac.in">
																														<p id="links">info@medicaps.ac.in</p>
																													</a>
																												</div>

																												<div class="col-md-4">
																													<i class="fa fa-internet-explorer fa-3x"></i>
																													<br>
																													<a href="http://www.medicaps.ac.in/">
																														<p id="links">http://www.medicaps.ac.in</p>
																													</a>
																												</div>
																											</div>

																										</div>

																										<div class="footer text-center">
																											<p>Made By: Hatim Banswadawala & Eeshan Khan &copy; copyright</p>
																											<br>
																										</div>
																									</div>


																								</body>
																								</html>


																								<script type="text/javascript">
																									$("#tile-1 .nav-tabs a").click(function() {
																										var position = $(this).parent().position();
																										var width = $(this).parent().width();
																										$("#tile-1 .slider").css({"left":+ position.left,"width":width});
																									});
																									var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
																									var actPosition = $("#tile-1 .nav-tabs .active").position();
																									$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});


																									function myFunction() {
																										  var x = document.getElementById("myTopnav");
																										  if (x.className === "topnav") {
																										    x.className += " responsive";
																										  } else {
																										    x.className = "topnav";
																										  }
																										}

																								</script>










                         <!-- ----------  Enable NEXT Button -----------------------  -->




																								<script type="text/javascript">

																									function changeDisplay1(id){

																									if($('#personal-tab').hasClass('active')){
 																															// do nothing
 																									}
																									else if($('#education-tab').hasClass('active')){
																															id.disabled=true;
																		             document.getElementById('personal-tab').click();
																		             document.getElementById('previous_btn').style.display='none';
																									}
																									else if($('#biographic-tab').hasClass('active')){
																									      document.getElementById('education-tab').click();
																									}
																									else if($('#contact-tab').hasClass('active')){
																										      document.getElementById('biographic-tab').click();
																									}
																									else if($('#attachments-tab').hasClass('active')){
																									       document.getElementById('contact-tab').click();
																									}
																									else if($('#preferences-tab').hasClass('active')){
																										      if(document.getElementById('save-button-div').style.display=='block'){
																										      	 document.getElementById('save-button-div').style.display='none';
																										      	 document.getElementById('next-button-div').style.display='block';
																										      	 document.getElementById('prefernce-table-div').style.display='block';
																										      }
																										      else{
																										      document.getElementById('attachments-tab').click();
																										      }
																									}

																									}


																									function changeDisplay2(id){

																									if($('#personal-tab').hasClass('active')){
																										 personal_Check();


																									}
																									else if($('#education-tab').hasClass('active')){
																										education_Check();

																									}
																									else if($('#biographic-tab').hasClass('active')){
																										biographic_Check();
																									}
																									else if($('#contact-tab').hasClass('active')){
																										contact_Check();
																									}
																									else if($('#attachments-tab').hasClass('active')){
																									 attachments_Check();
																									}
																									else if($('#preferences-tab').hasClass('active')){
																										check_5_rows();
																									}

																									}




																									function education_Check(){
																										var i = 1;
																										var arr_attr = <?php echo '["'.implode('", "',$arr_attr).'"]' ?>;
																										var arr = <?php echo '["'.implode('", "',$arr_edu).'"]' ?>;
																										var count1 =0;
																										var limit = <?php echo $count; ?>;
                          var j =0;
                          var r;
                          
                          while(j < 20){

                           if(arr[j]== 1){
                             r = document.getElementById(arr_attr[j]);
                            if(r.value != ''){
                             ++count1;
 																												if($('#'+arr_attr[j]).hasClass('error-val-in-me')){
 																																// change nothing
 																							     }
 																							     else{
 																							     	r.style.border="1px solid #595959";
 																							     }
                            }

                            else{
                             document.getElementById(arr_attr[j]).style.border="1px solid #CD0000";
                            }
                           }
                           j++;
                          }

                         
                        
                          if(count1 == limit){
                           //document.getElementById('next').disabled=false;
                           Error();
                          }
                          else{
                           alert('Mandatory fields are not filled');
                           //document.getElementById('next').disabled=true;
                          }



                         }

                          function biographic_Check(){
                          var i = 1;
                          var arr_attr1 = <?php echo '["'.implode('", "',$arr_attr1).'"]' ?>;
                          var arr1 = <?php echo '["'.implode('", "',$arr1).'"]' ?>;
                          var count2 =0;
                          var limit = <?php echo $count1; ?>;
                          var j =0;
                          var r;

                     

                          //while(j<5)
                         // {
                          //  r = document.getElementById(arr_attr1[j]);
                         //
                          // alert(r.value);
                         //  j++;
                         // }


                          while(j < 5){

                           if(arr1[j]== 1){
                             r = document.getElementById(arr_attr1[j]);
                            if(r.value != ''){
                             ++count2;
 																												if($('#'+arr_attr1[j]).hasClass('error-val-in-me')){
 																																// change nothing
 																							     }
 																							     else{
 																							     	r.style.border="1px solid #595959";
 																							     }
                            }

                            else{
                             r.style.border="2px solid #CD0000";
                            }
                           }
                           j++;
                          // alert(count2);
                          }

                          if(count2 == limit){
                           //document.getElementById('next').disabled=false;
                           Error();
                          }
                          else{
                           alert('Mandatory fields are not filled');
                           //document.getElementById('next').disabled=true;
                          }

                         }



                         function attachments_Check(){
                          var i = 1;
                          var arr_attr2 = <?php echo '["'.implode('", "',$arr_attr2).'"]' ?>;
                          var arr2 = <?php echo '["'.implode('", "',$arr2).'"]' ?>;
                          var count3 =0;
                          var limit = <?php echo $count2; ?>;
                          var j =0;
                          var r;



                          //while(j<5)
                         // {
                          //  r = document.getElementById(arr_attr1[j]);
                         //
                          // alert(r.value);
                         //  j++;
                         // }


                          while(j < 2){

                           if(arr2[j]== 1){
                             r = document.getElementById(arr_attr2[j]);
                            if(r.value != ''){
                             ++count3;
 																												if($('#'+arr_attr2[j]).hasClass('error-val-in-me')){
 																																// change nothing
 																							     }
 																							     else{
 																							     	r.style.border="1px solid #595959";
 																							     }
                            }

                            else{
                             r.style.border="2px solid #CD0000";
                            }
                           }
                           j++;
                          // alert(count2);
                          }


                          if(count3 == limit){
                           //document.getElementById('next').disabled=false;
                           Error();

                          }
                          else{
                           alert('Mandatory fields are not filled');
                           //document.getElementById('next').disabled=true;
                          }

                         }




                         function personal_Check(){
                          var i = 1;
                          var arr_attr3 = <?php echo '["'.implode('", "',$arr_attr3).'"]' ?>;
                          var arr3 = <?php echo '["'.implode('", "',$arr3).'"]' ?>;
                          var count4 =0;
                          var limit = <?php echo $count3; ?>;
                          var j =0;
                          var r;



                          //while(j<5)
                         // {
                          //  r = document.getElementById(arr_attr1[j]);
                         //
                          // alert(r.value);
                         //  j++;
                         // }


                          while(j < 15){

                           if(arr3[j]== 1){
                             r = document.getElementById(arr_attr3[j]);
                            if(r.value != ''){
                             ++count4;
                             	if($('#'+arr_attr3[j]).hasClass('error-val-in-me')){
 																																// change nothing
 																							     }
 																							     else{
 																							     	r.style.border="1px solid #595959";
 																							     }

                            }

                            else{
                             r.style.border="1px solid #CD0000";
                            }
                           }
                           j++;
                          // alert(count2);
                          }


                          if(count4 == limit){
                           //document.getElementById('next').disabled=false;
																												Error();
                          }
                          else{
                           alert('Mandatory fields are not filled');
                           //document.getElementById('next').disabled=true;
                          }

                         }


                          function contact_Check(){
                          var i = 1;
                          var arr_attr4 = <?php echo '["'.implode('", "',$arr_attr4).'"]' ?>;
                          var arr4 = <?php echo '["'.implode('", "',$arr4).'"]' ?>;
                          var count5 =0;
                          var limit = <?php echo $count4; ?>;
                          var j =0;
                          var r;

                          //while(j<5)
                         // {
                          //  r = document.getElementById(arr_attr1[j]);
                         //
                          // alert(r.value);
                         //  j++;
                         // }


                          while(j < 10){

                           if(arr4[j]== 1){
                             r = document.getElementById(arr_attr4[j]);
                            if(r.value != ''){
                             ++count5;
 																												if($('#'+arr_attr4[j]).hasClass('error-val-in-me')){
 																																// change nothing
 																							     }
 																							     else{
 																							     	r.style.border="1px solid #595959";
 																							     }
                            }

                            else{
                             r.style.border="1px solid #CD0000";
                            }
                           }
                           j++;
                          // alert(count2);
                          }


                          if(count5 == limit){
                           //document.getElementById('next').disabled=false;
                           Error();

                          }
                          else{
                           alert('Mandatory fields are not filled');
                           //document.getElementById('next').disabled=true;
                          }

                         }


                            // ----------------  NEXT  Button  Error() function call --------------------


                            function Error(){

                             var set=1;
                             var e = document.getElementsByClassName('error');
                             for (var i = 0; i<e.length;i++ ) {
                              if(e[i].textContent!='')
                              {
                               set=0;
                               break;
                              }

                             }
                             if(set==1){


                             	if($('#personal-tab').hasClass('active')){
                             	document.getElementById('previous_btn').style.display='block';
                              document.getElementById('education-tab').click();
                              document.getElementById('tab_click').click();
																									}
																									else if($('#education-tab').hasClass('active')){
                              document.getElementById('biographic-tab').click();
                              document.getElementById('tab_click').click();
																									}
																									else if($('#biographic-tab').hasClass('active')){
                              document.getElementById('contact-tab').click();
                              document.getElementById('tab_click').click();
																									}
																									else if($('#contact-tab').hasClass('active')){
                              document.getElementById('attachments-tab').click();
                              document.getElementById('tab_click').click();
																									}
																									else if($('#attachments-tab').hasClass('active')){
                              document.getElementById('preferences-tab').click();
                          				document.getElementById('tab_click').click();    

																									}
																									else if($('#preferences-tab').hasClass('active')){
																										//  document.getElementById('biographic-tab').click();

																									}






                             }
                             else{
                              alert('Please complete required entries with valid values');
                             }

                            }






                              // ----------------- Field cannot be empty msg function  ----------------

                               function check(ele,check_no,exc_no,error_no){
                                if(ele.value == '')
                                {
                                 ele.style.border = "0.9px solid  lightgrey";
                                 document.getElementById("icon"+check_no).style.opacity="0";
                                 document.getElementById("icon"+exc_no).style.opacity="0";
                                 document.getElementById("error"+error_no).textContent="";
                                 document.getElementById("error"+error_no).style.color="#CD0000";
                                }


                               }

                        </script>




                        <!--  --------------------- Image Animations ------------------------ -->



																								<script type="text/javascript">
																									// var slideIndex = 0;
																									// showSlides();

																									// function showSlides() {
																									// 	var l;
																									// 	var slides = document.getElementsByClassName("mySlides");
																									// 	var dots = document.getElementsByClassName("dot");
																									// 	for (l = 0; l < slides.length; l++) {
																									// 		slides[l].style.display = "none";
																									// 	}
																									// 	slideIndex++;
																									// 	if (slideIndex > slides.length) {slideIndex = 1}
																									// 		for (l = 0; l < dots.length; l++) {
																									// 			dots[l].className = dots[l].className.replace(" active", "");
																									// 		}
																									// 		slides[slideIndex-1].style.display = "block";
																									// 		dots[slideIndex-1].className += " active";
																									// 		setTimeout(showSlides, 5000);
																									// 	}






                         // ------------------  Tabs & Divs display Javascript   --------------------------





																										// document.getElementById('nav-link-1').addEventListener('click',function(){
																										// 	document.getElementById('info').style.display='none';
																										// 	document.getElementById('personal').style.display='block';
																										// 	document.getElementById('biographic').style.display='none';
																										// 	document.getElementById('education').style.display='none';
																										// 	document.getElementById('contact').style.display='none';
																										// 	document.getElementById('signature').style.display='none';
																										// 	document.getElementById('tab1').style.width='270px';
																										// 	document.getElementById('tab2').style.width='180px';
																										// 	document.getElementById('tab3').style.width='180px';
																										// 	document.getElementById('tab4').style.width='180px';
																										// 	document.getElementById('tab5').style.width='180px';

																										// });




																										// document.getElementById('nav-link-2').addEventListener('click',function(){
																										// 	document.getElementById('info').style.display='none';
																										// 	document.getElementById('personal').style.display='none';
																										// 	document.getElementById('biographic').style.display='none';
																										// 	document.getElementById('education').style.display='block';
																										// 	document.getElementById('contact').style.display='none';
																										// 	document.getElementById('signature').style.display='none';

																										// 	document.getElementById('tab2').style.width='270px';
																										// 	document.getElementById('tab1').style.width='180px';
																										// 	document.getElementById('tab3').style.width='180px';
																										// 	document.getElementById('tab4').style.width='180px';
																										// 	document.getElementById('tab5').style.width='180px';


																										// });





																										// document.getElementById('nav-link-3').addEventListener('click',function(){
																										// 	document.getElementById('info').style.display='none';
																										// 	document.getElementById('personal').style.display='none';
																										// 	document.getElementById('biographic').style.display='block';
																										// 	document.getElementById('education').style.display='none';
																										// 	document.getElementById('contact').style.display='none';
																										// 	document.getElementById('signature').style.display='none';


																										// 	document.getElementById('tab3').style.width='270px';
																										// 	document.getElementById('tab2').style.width='180px';
																										// 	document.getElementById('tab1').style.width='180px';
																										// 	document.getElementById('tab4').style.width='180px';
																										// 	document.getElementById('tab5').style.width='180px';


																										// });





																										// document.getElementById('nav-link-4').addEventListener('click',function(){
																										// 	document.getElementById('info').style.display='none';
																										// 	document.getElementById('personal').style.display='none';
																										// 	document.getElementById('biographic').style.display='none';
																										// 	document.getElementById('education').style.display='none';
																										// 	document.getElementById('contact').style.display='block';
																										// 	document.getElementById('signature').style.display='none';


																										// 	document.getElementById('tab4').style.width='270px';
																										// 	document.getElementById('tab2').style.width='180px';
																										// 	document.getElementById('tab3').style.width='180px';
																										// 	document.getElementById('tab1').style.width='180px';
																										// 	document.getElementById('tab5').style.width='180px';


																										// });





																										// document.getElementById('nav-link-5').addEventListener('click',function(){
																										// 	document.getElementById('info').style.display='none';
																										// 	document.getElementById('personal').style.display='none';
																										// 	document.getElementById('biographic').style.display='none';
																										// 	document.getElementById('education').style.display='none';
																										// 	document.getElementById('contact').style.display='none';
																										// 	document.getElementById('signature').style.display='block';


																										// 	document.getElementById('tab5').style.width='270px';
																										// 	document.getElementById('tab2').style.width='180px';
																										// 	document.getElementById('tab3').style.width='180px';
																										// 	document.getElementById('tab4').style.width='180px';
																										// 	document.getElementById('tab1').style.width='180px';


																										// });





                           // --------------  Personal Details  Fields Validations  --------------------



																										function Adhar(){
																											var p = document.getElementById("Adhar_no").value;
																											if(p<0||p.length!=12||isNaN(p)){
																												document.getElementById("Adhar_no").style.border = "2px solid #CD0000";
																												document.getElementById("iconp9").style.opacity="0";
																												document.getElementById("iconp10").style.opacity="1";
																												document.getElementById("errorp5").textContent="Enter valid number";
																												document.getElementById("errorp5").style.color="#CD0000";
																											}
																											else{
																												document.getElementById("Adhar_no").style.borderColor = "";
																												document.getElementById("iconp9").style.opacity="0";
																												document.getElementById("Adhar_no").style.border="1px solid #595959";
																												document.getElementById("iconp9").style.color="#595959";
																												document.getElementById("iconp10").style.opacity="0";
																												document.getElementById("errorp5").textContent="";
																											}
																										}





																										function Father_phone(){
																											var p = document.getElementById("Father_phone").value;
																											if(p<0||p.length!=10||isNaN(p)){
																												document.getElementById("Father_phone").style.border = "2px solid #CD0000";
																												document.getElementById("iconp1").style.opacity="0";
																												document.getElementById("iconp2").style.opacity="1";
																												document.getElementById("errorp1").textContent="Enter valid number";
																												document.getElementById("errorp1").style.color="#CD0000";
																											}
																											else{
																												document.getElementById("Father_phone").style.borderColor = "";
																												document.getElementById("iconp1").style.opacity="0";
																												document.getElementById("Father_phone").style.border="1px solid #595959";
																												document.getElementById("iconp1").style.color="#595959";
																												document.getElementById("iconp2").style.opacity="0";
																												document.getElementById("errorp1").textContent="";
																											}
																										}


																										function Mother_phone(){
																											var p = document.getElementById("Mother_phone").value;
																											if(p<0||p.length!=10||isNaN(p)){
																												document.getElementById("Mother_phone").style.border = "2px solid #CD0000";
																												document.getElementById("iconp5").style.opacity="0";
																												document.getElementById("iconp6").style.opacity="1";
																												document.getElementById("errorp3").textContent="Enter valid number";
																												document.getElementById("errorp3").style.color="#CD0000";
																											}
																											else{
																												document.getElementById("Mother_phone").style.borderColor = "";
																												document.getElementById("iconp5").style.opacity="0";
																												document.getElementById("Mother_phone").style.border="1px solid #595959";
																												document.getElementById("iconp5").style.color="#595959";
																												document.getElementById("iconp6").style.opacity="0";
																												document.getElementById("errorp3").textContent="";
																											}
																										}



																										/*  Email validation

                          function validateEmail(email) {
																											var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
																											return re.test(email);

																										}*/

																										function Father_email(){
																											var email = document.getElementById("Father_email").value;
																											var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
																											if(re.test(email)==false){
																												document.getElementById("Father_email").style.border = "2px solid #CD0000";
																												document.getElementById("iconp3").style.opacity="0";
																												document.getElementById("iconp4").style.opacity="1";
																												document.getElementById("errorp2").textContent="Enter valid email";
																												document.getElementById("errorp2").style.color="#CD0000";
																											}

																											else{
																												document.getElementById("Father_email").style.borderColor = "";
																												document.getElementById("iconp3").style.opacity="0";
																												document.getElementById("Father_email").style.border="1px solid #595959";
																												document.getElementById("iconp3").style.color="#595959";
																												document.getElementById("iconp4").style.opacity="0";
																												document.getElementById("errorp2").textContent="";
																											}
																										}


																										function Mother_email(){
																											var email = document.getElementById("Mother_email").value;
																											var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
																											if(re.test(email)==false){
																												document.getElementById("Mother_email").style.border = "2px solid #CD0000";
																												document.getElementById("iconp7").style.opacity="0";
																												document.getElementById("iconp8").style.opacity="1";
																												document.getElementById("errorp4").textContent="Enter valid email";
																												document.getElementById("errorp4").style.color="#CD0000";
																											}
																											else{
																												document.getElementById("Mother_email").style.borderColor = "";
																												document.getElementById("iconp7").style.opacity="0";
																												document.getElementById("Mother_email").style.border="1px solid #595959";
																												document.getElementById("iconp7").style.color="#595959";
																												document.getElementById("iconp8").style.opacity="0";
																												document.getElementById("errorp4").textContent="";
																											}
																										}

																										function SSSM(){
																											var p = document.getElementById("SSSM").value;
																											if(p<0||p.length!=6||isNaN(p)){
																												document.getElementById("SSSM").style.border = "2px solid #CD0000";
																												document.getElementById("iconp11").style.opacity="0";
																												document.getElementById("iconp12").style.opacity="1";
																												document.getElementById("errorp6").textContent="Enter valid ID";
																												document.getElementById("errorp6").style.color="#CD0000";
																											}
																											else{
																												// document.getElementById("SSSM").style.borderColor = "";
																												document.getElementById("iconp11").style.opacity="0";
																												document.getElementById("SSSM").style.border="1px solid #595959";
																												document.getElementById("iconp11").style.color="#595959";
																												document.getElementById("iconp12").style.opacity="0";
																												document.getElementById("errorp6").textContent="";
																											}
																										}





	                          // ---------------  Educational  Qualifications  Fields Validations---------------




                           function validatePercentage_10()
                           {
                            var x = parseFloat(document.getElementById("Percent_10").value).toFixed(2);
                            if (isNaN(x) || x < 0 || x > 100 || x=='')
                            {
                             document.getElementById("Percent_10").style.border = "2px solid #CD0000";
                             document.getElementById("icon5").style.opacity="0";
                             document.getElementById("icon6").style.opacity="1";
                             document.getElementById("error3").style.color="#CD0000";
                             document.getElementById("error3").textContent="Enter valid percentage";



                            }

                            else
                            {
                             document.getElementById("Percent_10").style.borderColor = "";
                             document.getElementById("icon5").style.opacity="0";
                             document.getElementById("Percent_10").style.border="1px solid #595959";
                             document.getElementById("icon5").style.color="#595959";
                             document.getElementById("icon6").style.opacity="0";
                             document.getElementById("error3").textContent="";
                            }

                           }




                           function validatePercentage_12()
                           {
                            var x = parseFloat(document.getElementById("Percent_12").value).toFixed(2);
                            if (isNaN(x) || x < 0 || x > 100 || x=='')
                            {
                             document.getElementById("Percent_12").style.border = "2px solid #CD0000";
                             document.getElementById("icon13").style.opacity="0";
                             document.getElementById("icon14").style.opacity="1";
                             document.getElementById("error7").textContent="Enter valid percentage";
                             document.getElementById("error7").style.color="#CD0000";

                            }

                            else
                            {
                             document.getElementById("Percent_12").style.borderColor = "";
                             document.getElementById("icon13").style.opacity="0";
                             document.getElementById("Percent_12").style.border="1px solid #595959";
                             document.getElementById("icon13").style.color="#595959";
                             document.getElementById("icon14").style.opacity="0";
                             document.getElementById("error7").textContent="";
                            }

                           }




                           function validatePercentage_mains()
                           {
                            var x = parseFloat(document.getElementById("Jee_mains").value).toFixed(2);
                            if (isNaN(x) || x < 0 || x > 360 || x=='')
                            {
                             document.getElementById("Jee_mains").style.border = "2px solid #CD0000";
                             document.getElementById("icon18").style.opacity="0";
                             document.getElementById("icon19").style.opacity="1";
                             document.getElementById("error10").textContent="Enter valid score";
                             document.getElementById("error10").style.color="#CD0000";


                            }

                            else
                            {
                             document.getElementById("Jee_mains").style.borderColor = "";
                             document.getElementById("icon18").style.opacity="0";
                             document.getElementById("Jee_mains").style.border="1px solid #595959";
                             document.getElementById("icon18").style.color="#595959";
                             document.getElementById("icon19").style.opacity="0";
                             document.getElementById("error10").textContent="";
                            }

                           }





                           function validatePercentage_advance()
                           {
                            var x = parseFloat(document.getElementById("Jee_advance").value).toFixed(2);
                            if (isNaN(x) || x < 0 || x > 600 || x=='')
                            {
                             document.getElementById("Jee_advance").style.border = "2px solid #CD0000";
                             document.getElementById("icon20").style.opacity="0";
                             document.getElementById("icon21").style.opacity="1";
                             document.getElementById("error11").textContent="Enter valid score";
                             document.getElementById("error11").style.color="#CD0000";


                            }

                            else
                            {
                             document.getElementById("Jee_advance").style.borderColor = "";
                             document.getElementById("icon20").style.opacity="0";
                             document.getElementById("Jee_advance").style.border="1px solid #595959";
                             document.getElementById("icon20").style.color="#595959";
                             document.getElementById("icon21").style.opacity="0";
                             document.getElementById("error11").textContent="";
                            }

                           }




                           function Year_pass_10()
                           {
                            var x = document.getElementById("Year_pass_10").value;

                            if (isNaN(x) || x.length > 4 || x.length < 4 || x< 1928 || x=='')
                            {
                             document.getElementById("Year_pass_10").style.border = "2px solid #CD0000";
                             document.getElementById("icon7").style.opacity="0";
                             document.getElementById("icon8").style.opacity="1";
                             document.getElementById("error4").textContent="Enter valid year";
                             document.getElementById("error4").style.color="#CD0000";


                            }

                            else
                            {
                             document.getElementById("Year_pass_10").style.borderColor = "";
                             document.getElementById("icon7").style.opacity="0";
                             document.getElementById("Year_pass_10").style.border="1px solid #595959";
                             document.getElementById("icon7").style.color="#595959";
                             document.getElementById("icon8").style.opacity="0";
                             document.getElementById("error4").textContent="";
                            }

                           }


                           function Year_pass_12()
                           {
                            var x = document.getElementById("Year_pass_12").value;

                            if (isNaN(x) || x.length > 4 || x.length < 4 || x<1928 || x=='' )
                            {
                             document.getElementById("Year_pass_12").style.border = "2px solid #CD0000";
                             document.getElementById("icon15").style.opacity="0";
                             document.getElementById("icon16").style.opacity="1";
                             document.getElementById("error8").textContent="Enter valid year";
                             document.getElementById("error8").style.color="#CD0000";


                            }

                            else
                            {
                             document.getElementById("Year_pass_12").style.borderColor = "";
                             document.getElementById("icon15").style.opacity="0";
                             document.getElementById("Year_pass_12").style.border="1px solid #595959";
                             document.getElementById("icon15").style.color="#595959";
                             document.getElementById("icon16").style.opacity="0";
                             document.getElementById("error8").textContent="";
                            }

                           }







                           function Graduation1(){
                            var i=document.getElementById("Graduation1");
                            var j=document.getElementById("Graduation2");
                            var k=document.getElementById("Graduation3");
                            var l=document.getElementById("Graduation4");


                            var c1=document.getElementById("UG_check");
                            var c2=document.getElementById("PG_check");

                            if(c1.checked == true && c2.checked == true){
                             i.style.display="block";
                             j.style.display="block";
                             k.style.display="block";
                             l.style.display="block";
                            }
                            else if(c1.checked == true && c2.checked == false)
                            {
                             i.style.display="block";
                             j.style.display="block";
                             k.style.display="none";
                             l.style.display="none";
                            }

                            else if(c1.checked == false && c2.checked == true)
                            {
                             i.style.display="none";
                             j.style.display="none";
                             k.style.display="block";
                             l.style.display="block";

                            }
                            else{
                             i.style.display="none";
                             j.style.display="none";
                             k.style.display="none";
                             l.style.display="none";
                            }

                           }



                           function Jee_show(){
                            var i=document.getElementById("Jee_show");
                            var r1=document.getElementById("Science");
                            var r2=document.getElementById("Stream");
                            if( r1.checked== true){
                             i.style.display="block";
                            }
                            else if(r2.checked== true){
                             i.style.display="none";

                            }
                            else
                            {
                             i.style.display="none";
                            }
                           }



                           // -----------  Biographic Details Fields  Validations  -----------------------


                           function Height(){
                            var p = document.getElementById("Height").value;
                            if(p<=50||p.length>3||p.length<2||isNaN(p)){
                             document.getElementById("Height").style.border = "2px solid #CD0000";
                             document.getElementById("iconb1").style.opacity="0";
                             document.getElementById("iconb2").style.opacity="1";
                             document.getElementById("errorb1").style.color="#CD0000";
                             document.getElementById("errorb1").textContent="Enter valid height";

                            }
                            else{
                             document.getElementById("Height").style.borderColor = "";
                             document.getElementById("iconb1").style.opacity="0";
                             document.getElementById("Height").style.border="1px solid #595959";
                             document.getElementById("iconb1").style.color="#595959";
                             document.getElementById("iconb2").style.opacity="0";
                             document.getElementById("errorb1").textContent="";
                            }
                           }




                           function getGender(id,gender){
                            if(gender=='M'){
                             id.value='male';
                            }

                            else{
                             id.value='female';
                            }
                           }



                            // -----------  Address & Contact Fields  Validations  -----------------------





                            function Student_phone(){
                             var p = document.getElementById("Student_phone").value;
                             if(p<0||p.length!=10||isNaN(p)){
                              document.getElementById("Student_phone").style.border = "2px solid #CD0000";
                              document.getElementById("iconc1").style.opacity="0";
                              document.getElementById("iconc2").style.opacity="1";
                              document.getElementById("errorc1").textContent="Enter valid number";
                              document.getElementById("errorc1").style.color="#CD0000";
                             }
                             else{
                              document.getElementById("Student_phone").style.borderColor = "";
                              document.getElementById("iconc1").style.opacity="0";
                              document.getElementById("Student_phone").style.border="1px solid #595959";
                              document.getElementById("iconc1").style.color="#595959";
                              document.getElementById("iconc2").style.opacity="0";
                              document.getElementById("errorc1").textContent="";
                             }
                            }


                            function Student_alt_phone(){
                             var p = document.getElementById("Student_alt_phone").value;
                             if(p<0||p.length!=10||isNaN(p)){
                              document.getElementById("Student_alt_phone").style.border = "2px solid #CD0000";
                              document.getElementById("iconc3").style.opacity="0";
                              document.getElementById("iconc4").style.opacity="1";
                              document.getElementById("errorc2").textContent="Enter valid number";
                              document.getElementById("errorc2").style.color="#CD0000";
                             }
                              else{
                              document.getElementById("Student_alt_phone").style.borderColor = "";
                              document.getElementById("iconc3").style.opacity="0";
                              document.getElementById("Student_alt_phone").style.border="1px solid #595959";
                              document.getElementById("iconc3").style.color="#595959";
                              document.getElementById("iconc4").style.opacity="0";
                              document.getElementById("errorc2").textContent="";
                             }
                            }

                            function Residential_pin_code(){
                             var p = document.getElementById("Residential_pin_code").value;
                             if(p<0||p.length!=6||isNaN(p)){
                              document.getElementById("Residential_pin_code").style.border = "2px solid #CD0000";
                              document.getElementById("iconc11").style.opacity="0";
                              document.getElementById("iconc12").style.opacity="1";
                              document.getElementById("errorc6").textContent="Enter valid number";
                              document.getElementById("errorc6").style.color="#CD0000";
                             }
                             else{
                              document.getElementById("Residential_pin_code").style.borderColor = "";
                              document.getElementById("iconc11").style.opacity="0";
                              document.getElementById("Residential_pin_code").style.border="1px solid #595959";
                              document.getElementById("iconc11").style.color="#595959";
                              document.getElementById("iconc12").style.opacity="0";
                              document.getElementById("errorc6").textContent="";
                             }
                            }


                            function Permanent_pin_code(){
                             var p = document.getElementById("Permanent_pin_code").value;
                             if(p<0||p.length!=6||isNaN(p)){
                              document.getElementById("Permanent_pin_code").style.border = "2px solid #CD0000";
                              document.getElementById("iconc15").style.opacity="0";
                              document.getElementById("iconc16").style.opacity="1";
                              document.getElementById("errorc8").textContent="Enter valid number";
                              document.getElementById("errorc8").style.color="#CD0000";        }
                              else{
                               document.getElementById("Permanent_pin_code").style.borderColor = "";
                               document.getElementById("iconc15").style.opacity="0";
                               document.getElementById("Permanent_pin_code").style.border="1px solid #595959";
                               document.getElementById("iconc15").style.color="#595959";
                               document.getElementById("iconc16").style.opacity="0";
                               document.getElementById("errorc8").textContent="";         }
                              }


                              function Student_email(){
                               var email = document.getElementById("Student_email").value;
                               var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                               if(re.test(email)==false){
                                document.getElementById("Student_email").style.border = "2px solid #CD0000";
                                document.getElementById("iconc5").style.opacity="0";
                                document.getElementById("iconc6").style.opacity="1";
                                document.getElementById("errorc3").textContent="Enter valid email";
                                document.getElementById("errorc3").style.color="#CD0000";
                               }

                               else{
                                document.getElementById("Student_email").style.borderColor = "";
                                document.getElementById("iconc5").style.opacity="0";
                                document.getElementById("Student_email").style.border="1px solid #595959";
                                document.getElementById("iconc5").style.color="#595959";
                                document.getElementById("iconc6").style.opacity="0";
                                document.getElementById("errorc3").textContent="";
                               }
                              }


                              function Student_alt_email(){
                               var email = document.getElementById("Student_alt_email").value;
                               var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                               if(re.test(email)==false){
                                document.getElementById("Student_alt_email").style.border = "2px solid #CD0000";
                                document.getElementById("iconc7").style.opacity="0";
                                document.getElementById("iconc8").style.opacity="1";
                                document.getElementById("errorc4").textContent="Enter valid email";
                                document.getElementById("errorc4").style.color="#CD0000";
                               }
                               else{
                                document.getElementById("Student_alt_email").style.borderColor = "";
                                document.getElementById("iconc7").style.opacity="0";
                                document.getElementById("Student_alt_email").style.border="1px solid #595959";
                                document.getElementById("iconc7").style.color="#595959";
                                document.getElementById("iconc8").style.opacity="0";
                                document.getElementById("errorc4").textContent="";
                               }
                              }




                               //  -------------- Photo  &  Signature  Uploads   ---------------------


                               $(document).ready(function(){

                                $("#Student_photo").change(function(){
                                 readURL1(this);
                                });

                                $("#Student_signature").change(function(){
                                 readURL2(this);
                                });

                               });

                               function readURL1(input) {
                                if (input.files && input.files[0]) {
                                 var reader = new FileReader();

                                 reader.onload = function (e) {
                                  $('#Student_photo_file').attr('src', e.target.result).fadeIn('slow');
                                 }
                                 reader.readAsDataURL(input.files[0]);
                                }
                               }



                               function readURL2(input) {
                                if (input.files && input.files[0]) {
                                 var reader = new FileReader();

                                 reader.onload = function (e) {
                                  $('#Student_signature_file').attr('src', e.target.result).fadeIn('slow');
                                 }
                                 reader.readAsDataURL(input.files[0]);
                                }
                               }



                               // -------------------  Choice-Filling  Validation  ---------------

                              $(document).ready(function(){

																															var faculty_names = <?php echo '["'.implode('", "',$faculty_names).'"]' ?>;
						  																							var branch_list_names = <?php echo json_encode( $branch_list_names )?>;

						  																						 faculty_list();
                      


                                function faculty_list(){
                                	  $("#faculty_list").html("");
                                	   $("#faculty_list").append("<option value=\"\" disabled selected>Faculty</option>");
                                	  $(faculty_names).each(function (i) { 
                                  $("#faculty_list").append("<option value=\""+faculty_names[i]+"\">"+faculty_names[i]+"</option>");
                                 });

                                }


                                document.getElementById('faculty_list').onchange= function(){
                          	
                                	var index_selected = document.getElementById('faculty_list').selectedIndex;
                                	if(index_selected >0){
                                		$("#branch_course_list").html("");
                                	$("#branch_course_list").append("<option value=\"\" disabled selected>Branch/Courses- "+faculty_names[index_selected-1]+"</option>");


                                	 for(var i=1; i<branch_list_names[index_selected-1].length; i++){
                                		 $("#branch_course_list").append("<option value=\""+branch_list_names[index_selected-1][i]+"\">"+branch_list_names[index_selected-1][i]+"</option>");

                                	   }
                                  	}
                                }



                               });


                               var table_array_faculty = [];
                               var table_array_branch = [];

                              function table_to_array(){
                              	
                              	var table= document.getElementById('choice-filling-table');
                              	var rows_length= table.rows.length;
                              	var i;
                              	var j;


                              	for(i=1; i<rows_length;i++){

                              		table_array_faculty[i-1]=table.rows[i].cells[1].innerHTML;
                              		table_array_branch[i-1]=table.rows[i].cells[2].innerHTML;
									                    
                              }
                              $('#table_to_faculty_array').val(JSON.stringify(table_array_faculty));
																														$('#table_to_branch_array').val(JSON.stringify(table_array_branch));
                                            
                              }
              

                               function addRow(){
                                 var faculty= document.getElementById('faculty_list').value;
                                 var branch= document.getElementById('branch_course_list').value;
                                 var table= document.getElementById('choice-filling-table');

                                  
                                   if(table.rows[(table.rows.length)-1].cells[1].innerHTML==faculty && table.rows[(table.rows.length)-1].cells[2].innerHTML==branch){
                                    alert("Preference already added");
                                   }
                                   else{
                                    if(table.rows.length<6){
                                     if(faculty!='' && branch !=''  ){
                                      var newRow= table.insertRow(table.rows.length);
                                      var cell1 = newRow.insertCell(0);
                                      var cell2 = newRow.insertCell(1);
                                      var cell3 = newRow.insertCell(2);
                                      var cell4 = newRow.insertCell(3);


                                      cell1.innerHTML = (table.rows.length)-1;
                                      cell2.innerHTML = faculty;
                                      cell3.innerHTML = branch;
                                      cell4.innerHTML = '<center><i class="fas fa-trash-alt del"  onclick="deleteRow(this)" ></i></center>';
                                     }
                                    else{
                                     alert("Select your preference to add");
                                    }
                                    }
                                    else{
                                     alert("Atmost 5 preferences can be added");
                                    }
                                   }
                                  }


                                 function check_5_rows(){
                                  var table= document.getElementById('choice-filling-table');
                                  if(table.rows.length==6){
																																			table_to_array();
																																			document.getElementById('save-button-div').style.display='block';
																																			document.getElementById('next-button-div').style.display='none';
																																			document.getElementById('prefernce-table-div').style.display='none';
																																			                                   			// $('#exampleModalCenter').show();
                                  
                                  }
                                  else{
                                   alert("Aleast 5 preferences required");
                                  }
                                 }

                                 function deleteRow(r){
                                  var i = r.parentNode.parentNode.parentNode.rowIndex;
                                  var table = document.getElementById('choice-filling-table');
                                  for(var c=((table.rows.length)-1);c>=i ; c--){
                                   table.rows[c].cells[0].innerHTML=  table.rows[c-1].cells[0].innerHTML;
                                  }
                                  document.getElementById("choice-filling-table").deleteRow(i);


                                 }



                                //   -----------------   keyup  Function   -------------------------


                                $('input[type="text"]').on('change', function() {
                                 if ($(this).val().trim() != '') {


                                  if ($(this).is('#Father_phone')) {
                                   if (Father_phone($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Mother_phone')) {
                                   if (Mother_phone($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                  if ($(this).is('#Father_email')) {
                                   if (Father_email($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Mother_email')) {
                                   if (Mother_email($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#SSSM')) {
                                   if (SSSM($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                  if ($(this).is('#Adhar_no')) {
                                   if (Adhar($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Percent_10')) {
                                   if (validatePercentage_10($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Percent_12')) {
                                   if (validatePercentage_12($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Jee_mains')) {
                                   if (validatePercentage_mains($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Jee_advance')) {
                                   if (validatePercentage_advance($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Year_pass_10')) {
                                   if (Year_pass_10($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                  if ($(this).is('#Year_pass_12')) {
                                   if (Year_pass_12($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                  if ($(this).is('#Stream')) {
                                   if (Stream($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Height')) {
                                   if (Height($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Student_phone')) {
                                   if (Student_phone($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Student_alt_phone')) {
                                   if (Student_alt_phone($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }



                                  if ($(this).is('#Residential_pin_code')) {
                                   if (Residential_pin_code($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }

                                  if ($(this).is('#Permanent_pin_code')) {
                                   if (Permanent_pin_code($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                  if ($(this).is('#Student_email')) {
                                   if (Student_email($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                  if ($(this).is('#Student_alt_email')) {
                                   if (Student_alt_email($(this).val())) {
                                    $(this).attr('data-valid','valid');
                                   } else {
                                    $(this).attr('data-valid','error');
                                   }
                                  }
                                  else {
                                   $(this).attr('data-valid','valid');
                                  }


                                 }
                                 else {
                                  $(this).removeAttr('data-valid');
                                 }
                                });


                               </script>



                               <!--   --------------------  SERIAL  NUMBER  GENERATION  -----------------  -->

                               <script type="text/javascript">
                                var btn1 = document.getElementById("serial_button");
                                var btn2=document.getElementById("save");
                                var ser=document.getElementById("serial_number");

                                // When the user clicks the button, open the modal
                                btn1.onclick = function() {
                                 var r =Math.floor(Math.random() * (9999999 - 1000000)) + 1000000;
                                 serial.textContent= r;
                                 ser.value=r;
                                 btn2.disabled=false;
                                }
                               </script>




<!--  -----------------   PHP  code   ---------------------  -->

<!--   INSERT  data into datbase tables  ------------------
       Database: student_registration
       Tables ---------------------------------------------
       * tbl_personal
       * tbl_education
       * tbl_biographic
       * tbl_contact
       * tbl_signature


       ------------------------------------------------   -->

       


       <!--    --------------------  THE END   ----------------------  -->
