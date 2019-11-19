<html>
<head>
<title>LOGIN ADMIN</title>
</head>
<body>
<div id="kpk">
    <section class="login" id="bagian3">
    	<div class="fitur">
            <a href="index.html"><img src="" class=""></a>
            <div class="right">
            </div>
        </div>
    </section>

    <section class="white" id="section2">
        <div class="content">
         <form id="contact" action="proses_login.php" method="post">
    <h3 align="center">ADMIN KPK</h3>
        <meta charset="UTF-8">  
    <?php
        if(isset($_GET["login"]))
            if($_GET["login"]=="gagal")
            echo"<br>Nama Pengguna atau Kata Sandi Salah <p />";
        elseif ($_GET["login"]=="logout") {
            echo "Anda Telah Keluar<p />";
        }
    ?>
    <fieldset>
        <h4>Nama Pengguna</h4>
      <input name="Username" placeholder="Masukkan Nama Pengguna" type="text">
    </fieldset>
    <fieldset>
        <h4>Kata Sandi</h4>
      <input name="Password" placeholder="Kata Sandi" type="password" >
    </fieldset>
    <fieldset >
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Masuk</button>
    </fieldset>
      <button type="button" onclick="window.location.href='index.html'" id="contact-back">Kembali</button>
  </form>
    </div>
    </section>

<section class="navy" id="section3">
    <div class="content">
        <h2>Hubungi Kami</h2>
        <p>Call: 0251 103 117</p>
        <p>E-mail: Pelabuhan@ipb.ac.id</p>
        <p>Jl. Pelabuhanratu No.17 Sukabumi, Indonesia</p>
    </div>
    </section>
    <section class="copyright" id="bagianakhir">
        <div class="fitur" >
            <h4 style="text-align: center;">COPYRIGHT 2019 | KPK </h4>
       </div>
    </section>
</div>
</body>
<link rel="stylesheet" type="text/css" href="style3.css">
<script type="text/javascript" src="script.js"></script>
</html>
