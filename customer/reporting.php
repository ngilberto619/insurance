<?php
session_start();
include'../db.php';
require('../fpdf.php');


$user=$_SESSION['username'];
if($user==''){
	header('include:../home.php');
}
$users=$_GET['users'];
$d=date('d_m_Y');

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(200,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(35,35,35,20,20,20,20,20,18,15,15,15,15);
	
	
	//Header
	$this->SetFont('Arial','B',8);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],11,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	$this->SetFont('Arial','',12);
	foreach ($data as $eachResult) 
	{ //width
	    $this->Cell(35,6,$eachResult["fname"],1);
		$this->Cell(35,6,$eachResult["lname"],1);
		
		$this->Cell(35,6,$eachResult["email"],1);
		$this->Cell(20,6,$eachResult["type"],1);
		$this->Cell(20,6,$eachResult["used"],1);
		$this->Cell(20,6,$eachResult["mark"],1);
		$this->Cell(20,6,$eachResult["chassis"],1);
		$this->Cell(20,6,$eachResult["Plate"],1);
		$this->Cell(18,6,$eachResult["year"],1);
		$this->Cell(15,6,$eachResult["period"],1);
		$this->Cell(15,6,$eachResult["amount"],1);

		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('');
//Data loading
//*** Load MySQL Data ***//
//db settings
$db_username = 'root';
$db_password = '';
$db_name = 'insurance';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$currMonth = date('m');
$strSQL = "Select* From moto  ";
$objQuery = mysqli_query($mysqli,$strSQL);
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);

}
//************************//

//***********************///	
//*** Table 1 ***//
$pdf->AddPage();
	
	$pdf->SetFont('Helvetica','b',12);
	$pdf->Cell(2);
	$pdf->Write(5, 'Insurance RECEIPT');
	$pdf->Ln();
	
	$pdf->SetFont('Helvetica','b',12);
	$pdf->Cell(2);
	
	$pdf->Cell(2);
	$pdf->SetFontSize(7);
	$pdf->Cell(2);
	$result=mysqli_query($mysqli,"select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysqli_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	$pdf->Cell(0);
	$pdf->SetFontSize(10);
	$pdf->Cell(54);
	//$get_user = $_GET['username'];
	//$pdf->Write(5, 'Printed By: '.$get_user.'');
	$pdf->Ln(-1);
	
	//display numbers of reports
	$countmember=mysql_query("select * from moto where users='$users'   ");
while($rows=mysql_fetch_array($countmember)){
$cu=$rows['fname'];
$ci=$rows['lname'];
$cii=$rows['telephone'];
$co=$rows['email'];
$cop=$rows['type'];
$copo=$rows['used'];
$copio=$rows['mark'];
$copoo=$rows['chassis'];
$copooo=$rows['Plate'];
$copoooo=$rows['year'];
$copooooo=$rows['period'];
$copoooooo=$rows['amount'];
$pdf->Ln();
	$pdf->Write(5, '*****************************************');
	$pdf->Ln();
	$pdf->Cell(1);
	$pdf->Write(5, 'First Name : '.$cu.'');
	$pdf->Ln();
	
	$pdf->Write(6, 'Last Name : '.$ci.'');
	$pdf->Ln();
	$pdf->Ln();
	
	
	$pdf->Write(6, 'Telephone : '.$cii.'');
	$pdf->Ln();
	$pdf->Write(6, 'email: '.$co.'');
	$pdf->Ln();
	$pdf->Write(5, '****************************************');
	
	$pdf->Ln();
	$pdf->Write(6, 'Car type : '.$cop.'');
	
	$pdf->Ln();
	$pdf->Write(6, 'Car used for : '.$copo.' ');
	
	$pdf->Ln();
	$pdf->Write(6, 'Car Mark : '.$copio.' ');
	
	$pdf->Ln();
$pdf->Write(6, 'Chassis Number : '.$copoo.'');
	
	$pdf->Ln();
$pdf->Write(6, 'Plate Number : '.$copooo.'');
	$pdf->Ln();
	
$pdf->Write(6, 'year of Fabrication : '.$copoooo.'');
	$pdf->Ln();
	$pdf->Write(6, 'Insurance Period : '.$copooooo.'');
	$pdf->Ln();
	$pdf->Write(6, 'Amount  : '.$copoooooo.'RWF');
	$pdf->Ln();
	
	$pdf->Ln(5);
$pdf->Write(5, '****************************************');
//$pdf->Ln(0);
//$pdf->BasicTable($header,$resultData);
}
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>

