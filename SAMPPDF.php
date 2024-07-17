<?php 
session_start();
include("connection.php");
	include("fnxpdf.php");

	$user_data = check_login($con);

?>

<?php

  require ("fpdf184/fpdf.php");

  //customer and invoice details
  $info=[
    "customer"=>"Ram Kumar",
    "address"=>"4th cross,Car Street,",
    "city"=>"Salem 636204.",
    "invoice_no"=>"1000001",
    "invoice_date"=>"30-11-2021",
    "total_amt"=>"5200.00",
    "words"=>"Rupees Five Thousand Two Hundred Only",
  ];
  
  
  //invoice Products
  $products_info=[
    [
      "name"=>"Keyboard",
      "price"=>"500.00",
      "qty"=>2,
      "total"=>"1000.00"
    ],
    [
      "name"=>"Mouse",
      "price"=>"400.00",
      "qty"=>3,
      "total"=>"1200.00"
    ],
    [
      "name"=>"UPS",
      "price"=>"3000.00",
      "qty"=>1,
      "total"=>"3000.00"
    ],
  ];
  
  class PDF extends FPDF
  {
    function Header(){
      
      //Display Company Info
     

	$this->Image("logo.png",5,5,50,30,"PNG");
      
      //Display INVOICE text
	$this->SetY(10);
      $this->SetX(-70);
      $this->SetFont('Arial','B',14);
      $this->Cell(50,10,"Ethereal Events",0,1);
	$this->SetY(15);
      $this->SetX(-70);
	$this->SetFont('Arial','',14);
      $this->Cell(50,10,"Wall Street,",0,1);
	$this->SetY(20);
      $this->SetX(-70);
      $this->Cell(50,10,"Fortune towers, 600057.",0,1);
	$this->SetY(25);
      $this->SetX(-70);
      $this->Cell(50,10,"PH :9789852637",0,1);
      
      //Display Horizontal line
      $this->Line(0,38,210,38);
    }
    
    function body($info,$products_info,$user_data){
      
      //Billing Details
      $this->SetY(55);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(50,10,"Greetings from HEVIN,",0,1);
	$this->SetY(65);
      $this->SetX(30);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,"Mr/Ms.".$user_data['userid']. " Thank you for booking our services.Its a great offer to be a part of your ",0,1);
	$this->SetY(75);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,"celebration.All the works of this events will be done by your choice without any flaw.Hope us we will ",0,1);
     $this->SetY(85);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,"make this event a grand sucess and Memorable one for you.You can find a Acknowledgement below.",0,1);
$this->SetY(95);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,"Kindly have a Copy of it for future Reference",0,1);
      
      
      //Display Table headings
      $this->SetY(104);
      $this->SetX(85);
      $this->SetFont('Arial','B',12);
      $this->Cell(105,9,"ACKNOWLEDGEMENT",0,"C");
      

      $this->SetY(115);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"EVENT",1,0,"C");
      $this->Cell(100,9,$user_data['event'],1,0,"C");

      $this->SetY(124);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Reference id",1,0,"C");
      $this->Cell(100,9, $user_data['name'] ,1,0,"C");

      
      $this->SetY(133);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Name",1,0,"C");
      $this->Cell(100,9,$user_data['userid'],1,1,"C");

      
      $this->SetY(142);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Date of Event",1,0,"C");
      $this->Cell(100,9,$user_data['date_event'],1,1,"C");

      $this->SetY(151);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Estimated attendees",1,0,"C");
      $this->Cell(100,9,$user_data['est_att'],1,1,"C");

      $this->SetY(160);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Contact",1,0,"C");
      $this->Cell(100,9,$user_data['phone'],1,1,"C");
      
      $this->SetY(169);
      $this->SetX(20);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Grand Total",1,0,"C");
      $this->Cell(100,9,$user_data['price'],1,1,"C");


      $this->SetY(195);
      $this->SetX(30);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,"Soon our Regional co-ordinator Mr.Parathasarathy (cell:8853855127) will reach you  ",0,1);

      
      $this->SetY(205);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,"and discuss about the plans.Thank you,",0,1);

      
   }
    function Footer(){
      
      //set footer position
      $this->SetY(-50);
      $this->SetFont('Arial','B',12);
      $this->Image("sign.jpeg",150,220,50,30,"JPEG");
      $this->Ln(5);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"HEVIN",0,1,"R");
      $this->Cell(0,10,"(CEO,Ethereal events)",0,1,"R");
      $this->SetFont('Arial','',10);
      

      $this->SetY(-50);
      $this->SetFont('Arial','B',12);
      $this->Image("COSIGN.png",10,220,50,30,"PNG");
      $this->Ln(5);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"PARATHASARATHY",0,1,"L");
      $this->Cell(0,10,"(Co-Ordiator,Ethereal events)",0,1,"L");
      $this->SetFont('Arial','',10);


      //Display Footer Text
      $this->Cell(0,10,"This is a computer generated acknowledgement kindly take a print out",0,1,"C");
      
    }
    
  }
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($info,$products_info,$user_data);
  $pdf->Output();
?>