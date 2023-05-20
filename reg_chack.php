<?php 
if (isset($_REQUEST['Submit'])) {//chack if submit button is clicked or not
	//print_r($_REQUEST);
	//echo "<br>";

	//Blank validation
	if ($_REQUEST['name']=="" || $_REQUEST['email']=="" || $_REQUEST['age']=="" || $_REQUEST['phone']=="" || $_REQUEST['address']=="" || $_REQUEST['password']=="" || $_REQUEST['re-password']=="" ) 
	{
		//header('location: registration.php');
		echo "One/many Perameter is empty.";
		
	}

	//EmailValidation
	elseif ((strpos($_REQUEST['email'], '@') != true) || (strpos($_REQUEST['email'], '.') != true))
	{
		
		echo "Email dose not contain '@' and/or '.' . ";
	}

	//Phone number Validation
	

	elseif (strlen($_REQUEST['phone']) != 11)
	{		
		echo "Invalide Phone number . ";
	}

	//Password Validation
	elseif ( (strlen($_REQUEST['password'])<3) || ($_REQUEST['password']!=$_REQUEST['re-password'])) 
	{
		echo "Invalide password or password and re-enter password does not match. ";
	}

	else
	{
		//print_r($_REQUEST);
		$file=fopen('User.txt', 'a');
		$data=$_REQUEST['name']."|".$_REQUEST['email']."|".$_REQUEST['age']."|".$_REQUEST['phone']."|".$_REQUEST['address']."|".$_REQUEST['password']."\r\n";
		
		fwrite($file, $data);
		fclose($file);
		header('location:loginemp.php');
		//print_r($data);

		session_start();
		$_SESSION['user_data'] = $_POST;
		header('location:employee.php');

	}

}
//
 ?>