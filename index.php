<?php
require("./fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
//logo:
$pdf->Image('ico.png',10,6,30);
//Occupies space of 80 
$pdf->Cell(80);
//U stands for Underline
$pdf->SetFont('Times','U',16);
$pdf->Cell(100,8,'XXX Shop',0,0,'C'); 
//50 line breaks
$pdf->Ln(50);
$pdf->SetFont('Times','B',16);
//coloring
$pdf->SetDrawColor(0,80,180);
$pdf->SetFillColor(230,230,0);
$pdf->SetTextColor(220,50,50);
// $pdf->Cell(100,50,'Hello There 2',1,1,'C'); Width: max value is 190, height, Text, border, new line, Text align
//Header data:
$pdf->Cell(95,8,'REF:',1,0); 
$pdf->Cell(95,8,uniqid(),1,1,'C'); 
$pdf->Cell(95,8,'Date:',1,0); 
$pdf->Cell(95,8,date('M/d/Y'),1,1,'C'); 
//Status with different style
$pdf->Ln(30);
$pdf->SetFont('Times','B',16);
$pdf->SetDrawColor(0,80,180);
$pdf->SetFillColor(230,230,0);
$pdf->SetTextColor(124,252,0);
$pdf->SetLineWidth(1);
$pdf->Cell(190,8,'Status: Complete',1,1,'C'); 
$pdf->Ln(50);
//Multicell:
$pdf->SetFont('Times','I',16);
$pdf->SetTextColor(0);
$tab = array("amya","yan","sin","krad","kouz","smous","sdis","sa","tam","tza","mraw");
$elem = "Nombres en tamazight de 0 a 10:\n\n".implode("\n",$tab);
$pdf->MultiCell(90,5,$elem);

//Footer
// $pdf->setY(-15);
// $pdf->SetFont('Arial','',12);
// $pageCount = 'Page '.$pdf->PageNo();
// $pdf->Cell(0,10,$pageCount,'',0,0,'C');

$pdf->Output();
?>