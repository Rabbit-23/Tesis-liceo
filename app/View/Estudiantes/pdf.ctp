<?php

//debug ($data); exit();
/** array(
	(int) 0 => array(
		'Estudiante' => array(
			'id' => '26',
			'persona_id' => '36',
			'lugar_de_nacimiento' => 'villa de cura',
			'impedimento_fisico' => 'no',
			'enfermedad' => 'no',
			'alergico' => 'no',
			'vive_con_sus_padres' => 'si',
			'plantel_de_donde_proviene' => 'madre e de lourdes',
			'created' => '2016-05-29 16:47:06',
			'modified' => '2016-05-29 16:47:06'
		),
		'Persona' => array(
			'id' => '36',
			'nombre' => 'HENRY',
			'apellido' => 'ALMEIDA',
			'cedula' => '20357263',
			'telefono' => '2147483647',
			'direccion' => 'calle sucre numero 50',
			'fechanacimiento' => '1996-02-24',
			'estatus_id' => '1',
			'estado' => 'aragua',
			'sexo' => 'm',
			'nombre_persona' => 'HENRY ALMEIDA 20357263'
		),
		'Inscripcion' => array(
			(int) 0 => array(
				'id' => '4',
				'estudiante_id' => '26',
				'seccion_id' => '3',
				'periodo_id' => '1',
				'fecha_inscripcion' => '0000-00-00',
				'created' => '2016-05-29 17:01:13',
				'modified' => '2016-05-30 22:53:03'
			)
		),
		'Nota' => array(),
		'Pago' => array(
			(int) 0 => array(
				'id' => '2',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '2500',
				'tipopago_id' => '2',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-29 17:10:12',
				'modified' => '2016-05-29 17:10:12'
			),
			(int) 1 => array(
				'id' => '3',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '5666',
				'tipopago_id' => '1',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-30 21:25:46',
				'modified' => '2016-05-30 21:25:46'
			),
			(int) 2 => array(
				'id' => '4',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '5666',
				'tipopago_id' => '1',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-30 21:25:46',
				'modified' => '2016-05-30 21:25:46'
			),
			(int) 3 => array(
				'id' => '5',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '5666',
				'tipopago_id' => '1',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-30 21:27:29',
				'modified' => '2016-05-30 21:27:29'
			),
			(int) 4 => array(
				'id' => '6',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '5666',
				'tipopago_id' => '1',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-30 21:28:48',
				'modified' => '2016-05-30 21:28:48'
			),
			(int) 5 => array(
				'id' => '7',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '5666',
				'tipopago_id' => '1',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-30 21:28:48',
				'modified' => '2016-05-30 21:28:48'
			),
			(int) 6 => array(
				'id' => '8',
				'periodo_id' => '1',
				'estudiante_id' => '26',
				'mes_id' => '1',
				'monto' => '5666',
				'tipopago_id' => '1',
				'fecha_pago' => '0000-00-00',
				'created' => '2016-05-30 21:30:59',
				'modified' => '2016-05-30 21:30:59'
			)
		),
		'Representante' => array(
			(int) 0 => array(
				'id' => '3',
				'parentezco' => 'MADRE',
				'instruncion' => '4',
				'profesion' => 'LECENCIADA',
				'direcciontrabajo' => 'VILLA DE CURA',
				'nombremadre' => 'MARIA',
				'nombrepadre' => 'HENRY',
				'noasistencia' => 'LA ABUELA',
				'created' => '2016-05-29 16:56:31',
				'modified' => '2016-05-29 16:56:31',
				'persona_id' => '41',
				'estudiante_id' => '26'
			)
		)
	)
)*/

class PDF extends FPDF
{
    //Cabecera de página
    function Header()
    {
       $this->Image('../webroot/img/logo3.png',10,10,50);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(20,8,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
     $this->Ln(4);
      $this->Cell(70);
     $this->Cell(20,8,'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION',0,0,'C');
      $this->Ln(4);  $this->Cell(70);
         $this->Cell(20,8,'U.E.P JUAN DE BOLIVAR Y VILLEGAS',0,0,'C');
         $this->Ln(4);
         $this->Cell(70);
     $this->Cell(20,8,'VILLA DE CURA - ESTADO ARAGUA',0,0,'C');

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
        //Posición: a 2 cm del final
        $this->SetY(-30);
         //Arial italic 8
        $this->SetFont('Arial','',8);
        
         //Arial italic 8
        $this->SetFont('Arial','BI',8);
        $this->Cell(250,2,'U.E.P Juan de Bolivar y Villegas','',1,'L');
        $this->Cell(250,5,'VILLA DE CURA','',1,'L');
        //Arial italic 8
        $this->SetFont('Arial','BI',8);
        //Número de página
        
        $this->Cell(0,4,'Pagina '.$this->PageNo  ().'/TPAG','T',1,'R');
        
        

    }
}//Fin de la clase


//Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','LETTER');
$pdf->AliasNbPages('TPAG');
$pdf->SetTopMargin(20);
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(20);
$pdf->AddPage();




foreach($data as $fila){

//MEMBRETE//
//
$pdf->Ln(10);
$a='Villa de Cura';
$pdf->SetFont('Arial','B',16);
$pdf->Cell(160,4,'FICHA DEL ESTUDIANTE','',0,'C');
 $pdf->Ln(10);
 $pdf->SetFont('Arial','B',10);
$pdf->Cell(30,30,'Foto','TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(224,235,255);

//tabla estudiante//

$pdf->Cell(80,6,'Nombre','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Cedula','TRLB',0,'C','true');
$pdf->Ln();
$pdf->Cell(40,6,$fila['Persona']['nombre'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Persona']['apellido'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,$fila['Persona']['cedula'],'TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Direccion','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Lugar de Nacimiento','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,$fila['Persona']['direccion'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,$fila['Estudiante']['lugar_de_nacimiento'],'TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Telefono','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Sexo','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Fecha de Nacimiento','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Persona']['telefono'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Persona']['sexo'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,$fila['Persona']['fechanacimiento'],'TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Impedimento Fis','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Enfermedad','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Alergico','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Vive con sus padres','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Estudiante']['impedimento_fisico'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Estudiante']['enfermedad'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Estudiante']['alergico'],'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,$fila['Estudiante']['vive_con_sus_padres'],'TRLB',0,'C');
$pdf->Ln();

//DATOS DEL REPRESENTANTE//

$pdf->SetFont('Arial','B',10);
$pdf->Cell(160,6,'Datos del Representante','TRLB',0,'C','true');

$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Nombre','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Cedula','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Iris Nieves','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'10854789','TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Direccion','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Lugar de Nacimiento','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,$a,'TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'San Juan de los Morros','TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Telefono','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Sexo','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Fecha de Nacimiento','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'04243185777','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'M','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'29/07/1991','TRLB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Parentezco','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'Profesion','TRLB',0,'C','true');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'Direccion Laboral','TRLB',0,'C','true');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'p','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'ama de casa','TRLB',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,6,'No posee','TRLB',0,'C');




}

    //debug ($fila); exit();




$pdf->Ln(0);
$pdf->OutPut("Reporte de consulta.pdf",'I');

?>
