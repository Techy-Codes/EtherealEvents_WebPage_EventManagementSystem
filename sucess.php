<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ETHEREAL EVENTS</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png">
    <style>

.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
}
nav
{
    flex: 1;
    text-align: right;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: #f31194;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
nav ul li button:hover
{
    color: aqua;
}
nav ul li a:hover
{
    color: aqua;
}
a
{
    text-decoration: none;
    color: palevioletred;
    font-size: 28px;
}
.btn {
  display: inline-block;
  margin-top: 1rem;
  padding: .8rem 2.8rem;
  border-radius: 5rem;
  border-top-left-radius: 0;
  border: 0.2rem solid #130f40;
  cursor: pointer;
  background: none;
  color: #f31194;
  font-size: 1.7rem;
  overflow: hidden;
  z-index: 0;
  position: relative;
}

.btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: #130f40;
  z-index: -1;
  -webkit-transition: .2s linear;
  transition: .2s linear;
  -webkit-clip-path: circle(0% at 0% 5%);
          clip-path: circle(0% at 0% 5%);
}

.btn:hover::before {
  -webkit-clip-path: circle(100%);
          clip-path: circle(100%);
}

.btn:hover {
  color: #fff;
}

.about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.about .image img {
  width: 50%;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.about .content h3 {
  color: #130f40;
  font-size: 4rem;
}

.about .content h3 span {
  color: green;
}

.about .content p {
  font-size: 1.6rem;
  color: #666;
  padding: 1rem 0;
  line-height: 2;
}
</style>
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='#'>ETHEREAL EVENTS</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                <li><a href='index.php'><h3>HOME</h3></a></li>
                <li><a href='WEDINFO.html'>WEDDING</a></li>
                <li><a href='BIRTHINFO.html'>BIRTHDAY</a></li>
                <li><a href='ENTINFO.html'>ENTERTAINMENT</a></li>
                <li><button class='btn' onclick="window.location.href='logout.php';" style="width:auto;">LOGOUT</button></li>
                </ul>
            </nav>
        </div>
<BR>
   
<section class="about" id="about">

    <div class="image">
        <img src="image/success.png" alt="">
    </div>
<div class="content">
        <h3>Registration<span> Successful!!</span></h3><BR>
        <p> Mr/Ms.<?php echo $user_data['user_name']; ?>, you've taken the first step towards a seamless experience with us. Your package registration is complete and your journey with our services has just begun. Thank you for choosing our website for your needs. We look forward to serving you with excellence and exceeding your expectations.
Should you have any questions or require further assistance, our dedicated support team is here to help. Stay tuned for updates and exciting offers!</p>
       <center><button class='btn' onclick="window.location.href='SAMPPDF.php';" style="width:auto;">ACKNOWLEDGEMENT</button></center>
    <center><button class='btn' onclick="window.location.href='mail.php';" style="width:auto;">Email</button></center>
    </div>
    <BR><BR>
     
</section>
 
<!-- about section ends -->
</body>
</html>
