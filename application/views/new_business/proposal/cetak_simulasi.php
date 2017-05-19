<?php
class PDF extends FPDF{
    
    function set_ID_SIMULASI($_ID_SIMULASI){ 
        $this->ID_SIMULASI=$_ID_SIMULASI;
    }
    
    function set_ID_PERUSAHAAN($_ID_PERUSAHAAN){ 
        $this->ID_PERUSAHAAN=$_ID_PERUSAHAAN;
    }
    
    function set_PRODUK($_PRODUK){ 
        $this->PRODUK=$_PRODUK;
    }
    
    function set_MULAS($_MULAS){ 
        $this->MULAS=$_MULAS;
    }
    
    function set_SU($_SU){ 
        $this->SU=$_SU;
    }
    
    function set_ASUMSI_KENAIKAN($_ASUMSI_KENAIKAN){ 
        $this->ASUMSI_KENAIKAN=$_ASUMSI_KENAIKAN;
    }
    function set_CARA_BAYAR($_CARA_BAYAR){ 
        $this->CARA_BAYAR=$_CARA_BAYAR;
    }
    function set_VALUASI_ASKEM($_VALUASI_ASKEM){ 
        $this->VALUASI_ASKEM=$_VALUASI_ASKEM;
    }
    
    // Page header
    function Header()
    {
            // Logo
            //$this->Image('logo.png',10,6,30);
            $this->Ln();
            $this->SetFont('Arial','B',15);
            $this->SetLeftMargin(15); 
            $this->Cell(255,4,'DAFTAR UANG ASURANSI DAN PREMI',0,0,'C');
            $this->Ln();
            $this->SetFont('Arial','B',8.5);
            $this->Ln();
            $this->Ln();
            $this->Ln();
            $this->Cell(60,5,'NAMA PERUSAHAAN',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,$this->ID_PERUSAHAAN,0,0,'L');
            $this->Ln();
            $this->Cell(60,5,'PRODUK',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,'PROGRAM PESANGON '.$this->PRODUK,0,0,'L');
            $this->Ln();
            $this->Cell(60,5,'MULAI ASURANSI',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,$this->MULAS,0,0,'L');
            $this->Ln();
            $this->Cell(60,5,'SAMPAI USIA',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,$this->SU,0,0,'L');
            $this->Ln();
            $this->Cell(60,5,'ASUMSI KENAIKAN GAJI',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,$this->ASUMSI_KENAIKAN,0,0,'L');
            $this->Ln();
            $this->Cell(60,5,'CARA BAYAR PREMI BERKALA',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,$this->CARA_BAYAR,0,0,'L');
            $this->Ln();
            $this->Cell(60,5,'VALUASI ASKEM TH',0,0,'L');
            $this->Cell(4,5,':',0,0,'L');
            $this->Cell(60,5,$this->VALUASI_ASKEM,0,0,'L');
            $this->Ln();
            $this->Ln();
            $this->Ln();
            $this->SetFont('Arial','B',7);
            $this->SetFillColor(122,112,113);
            $wd =10;
            $y = $this->GetY(); 
            $this->MultiCell($wd,10,'NO',1,'C',true);
            $x = $this->GetX()+$wd;            
            $this ->SetXY($x, $y);     
            $wd =20;
            $this->MultiCell($wd,10,'NIK',1,'C',true);
            $x = $x+$wd;
            //$y = $this->GetY(); 
            $this ->SetXY($x, $y);
            $wd =30;
            $this->MultiCell($wd,10,'NAMA',1,'C',true);
            $x = $x+$wd;
            //$y = $this->GetY(); 
            $this ->SetXY($x, $y);
            $wd =45;
            $this->MultiCell($wd,5,'TGL',1,'C',true);
            $x = $x+$wd;
            //$y = $this->GetY(); 
            $this ->SetXY($x, $y);
            $wd =20;
            $this->MultiCell($wd,10,'GAJI',1,'C',true);
            $x = $x+$wd;
            //$y = $this->GetY(); 
            $this ->SetXY($x, $y);
            $wd =60;
            $this->MultiCell($wd,5,'MANFAAT',1,'C',true);
            $x = $x+$wd;
            //$y = $this->GetY(); 
            $this ->SetXY($x, $y);
            $wd =80;
            $this->MultiCell($wd,5,'PREMI',1,'C',true);
            $this->Ln();
            
            $wd=75;
            $this ->SetXY($wd, $y+5);     
            $this->Cell(15,5,'LAHIR','1',0,'C',true);
            $this->Cell(15,5,'DINAS','1',0,'C',true);
            $this->Cell(15,5,'PENSIUN','1',0,'C',true);
            
            
            $wd=140;
            $this ->SetXY($wd, $y+5);
            $this->Cell(20,5,'EXPIRASI','1',0,'C',true);
            $this->Cell(20,5,'MENINGGAL','1',0,'C',true);
            $this->Cell(20,5,'CACAT','1',0,'C',true);
            
            
            $this->Cell(20,5,'SHT BKL','1',0,'C',true);
            $this->Cell(20,5,'SHT SKG','1',0,'C',true);
            $this->Cell(20,5,'ASKEM','1',0,'C',true);
            $this->Cell(20,5,'CACAT','1',0,'C',true);
            
            $this->Ln();
            
    }

    // Page footer
    function Footer()
    {
            // Position at 1.5 cm from bottom
            //$this->SetY(-15);
            // Arial italic 8
            //$this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    
    // Table
    function Table($hasil)
    {
        $i=1;
        foreach($hasil as $data) {            
            $this->Cell(10,5,$i,'1',0,'C');
            $this->Cell(20,5,$data->NIK,'1',0,'C');
            $this->Cell(30,5,$data->NAMA,'1',0,'L');
            $this->Cell(15,5,$data->TGL_LAHIR,'1',0,'C');
            $this->Cell(15,5,$data->TGL_DINAS,'1',0,'C');
            //$this->Cell(15,5,$data->TGL_MULAS,'1',0,'C');
            $this->Cell(15,5,$data->TGL_PENSIUN,'1',0,'C');
            $this->Cell(20,5,number_format($data->GAJI,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->MANFAAT_EXPIRASI,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->MANFAAT_MENINGGAL,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->MANFAAT_CACAT,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->PREMI_POKOK_BKL,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->PREMI_POKOK_SKG,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->PREMI_ASKEM,2,',','.'),'1',0,'R');
            $this->Cell(20,5,number_format($data->PREMI_CACAT,2,',','.'),'1',0,'R');
            $this->Ln();

            // jika posisi y melebihi 221 dan jumlah record-1 = pointer, break
            if ($this->GetY() > 221 && 20 == $i+1) {
                $this->AddPage();
            }
            $i++;
        }
    }
}

$today = NOWDATE;
$pdf = new PDF('L','mm', 'A4');
foreach($hasil_h as $data2) {
    $pdf->set_ID_SIMULASI($data2->ID_SIMULASI);
    $pdf->set_ID_PERUSAHAAN($data2->ID_PERUSAHAAN);
    $pdf->set_PRODUK($data2->PRODUK);
    $pdf->set_MULAS($data2->MULAS);
    $pdf->set_SU($data2->SU);
    $pdf->set_ASUMSI_KENAIKAN($data2->ASUMSI_KENAIKAN);
    $pdf->set_CARA_BAYAR($data2->CARA_BAYAR);
    $pdf->set_VALUASI_ASKEM($data2->VALUASI_ASKEM);
}
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetLeftMargin(15);
$pdf->SetFont('Arial','',7);
$pdf->Table($hasil);
$pdf->Output();

?>