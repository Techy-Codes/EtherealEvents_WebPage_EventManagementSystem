<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<head>
    <title>BIRTHDAY PARTY
    </title>
        <style>
            body{
                background:url(BIRTH.jpg)no-repeat center fixed;
                background-size: cover;
            }
            table{
                width:80%;
                margin: auto;
                border:1px solid white;
                border-collapse: collapse;
                text-align: center;
                font-size: 35px;
                table-layout: fixed;
                background: rgba(244, 26, 222, 0.511);
                opacity:0.9;
                
                margin-top: 100px
            }
            th,td{
                padding: 20px;
                color: rgb(255, 255, 255);
            }
            .submit-btn
{
	width: 50%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: rgb(125, 16, 4);
	border: 0;
    color: azure;
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
    color: white;
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

.input-field,select
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
}
 input,select
{
	color:white;
	font-size:30PX;
        </style>
</head>
<body>
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
    <form action="reg_comp.php" method="post">
    <table>
        <tr><th colspan="2">Hello,<?php echo $user_data['user_name']; ?> Please fill the required column to confirm your purchase</th></tr>
        <tr>
            <TD>Name</TD>
            <TD><?php echo $user_data['user_name']; ?></TD>

        </tr>
        <tr>
            <TD>Email</TD>
            <TD><?php echo $user_data['email']; ?></TD>
        </tr>
        <tr>
            <TD>Phone</TD>
            <TD><?php echo $user_data['phone']; ?></TD>
        </tr>
        <tr>
            <TD>Date of Register</TD>
            <TD><?php echo date('d-m-Y');?></TD>
        </tr>
        <tr>
            <TD>Ref ID</TD>
            <TD><?php echo $user_data['user_id']; ?></TD>

        </tr>
        <tr>
            <TD>Package ID</TD>
            <TD><select id="event" name="event" required>
        <option value="BD5235">BIRTHDAY</option></SELECT></TD>

        </tr>
        <tr>
            <TD>Date of Event</TD>
            <TD><input type='date'class='input-field'placeholder='Date' name="Date" required></TD>
        </tr>
        <tr>
            <TD>Address</TD>
            <TD><input type='text'class='input-field'placeholder='Address' name="Address" required></TD>
        </tr>
        <tr>
            <TD>Estimation of Attendies</TD>
            <TD><input type='text' id="atten" class='input-field' placeholder='no.of.attendies' name="entry" required></TD>
        </tr>
        <tr>
            <TD colspan="2">Show Price<input type='radio' class='input-field' placeholder='Price' name="price"  style="height:50px; width:50px; vertical-align: middle;" onclick="calc(this.form);"></TD>
        </tr>
        <tr>
            <TD>NET PRICE</TD>
            <TD><input type='text'class='input-field' placeholder='Price' name="nprice" onfocus="this.blur();"></TD>
        </tr>
        
            <td colspan="2"><button type='submit'class='btn'>Register</button></td>
        </tr>
    </table></form>

    <script>
            function calc(a)
            {
                if(a.elements[4].checked)
                {
                    if(a.entry.value>5000)
                    {
                       a.nprice.value=150000+(a.entry.value*20)
                     }
                     else
                    {
                       a.nprice.value=150000
                     }
                }
            }
        
        </script>
        </body>
        </html>