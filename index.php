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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Pet Food Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2180f54384.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <style>
           
.submit-btn
{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: #F3C693;
	border: 0;
	outline: none;
	border-radius: 30px;
}

.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 20px;

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
    color: #c4057e;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: black;
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
.home {
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  background: url(image/reg_bg.jpeg) no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
}
.home .content {
  width: 100rem;
}

.home .content h3 {
  font-size: 4rem;
  color: #fff;
  padding-bottom: 1rem;
}

.home .content h3 span {
  color:green ;
}
.home .content h3 .intro {
  color: #e67e22;
}

.home .content .btn {
  color: #fff;
  border-color: #fff;
}

.home .content .btn:hover {
  color: #130f40;
}

.home .content .btn::before {
  background: #fff;
}

        </style>
</head>
<body>

<!-- header section starts  -->
<div class="navbar">
        <div>
            <a href='HOME.html'><h3>ETHEREAL EVENTS</h3></a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='HOME.html'><h3>HOME</h3></a></li>
                <li><a href='WEDPURCHASE.php'>WEDDING</a></li>
                <li><a href='BIRTHLO.html'>BIRTHDAY</a></li>
                <li><a href='ENTELO.html'>ENTERTAINMENT</a></li>
                <li><button class='btn' onclick="window.location.href='HOME.html';" style="width:auto;">LOGOUT</button></li>
            </ul>
        </nav>
    </div>

<!-- header section ends -->
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <p ><h3> <span class="intro">Hi</span> <?php echo $user_data['user_name']; ?> You have <span>sucessfully REGISTERED</span> to our system.Now you can purchase our EVENT packages</h3></p>
        <center><a id="hreg" href="#plan" class="btn">Purchase Now!!</a></center>
    </div>



</section>

<!-- home section ends -->
        
	
	<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about_img.png" alt="">
    </div>

    <div class="content">
        <h3>ABOUT <span>US</span> </h3>
        <p>We are a young agency formed by a group of like-minded professionals , with one sole purpose to provide the best solutions to our clients and create a benchmark with our service standards.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->



<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/mat.png" height="50px" width="50px"style="background-color:#aa0d9d;">
            <h3>Matrimony</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/photo.png" height="50px" width="50px">
            <h3>Photography</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/cat.png" height="50px" width="50px">
            <h3>Catering</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/hot.png" height="50px" width="50px"style="background-color:#aa0d9d;">
            <h3>Venu searching</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/vol.png" height="50px" width="50px"style="background-color:#aa0d9d;color:white">
            <h3>Organising volunteers</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/wed.png" height="50px" width="50px">
            <h3>Wedding Decor</h3>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> choose a <span>plan</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">WEDDING</h3>
            <h3 class="day"> 1 day </h3>
            <img src="image/wedpack.png" height="50px" width="50px">
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>₹</span>50</div>
            <a href="WEDPURCHASE.php" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">PARTY</h3>
            <h3 class="day"> 10 days </h3>
            <img src="image/part.png" height="50px" width="50px">
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>₹</span>350</div>
            <a href="BIRTHDAYPURCHASE.php" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">SOCIAL</h3>
            <h3 class="day"> 30 days </h3>
            <img src="image/concert.png" height="50px" width="50px">
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>₹</span>650</div>
            <a href="EVENTPURCHASE.php" class="btn"> choose plan </a>
        </div>

    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="image/contact_img.png" alt="">
    </div>

    <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="tumber" placeholder="your number" class="box">
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<section class="footer">


    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>
  
      

    <div class="credit">copyright ©<span> HEVIN </span> </div>

</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
