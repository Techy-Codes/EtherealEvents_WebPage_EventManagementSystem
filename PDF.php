<?php 
session_start();

include("connection.php");
function check_login($con)
{

	if(isset($_SESSION['userid']))
	{

		$id = $_SESSION['userid'];
		$query = "select * from register where userid = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
}

$user_data = check_login($con);

require ("fpdf184/fpdf.php");
class PDF extends FPDF

 

  
     
{
    function Header()
    {
      
      //Display Company Info
      $this->Image("logo.png",5,5,50,30,"PNG");
      
       //Display Company Info
       $this->SetY(15);
       $this->SetX(-40);
       $this->SetFont('Arial','B',14);
       $this->Cell(50,10,"ETHEREAL EVENTS",0,1);
       $this->SetFont('Arial','',14);
       $this->Cell(50,7,"Wall Street,",0,1);
       $this->Cell(50,7,"Fortune Tower, Chennai-57",0,1);
       $this->Cell(50,7,"PH :9789852637",0,1);
      
       //Display Horizontal line
      $this->Line(0,48,210,48);
    }
    
    
    function body($redg_data)
    {
      
      //Billing Details
      $this->SetY(55);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(50,10,"Greetings from HEVIN ",0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(70,170,'$greet',0,1);
    
      
      //Display Acknowlwdge 
      $this->SetY(65);
      $this->SetX(10);
      $this->SetFont('Arial','B',17);
      $this->Cell(90,9,"ACKNOWLEDGEMENT",0,1);
      
      
      //Display Table headings
      $this->SetY(75);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"EVENT",1,0,"C");
      $this->Cell(110,9,"PRICE",1,0,"C");
   
      
      //Display table product rows
    
        $this->Cell(80,9,"Name",1,0,"C");
        $this->Cell(110,9,'$redg_data[name]',1,0,"C");

        $this->Cell(80,9,"Reference id",1,0,"C");
        $this->Cell(110,9,'$redg_data[userid]',1,0,"C");

        $this->Cell(80,9,"Phone",1,0,"C");
        $this->Cell(110,9,'$redg_data[phone]',1,0,"C");

        $this->Cell(80,9,"Date of Event",1,0,"C");
        $this->Cell(110,9,'$redg_data[date_event]',1,0,"C");

        $this->Cell(80,9,"Amount",1,0,"C");
        $this->Cell(110,9,'$redg_data[price]',1,0,"C");

        $this->Cell(80,9,"Due Date",1,0,"C");
        $this->Cell(110,9,'$redg_data[date_event]',1,0,"C");

    

     
      /*//Display amount in words
      $this->SetY(150);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,9,'$msg',0,1);*/
      
    }
    function Footer()
    {
      
      //set footer position
      $this->SetY(-50);
      $this->Image("sign.png",5,5,50,30,"PNG");
      $this->Ln(5);
      $this->SetFont('Arial','B',14);
      $this->Cell(0,10,"HEVIN (CEO,Ethereal Events)",0,1,"R");
      $this->SetFont('Arial','',10);
      
      //Display Footer Text
      $this->Cell(0,10,"This is a computer generated ACKNOWLEDGEMENT",0,1,"C");
      
    }

     /*   //Display amount in words
      //  $this->SetY(-50);
      //  $this->SetX(10);
        $this->Image("sign.png",5,5,50,30,"PNG");
        $this->Ln(5);
        $this->SetFont('Arial','B',14);
        $this->Cell(0,10,"(CO-ORDINATOR,Ethereal Events)",0,1,"R");*/
     
}
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($redg_data);
  $pdf->Output();
?>