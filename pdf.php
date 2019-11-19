<?php
  require_once 'tcpdf/tcpdf.php';
  $tgl_sekarang = date("d F Y");
 
  class nelayanPDF extends TCPDF {
  public function Header() {
       
    $this->SetY(20);
    
    $this->writeHTML(false, false, false, false, '');
    }
}
  $pdf = new nelayanPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
      
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
      
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  $pdf->AddPage();
      
  $pdf->SetFont('helvetica', '', 10);
  $pdf->SetY(30);
  $isi = "<br><table>
          <tr>
            <td align=\"center\"><h1 style=\"font-size: 18px;\">Laporan Presensi Nelayan</h1></td>
          </tr>
        </table>
        <br><hr><p></p>
        Tanggal : ".$tgl_sekarang." <br><br>
        <table border=\"1\" align=\"center\">
        <tr>
      <th width=\"20px\">NO</th>
      <th>ID NELAYAN</th>
      <th>TGL TRANSAKSI</th>
      <th>JAM KELUAR</th>
      <th>PEMBAYARAN</th>
    </tr>";

    include 'aksi_koneksi.php';
    $no=1;
    $r = "SELECT * FROM pemantauan";
    $hsl = mysqli_query($koneksi,$r);
    while ($b = mysqli_fetch_array($hsl)) {
      $isi .= "<tr>
      <td width=\"20px\">$no</td>
      <td>".$b[1]."</td>
      <td>".$b[2]."</td>
      <td>".$b[3]."</td>
      <td>Rp. ".$b[4].",-</td>
    </tr>";
    $no++;
    }
$isi .="
    </table>";
  $pdf->writeHTML($isi, true, false, false, false, '');
          
  $namaPDF = 'Laporan Presensi Nelayan.pdf';
  $pdf->Output($namaPDF,'I');
?>