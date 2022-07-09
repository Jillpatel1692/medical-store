<?php 
    require "./FPDF/FPDF/fpdf.php";
    $db = mysqli_connect("localhost",'root',"", 'projd1');

    

    class myPDF extends FPDF {
        function header ()
        {
            $this->Setfont('Arial','B',14);
            $this->cell(276,5,'Medicine Bills',0,0,'c');
            $this->ln();
            $this->SetFont('Times','',12);
            $this->cell(276,10,'street address of Medicine Bills',0,0,'c');
            $this->ln(10);
            $this->SetFont('Times','',12);
            $this->Cell(12,5,'Date :',0,0);
            $date = date('m/d/Y h:i:s');
            $this->Cell(50,5,$date ,0,1);
            $this->ln();
            $this->SetFont('Times','',12);
            $this->cell(35,5,'Name of customer : ',0,0,'c');
            $this->Cell(50,5,'XYZ',0,1);
            $this->ln();
            
        }
        // function footer () 
        // {
            
        // } // not needed of footer
        function headerTable(){
            $this-> SetFont('Times','B',12);
            $this->cell(20,10,'id',1,0,'C');
            $this->cell(40,10,'medicine',1,0,'C');
            $this->cell(40,10,'unit',1,0,'C');
            $this->cell(60,10,'price',1,0,'C');
            // $this->cell(40,10,'company price',1,0,'C');
            $this->cell(40,10,'total Price',1,0,'C');
            $this->ln();

        }
        function viewTable($db){
            $this->SetFont('Times','',12);

            $stmt = 'select * from bills';
            $sql = 'select SUM(price) AS TOTAL from bills';

            $result = mysqli_query($db,$stmt);
            $result1 = mysqli_query($db,$sql);

            $sum = mysqli_fetch_array($result1,MYSQLI_ASSOC);

            while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $price=$data['price'];
                $company_rs=$data['company_rs'];
                $total=$price - $company_rs;
                $bill=$total * $price/10;

                $this->cell(20,10,$data['id'],1,0,'C');
                $this->cell(40,10,$data['medicine'],1,0,'C');
                $this->cell(40,10,$data['unit'],1,0,'C');
                $this->cell(60,10,$data['price'],1,0,'C');
                // $this->cell(40,10,$data['company_rs'],1,0,'C');
                $this->cell(40,10,$bill,1,0,'C');
                $this->ln();
                
            }
            $this->cell(20,10,'',0,0,'c');
            $this->cell(40,10,'',0,0,'L');
            $this->cell(40,10,'',0,0,'L');
            $this->cell(60,10,'',0,0,'L');
            $this->cell(20,10,'',0,8,'L');
            $this->cell(50,10,'TOTAL: '.$sum['TOTAL'],0,0,'L');
        }
    }

  



    $pdf = new myPDF();
    $pdf->AliasNbpages();
    $pdf->Addpage('L','A4',0);
    $pdf->headerTable();
    $pdf->viewTable($db);
    $pdf->output();
?>