<?php
    date_default_timezone_set('Asia/Jakarta');
    require "aksi_koneksi.php";
    $idNelayan = $_GET['idNelayan'];
    $tglPemantauan = date("Y-m-d");
    $sql = "SELECT * FROM `pemantauan` WHERE `idNelayan` = '$idNelayan' and `tglPemantauan` = '$tglPemantauan'";
    $run = mysqli_query($koneksi,$sql);

    $data = mysqli_fetch_assoc($run);
    $raw = $data['idNelayan'];
        if ($raw == $idNelayan) {
              header("location: adminkpk.php"); 
              mysqli_close($run); exit();
          }
 //          } else {
 //    $sql = "INSERT INTO pemantauan (`idPemantauan`, `idNelayan`, `tglPemantauan`, `jamKeluar`, `Pembayaran`) VALUES (NULL, '$idNelayan', '$tglPemantauan', '$jamKeluar', '3500.00');";
 //    $run = mysqli_query ($koneksi, $sql);
 // }
    // session_start();
    // $_SESSION['idNelayan'] = $idNelayan;
    $jamKeluar = date("H:i:s");
    $tglPemantauan = date("Y-m-d");

    $sql = "INSERT INTO pemantauan (`idPemantauan`, `idNelayan`, `tglPemantauan`, `jamKeluar`, `Pembayaran`) VALUES (NULL, '$idNelayan', '$tglPemantauan', '$jamKeluar', '3500');";
    $run = mysqli_query($koneksi, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  <!-- mendefinisikan bahwa dokumen HTML5 yang kita buat menggunakan pengodean karakter UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- untuk mengontrol bagaimana dokumen HTML ditampilkan pada perangkat mobile -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Untuk mengatur Internet terbaru -->
    <title>Dashboard</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body onload="myFunction()">
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <h2> TAP BERHASIL <?php echo $data['nama']; ?></h2>
        <p>SELAMAT MELAUT! SEMOGA HARI INI MENDAPAT REZEKI YANG MELIMPAH</p>
    </div>
    <br>

    <!-- <?php
        // Prints the day
        echo date("l") . "<br>";

        // Prints the day, date, month, year, time, AM or PM
        echo date("l jS \of F Y h:i:s A") . "<br>";

        // Prints October 3, 1975 was on a Friday
        echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

        // Use a constant in the format parameter
        echo date(DATE_RFC822) . "<br>";

        // prints something like: 1975-10-03T00:00:00+00:00
        echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
    ?> -->
    <script>
        var myVar;

        function myFunction() {
        myVar = setTimeout(showPage,700);
        }

        function showPage() {
        document.getElementById("myDiv").style.display = "block";

        myVar = setTimeout(backLogin,2000);
        }

        function backLogin(){
            location.replace("adminkpk.php")
        }
    </script>
</body>
</html>
