<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = mt_rand(10000, 99999);

			$query = "insert into user (user_id,user_name,phone,email,password,address) values ('$user_id','$user_name','$phone','$email','$password','$address')";

			mysqli_query($con, $query);

			header("Location: HOME.html");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


