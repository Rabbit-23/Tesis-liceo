<?php

//debug ($data); exit();
/** array(
  (int) 0 => array(
    'Inscripcion' => array(
      'id' => '1',
      'estudiante_id' => '19',
      'seccion_id' => '2',
      'periodo_id' => '1',
      'fecha_inscripcion' => '0000-00-00',
      'created' => '2016-05-27 13:46:49',
      'modified' => '2016-05-27 13:46:49'
    ),
    'Estudiante' => array(
      'id' => '19',
      'persona_id' => '3',
      'fecha_de_nacimiento' => '2016-05-27',
      'lugar_de_nacimiento' => 'rere',
      'impedimento_fisico' => 'rerere',
      'enfermedad' => 'errr',
      'alergico' => 'rerer',
      'vive_con_sus_padres' => 'rere',
      'plantel_de_donde_proviene' => 'rerere',
      'created' => '2016-05-27 13:37:44',
      'modified' => '2016-05-27 13:37:44'
    ),
    'Seccion' => array(
      'id' => '2',
      'seccion' => 'b',
      'grado_id' => '1'
    ),
    'Periodo' => array(
      'id' => '1',
      'periodo' => '2016'
    )
  )
)*/


 
//require('rotation.php');

class PDF extends PDF_Rotate
{
var $B;
var $I;
var $U;
var $HREF;

function RotatedImage($file,$x,$y,$w,$h,$angle)
{
    //Image rotated around its upper-left corner
    $this->Rotate($angle,$x,$y);
    $this->Image($file,$x,$y,$w,$h);
    $this->Rotate(0);
}
function PDF($orientation='P', $unit='mm', $size='A4')
{
  // Llama al constructor de la clase padre
  $this->FPDF($orientation,$unit,$size);
  // Iniciación de variables
  $this->B = 0;
  $this->I = 0;
  $this->U = 0;
  $this->HREF = '';
}

function WriteHTML($html)
{
  // Intérprete de HTML
  $html = str_replace("\n",' ',$html);
  $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
  foreach($a as $i=>$e)
  {
    if($i%2==0)
    {
      // Text
      if($this->HREF)
        $this->PutLink($this->HREF,$e);
      else
        $this->Write(5,$e);
    }
    else
    {
      // Etiqueta
      if($e[0]=='/')
        $this->CloseTag(strtoupper(substr($e,1)));
      else
      {
        // Extraer atributos
        $a2 = explode(' ',$e);
        $tag = strtoupper(array_shift($a2));
        $attr = array();
        foreach($a2 as $v)
        {
          if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
            $attr[strtoupper($a3[1])] = $a3[2];
        }
        $this->OpenTag($tag,$attr);
      }
    }
  }
}

function OpenTag($tag, $attr)
{
  // Etiqueta de apertura
  if($tag=='B' || $tag=='I' || $tag=='U')
    $this->SetStyle($tag,true);
  if($tag=='A')
    $this->HREF = $attr['HREF'];
  if($tag=='BR')
    $this->Ln(5);
}

        
      

function CloseTag($tag)
{
  // Etiqueta de cierre
  if($tag=='B' || $tag=='I' || $tag=='U')
    $this->SetStyle($tag,false);
  if($tag=='A')
    $this->HREF = '';
}

function SetStyle($tag, $enable)
{
  // Modificar estilo y escoger la fuente correspondiente
  $this->$tag += ($enable ? 1 : -1);
  $style = '';
  foreach(array('B', 'I', 'U') as $s)
  {
    if($this->$s>0)
      $style .= $s;
  }
  $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
  // Escribir un hiper-enlace
  $this->SetTextColor(0,0,255);
  $this->SetStyle('U',true);
  $this->Write(5,$txt,$URL);
  $this->SetStyle('U',false);
  $this->SetTextColor(0);
}
function Header()
    {
       $this->Image('../webroot/img/logo3.png',10,10,37);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(40,8,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
     $this->Ln(4);
      $this->Cell(70);
     $this->Cell(40,8,'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION',0,0,'C');
      $this->Ln(4);  $this->Cell(70);
         $this->Cell(40,8,'U.E.P JUAN DE BOLIVAR Y VILLEGAS',0,0,'C');
         $this->Ln(4);
         $this->Cell(70);
     $this->Cell(40,8,'VILLA DE CURA - ESTADO ARAGUA',0,0,'C');

    // Salto de línea
    $this->Ln(20);
        //$this->Image('',50,10,170);
        $this->SetFont('Arial','B',6);
        $this->Cell(0,20,"Fecha de Impresion: ".date('d - m - Y')."  ",'',1,'R');
            $this->Ln(2);
    }
//Pie de página
function Footer()
{
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',7);
    //Número de página
    $this->Cell(0,10,'Este documento sin el sello y firma de la direccion de la Unidad Educativa Privada Juan de Bolivar y Villegas, no tiene validez '.$this->PageNo().'',0,0,'C');
    }
}

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetLeftMargin(30);
$pdf->setmargins(27,0,42);
//$pdf->Image('../webroot/img/arrendamiento.jpg',5,5,200);
$pdf->RotatedImage('../webroot/img/logo4.png',30,70,150,150,0);

$pdf->Ln(10);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(170,4,'COMPROBANTE DE PAGO','',0,'C');
 $pdf->Ln(10);


$pdf->SetFont('Arial','B',16);
$pdf->Cell(200,4,'','',0,'C');
 $pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'Nombre','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'Apellido','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Cedula','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(12,6,'Monto','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(18,6,'Periodo','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Mes','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(28,6,'Tipo de Pago','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(27,6,'Fecha de Pago','TRLB',0,'C');





    
foreach($data as $fila){

  $id=$fila['Estudiante']['persona_id'];
  if($abierto=mysql_connect("localhost","root",""))
{ 
$db1= mysql_select_db("sistemacake",$abierto);
$leer="select * FROM personas where id=$id";
$db=mysql_query($leer);
$db2=mysql_query($leer);
}
$pdf->Ln();
while($fila2=mysql_fetch_array($db2))
  {
$pdf->Cell(25,5,$fila2['nombre'],'TRLB',0,'C');
$pdf->Cell(25,5,$fila2['apellido'],'TRLB',0,'C');
$pdf->Cell(20,5,$fila2['cedula'],'TRLB',0,'C');
}
$pdf->SetFont('Arial','',10);   
$pdf->Cell(12,5,$fila['Pago']['monto'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);   
$pdf->Cell(18,5,$fila['Periodo']['periodo'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);   
$pdf->Cell(20,5,$fila['Mes']['mes'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(28,5,$fila['Tipopago']['tipo_pago'],'TRLB',0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(27,5,$fila['Pago']['fecha_pago'],'TRLB',0,'C');


}




$pdf->SetFont('','U');
$link = $pdf->AddLink();
$pdf->SetFont('');
$pdf->SetLeftMargin(15);
$pdf->SetFontSize(14);
$pdf->Output();

?>
