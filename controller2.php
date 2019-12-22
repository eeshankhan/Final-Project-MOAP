<!DOCTYPE html>
<html>
<head>
	<title>Controller 2</title>

	<!--  ------------------ Font Awesome links  ---------------------- -->

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/
	font-awesome/4.7.0/css/font-awesome.min.css">


	<!--  ------------------ Bootstrap links  ---------------------- -->
	<!--  ------------------ JQuery links ---------------------- -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	<style type="text/css">

		a{
			cursor: pointer;
		}

		/*span{
			border-bottom: 0.5px solid grey;
			width:200px;
			font-size: 18px;
		}*/

		.preference-div{
			display: none;
		}

		.main-headings{
			border: 1px solid black;

		}
		.headings
		{
			color: black;
			font-size: 18px;

		}
		.reg-tables{

			padding-left: 8%;
			display: none;
		}

		.open, .close{
			float: right;
		}

		.close{
			display: none;
			font-size: 16px;
		}


		td, th, table{
			border: 1px solid black;
			font-size: 13px;
			/* font-family: "Open Sans", Tahoma,  sans-serif; */
			font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		}


		td input[type="checkbox"]{
			margin-left: 30px;
		}

		#checkbox-table{
			border: 0;
			font-size: 15px;
		}


		.table-no-border{
			border: none;
		}



	</style>

</head>

	<?php
		$i = 1;
		$j = 2;
		while($i <104 && $j<105){
			${'checked'.$i}='';
			${'checked'.$j}='';
			$i+=2;
			$j+=2;
		}
		?>



		<?php
		if(isset($_POST['save_changes'])){
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$port= 3307;
			$databaseName = "admin_control";




			$school_name_10_hidden=$_POST['school_name_10_hidden'];
			$school_name_10_1_hidden=$_POST['school_name_10_1_hidden'];


			$board_name_10_hidden=$_POST['board_name_10_hidden'];
			$board_name_10_1_hidden=$_POST['board_name_10_1_hidden'];

			$percent_10_hidden=$_POST['percent_10_hidden'];
			$percent_10_1_hidden=$_POST['percent_10_1_hidden'];


			$year_pass_10_hidden=$_POST['year_pass_10_hidden'];
			$year_pass_10_1_hidden=$_POST['year_pass_10_1_hidden'];


			$school_name_12_hidden=$_POST['school_name_12_hidden'];
			$school_name_12_1_hidden=$_POST['school_name_12_1_hidden'];


			$board_name_12_hidden=$_POST['board_name_12_hidden'];
			$board_name_12_1_hidden=$_POST['board_name_12_1_hidden'];


			$percent_12_hidden=$_POST['percent_12_hidden'];
			$percent_12_1_hidden=$_POST['percent_12_1_hidden'];


			$year_pass_12_hidden=$_POST['year_pass_12_hidden'];
			$year_pass_12_1_hidden=$_POST['year_pass_12_1_hidden'];


			$stream_hidden=$_POST['stream_hidden'];
			$stream_1_hidden=$_POST['stream_1_hidden'];


			$jee_mains_hidden=$_POST['jee_mains_hidden'];
			$jee_mains_1_hidden=$_POST['jee_mains_1_hidden'];


			$jee_advance_hidden=$_POST['jee_advance_hidden'];
			$jee_advance_1_hidden=$_POST['jee_advance_1_hidden'];


			$UG_college_hidden=$_POST['UG_college_hidden'];
			$UG_college_1_hidden=$_POST['UG_college_1_hidden'];


			$UG_university_hidden=$_POST['UG_university_hidden'];
			$UG_university_1_hidden=$_POST['UG_university_1_hidden'];


			$UG_grades_hidden=$_POST['UG_grades_hidden'];
			$UG_grades_1_hidden=$_POST['UG_grades_1_hidden'];


			$UG_year_of_pass_hidden=$_POST['UG_year_of_pass_hidden'];
			$UG_year_of_pass_1_hidden=$_POST['UG_year_of_pass_1_hidden'];


			$PG_college_hidden=$_POST['PG_college_hidden'];
			$PG_college_1_hidden=$_POST['PG_college_1_hidden'];


			$PG_university_hidden=$_POST['PG_university_hidden'];
			$PG_university_1_hidden=$_POST['PG_university_1_hidden'];


			$PG_grades_hidden=$_POST['PG_grades_hidden'];
			$PG_grades_1_hidden=$_POST['PG_grades_1_hidden'];


			$PG_year_of_pass_hidden=$_POST['PG_year_of_pass_hidden'];
			$PG_year_of_pass_1_hidden=$_POST['PG_year_of_pass_1_hidden'];


			$achievements_hidden=$_POST['achievements_hidden'];
			$achievements_1_hidden=$_POST['achievements_1_hidden'];


			$Gender_hidden=$_POST['Gender_hidden'];
			$Gender_1_hidden=$_POST['Gender_1_hidden'];


			$Blood_group_hidden=$_POST['Blood_group_hidden'];
			$Blood_group_1_hidden=$_POST['Blood_group_1_hidden'];


			$Height_hidden=$_POST['Height_hidden'];
			$Height_1_hidden=$_POST['Height_1_hidden'];


			$Disability_hidden=$_POST['Disability_hidden'];
			$Disability_1_hidden=$_POST['Disability_1_hidden'];


			$Body_marks_hidden=$_POST['Body_marks_hidden'];
			$Body_marks_1_hidden=$_POST['Body_marks_1_hidden'];


			$Student_photo_hidden=$_POST['Student_photo_hidden'];
			$Student_photo_1_hidden=$_POST['Student_photo_1_hidden'];


			$Student_signature_hidden=$_POST['Student_signature_hidden'];
			$Student_signature_1_hidden=$_POST['Student_signature_1_hidden'];


			$Student_name_hidden=$_POST['Student_name_hidden'];
			$Student_name_1_hidden=$_POST['Student_name_1_hidden'];


			$DOB_hidden=$_POST['DOB_hidden'];
			$DOB_1_hidden=$_POST['DOB_1_hidden'];


			$Category_hidden=$_POST['Category_hidden'];
			$Category_1_hidden=$_POST['Category_1_hidden'];


			$Religion_hidden=$_POST['Religion_hidden'];
			$Religion_1_hidden=$_POST['Religion_1_hidden'];


			$Nationality_hidden=$_POST['Nationality_hidden'];
			$Nationality_1_hidden=$_POST['Nationality_1_hidden'];


			$Father_name_hidden=$_POST['Father_name_hidden'];
			$Father_name_1_hidden=$_POST['Father_name_1_hidden'];


			$Father_occupation_hidden=$_POST['Father_occupation_hidden'];
			$Father_occupation_1_hidden=$_POST['Father_occupation_1_hidden'];


			$Father_phone_hidden=$_POST['Father_phone_hidden'];
			$Father_phone_1_hidden=$_POST['Father_phone_1_hidden'];


			$Father_email_hidden=$_POST['Father_email_hidden'];
			$Father_email_1_hidden=$_POST['Father_email_1_hidden'];


			$Mother_name_hidden=$_POST['Mother_name_hidden'];
			$Mother_name_1_hidden=$_POST['Mother_name_1_hidden'];


			$Mother_occupation_hidden=$_POST['Mother_occupation_hidden'];
			$Mother_occupation_1_hidden=$_POST['Mother_occupation_1_hidden'];


			$Mother_phone_hidden=$_POST['Mother_phone_hidden'];
			$Mother_phone_1_hidden=$_POST['Mother_phone_1_hidden'];


			$Mother_email_hidden=$_POST['Mother_email_hidden'];
			$Mother_email_1_hidden=$_POST['Mother_email_1_hidden'];


			$Adhar_no_hidden=$_POST['Adhar_no_hidden'];
			$Adhar_no_1_hidden=$_POST['Adhar_no_1_hidden'];


			$SSSM_hidden=$_POST['SSSM_hidden'];
			$SSSM_1_hidden=$_POST['SSSM_1_hidden'];


			$Student_phone_hidden=$_POST['Student_phone_hidden'];
			$Student_phone_1_hidden=$_POST['Student_phone_1_hidden'];


			$Student_alt_phone_hidden=$_POST['Student_alt_phone_hidden'];
			$Student_alt_phone_1_hidden=$_POST['Student_alt_phone_1_hidden'];


			$Student_email_hidden=$_POST['Student_email_hidden'];
			$Student_email_1_hidden=$_POST['Student_email_1_hidden'];


			$Student_alt_email_hidden=$_POST['Student_alt_email_hidden'];
			$Student_alt_email_1_hidden=$_POST['Student_alt_email_1_hidden'];


			$Residential_address_hidden=$_POST['Residential_address_hidden'];
			$Residential_address_1_hidden=$_POST['Residential_address_1_hidden'];


			$Residential_state_hidden=$_POST['Residential_state_hidden'];
			$Residential_state_1_hidden=$_POST['Residential_state_1_hidden'];


			$Residential_pin_code_hidden=$_POST['Residential_pin_code_hidden'];
			$Residential_pin_code_1_hidden=$_POST['Residential_pin_code_1_hidden'];


			$Permanent_address_hidden=$_POST['Permanent_address_hidden'];
			$Permanent_address_1_hidden=$_POST['Permanent_address_1_hidden'];


			$Permanent_state_hidden=$_POST['Permanent_state_hidden'];
			$Permanent_state_1_hidden=$_POST['Permanent_state_1_hidden'];


			$Permanent_pin_code_hidden=$_POST['Permanent_pin_code_hidden'];
			$Permanent_pin_code_1_hidden=$_POST['Permanent_pin_code_1_hidden'];






			$connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);


			$query1 = "UPDATE `tbl_education` set `visible`='$school_name_10_hidden' where `attributes` = 'School_name_10'";

			$query2 = "UPDATE `tbl_education` set `mandatory`='$school_name_10_1_hidden' where `attributes` = 'School_name_10'";



			$query3 = "UPDATE `tbl_education` set `visible`='$board_name_10_hidden' where `attributes` = 'Board_name_10'";

			$query4 = "UPDATE `tbl_education` set `mandatory`='$board_name_10_1_hidden' where `attributes` = 'Board_name_10'";



			$query5 = "UPDATE `tbl_education` set `visible`='$percent_10_hidden' where `attributes` = 'Percent_10'";

			$query6 = "UPDATE `tbl_education` set `mandatory`='$percent_10_1_hidden' where `attributes` = 'Percent_10'";



			$query7 = "UPDATE `tbl_education` set `visible`='$year_pass_10_hidden' where `attributes` = 'Year_pass_10'";

			$query8 = "UPDATE `tbl_education` set `mandatory`='$year_pass_10_1_hidden' where `attributes` = 'Year_pass_10'";



			$query9 = "UPDATE `tbl_education` set `visible`='$school_name_12_hidden' where `attributes` = 'School_name_12'";

			$query10 = "UPDATE `tbl_education` set `mandatory`='$school_name_12_1_hidden' where `attributes` = 'School_name_12'";



			$query11 = "UPDATE `tbl_education` set `visible`='$board_name_12_hidden' where `attributes` = 'Board_name_12'";

			$query12 = "UPDATE `tbl_education` set `mandatory`='$board_name_12_1_hidden' where `attributes` = 'Board_name_12'";



			$query13 = "UPDATE `tbl_education` set `visible`='$percent_12_hidden' where `attributes` = 'Percent_12'";

			$query14 = "UPDATE `tbl_education` set `mandatory`='$percent_12_1_hidden' where `attributes` = 'Percent_12'";



			$query15 = "UPDATE `tbl_education` set `visible`='$year_pass_12_hidden' where `attributes` = 'Year_pass_12'";

			$query16 = "UPDATE `tbl_education` set `mandatory`='$year_pass_12_1_hidden' where `attributes` = 'Year_pass_12'";



			$query17 = "UPDATE `tbl_education` set `visible`='$stream_hidden' where `attributes` = 'Stream'";

			$query18 = "UPDATE `tbl_education` set `mandatory`='$stream_1_hidden' where `attributes` = 'Stream'";



			$query19 = "UPDATE `tbl_education` set `visible`='$jee_mains_hidden' where `attributes` = 'Jee_mains'";

			$query20 = "UPDATE `tbl_education` set `mandatory`='$jee_mains_1_hidden' where `attributes` = 'Jee_mains'";



			$query21 = "UPDATE `tbl_education` set `visible`='$jee_advance_hidden' where `attributes` = 'Jee_advance'";

			$query22 = "UPDATE `tbl_education` set `mandatory`='$jee_advance_1_hidden' where `attributes` = 'Jee_advance'";



			$query23 = "UPDATE `tbl_education` set `visible`='$UG_college_hidden' where `attributes` = 'UG_college'";

			$query24 = "UPDATE `tbl_education` set `mandatory`='$UG_college_1_hidden' where `attributes` = 'UG_college'";



			$query25 = "UPDATE `tbl_education` set `visible`='$UG_university_hidden' where `attributes` = 'UG_university'";

			$query26 = "UPDATE `tbl_education` set `mandatory`='$UG_university_1_hidden' where `attributes` = 'UG_university'";



			$query27 = "UPDATE `tbl_education` set `visible`='$UG_grades_hidden' where `attributes` = 'UG_grades'";

			$query28 = "UPDATE `tbl_education` set `mandatory`='$UG_grades_1_hidden' where `attributes` = 'UG_grades'";



			$query29 = "UPDATE `tbl_education` set `visible`='$UG_year_of_pass_hidden' where `attributes` = 'UG_year_of_pass'";

			$query30 = "UPDATE `tbl_education` set `mandatory`='$UG_year_of_pass_1_hidden' where `attributes` = 'UG_year_of_pass'";



			$query31 = "UPDATE `tbl_education` set `visible`='$PG_college_hidden' where `attributes` = 'PG_college'";

			$query32 = "UPDATE `tbl_education` set `mandatory`='$PG_college_1_hidden' where `attributes` = 'PG_college'";



			$query33 = "UPDATE `tbl_education` set `visible`='$PG_university_hidden' where `attributes` = 'PG_university'";

			$query34 = "UPDATE `tbl_education` set `mandatory`='$PG_university_1_hidden' where `attributes` = 'PG_university'";



			$query35 = "UPDATE `tbl_education` set `visible`='$PG_grades_hidden' where `attributes` = 'PG_grades'";

			$query36 = "UPDATE `tbl_education` set `mandatory`='$PG_grades_1_hidden' where `attributes` = 'PG_grades'";



			$query37 = "UPDATE `tbl_education` set `visible`='$PG_year_of_pass_hidden' where `attributes` = 'PG_year_of_pass'";

			$query38 = "UPDATE `tbl_education` set `mandatory`='$PG_year_of_pass_1_hidden' where `attributes` = 'PG_year_of_pass'";



			$query39 = "UPDATE `tbl_education` set `visible`='$achievements_hidden' where `attributes` = 'Achievements'";

			$query40 = "UPDATE `tbl_education` set `mandatory`='$achievements_1_hidden' where `attributes` = 'Achievements'";


			$query41 = "UPDATE `tbl_biographic` set `visible`='$Gender_hidden' where `attributes` = 'Gender'";

			$query42 = "UPDATE `tbl_biographic` set `mandatory`='$Gender_1_hidden' where `attributes` = 'Gender'";


			$query43 = "UPDATE `tbl_biographic` set `visible`='$Blood_group_hidden' where `attributes` = 'Blood_group'";

			$query44 = "UPDATE `tbl_biographic` set `mandatory`='$Blood_group_1_hidden' where `attributes` = 'Blood_group'";



			$query45 = "UPDATE `tbl_biographic` set `visible`='$Height_hidden' where `attributes` = 'Height'";

			$query46 = "UPDATE `tbl_biographic` set `mandatory`='$Height_1_hidden' where `attributes` = 'Height'";



			$query47 = "UPDATE `tbl_biographic` set `visible`='$Disability_hidden' where `attributes` = 'Disability'";

			$query48 = "UPDATE `tbl_biographic` set `mandatory`='$Disability_1_hidden' where `attributes` = 'Disability'";



			$query49 = "UPDATE `tbl_biographic` set `visible`='$Body_marks_hidden' where `attributes` = 'Body_marks'";

			$query50 = "UPDATE `tbl_biographic` set `mandatory`='$Body_marks_1_hidden' where `attributes` = 'Body_marks'";




			$query51 = "UPDATE `tbl_signature` set `visible`='$Student_photo_hidden' where `attributes` = 'Student_photo'";

			$query52 = "UPDATE `tbl_signature` set `mandatory`='$Student_photo_1_hidden' where `attributes` = 'Student_photo'";



			$query53 = "UPDATE `tbl_signature` set `visible`='$Student_signature_hidden' where `attributes` = 'Student_signature'";

			$query54 = "UPDATE `tbl_signature` set `mandatory`='$Student_signature_1_hidden' where `attributes` = 'Student_signature'";







			$query55 = "UPDATE `tbl_personal` set `visible`='$Student_name_hidden' where `attributes` = 'Student_name'";

			$query56 = "UPDATE `tbl_personal` set `mandatory`='$Student_name_1_hidden' where `attributes` = 'Student_name'";




			$query57 = "UPDATE `tbl_personal` set `visible`='$DOB_hidden' where `attributes` = 'DOB'";

			$query58 = "UPDATE `tbl_personal` set `mandatory`='$DOB_1_hidden' where `attributes` = 'DOB'";





			$query59 = "UPDATE `tbl_personal` set `visible`='$Category_hidden' where `attributes` = 'Category'";

			$query60 = "UPDATE `tbl_personal` set `mandatory`='$Category_1_hidden' where `attributes` = 'Category'";





			$query61 = "UPDATE `tbl_personal` set `visible`='$Religion_hidden' where `attributes` = 'Religion'";

			$query62 = "UPDATE `tbl_personal` set `mandatory`='$Religion_1_hidden' where `attributes` = 'Religion'";




			$query63 = "UPDATE `tbl_personal` set `visible`='$Nationality_hidden' where `attributes` = 'Nationality'";

			$query64 = "UPDATE `tbl_personal` set `mandatory`='$Nationality_1_hidden' where `attributes` = 'Nationality'";




			$query65 = "UPDATE `tbl_personal` set `visible`='$Father_name_hidden' where `attributes` = 'Father_name'";

			$query66 = "UPDATE `tbl_personal` set `mandatory`='$Father_name_1_hidden' where `attributes` = 'Father_name'";




			$query67 = "UPDATE `tbl_personal` set `visible`='$Father_occupation_hidden' where `attributes` = 'Father_occupation'";

			$query68 = "UPDATE `tbl_personal` set `mandatory`='$Father_occupation_1_hidden' where `attributes` = 'Father_occupation'";


			$query69 = "UPDATE `tbl_personal` set `visible`='$Father_phone_hidden' where `attributes` = 'Father_phone'";

			$query70 = "UPDATE `tbl_personal` set `mandatory`='$Father_phone_1_hidden' where `attributes` = 'Father_phone'";


			$query71 = "UPDATE `tbl_personal` set `visible`='$Father_email_hidden' where `attributes` = 'Father_email'";

			$query72 = "UPDATE `tbl_personal` set `mandatory`='$Father_email_1_hidden' where `attributes` = 'Father_email'";


			$query73 = "UPDATE `tbl_personal` set `visible`='$Mother_name_hidden' where `attributes` = 'Mother_name'";

			$query74 = "UPDATE `tbl_personal` set `mandatory`='$Mother_name_1_hidden' where `attributes` = 'Mother_name'";


			$query75 = "UPDATE `tbl_personal` set `visible`='$Mother_occupation_hidden' where `attributes` = 'Mother_occupation'";

			$query76 = "UPDATE `tbl_personal` set `mandatory`='$Mother_occupation_1_hidden' where `attributes` = 'Mother_occupation'";


			$query77 = "UPDATE `tbl_personal` set `visible`='$Mother_phone_hidden' where `attributes` = 'Mother_phone'";

			$query78 = "UPDATE `tbl_personal` set `mandatory`='$Mother_phone_1_hidden' where `attributes` = 'Mother_phone'";




			$query79 = "UPDATE `tbl_personal` set `visible`='$Mother_email_hidden' where `attributes` = 'Mother_email'";

			$query80 = "UPDATE `tbl_personal` set `mandatory`='$Mother_email_1_hidden' where `attributes` = 'Mother_email'";




			$query81 = "UPDATE `tbl_personal` set `visible`='$Adhar_no_hidden' where `attributes` = 'Adhar_no'";

			$query82 = "UPDATE `tbl_personal` set `mandatory`='$Adhar_no_1_hidden' where `attributes` = 'Adhar_no'";



			$query83 = "UPDATE `tbl_personal` set `visible`='$SSSM_hidden' where `attributes` = 'SSSM'";

			$query84 = "UPDATE `tbl_personal` set `mandatory`='$SSSM_1_hidden' where `attributes` = 'SSSM'";


			$query85 = "UPDATE `tbl_contact` set `visible`='$Student_phone_hidden' where `attributes` = 'Student_phone'";

			$query86 = "UPDATE `tbl_contact` set `mandatory`='$Student_phone_1_hidden' where `attributes` = 'Student_phone'";



			$query87 = "UPDATE `tbl_contact` set `visible`='$Student_alt_phone_hidden' where `attributes` = 'Student_alt_phone'";

			$query88 = "UPDATE `tbl_contact` set `mandatory`='$Student_alt_phone_1_hidden' where `attributes` = 'Student_alt_phone'";


			$query89 = "UPDATE `tbl_contact` set `visible`='$Student_email_hidden' where `attributes` = 'Student_email'";

			$query90 = "UPDATE `tbl_contact` set `mandatory`='$Student_email_1_hidden' where `attributes` = 'Student_email'";



			$query91 = "UPDATE `tbl_contact` set `visible`='$Student_alt_email_hidden' where `attributes` = 'Student_alt_email'";

			$query92 = "UPDATE `tbl_contact` set `mandatory`='$Student_alt_email_1_hidden' where `attributes` = 'Student_alt_email'";



			$query93 = "UPDATE `tbl_contact` set `visible`='$Residential_address_hidden' where `attributes` = 'Residential_address'";

			$query94 = "UPDATE `tbl_contact` set `mandatory`='$Residential_address_1_hidden' where `attributes` = 'Residential_address'";



			$query95 = "UPDATE `tbl_contact` set `visible`='$Residential_state_hidden' where `attributes` = 'Residential_state'";

			$query96 = "UPDATE `tbl_contact` set `mandatory`='$Residential_state_1_hidden' where `attributes` = 'Residential_state'";



			$query97 = "UPDATE `tbl_contact` set `visible`='$Residential_pin_code_hidden' where `attributes` = 'Residential_pin_code'";

			$query98 = "UPDATE `tbl_contact` set `mandatory`='$Residential_pin_code_1_hidden' where `attributes` = 'Residential_pin_code'";



			$query99 = "UPDATE `tbl_contact` set `visible`='$Permanent_address_hidden' where `attributes` = 'Permanent_address'";

			$query100 = "UPDATE `tbl_contact` set `mandatory`='$Permanent_address_1_hidden' where `attributes` = 'Permanent_address'";



			$query101 = "UPDATE `tbl_contact` set `visible`='$Permanent_state_hidden' where `attributes` = 'Permanent_state'";

			$query102 = "UPDATE `tbl_contact` set `mandatory`='$Permanent_state_1_hidden' where `attributes` = 'Permanent_state'";


			$query103 = "UPDATE `tbl_contact` set `visible`='$Permanent_pin_code_hidden' where `attributes` = 'Permanent_pin_code'";

			$query104 = "UPDATE `tbl_contact` set `mandatory`='$Permanent_pin_code_1_hidden' where `attributes` = 'Permanent_pin_code'";










			$result1 = mysqli_query($connect,$query1);
			$result2 = mysqli_query($connect,$query2);
			$result3 = mysqli_query($connect,$query3);
			$result4 = mysqli_query($connect,$query4);
			$result5 = mysqli_query($connect,$query5);
			$result6 = mysqli_query($connect,$query6);
			$result7 = mysqli_query($connect,$query7);
			$result8 = mysqli_query($connect,$query8);
			$result9 = mysqli_query($connect,$query9);
			$result10 = mysqli_query($connect,$query10);
			$result11 = mysqli_query($connect,$query11);
			$result12 = mysqli_query($connect,$query12);
			$result13 = mysqli_query($connect,$query13);
			$result14 = mysqli_query($connect,$query14);
			$result15 = mysqli_query($connect,$query15);
			$result16 = mysqli_query($connect,$query16);
			$result17 = mysqli_query($connect,$query17);
			$result18 = mysqli_query($connect,$query18);
			$result19 = mysqli_query($connect,$query19);
			$result20 = mysqli_query($connect,$query20);
			$result21 = mysqli_query($connect,$query21);
			$result22 = mysqli_query($connect,$query22);
			$result23 = mysqli_query($connect,$query23);
			$result24 = mysqli_query($connect,$query24);
			$result25 = mysqli_query($connect,$query25);
			$result26 = mysqli_query($connect,$query26);
			$result27 = mysqli_query($connect,$query27);
			$result28 = mysqli_query($connect,$query28);
			$result29 = mysqli_query($connect,$query29);
			$result30 = mysqli_query($connect,$query30);
			$result31 = mysqli_query($connect,$query31);
			$result32 = mysqli_query($connect,$query32);
			$result33 = mysqli_query($connect,$query33);
			$result34 = mysqli_query($connect,$query34);
			$result35 = mysqli_query($connect,$query35);
			$result36 = mysqli_query($connect,$query36);
			$result37 = mysqli_query($connect,$query37);
			$result38 = mysqli_query($connect,$query38);
			$result39 = mysqli_query($connect,$query39);
			$result40 = mysqli_query($connect,$query40);

			$result41 = mysqli_query($connect,$query41);
			$result42 = mysqli_query($connect,$query42);
			$result43 = mysqli_query($connect,$query43);
			$result44 = mysqli_query($connect,$query44);
			$result45 = mysqli_query($connect,$query45);
			$result46 = mysqli_query($connect,$query46);
			$result47 = mysqli_query($connect,$query47);
			$result48 = mysqli_query($connect,$query48);
			$result49 = mysqli_query($connect,$query49);
			$result50 = mysqli_query($connect,$query50);

			$result51 = mysqli_query($connect,$query51);
			$result52 = mysqli_query($connect,$query52);
			$result53 = mysqli_query($connect,$query53);
			$result54 = mysqli_query($connect,$query54);

			$result55 = mysqli_query($connect,$query55);
			$result56 = mysqli_query($connect,$query56);
			$result57 = mysqli_query($connect,$query57);
			$result58 = mysqli_query($connect,$query58);
			$result59 = mysqli_query($connect,$query59);
			$result60 = mysqli_query($connect,$query60);
			$result61 = mysqli_query($connect,$query61);
			$result62 = mysqli_query($connect,$query62);
			$result63 = mysqli_query($connect,$query63);
			$result64 = mysqli_query($connect,$query64);
			$result65 = mysqli_query($connect,$query65);
			$result66 = mysqli_query($connect,$query66);
			$result67 = mysqli_query($connect,$query67);
			$result68 = mysqli_query($connect,$query68);
			$result69 = mysqli_query($connect,$query69);
			$result70 = mysqli_query($connect,$query70);
			$result71 = mysqli_query($connect,$query71);
			$result72 = mysqli_query($connect,$query72);
			$result73 = mysqli_query($connect,$query73);
			$result74 = mysqli_query($connect,$query74);
			$result75 = mysqli_query($connect,$query75);
			$result76 = mysqli_query($connect,$query76);
			$result77 = mysqli_query($connect,$query77);
			$result78 = mysqli_query($connect,$query78);
			$result79 = mysqli_query($connect,$query79);
			$result80 = mysqli_query($connect,$query80);
			$result81 = mysqli_query($connect,$query81);
			$result82 = mysqli_query($connect,$query82);
			$result83 = mysqli_query($connect,$query83);
			$result84 = mysqli_query($connect,$query84);

			$result85 = mysqli_query($connect,$query85);
			$result86 = mysqli_query($connect,$query86);
			$result87 = mysqli_query($connect,$query87);
			$result88 = mysqli_query($connect,$query88);
			$result89 = mysqli_query($connect,$query89);
			$result90 = mysqli_query($connect,$query90);
			$result91 = mysqli_query($connect,$query91);
			$result92 = mysqli_query($connect,$query92);
			$result93 = mysqli_query($connect,$query93);
			$result94 = mysqli_query($connect,$query94);
			$result95 = mysqli_query($connect,$query95);
			$result96 = mysqli_query($connect,$query96);
			$result97 = mysqli_query($connect,$query97);
			$result98 = mysqli_query($connect,$query98);
			$result99 = mysqli_query($connect,$query99);
			$result100 = mysqli_query($connect,$query100);
			$result101 = mysqli_query($connect,$query101);
			$result102 = mysqli_query($connect,$query102);
			$result103 = mysqli_query($connect,$query103);
			$result104 = mysqli_query($connect,$query104);











			if($result1 && $result2 && $result3 && $result4
				&& $result5 && $result6 && $result7 && $result8
				&& $result9 && $result10 && $result11 && $result12
				&& $result13 && $result14 && $result15 && $result16
				&& $result17 && $result18 && $result19 && $result20
				&& $result21 && $result22 && $result23 && $result24
				&& $result25 && $result26 && $result27 && $result28
				&& $result29 && $result30 && $result31 && $result32
				&& $result33 && $result34 && $result35 && $result36
				&& $result37 && $result38 && $result39 && $result40
				&& $result41 && $result42 && $result43 && $result44
				&& $result45 && $result46 && $result47 && $result48
				&& $result49 && $result50 && $result51 && $result52
				&& $result53 && $result54 && $result55 && $result56
				&& $result57 && $result58 && $result59 && $result60
				&& $result61 && $result62 && $result63 && $result64
				&& $result65 && $result66 && $result67 && $result68
				&& $result69 && $result70 && $result71 && $result72
				&& $result73 && $result74 && $result75 && $result76
				&& $result77 && $result78 && $result79 && $result80
				&& $result81 && $result82 && $result83 && $result84
				&& $result85 && $result86 && $result87 && $result88
				&& $result89 && $result90 && $result91 && $result92
				&& $result93 && $result95 && $result96 && $result97
				&& $result98 && $result99 && $result100 && $result101
				&& $result102 && $result103 && $result104){
				echo 'Inserted';
			}
			else{
				echo 'Didn\'t work';
			}

		}
		?>


		<?php

		$hostname = "localhost";
		$username = "root";
		$password = "";
		$port= 3307;
		$databaseName = "admin_control";


	// $conn = mysqli_connect($hostname, $username, $password, $databaseName);
	$conn = mysqli_connect("localhost", "root", "", "admin_control", $port);
	$query1 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_education` ";
	$query2 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_biographic` ";
	$query3 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_signature` ";
	$query4 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_personal` ";
	$query5 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_contact` ";
	// $query6 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_preferences` ";

	   //	$query3 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_education` ";
		 //   	$query4 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_education` ";
	 	 //  	$query5 = "SELECT `attributes`, `visible`, `mandatory` FROM `tbl_education` ";


	$result1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($result1)>0){

		$i=1;
		$j=2;
		while($row=mysqli_fetch_assoc($result1))
		{
	   			//echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';
			if($row['attributes']=='School_name_10' || $row['attributes']=='Board_name_10' || $row['attributes']=='Percent_10' ||
				$row['attributes']=='Year_pass_10' || $row['attributes']=='School_name_12' || $row['attributes']=='Board_name_12' || $row['attributes']=='Percent_12' || $row['attributes']=='Year_pass_12' || $row['attributes']=='Stream' || $row['attributes']=='Jee_mains' || $row['attributes']=='Jee_advance' || $row['attributes']=='UG_college'  || $row['attributes']=='UG_university' || $row['attributes']=='UG_grades' || $row['attributes']=='UG_year_of_pass' || $row['attributes']=='PG_college' || $row['attributes']=='PG_university' || $row['attributes']=='PG_grades' || $row['attributes']=='PG_year_of_pass' || $row['attributes']=='Achievements'){

				if($row['visible']=='yes'){

					${'checked'.$i} = 'checked';
				}

				else{
					${'checked'.$i} = '';
				}

				if($row['mandatory']=='yes'){
					${'checked'.$j} = 'checked';
				}

				else{
					${'checked'.$j} = '';

				}

			}

			$i+=2;
			$j+=2;


		}

	}
	else{
		echo 'Problem Occured';
	}


	$result2 = mysqli_query($conn, $query2);
	if(mysqli_num_rows($result2)>0 ){

		$i=41;
		$j=42;
		while($row=mysqli_fetch_assoc($result2) )
		{
	   			//echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


			if($row['attributes']=='Gender' || $row['attributes']=='Blood_group' || $row['attributes']=='Height' || $row['attributes']=='Disability' || $row['attributes']=='Body_marks'){

				if($row['visible']=='yes'){

					${'checked'.$i} = 'checked';
				}

				else{
					${'checked'.$i} = '';
				}

				if($row['mandatory']=='yes'){
					${'checked'.$j} = 'checked';
				}

				else{
					${'checked'.$j} = '';

				}

			}

			$i+=2;
			$j+=2;


		}

	}
	else{
		echo 'Problem Occured';
	}




	$result3 = mysqli_query($conn, $query3);
	if(mysqli_num_rows($result3)>0 ){

		$i=51;
		$j=52;
		while($row=mysqli_fetch_assoc($result3) )
		{
	   			//echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


			if($row['attributes']=='Student_photo' || $row['attributes']=='Student_signature'){

				if($row['visible']=='yes'){

					${'checked'.$i} = 'checked';
				}

				else{
					${'checked'.$i} = '';
				}

				if($row['mandatory']=='yes'){
					${'checked'.$j} = 'checked';
				}

				else{
					${'checked'.$j} = '';

				}

			}

			$i+=2;
			$j+=2;


		}

	}
	else{
		echo 'Problem Occured';
	}




	$result4 = mysqli_query($conn, $query4);
	if(mysqli_num_rows($result4)>0 ){

		$i=55;
		$j=56;
		while($row=mysqli_fetch_assoc($result4) )
		{
	   			//echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


			if($row['attributes']=='Student_name' || $row['attributes']=='DOB'
				|| $row['attributes']=='Category' || $row['attributes']=='Religion' || $row['attributes']=='Nationality' || $row['attributes']=='Father_name' || $row['attributes']=='Father_occupation' || $row['attributes']=='Father_phone' || $row['attributes']=='Father_email' || $row['attributes']=='Mother_name' || $row['attributes']=='Mother_occupation'
				|| $row['attributes']=='Mother_phone' || $row['attributes']=='Mother_email' || $row['attributes']=='Adhar_no' || $row['attributes']=='SSSM'){

				if($row['visible']=='yes'){

					${'checked'.$i} = 'checked';
				}

				else{
					${'checked'.$i} = '';
				}

				if($row['mandatory']=='yes'){
					${'checked'.$j} = 'checked';
				}

				else{
					${'checked'.$j} = '';

				}

			}

			$i+=2;
			$j+=2;


		}

	}
	else{
		echo 'Problem Occured';
	}



	$result5 = mysqli_query($conn, $query5);
	if(mysqli_num_rows($result5)>0 ){

		$i=85;
		$j=86;
		while($row=mysqli_fetch_assoc($result5) )
		{
	   			//echo 'visible'.$row['visible'].'mandatory'.$row['mandatory'].'<br>';


			if($row['attributes']=='Student_phone' || $row['attributes']=='Student_alt_phone' || $row['attributes']=='Student_email' || $row['attributes']=='Student_alt_email' || $row['attributes']=='Residential_address' || $row['attributes']=='Residential_state' || $row['attributes']=='Residential_pin_code' || $row['attributes']=='Permanent_address' || $row['attributes']=='Permanent_state' || $row['attributes']=='Permanent_pin_code'){

				if($row['visible']=='yes'){

					${'checked'.$i} = 'checked';
				}

				else{
					${'checked'.$i} = '';
				}

				if($row['mandatory']=='yes'){
					${'checked'.$j} = 'checked';
				}

				else{
					${'checked'.$j} = '';

				}

			}

			$i+=2;
			$j+=2;


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






<body>
	<form method="post" action="controller2.php" >


<div class="controller" style="border: 1px solid black; margin: 10px; width: 30%;">

	<div class="personal">
		<div class="personal-controller main-headings"><a class="nav-link" href='#personal-controller-table' id="personal-link" onclick="showhide(0)"><span class="headings">Personal Details <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>

		</span></a>

		<div class="personal-controller-table reg-tables" id="personal-controller-table"  >

			<table>

			<tr style="text-align: center;">
				<th>Visibility</th><th>Mandatory</th><th>Attributes</th>
			</tr>
			<tr>
				<td><input type="hidden" name="Student_name_hidden" id="ele_28_2" value="no"><input type="checkbox" name="Student_name" id="ele_28" value="ele_28" onclick="on_off()"  <?php echo $checked55; ?>>
				</td><td><input type="hidden" name="Student_name_1_hidden" id="ele_28_1_2" value="no"><input type="checkbox" name="Student_name" id="ele_28_1" value="ele_28_1" onclick="on_off_1()"  disabled <?php echo $checked56; ?>></td><td>Student Name</td>
			</tr>
			<tr>
				<td><input type="hidden" name="DOB_hidden" id="ele_29_2" value="no"><input type="checkbox" name="DOB" id="ele_29" value="ele_29" onclick="on_off()"  <?php echo $checked57; ?>>
				</td><td><input type="hidden" name="DOB_1_hidden" id="ele_29_1_2" value="no"><input type="checkbox" name="DOB" id="ele_29_1" value="ele_29_1" onclick="on_off_1()"  disabled <?php echo $checked58; ?>></td><td>DOB</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Category_hidden" id="ele_30_2" value="no"><input type="checkbox" name="Category" id="ele_30" value="ele_30" onclick="on_off()"  <?php echo $checked59; ?>>
				</td><td><input type="hidden" name="Category_1_hidden" id="ele_30_1_2" value="no"><input type="checkbox" name="Category" id="ele_30_1" value="ele_30_1" onclick="on_off_1()"  disabled <?php echo $checked60; ?>></td><td>Category</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Religion_hidden" id="ele_31_2" value="no"><input type="checkbox" name="Religion" id="ele_31" value="ele_31" onclick="on_off()"  <?php echo $checked61; ?>>
				</td><td><input type="hidden" name="Religion_1_hidden" id="ele_31_1_2" value="no"><input type="checkbox" name="Religion" id="ele_31_1" value="ele_31_1" onclick="on_off_1()"  disabled <?php echo $checked62; ?>></td><td>Religion</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Nationality_hidden" id="ele_32_2" value="no"><input type="checkbox" name="Nationality" id="ele_32" value="ele_32" onclick="on_off()"  <?php echo $checked63; ?>>
				</td><td><input type="hidden" name="Nationality_1_hidden" id="ele_32_1_2" value="no"><input type="checkbox" name="Nationality" id="ele_32_1" value="ele_32_1" onclick="on_off_1()"  disabled <?php echo $checked64; ?>></td><td>Nationality</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Father_name_hidden" id="ele_33_2" value="no"><input type="checkbox" name="Father_name" id="ele_33" value="ele_33" onclick="on_off()"  <?php echo $checked65; ?>>
				</td><td><input type="hidden" name="Father_name_1_hidden" id="ele_33_1_2" value="no"><input type="checkbox" name="Father_name" id="ele_33_1" value="ele_33_1" onclick="on_off_1()"  disabled <?php echo $checked66; ?>></td><td>Father's Name</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Father_occupation_hidden" id="ele_34_2" value="no"><input type="checkbox" name="Father_occupation" id="ele_34" value="ele_34" onclick="on_off()"  <?php echo $checked67; ?>>
				</td><td><input type="hidden" name="Father_occupation_1_hidden" id="ele_34_1_2" value="no"><input type="checkbox" name="Father_occupation" id="ele_34_1" value="ele_34_1" onclick="on_off_1()"  disabled <?php echo $checked68; ?>></td><td>Father's Occupation</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Father_phone_hidden" id="ele_35_2" value="no"><input type="checkbox" name="Father_phone" id="ele_35" value="ele_35" onclick="on_off()"  <?php echo $checked69; ?>>
				</td><td><input type="hidden" name="Father_phone_1_hidden" id="ele_35_1_2" value="no"><input type="checkbox" name="Father_phone" id="ele_35_1" value="ele_35_1" onclick="on_off_1()"  disabled <?php echo $checked70; ?>></td><td>Father's Phone</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Father_email_hidden" id="ele_36_2" value="no"><input type="checkbox" name="Father_email" id="ele_36" value="ele_36" onclick="on_off()"  <?php echo $checked71; ?>>
				</td><td><input type="hidden" name="Father_email_1_hidden" id="ele_36_1_2" value="no"><input type="checkbox" name="Father_email" id="ele_36_1" value="ele_36_1" onclick="on_off_1()"  disabled <?php echo $checked72; ?>></td><td>Father's Email</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Mother_name_hidden" id="ele_37_2" value="no"><input type="checkbox" name="Mother_name" id="ele_37" value="ele_37" onclick="on_off()"  <?php echo $checked73; ?>>
				</td><td><input type="hidden" name="Mother_name_1_hidden" id="ele_37_1_2" value="no"><input type="checkbox" name="Mother_name" id="ele_37_1" value="ele_37_1" onclick="on_off_1()"  disabled <?php echo $checked74; ?>></td><td>Mother's Name</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Mother_occupation_hidden" id="ele_38_2" value="no"><input type="checkbox" name="Mother_occupation" id="ele_38" value="ele_38" onclick="on_off()"  <?php echo $checked75; ?>>
				</td><td><input type="hidden" name="Mother_occupation_1_hidden" id="ele_38_1_2" value="no"><input type="checkbox" name="Mother_occupation" id="ele_38_1" value="ele_38_1" onclick="on_off_1()"  disabled <?php echo $checked76; ?>></td><td>Mother's Occupation</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Mother_phone_hidden" id="ele_39_2" value="no"><input type="checkbox" name="Mother_phone" id="ele_39" value="ele_39" onclick="on_off()"  <?php echo $checked77; ?>>
				</td><td><input type="hidden" name="Mother_phone_1_hidden" id="ele_39_1_2" value="no"><input type="checkbox" name="Mother_phone" id="ele_39_1" value="ele_39_1" onclick="on_off_1()"  disabled <?php echo $checked78; ?>></td><td>Mother's Phone</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Mother_email_hidden" id="ele_40_2" value="no"><input type="checkbox" name="Mother_email" id="ele_40" value="ele_40" onclick="on_off()"  <?php echo $checked79; ?>>
				</td><td><input type="hidden" name="Mother_email_1_hidden" id="ele_40_1_2" value="no"><input type="checkbox" name="Mother_email" id="ele_40_1" value="ele_40_1" onclick="on_off_1()"  disabled <?php echo $checked80; ?>></td><td>Mother's Email</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Adhar_no_hidden" id="ele_41_2" value="no"><input type="checkbox" name="Adhar_no" id="ele_41" value="ele_41" onclick="on_off()"  <?php echo $checked81; ?>>
				</td><td><input type="hidden" name="Adhar_no_1_hidden" id="ele_41_1_2" value="no"><input type="checkbox" name="Adhar_no" id="ele_41_1" value="ele_41_1" onclick="on_off_1()"  disabled <?php echo $checked82; ?>></td><td>Adhar Number</td>
			</tr>
			<tr>
				<td><input type="hidden" name="SSSM_hidden" id="ele_42_2" value="no"><input type="checkbox" name="SSSM" id="ele_42" value="ele_42" onclick="on_off()"  <?php echo $checked83; ?>>
				</td><td><input type="hidden" name="SSSM_1_hidden" id="ele_42_1_2" value="no"><input type="checkbox" name="SSSM" id="ele_42_1" value="ele_42_1" onclick="on_off_1()"  disabled <?php echo $checked84; ?>></td><td>SSSM ID</td>
			</tr>

		</table>
		<input type="checkbox" name="check_all" id="check_all_3" onclick="checkAll(this,28,42)"> Select All



		</div>
		</div>
	</div>


	<div class="education">
		<div class="education-controller main-headings"><a class="nav-link" href="#education-controller-table" onclick="showhide(1)"><span class="headings">Educational Qualification <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>
		</span></a>
		<div class="education-controller-table reg-tables" id="education-controller-table">



		<table>
			 <tr style="text-align: center;">
					<th>Visibility</th><th>Mandatory</th><th>Attributes</th>
				</tr>
				<tr>
					<td><input type="hidden" name="school_name_10_hidden" id="ele_1_2" value="no"><input type="checkbox" name="school_name_10" id="ele_1" value="ele_1" onclick="on_off()"  <?php echo $checked1; ?>>
					</td><td><input type="hidden" name="school_name_10_1_hidden" id="ele_1_1_2" value="no"><input type="checkbox" name="school_name_10_1" id="ele_1_1" value="ele_1_1" onclick="on_off_1()"  disabled <?php echo $checked2; ?>></td><td>10<sup>th</sup> School Name</td>
				</tr>
				<tr>
					<td><input type="hidden" name="board_name_10_hidden" id="ele_2_2" value="no"><input type="checkbox" name="board_name_10" id="ele_2" value="ele_2" onclick="on_off()"  <?php echo $checked3; ?>></td><td><input type="hidden" name="board_name_10_1_hidden" id="ele_2_1_2" value="no"><input type="checkbox" name="board_name_10" id="ele_2_1" value="ele_2_1" disabled onclick="on_off_1()"  <?php echo $checked4; ?>></td><td>10<sup>th</sup> Board Name</td>
				</tr>
				<tr>
					<td><input type="hidden" name="percent_10_hidden" id="ele_3_2" value="no"><input type="checkbox" name="percent_10" id="ele_3" value="ele_3" onclick="on_off()" <?php echo $checked5; ?>></td><td><input type="hidden" name="percent_10_1_hidden" id="ele_3_1_2" value="no"><input type="checkbox" name="percent_10" id="ele_3_1" value="ele_3_1" disabled onclick="on_off_1()" <?php echo $checked6; ?>></td><td>10<sup>th</sup> Percent</td>
				</tr>
				<tr>
					<td><input type="hidden" name="year_pass_10_hidden" id="ele_4_2" value="no"><input type="checkbox" name="year_pass_10" id="ele_4" value="ele_4" onclick="on_off()" <?php echo $checked7; ?>> </td><td><input type="hidden" name="year_pass_10_1_hidden" id="ele_4_1_2" value="no"><input type="checkbox" name="year_pass_10" id="ele_4_1" value="ele_4_1" disabled onclick="on_off_1()"  <?php echo $checked8; ?>></td><td>10<sup>th</sup> Passing Year</td>
				</tr>
				<tr>
					<td><input type="hidden" name="school_name_12_hidden" id="ele_5_2" value="no"><input type="checkbox" name="school_name_12" id="ele_5" value="ele_5" onclick="on_off()" <?php echo $checked9; ?>> </td><td><input type="hidden" name="school_name_12_1_hidden" id="ele_5_1_2" value="no"><input type="checkbox" name="school_name_12" id="ele_5_1" value="ele_5_1" disabled onclick="on_off_1()" <?php echo $checked10; ?>></td><td>12<sup>th</sup> School Name</td>
				</tr>
				<tr>
					<td><input type="hidden" name="board_name_12_hidden" id="ele_6_2" value="no"><input type="checkbox" name="board_name_12" id="ele_6" value="ele_6" onclick="on_off()"  <?php echo $checked11; ?>> </td><td><input type="hidden" name="board_name_12_1_hidden" id="ele_6_1_2" value="no"><input type="checkbox" name="board_name_12" id="ele_6_1" value="ele_6_1" disabled onclick="on_off_1()" <?php echo $checked12; ?>></td><td>12<sup>th</sup> Board Name</td>
				</tr>
				<tr>
					<td><input type="hidden" name="percent_12_hidden" id="ele_7_2" value="no"><input type="checkbox" name="percent_12" id="ele_7" value="ele_7" onclick="on_off()"  <?php echo $checked13; ?>> </td><td><input type="hidden" name="percent_12_1_hidden" id="ele_7_1_2" value="no"><input type="checkbox" name="percent_12" id="ele_7_1" value="ele_7_1" disabled onclick="on_off_1()" <?php echo $checked14; ?>></td><td>12<sup>th</sup> Percent</td>
				</tr>
				<tr>
					<td><input type="hidden" name="year_pass_12_hidden" id="ele_8_2" value="no"><input type="checkbox" name="year_pass_12" id="ele_8" value="ele_8" onclick="on_off()"  <?php echo $checked15; ?>> </td><td><input type="hidden" name="year_pass_12_1_hidden" id="ele_8_1_2" value="no"><input type="checkbox" name="year_pass_12" id="ele_8_1" value="ele_8_1" disabled onclick="on_off_1()" <?php echo $checked16; ?>></td><td>12<sup>th</sup> Passing Year</td>

				</tr>
				<tr>
					<td><input type="hidden" name="stream_hidden" id="ele_9_2" value="no"><input type="checkbox" name="stream" id="ele_9" value="ele_9" onclick="on_off()" <?php echo $checked17; ?>> </td><td><input type="hidden" name="stream_1_hidden" id="ele_9_1_2" value="no"><input type="checkbox" name="stream" id="ele_9_1" value="ele_9_1" disabled onclick="on_off_1()"  <?php echo $checked18; ?>></td><td>Stream</td>
				</tr>
				<tr>
					<td><input type="hidden" name="jee_mains_hidden" id="ele_10_2" value="no"><input type="checkbox" name="jee_mains" id="ele_10" value="ele_10" onclick="on_off()" <?php echo $checked19; ?>> </td><td><input type="hidden" name="jee_mains_1_hidden" id="ele_10_1_2" value="no"><input type="checkbox" name="jee_mains" id="ele_10_1" value="ele_10_1" disabled onclick="on_off_1()" <?php echo $checked20; ?>></td><td>Jee Mains</td>
				</tr>
				<tr>
					<td><input type="hidden" name="jee_advance_hidden" id="ele_11_2" value="no"><input type="checkbox" name="jee_advance" id="ele_11" value="ele_11" onclick="on_off()" <?php echo $checked21; ?>> </td><td><input type="hidden" name="jee_advance_1_hidden" id="ele_11_1_2" value="no"><input type="checkbox" name="jee_advance" id="ele_11_1" value="ele_11_1" disabled onclick="on_off_1()" <?php echo $checked22; ?>></td><td>Jee Advance</td>
				</tr>
				<tr>
					<td><input type="hidden" name="UG_college_hidden" id="ele_12_2" value="no"><input type="checkbox" name="UG_college" id="ele_12" value="ele_12" onclick="on_off()" <?php echo $checked23; ?>> </td><td><input type="hidden" name="UG_college_1_hidden" id="ele_12_1_2" value="no"><input type="checkbox" name="UG_college" id="ele_12_1" value="ele_12_1" disabled onclick="on_off_1()"  <?php echo $checked24; ?>></td><td>Under-graduate College</td>
				</tr>
				<tr>
					<td><input type="hidden" name="UG_university_hidden" id="ele_13_2" value="no"><input type="checkbox" name="UG_university" id="ele_13" value="ele_13" onclick="on_off()"  <?php echo $checked25; ?>></td><td><input type="hidden" name="UG_university_1_hidden" id="ele_13_1_2" value="no"><input type="checkbox" name="UG_university" id="ele_13_1" value="ele_13_1" disabled onclick="on_off_1()" <?php echo $checked26; ?>></td><td>Under-graduate University</td>
				</tr>
				<tr>
					<td><input type="hidden" name="UG_grades_hidden" id="ele_14_2" value="no"><input type="checkbox" name="UG_grades" id="ele_14" value="ele_14" onclick="on_off()" <?php echo $checked27; ?>> </td><td><input type="hidden" name="UG_grades_1_hidden" id="ele_14_1_2" value="no"><input type="checkbox" name="UG_grades" id="ele_14_1" value="ele_14_1" disabled onclick="on_off_1()" <?php echo $checked28; ?>></td><td>Under-graduate Grades</td>
				</tr>
				<tr>
					<td><input type="hidden" name="UG_year_of_pass_hidden" id="ele_15_2" value="no"><input type="checkbox" name="UG_year_of_pass" id="ele_15" value="ele_15" onclick="on_off()" <?php echo $checked29; ?>> </td><td><input type="hidden" name="UG_year_of_pass_1_hidden" id="ele_15_1_2" value="no"><input type="checkbox" name="UG_year_of_pass" id="ele_15_1" value="ele_15_1" disabled onclick="on_off_1()" <?php echo $checked30; ?>></td><td>Under-graduate Passing Year</td>
				</tr>
				<tr>
					<td><input type="hidden" name="PG_college_hidden" id="ele_16_2" value="no"><input type="checkbox" name="PG_college" id="ele_16" value="ele_16" onclick="on_off()"  <?php echo $checked31; ?>> </td><td><input type="hidden" name="PG_college_1_hidden" id="ele_16_1_2" value="no"><input type="checkbox" name="PG_college" id="ele_16_1" value="ele_16_1" disabled onclick="on_off_1()"  <?php echo $checked32; ?>></td><td>Post-graduate College</td>
				</tr>
				<tr>
					<td><input type="hidden" name="PG_university_hidden" id="ele_17_2" value="no"><input type="checkbox" name="PG_university" id="ele_17" value="ele_17" onclick="on_off()" <?php echo $checked33; ?>> </td><td><input type="hidden" name="PG_university_1_hidden" id="ele_17_1_2" value="no"><input type="checkbox" name="PG_university" id="ele_17_1" value="ele_17_1" disabled onclick="on_off_1()" <?php echo $checked34; ?>></td><td>Post-graduate University</td>
				</tr>
				<tr>
					<td><input type="hidden" name="PG_grades_hidden" id="ele_18_2" value="no"><input type="checkbox" name="PG_grades" id="ele_18" value="ele_18" onclick="on_off()"  <?php echo $checked35; ?>> </td><td><input type="hidden" name="PG_grades_1_hidden" id="ele_18_1_2" value="no"><input type="checkbox" name="PG_grades" id="ele_18_1" value="ele_18_1" disabled onclick="on_off_1()"  <?php echo $checked36; ?>></td><td>Post-graduate Grades</td>
				</tr>
				<tr>
					<td><input type="hidden" name="PG_year_of_pass_hidden" id="ele_19_2" value="no"><input type="checkbox" name="PG_year_of_pass" id="ele_19" value="ele_19" onclick="on_off()"  <?php echo $checked37; ?>> </td><td><input type="hidden" name="PG_year_of_pass_1_hidden" id="ele_19_1_2" value="no"><input type="checkbox" name="PG_year_of_pass" id="ele_19_1" value="ele_19_1" disabled onclick="on_off_1()"  <?php echo $checked38; ?>></td><td>Post-graduate Passing Year</td>
				</tr>
				<tr>
					<td><input type="hidden" name="achievements_hidden" id="ele_20_2" value="no"><input type="checkbox" name="achievements" id="ele_20" value="ele_20" onclick="on_off()" <?php echo $checked39; ?>></td><td><input type="hidden" name="achievements_1_hidden" id="ele_20_1_2" value="no"><input type="checkbox" name="achievements" id="ele_20_1" value="ele_20_1" disabled onclick="on_off_1()" <?php echo $checked40; ?>></td><td>Achievements</td>
				</tr>

			</table>

			<input type="checkbox" name="check_all" id="check_all" onclick="checkAll(this,1,20)"> Select All


		</div>
		</div>
	</div>


	<div class="biographic">
		<div class="biographic-controller main-headings"><a class="nav-link" href="#biographic-controller-table" onclick="showhide(2)"><span class="headings">Biographic Details <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>
		</span></a>
		<div class="biographic-controller-table  reg-tables" id="biographic-controller-table"  >


			<table>

				<tr style="text-align: center;">
					<th>Visibility</th><th>Mandatory</th><th>Attributes</th>
				</tr>
				<tr>
					<td><input type="hidden" name="Gender_hidden" id="ele_21_2" value="no"><input type="checkbox" name="Gender" id="ele_21" value="ele_21" onclick="on_off()"  <?php echo $checked41; ?>>
					</td><td><input type="hidden" name="Gender_1_hidden" id="ele_21_1_2" value="no"><input type="checkbox" name="Gender" id="ele_21_1" value="ele_21_1" onclick="on_off_1()"  disabled <?php echo $checked42; ?>></td><td>Gender</td>
				</tr>

				<tr>
					<td><input type="hidden" name="Blood_group_hidden" id="ele_22_2" value="no"><input type="checkbox" name="Blood_group" id="ele_22" value="ele_22" onclick="on_off()"  <?php echo $checked43; ?>>
					</td><td><input type="hidden" name="Blood_group_1_hidden" id="ele_22_1_2" value="no"><input type="checkbox" name="Blood_group" id="ele_22_1" value="ele_22_1" onclick="on_off_1()"  disabled <?php echo $checked44; ?>></td><td>Blood Group</td>
				</tr>

				<tr>
					<td><input type="hidden" name="Height_hidden" id="ele_23_2" value="no"><input type="checkbox" name="Height" id="ele_23" value="ele_23" onclick="on_off()"  <?php echo $checked45; ?>>
					</td><td><input type="hidden" name="Height_1_hidden" id="ele_23_1_2" value="no"><input type="checkbox" name="Height" id="ele_23_1" value="ele_23_1" onclick="on_off_1()"  disabled <?php echo $checked46; ?>></td><td>Height</td>
				</tr>

				<tr>
					<td><input type="hidden" name="Disability_hidden" id="ele_24_2" value="no"><input type="checkbox" name="Disability" id="ele_24" value="ele_24" onclick="on_off()"  <?php echo $checked47; ?>>
					</td><td><input type="hidden" name="Disability_1_hidden" id="ele_24_1_2" value="no"><input type="checkbox" name="Disability" id="ele_24_1" value="ele_24_1" onclick="on_off_1()"  disabled <?php echo $checked48; ?>></td><td>Disability</td>
				</tr>

				<tr>
					<td><input type="hidden" name="Body_marks_hidden" id="ele_25_2" value="no"><input type="checkbox" name="Body_marks" id="ele_25" value="ele_25" onclick="on_off()"  <?php echo $checked49; ?>>
					</td><td><input type="hidden" name="Body_marks_1_hidden" id="ele_25_1_2" value="no"><input type="checkbox" name="Body_marks" id="ele_25_1" value="ele_25_1" onclick="on_off_1()"  disabled <?php echo $checked50; ?>></td><td>Body Marks</td>
				</tr>

			</table>
			<input type="checkbox" name="check_all" id="check_all_1" onclick="checkAll(this,21,25)"> Select All


		</div>
		</div>
	</div>


	<div class="contact">
		<div class="contact-controller main-headings"><a class="nav-link" href="#contact-controller-table" onclick="showhide(3)"><span class="headings">Address & Contacts <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>
		</span></a>
		<div class="contact-controller-table  reg-tables" >


			<table>

			<tr style="text-align: center;">
				<th>Visibility</th><th>Mandatory</th><th>Attributes</th>
			</tr>
			<tr>
				<td><input type="hidden" name="Student_phone_hidden" id="ele_43_2" value="no"><input type="checkbox" name="Student_phone" id="ele_43" value="ele_43" onclick="on_off()"  <?php echo $checked85; ?>>
				</td><td><input type="hidden" name="Student_phone_1_hidden" id="ele_43_1_2" value="no"><input type="checkbox" name="Student_phone" id="ele_43_1" value="ele_43_1" onclick="on_off_1()"  disabled <?php echo $checked86; ?>></td><td>Student's Phone</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Student_alt_phone_hidden" id="ele_44_2" value="no"><input type="checkbox" name="Student_alt_phone" id="ele_44" value="ele_44" onclick="on_off()"  <?php echo $checked87; ?>>
				</td><td><input type="hidden" name="Student_alt_phone_1_hidden" id="ele_44_1_2" value="no"><input type="checkbox" name="Student_alt_phone" id="ele_44_1" value="ele_44_1" onclick="on_off_1()"  disabled <?php echo $checked88; ?>></td><td>Student's Alternate Phone</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Student_email_hidden" id="ele_45_2" value="no"><input type="checkbox" name="Student_email" id="ele_45" value="ele_45" onclick="on_off()"  <?php echo $checked89; ?>>
				</td><td><input type="hidden" name="Student_email_1_hidden" id="ele_45_1_2" value="no"><input type="checkbox" name="Student_email" id="ele_45_1" value="ele_45_1" onclick="on_off_1()"  disabled <?php echo $checked90; ?>></td><td>Student's Email</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Student_alt_email_hidden" id="ele_46_2" value="no"><input type="checkbox" name="Student_alt_email" id="ele_46" value="ele_46" onclick="on_off()"  <?php echo $checked91; ?>>
				</td><td><input type="hidden" name="Student_alt_email_1_hidden" id="ele_46_1_2" value="no"><input type="checkbox" name="Student_alt_email" id="ele_46_1" value="ele_46_1" onclick="on_off_1()"  disabled <?php echo $checked92; ?>></td><td>Student's Alternate Email</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Residential_address_hidden" id="ele_47_2" value="no"><input type="checkbox" name="Residential_address" id="ele_47" value="ele_47" onclick="on_off()"  <?php echo $checked93; ?>>
				</td><td><input type="hidden" name="Residential_address_1_hidden" id="ele_47_1_2" value="no"><input type="checkbox" name="Residential_address" id="ele_47_1" value="ele_47_1" onclick="on_off_1()"  disabled <?php echo $checked94; ?>></td><td>Residential Address</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Residential_state_hidden" id="ele_48_2" value="no"><input type="checkbox" name="Residential_state" id="ele_48" value="ele_48" onclick="on_off()"  <?php echo $checked95; ?>>
				</td><td><input type="hidden" name="Residential_state_1_hidden" id="ele_48_1_2" value="no"><input type="checkbox" name="Residential_state" id="ele_48_1" value="ele_48_1" onclick="on_off_1()"  disabled <?php echo $checked96; ?>></td><td>Residential State</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Residential_pin_code_hidden" id="ele_49_2" value="no"><input type="checkbox" name="Residential_pin_code_phone" id="ele_49" value="ele_49" onclick="on_off()"  <?php echo $checked97; ?>>
				</td><td><input type="hidden" name="Residential_pin_code_1_hidden" id="ele_49_1_2" value="no"><input type="checkbox" name="Residential_pin_code" id="ele_49_1" value="ele_49_1" onclick="on_off_1()"  disabled <?php echo $checked98; ?>></td><td>Residential Pin Code</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Permanent_address_hidden" id="ele_50_2" value="no"><input type="checkbox" name="Permanent_address" id="ele_50" value="ele_50" onclick="on_off()"  <?php echo $checked99; ?>>
				</td><td><input type="hidden" name="Permanent_address_1_hidden" id="ele_50_1_2" value="no"><input type="checkbox" name="Permanent_address" id="ele_50_1" value="ele_50_1" onclick="on_off_1()"  disabled <?php echo $checked100; ?>></td><td>Permanent Address</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Permanent_state_hidden" id="ele_51_2" value="no"><input type="checkbox" name="Permanent_state" id="ele_51" value="ele_51" onclick="on_off()"  <?php echo $checked101; ?>>
				</td><td><input type="hidden" name="Permanent_state_1_hidden" id="ele_51_1_2" value="no"><input type="checkbox" name="Permanent_state" id="ele_51_1" value="ele_51_1" onclick="on_off_1()"  disabled <?php echo $checked102; ?>></td><td>Permanent State</td>
			</tr>
			<tr>
				<td><input type="hidden" name="Permanent_pin_code_hidden" id="ele_52_2" value="no"><input type="checkbox" name="Permanent_pin_code" id="ele_52" value="ele_52" onclick="on_off()"  <?php echo $checked103; ?>>
				</td><td><input type="hidden" name="Permanent_pin_code_1_hidden" id="ele_52_1_2" value="no"><input type="checkbox" name="Permanent_pin_code" id="ele_52_1" value="ele_52_1" onclick="on_off_1()"  disabled <?php echo $checked104; ?>></td><td>Permanent Pin Code</td>
			</tr>
		</table>
		<input type="checkbox" name="check_all" id="check_all_4" onclick="checkAll(this,43,52)"> Select All


		</div>
		</div>
	</div>


	<div class="signature">
		<div class="signature-controller main-headings"><a class="nav-link" href="#signature-controller-table" onclick="showhide(4)"><span class="headings">Photo & Signature <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>
		</span></a>
		<div class="signature-controller-table reg-tables" id="signature-controller-table" >


			<table>

				<tr style="text-align: center;">
					<th>Visibility</th><th>Mandatory</th><th>Attributes</th>
				</tr>
				<tr>
					<td><input type="hidden" name="Student_photo_hidden" id="ele_26_2" value="no"><input type="checkbox" name="Student_photo" id="ele_26" value="ele_26" onclick="on_off()"  <?php echo $checked51; ?>>
					</td><td><input type="hidden" name="Student_photo_1_hidden" id="ele_26_1_2" value="no"><input type="checkbox" name="Student_photo" id="ele_26_1" value="ele_26_1" onclick="on_off_1()"  disabled <?php echo $checked52; ?>></td><td>Student Photo</td>
				</tr>
				<tr>
					<td><input type="hidden" name="Student_signature_hidden" id="ele_27_2" value="no"><input type="checkbox" name="Student_signature" id="ele_27" value="ele_27" onclick="on_off()"  <?php echo $checked53; ?>>
					</td><td><input type="hidden" name="Student_signature_1_hidden" id="ele_27_1_2" value="no"><input type="checkbox" name="Student_signature" id="ele_27_1" value="ele_27_1" onclick="on_off_1()"  disabled <?php echo $checked54; ?>></td><td>Student Signature</td>
				</tr>
			</table>
			<input type="checkbox" name="check_all" id="check_all_2" onclick="checkAll(this,26,27)"> Select All


		</div>
		</div>
	</div>


<div class="preferences">
		<div class="preferences-controller main-headings"><a class="nav-link" href='#preferences-controller-table' id="preferences-link" onclick="showhide(5)"><span class="headings">Preferences <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>

		</span></a>

		 <div class="preferences-controller-table reg-tables" id="preferences-controller-table"  >


		<div>
			<table class="table-no-border">
		    <tr>
		    <td class="table-no-border">
			<input type="radio" name="preference-radio" class="preference-radio" onclick="preference_div_selection()"><span style="font-size: 15px;"> Add new faculty</span>

			<div class="preference-div" style=" margin-top: 6px; margin-bottom: 10px;">
				<table class="table-no-border">
					<tr>
						<td class="table-no-border"><br>
							 <input type="text" name="faculty_branch" id="faculty_branch" class="form-control" placeholder="Enter Faculty" autocomplete="off">
						</td>
						<td class="table-no-border"><br>

							<button type="button" onclick="newlist(document.getElementById('faculty_branch'),document.getElementById('faculty_branch').value)" style="background: none; border: 1px solid #ced4da; font-weight: bold; font-size: 18px;  font-family: sans-serif;">Add</button>


						</td>
					</tr>
					<tr>
						<td class="table-no-border"><br>
							<select name="branch_list" id="branch_list" class="form-control" >
                             			<option name='faculty' value="Faculty- ">Faculty-</option>
                               </select>
                               <input type="hidden" name="branch_list_value" id="branch_list_value">

                           </td>
                           <td class="table-no-border"><br>

                             <i class="fas fa-trash-alt" onclick="newlist_delete(document.getElementById('branch_list'))" style="font-size: 24px; margin-left: 10px; cursor: pointer;" ></i>
						</td>
					</tr>
					<tr>
						<td class="table-no-border" align="center"><br>
                    		<button type="submit" name="save_details" id="save_details" style="background: none; border: 1px solid #ced4da; font-weight: bold; font-size: 18px; ">Add Faculty</button>
                    		<br>
                        </td>
                    </tr>

				</table>
			</div>
			</td>
			</tr>
			<td class="table-no-border">
			<input type="radio" name="preference-radio" class="preference-radio" onclick="preference_div_selection()"><span style="font-size: 15px;"> Add/Remove existing branch of faculty</span>
			<div class="preference-div" style=" margin-top: 6px; margin-bottom: 20px;">
				<table class="table-no-border">
					<tr>
						<td class="table-no-border"><br>
							<select name="faculty_list" id="faculty_list" class="form-control">
                           			</select>
						</td>
					</tr>
					<tr>
						<td class="table-no-border"><br>
							<select name="branch_course_list" id="branch_course_list" class="form-control">
                           							<option value="" selected disabled>Branch/Courses</option>
                           			</select>
						</td>
						<td class="table-no-border">
							<button type="submit" name="delete_branch" style="background: none; border: none; font-weight: bold; font-size: 18px; margin-top: 20px; "><i class="fas fa-trash-alt" style="font-size: 24px; margin-left: 10px; cursor: pointer;" ></i></button>

						</td>
					</tr>
					<tr>
						<td class="table-no-border"><br>
							 <input type="text" name="additional_branch" placeholder="Enter Branch" class="form-control" autocomplete="off">
						</td>
						<td class="table-no-border">
							<button type="submit" name="add_additional_branch" style="background: none; border: 1px solid #ced4da; font-weight: bold; font-size: 18px; margin-top: 20px;">Add</button>

						</td>
					</tr>
				</table>
			</div>
			</td>
			</tr>
			<tr>
			<td class="table-no-border">
			<input type="radio" name="preference-radio" class="preference-radio" onclick="preference_div_selection()"><span style="font-size: 15px;"> Update existing branch of faculty</span>
			<div class="preference-div" style=" margin-top: 20px; margin-bottom: 20px;">
				<table class="table-no-border">
					<tr>
						<td class="table-no-border">
							<select name="update_faculty_list" id="update_faculty_list" class="form-control">
                           			</select><br>
						</td>
					</tr>
					<tr>
						<td class="table-no-border">
							<select name="update_branch_course_list" id="update_branch_course_list" class="form-control">
                           							<option value="" selected disabled>Branch/Courses</option>
                           			</select><br>
						</td>
					</tr>
					<tr>
						<td class="table-no-border">
							<input type="text" name="update_additional_branch" placeholder="Enter Branch" class="form-control" autocomplete="off"><br>
						</td>
					</tr>
					<tr>
						<td class="table-no-border" align="center">
							<button type="submit" name="update_existing_branch" style="background: none; border: 1px solid #ced4da; font-weight: bold; font-size: 18px; ">Update Branch</button>
						</td>
					</tr>
				</table>
			</div>
			</td>
			</tr>
			<tr>
			<td class="table-no-border">
			<input type="radio" name="preference-radio" class="preference-radio" onclick="preference_div_selection()"><span style="font-size: 15px;"> Remove existing faculty</span>
			<div class="preference-div" style=" margin-top: 6px; margin-bottom: 10px;">
				<table class="table-no-border">
					<tr>
						<td class="table-no-border">
							<select name="delete_faculty_list" id="delete_faculty_list" class="form-control">
						</td>
						<td class="table-no-border">
							<button type="submit" name="delete_faculty" style="background: none; border: none; font-weight: bold; font-size: 18px; "><i class="fas fa-trash-alt"></i></button>
						</td>
					</tr>
				</table>
			</div>
			</td></tr>
		    </table>
		</div>

			<br>
		</div>
		</div>
	</div>



<div class="search-details">
		<div class="search-details-controller main-headings"><a class="nav-link" href='#search-details-controller-table' id="search-details-link" onclick="showhide(6)"><span class="headings">Search Details <i class="fa fa-chevron-down open" aria-hidden="true"></i><i class="fa fa-chevron-up close" aria-hidden="true"></i>

		</span></a>

		 <div class="search-details-controller-table reg-tables" id="search-details-controller-table" >
			<div>

			<h1><b><i><center><u> </u></center></i></b></h1>

				<input type="text" id="search" name="search" placeholder="Search">
				<input type="submit" onclick="f1()" formaction= "print-form.php" value="Search"><br><br><br>
			
			<table style="width:270px;margin-bottom:20px;">
			  <tr>
			    <th>Serial No.</th>
			    <th>Name</th>
			  </tr>
			<?php
			$conn = new mysqli("localhost","root","","student_registration", 3307);
			if (!$conn) {
			  die("error <br>");
			}

			$sql1 = "SELECT serial_no , student_name FROM tbl_personal ";
			$result = $conn->query($sql1);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    // echo "";
			    while($row = mysqli_fetch_assoc($result)) {
			        // echo   $row['serial_no'];
			        // echo   $row['student_name'];
			         // echo "done";
			         echo '<tr>
			                      <td>'.$row['serial_no'].'</td>
			                      <td>'.$row['student_name'].'</td>
			                    </tr>
			                    ';
			    }
			    // echo "</table>";
			}
			else{
			    echo "no matching records";
			 }

			 ?>

			</table>
		 </div>
		</div>
	</div>









</div>


</div>
<input type="submit" name="save_changes" id="save_changes" style="background: black; color: white;margin-left:10px; " onclick="on_off(); on_off_1();" value="Save Changes">

</form>
</body>
</html>

<script>
function f1(){
  if(search.value==""){
     alert('Enter Serial Number');
  }
}
</script>
<script type="text/javascript">

	function showhide(num){
		var className=document.getElementsByClassName('reg-tables')[num];
		if(className.style.display=='none'){
				className.style.display='block';
				document.getElementsByClassName('close')[num].style.display='block';
				document.getElementsByClassName('open')[num].style.display='none';
	    }

	    else{
	    className.style.display='none';
				document.getElementsByClassName('close')[num].style.display='none';
				document.getElementsByClassName('open')[num].style.display='block';
	      }
	    }







</script>



<script type="text/javascript">
	function on_off(){

		var arr1=[];
		var arr2=[];
		var arr3=[];

		for(var i=1;i<53;i++){

			arr1[i]=document.getElementById('ele_'+i);
			arr2[i]=document.getElementById('ele_'+i+'_1');
			arr3[i]=document.getElementById('ele_'+i+'_2');

			if(arr1[i].checked == true){
				arr2[i].disabled=false;
				arr3[i].value='yes';
			}

			else{
				arr2[i].disabled=true;
				arr2[i].checked=false;
				arr3[i].value='no';
			}

		}

	}

    /*var i = 1;
    	if(i < 21){

    	}
		var r = document.getElementById(ele.value);
		var s = document.getElementById(ele.value+'_1');
		var t = document.getElementById(ele.value+'_2');

		if(r.checked == true){
			s.disabled=false;
			t.value='yes';
		}
		else
		{
			s.disabled=true;
			s.checked=false;
			t.value='no';
		}
		*/


		function on_off_1(){

			var arr4=[];
			var arr5=[];

			for(var i=1; i<53;i++){
				arr4[i]=document.getElementById('ele_'+i+'_1');
				arr5[i]=document.getElementById('ele_'+i+'_1_2');

				if(arr4[i].checked == true){
					arr5[i].value='yes';
				}
				else{
					arr5[i].value='no';
				}
			}
		}




/*	function on_off_1(ele){

		var r = document.getElementById(ele.value);
		var u = document.getElementById(ele.value+'_2');
		if(r.checked == true){
			u.value='yes';
		}
		else{
			u.value='no';
		}
	}
	*/


	function checkAll(id,par1, par2){
		var r1;
		var r2;



		if(id.checked==true ){
			while(par1 <= par2){
				r1 = document.getElementById('ele_'+par1);
				r2 = document.getElementById('ele_'+par1+'_1');
				r1.checked=true;
				r2.checked=true;
				par1++;
			}
		}
	}

</script>




<script type="text/javascript">

	var arr = [];
	var btn = document.getElementById('save_details');
					function newlist(id,value)
                                {
                                	id.focus();
                                	if(id.placeholder=='Enter Faculty' && value!=''){
                                		var myselect=document.getElementById('branch_list');
                                		 $('#branch_list option[name="faculty"]').text('Faculty- '+value);
                                		 $('#branch_list option[name="faculty"]').value=value;

                                		 arr[0]=value;
                                		 update_branch_list();
                                		 btn.disabled=false;

                                 		 id.placeholder='Enter Course/Branch';
                                 		 id.value='';
                                 	}

                                 	else if(id.placeholder=='Enter Course/Branch' && value!=''){

                                 		$("#branch_list").append("<option value=\""+value+"\" >"+value+"</option>");

                                 		  arr.push(value);
                                 		  update_branch_list();
                                 		  id.value='';

                                 	}

                                	else{
                                		if(id.placeholder=='Enter Faculty'){
                                			alert('Enter Faculty for the courses');
                                		}
                                		else{
                                			alert('Enter Branch for the courses');
                                		}

                                	}

								}

								function newlist_delete(id){

								        for (var i = 0; i <= id.options.length; i++) {
								            if (id.options[i].selected) {
								            	if((id.options[i].text).includes('Faculty-')){
								            		if(confirm('Do you really want to change Faculty?')){
								            			 // id.removeChild(id.options[i]);
								            			 id.options[i].text='Faculty- ';
								            			 var faculty = document.getElementById('faculty_branch');
								            			 faculty.placeholder='Enter Faculty';
								            			 arr[0]='';
								            			 update_branch_list();
								            			 btn.disabled=true;
								            			 faculty.focus();
								            		}
								            	}

								            	else{
								            		id.removeChild(id.options[i]);
								            		arr.splice(i,1);
								            		update_branch_list();
								            	}

								                break;
								            }
								            else{

								            }
								        }

								}


								function update_branch_list(){

									document.getElementById('branch_list_value').value=arr.join('###');

								}



                               // -------------------  Choice-Filling  Validation  ---------------

                               $(document).ready(function(){

								var faculty_names = <?php echo '["'.implode('", "',$faculty_names).'"]' ?>;
						  	    var branch_list_names = <?php echo json_encode( $branch_list_names )?>;

						  		faculty_list();


                                function faculty_list(){
                                	  $("#faculty_list").html("");
                                	  $("#update_faculty_list").html("");
                                	  $("#delete_faculty_list").html("");

                                	  $("#faculty_list").append("<option value=\"\" disabled selected>Faculty</option>");
                                	  $("#update_faculty_list").append("<option value=\"\" disabled selected>Faculty</option>");
                                	  $("#delete_faculty_list").append("<option value=\"\" disabled selected>Faculty</option>");

                                	  $(faculty_names).each(function (i) {
                                  $("#faculty_list").append("<option value=\""+faculty_names[i]+"\">"+faculty_names[i]+"</option>");
                                 });

                                	  $(faculty_names).each(function (i) {
                                  $("#update_faculty_list").append("<option value=\""+faculty_names[i]+"\">"+faculty_names[i]+"</option>");
                                 });

                                	  $(faculty_names).each(function (i) {
                                  $("#delete_faculty_list").append("<option value=\""+faculty_names[i]+"\">"+faculty_names[i]+"</option>");
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

                                 document.getElementById('update_faculty_list').onchange= function(){

                                	var index_selected = document.getElementById('update_faculty_list').selectedIndex;
                                	if(index_selected >0){
                                		$("#update_branch_course_list").html("");
                                	$("#update_branch_course_list").append("<option value=\"\" disabled selected>Branch/Courses- "+faculty_names[index_selected-1]+"</option>");


                                	 for(var i=1; i<branch_list_names[index_selected-1].length; i++){
                                		 $("#update_branch_course_list").append("<option value=\""+branch_list_names[index_selected-1][i]+"\">"+branch_list_names[index_selected-1][i]+"</option>");




                                	   }
                                  	}
                                }






                               });

</script>

<script type="text/javascript">



	function preference_div_selection(){

		var	radio = document.getElementsByClassName('preference-radio');
		var divs = document.getElementsByClassName('preference-div');
		divs[0].style.display='none';
		divs[1].style.display='none';
		divs[2].style.display='none';
		divs[3].style.display='none';

		if(radio[0].checked==true){
			divs[0].style.display='block';
		}
		else if(radio[1].checked==true){
		   	divs[1].style.display='block';
		}
		else if(radio[2].checked==true){
		   	divs[2].style.display='block';
		}
		else if(radio[3].checked==true){
		   	divs[3].style.display='block';
		}
	}

</script>



<?php

 if(isset($_POST['save_details']))
       {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $port=3307;
        $databaseName = "admin_control";


        // $new_faculty = $_POST['new_faculty'];
        $new_branches = $_POST['branch_list_value'];
        $faculty = explode("###", $new_branches)[0];

        // $branch_list =implode(', ', $_POST['branch_list']);
        $connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);
        if(empty($new_branches) || empty($faculty)){
 			echo '<script>alert("Enter Faculty/Branch");</script>';
 											}

 								else{
         $sql="INSERT INTO `tbl_preferences` (`Faculty`,`Branch/course`) values('$faculty','$new_branches')";

         $result = mysqli_query($connect,$sql);
         if($result){

         	 echo '<script>alert("Saved Succesfully");</script>';

         }
         else{

         	  echo '<script>alert("Faculty already exists");</script>';
         }

        }
        mysqli_close($connect);
}



if(isset($_POST['delete_faculty']))
       {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $port= 3307;
        $databaseName = "admin_control";


        $connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);

        if(empty($_POST['delete_faculty_list'])){
        		 echo '<script>alert("No Faculty Selected");</script>';
        }

        else{
         	$delete_faculty = $_POST['delete_faculty_list'];
         	$sql= "DELETE FROM `tbl_preferences` WHERE `FACULTY`= '$delete_faculty' ";
          $result = mysqli_query($connect,$sql);

        if($result){
         	 echo '<script>alert("Faculty Deleted Succesfully");</script>';
         }
         else{
         	echo '<script>alert("localhost issued a problem");</script>';
         }

         }
          mysqli_close($connect);

        }



if(isset($_POST['delete_branch']))
       {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $port= 3307;
        $databaseName = "admin_control";


			$connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);


        if(empty($_POST['faculty_list'])){
        	 	echo '<script>alert("No Faculty Selected");</script>';
        }

        else if(empty($_POST['branch_course_list'])){
        	echo '<script>alert("No Branch Selected");</script>';
        }

        else{

        $faculty_name = $_POST['faculty_list'];
        $branch_name = $_POST['branch_course_list'];

        $branch = "SELECT `Branch/course` FROM `tbl_preferences` WHERE `Faculty`='$faculty_name' ";
        $result = mysqli_query($connect,$branch);
        $row = mysqli_fetch_assoc($result);

         $branch_arr = explode("###", $row['Branch/course']);
         $index = array_search($branch_name,$branch_arr);
         array_splice($branch_arr,$index,1);
         $new_branch_arr = implode("###", $branch_arr);

         $sql = "UPDATE `tbl_preferences` SET `Branch/course`='$new_branch_arr' WHERE `Faculty`=$faculty_name";
         $result = mysqli_query($connect,$sql);

         if($result){
         	 echo '<script>alert("Branch Deleted Succesfully");</script>';
         }

         else{
         	 echo '<script>alert("localhost issued a problem");</script>';
         }
        }

          mysqli_close($connect);
        }


 if(isset($_POST['add_additional_branch'])){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $port=3307;
        $databaseName = "admin_control";


				$connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);



        if(empty($_POST['additional_branch'])) {
          echo '<script>alert("No Additional Branch Mentioned");</script>';
        }

        else{
        if(empty($_POST['faculty_list'])){
          echo '<script>alert("No Faculty Selected for Branch");</script>';
        }

        else if(empty($_POST['branch_course_list'])){

        $faculty_name = $_POST['faculty_list'];
        $new_add_branch = $_POST['additional_branch'];

        $branch = "SELECT `Branch/course` FROM `tbl_preferences` WHERE `Faculty`='$faculty_name' ";
        $result = mysqli_query($connect,$branch);
        $row = mysqli_fetch_assoc($result);

        $branch_arr = explode("###", $row['Branch/course']);
        array_splice($branch_arr, 1, 0, $new_add_branch);
        $new_branch_arr = implode("###", $branch_arr);

        $sql = "UPDATE `tbl_preferences` SET `Branch/course`='$new_branch_arr' WHERE `Faculty`=$faculty_name";
        $result = mysqli_query($connect,$sql);

        if($result){
           echo '<script>alert("Branch Added Succesfully");</script>';
         }

         else{
           echo '<script>alert("localhost issued a problem");</script>';
         }

        }

        else{

        $faculty_name = $_POST['faculty_list'];
        $new_add_branch = $_POST['additional_branch'];
        $after_branch = $_POST['branch_course_list'];

        $branch = "SELECT `Branch/course` FROM `tbl_preferences` WHERE `Faculty`='$faculty_name' ";
        $result = mysqli_query($connect,$branch);
        $row = mysqli_fetch_assoc($result);

        $branch_arr = explode("###", $row['Branch/course']);
				$index = array_search($after_branch,$branch_arr);
				++$index;
				array_splice($branch_arr, $index, 0, $new_add_branch);
				$new_branch_arr = implode("###", $branch_arr);

        $sql = "UPDATE `tbl_preferences` SET `Branch/course`='$new_branch_arr' WHERE `Faculty`=$faculty_name";
        $result = mysqli_query($connect,$sql);

        if($result){
           echo '<script>alert("Branch Added Succesfully");</script>';
         }

         else{
           echo '<script>alert("localhost issued a problem");</script>';
         }

      }
    }

 }


 if(isset($_POST['update_existing_branch'])){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $port=3307;
        $databaseName = "admin_control";

        $connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);


        if(empty($_POST['update_additional_branch'])){
          echo '<script>alert("No Additional Branch Mentioned");</script>';
        }

        else{

         if(empty($_POST['update_faculty_list'])){
          echo '<script>alert("No Faculty Selected for Branch");</script>';
        }

        else if(empty($_POST['update_branch_course_list'])){
          echo '<script>alert("No Branch Selected");</script>';
        }

        else{

        $faculty_name = $_POST['update_faculty_list'];
        $new_add_branch = $_POST['update_additional_branch'];
        $change_branch = $_POST['update_branch_course_list'];

        $branch = "SELECT `Branch/course` FROM `tbl_preferences` WHERE `Faculty`='$faculty_name' ";
        $result = mysqli_query($connect,$branch);
        $row = mysqli_fetch_assoc($result);

        $branch_arr = explode("###", $row['Branch/course']);
        $index = array_search($change_branch,$branch_arr);
        $branch_arr[$index]=$new_add_branch;
        $new_branch_arr = implode("###", $branch_arr);
        echo $new_branch_arr;

        $sql = "UPDATE `tbl_preferences` SET `Branch/course`='$new_branch_arr' WHERE `Faculty`=$faculty_name";
        $result = mysqli_query($connect,$sql);

        if($result){
           echo '<script>alert("Branch Added Succesfully");</script>';
         }

         else{
           echo '<script>alert("localhost issued a problem");</script>';
         }


       }
     }

      }

?>
