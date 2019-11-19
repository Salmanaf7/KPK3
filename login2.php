    <?php
    date_default_timezone_set('Asia/Tokyo');
    require "aksi_koneksi.php";
    $jumlah = $_GET['jumlah'];

    //$sql = "SELECT * FROM `grafik` WHERE `jumlah` = '$jumlah'";
    //$run = mysqli_query($koneksi,$sql);

    //$data = mysqli_fetch_assoc($run);
    //$raw = $data['jumlah'];
        // if ($raw == $jumlah) {
        //       header("location: view-login2.php"); 
        //       mysqli_close($run); exit();
        //   }
    // echo $data['jumlah'];
    // session_start();
    // $_SESSION['jumlah'] = $jumlah;
    $hari = date("D");

    switch($hari){
        case 'Sun':
            $hari_ini = "Minggu";
        break;
 
        case 'Mon':         
            $hari_ini = "Senin";
        break;
 
        case 'Tue':
            $hari_ini = "Selasa";
        break;
 
        case 'Wed':
            $hari_ini = "Rabu";
        break;
 
        case 'Thu':
            $hari_ini = "Kamis";
        break;
 
        case 'Fri':
            $hari_ini = "Jumat";
        break;
 
        case 'Sat':
            $hari_ini = "Sabtu";
        break;
        
        default:
            $hari_ini = "Tidak di ketahui";     
        break;
    }


    $sql = "UPDATE grafik SET `jumlah`='$jumlah' WHERE `hari`='$hari_ini'";
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
        <h2>Data yang dimasukkan Berhasil</h2>
        <p>Selamat Bekerja!</p>
    </div>
    <br>
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
