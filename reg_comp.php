<?php 
session_start();

	include("connection.php");
	include("functions.php");

    $user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		

			//save to database
			$query = "insert into Register(name,userid,email,phone,date_reg,event,date_event,address,est_att,price) values ('$user_data[user_id]',' $user_data[user_name]','$user_data[email]','$user_data[phone]','$user_data[date]','$_POST[event]','$_POST[Date]','$_POST[Address]','$_POST[entry]','$_POST[price]')";

			mysqli_query($con, $query);

			header("Location: sucess.php");
			die;
		
	}
?>



/*create table Register(id int NOT NULL AUTO_INCREMENT, name varchar(30) not null, userid varchar(30) not null,email varchar(30) not null,phone varchar(12) not null,date_reg varchar(12) not null,event varchar(10) not null,date_event varchar(12) not null,address varchar(70) not null,est_att varchar(10) not null,price varchar(10) not null,primary key(id));*/
