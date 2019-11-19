<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin | KPK</title>
</head>
<body>
	<div id="kpk">
		<section id="menu" class="no-sticky">
			<div class="fitur">
				<div class="inline right" style="padding-top: 13px;">
					<div class="right">
						<a href="logout.php" class="btn btn-admin1"><b>KELUAR</b></a>
					</div>
					<div class="right">
						<ul>
							<li><a href="index1.html"><b>BERANDA</b></a></li>
							<li><a id="active" href="adminkpk.php" class="btn btn-admin"><b>HALAMAN ADMIN</b></a></li>
						</ul>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		</section>
		
<!-- 		<section class="admin" id="section">
			<d
		</section>
 -->
		<section class="admin" id="section1">
			<div>
				<h2 align="center">GENERATE DATA</h2>
				<?php
			    require "aksi_koneksi.php";

			    $sql = "SELECT idNelayan FROM nelayan";
			    $run = mysqli_query($koneksi, $sql);

			    while($row = mysqli_fetch_assoc($run)){
			        $idNelayan[] = $row['idNelayan'];
			    }
			    $randIndex = array_rand($idNelayan);


			    $s = "SELECT jumlah FROM kapal";
			    $r = mysqli_query($koneksi, $s);

			    while($row = mysqli_fetch_assoc($r)){
			        $id[] = $row['jumlah'];
			    }
			    $randI = array_rand($id);

			?>



			<!DOCTYPE html>
			<html lang="en">
			<head>
			    <meta charset="UTF-8">
			    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			    <meta http-equiv="X-UA-Compatible" content="ie=edge">
			    <title>KPK</title>
			    <link rel="stylesheet" href="custom.css">
			</head>
			<body>

			    <form action="login1.php" method="GET" id="formLogin">
			        <input type="text" id="idNelayan" name="idNelayan" value="<?php echo $idNelayan[$randIndex]; ?>" style="display:none;" readonly>
						<span class="right" id="generate">
					 		<button type="button" onclick="myFunction()" class="btn btn-admin">RFID TAG</button>
						</span>
			    </form>
			    

			    <form action="login2.php" method="GET" id="formLogin1">
			        <input type="text" id="jumlah" name="jumlah" value="<?php echo $id[$randI]; ?>" style="display:none;" readonly>
						<span class="right" id="generate; padding-left:110px;">
					 		<button type="button" onclick="myFunction1()" class="btn btn-admin">INFRARED</button>
						</span>
			    </form>

			    <div id="loader"></div>
			</body>
			<script>
			var myVar;

			function myFunction() {
			  document.getElementById("idNelayan").style.display = "block";
			  document.getElementById("loader").style.display = "block";
			  myVar = setTimeout(Login, 2000);
			}
			function myFunction1() {
			  document.getElementById("jumlah").style.display = "block";
			  document.getElementById("loader").style.display = "block";
			  myVar = setTimeout(Login1, 2000);
			}

			function Login() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("formLogin").submit();
			}
			function Login1() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("formLogin1").submit();
			}
			</script>

			</html>
			</div>
		</section>



			</html>
			</div>
		</section> 


		<section class="admin" id="section2">
			<div>
				<h2 align="center">GRAFIK DATA KAPAL</h2>
				<br><br>
				<script type="text/javascript" src="pustaka_fc/js/fusioncharts.js"></script>
	<script type="text/javascript" src="pustaka_fc/js/themes/fusioncharts.theme.fint.js"></script>
	<script type="text/javascript">
		FusionCharts.ready(function(){
					var G = new FusionCharts(
							{
								"type":"line",
								"renderAt":"lokasiA",
								"width":"800",
								"height":"500",
								"dataFormat":"jsonurl",
								"dataSource":"data2.php"
							}
						)
					G.render();
				}
			)
	</script>
	<center>
<div id="lokasiA"></div>
</center>
			<section class="admin" id="section3">
			<div>
				<h2 align="center">TABEL DATA NELAYAN</h2>
				<table border="5" cellpadding="1" cellspacing="1" align="center">
					<tr>
						<th> NO TRANSAKSI</th>
						<th> ID NELAYAN </th>
						<th> TGL TRANSAKSI</th>
						<th> JAM KELUAR </th>
						<th> PEMBAYARAN </th>
					</tr>
				<?php
					include "aksi_koneksi.php";
					$q = "SELECT * FROM pemantauan";
					$result = mysqli_query($koneksi,$q);

					if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><?php echo $row["idPemantauan"];?></td>
						<td><?php echo $row["idNelayan"];?></td>
						<td><?php echo $row["tglPemantauan"];?></td>
						<td><?php echo $row["jamKeluar"];?></td>
						<td><?php echo $row["Pembayaran"];?></td>
					</tr> 
					<?php  } ?>
					<?php } ?>
				</table>
				<br><br><br><br>
				<span>
					<center>
					<h2 class="data" align="center">CETAK DATA NELAYAN</h2><br><br>
						<a href="excel.php" class="btn btn-admin">UNDUH EXCEL</a>
						<a href="pdf.php" class="btn btn-admin">UNDUH PDF</a>
						<!-- <a href="excel.php"> EXCEL </a>
						<a href="pdf.php"> PDF </a> -->
					</center>
				</span>
			</div>
		</section>
			<br><br><br><br><br><br><br><br>
		<section class="copyright" id="bagianakhir">
			<div class="fitur" >
					<h4 style="text-align: center;">COPYRIGHT 2019 | KPK </h4>
			</div>
		</section>

		<link rel="stylesheet" type="text/css" href="style5.css">
		<script type="text/javascript" src="script.js"></script>
</body>
</html>