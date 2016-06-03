<?php
require('fpdf.php');
require('conectar.php');
class PDF extends FPDF
{
	//Cabecera de p�gina
	function Header()
	{
		$this->Image('../images/upel macaro.jpg',10,25,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(70);
    // T�tulo
    $this->Cell(10,8,'Universidad Pedag�gica Experimental Libertador',0,0,'C');
	 $this->Ln(4);
	  $this->Cell(70);
	 $this->Cell(10,8,'Centro de Atenci�n San Juan de los Morros',0,0,'C');
	  $this->Ln(4);  $this->Cell(70);
	 	 $this->Cell(10,8,'Coordinacion de Bienestar Estudiantil',0,0,'C');
    // Salto de l�nea
    $this->Ln(20);
		//$this->Image('',50,10,170);
		$this->SetFont('Arial','B',6);
		$this->Cell(0,20,"Fecha de Impresi�n: ".date('d - m - Y')."  ",'',1,'R');
			$this->Ln(2);
	}
	//Pie de p�gina
	function Footer()
	{
	    //Posici�n: a 2 cm del final
	    $this->SetY(-30);
		 //Arial italic 8
	    $this->SetFont('Arial','',8);
		
		 //Arial italic 8
	    $this->SetFont('Arial','BI',8);
		$this->Cell(250,2,'UPEL','',1,'L');
		$this->Cell(250,5,'NUCLEO SAN JUAN DE LOS MORROS','',1,'L');
	    //Arial italic 8
	    $this->SetFont('Arial','BI',8);
	    //N�mero de p�gina
		$this->Cell(195,4,'Reporte Estudiantes','T',0,'L');
	    $this->Cell(0,4,'Pagina '.$this->PageNo().'/TPAG','T',1,'R');
		
		

	}
}//Fin de la clase


//Creaci�n del objeto de la clase heredada
$pdf = new PDF('P','mm','LETTER');
$pdf->AliasNbPages('TPAG');
$pdf->SetTopMargin(20);
$pdf->SetLeftMargin(20);
$pdf->SetRightMargin(20);
$pdf->AddPage();





if($abierto=mysql_connect("localhost","root",""))
{ $db1= mysql_select_db("udbe",$abierto);
$id=$_REQUEST['id'];
	$leer="select * from estudiante where id_estudiante='$id'";
	$db=mysql_query($leer);




$pdf->SetFont('Arial','B',16);
$pdf->Cell(200,4,'DATOS DEL ESTUDIANTE','',0,'C');
 $pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'N�mero','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Nombre','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Apellido','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'C�dula','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Especialidad','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Cohorte','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'Edad','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'Sexo','TRLB',1,'C');






while($fila=mysql_fetch_array($db))
	{
	
	

$pdf->SetFont('Arial','',10);	
$pdf->Cell(15,5,$fila['id_estudiante'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);	
$pdf->Cell(30,5,strtoupper ($fila['nombre']),'TRLB',0,'C');
$pdf->SetFont('Arial','',10);	
$pdf->Cell(30,5,strtoupper ($fila['apellido']),'TRLB',0,'C');
$pdf->SetFont('Arial','',10);	
$pdf->Cell(30,5,$fila['cedula'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,strtoupper ($fila['especialidad']),'TRLB',0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,$fila['cohorte'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,5,$fila['edad'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,5,strtoupper ($fila['sexo']),'TRLB',1,'C');

}
}



$pdf->Ln(0);
$pdf->OutPut("Reporte de Estudiante.pdf",'I');

?>
