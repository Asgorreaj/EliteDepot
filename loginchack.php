<?php 
session_start();
if(isset($_REQUEST['Submit'])) 
{

	//print_r($_REQUEST);
	if ($_REQUEST['email']=="" || $_REQUEST['password']=="") 
	{
		echo "Invalid user Email/Password";
	}
	else
	{
		$file=fopen('User.txt', 'r');
		while (!feof($file)) 
		{
			$data=fgets($file);
			$user=explode('|', $data);
			if($_REQUEST['email']==trim($user[1]) && $_REQUEST['password']==trim($user[5]))
			{
				setcookie('flag' , 'true' ,time()+60 , '/');
				header('location:product.php');
			}
			else
			{
				echo "Invalid User.";
			}


		}

	}
}
else
{
	echo "Invalid Request.";
}
//print_r($_REQUEST);

 ?>