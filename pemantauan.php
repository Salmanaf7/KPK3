<!DOCTYPE html>
<html>
<head>
	<title>Kapal</title>
</head>
<body>
	<h2>Data Jenis Kapal</h2>
	<?php
		include "aksi_koneksi.php";
		$q = "SELECT * FROM pemantauan";
		$result = mysqli_query($koneksi,$q);
		while($row = mysqli_fetch_assoc($result)){
			foreach($row as $field)
				echo " $field&nbsp;&nbsp;&nbsp;";
			//echo "<img width='30' height='40' src='gambars/".$row["foto"]."'>";
			?>	
			<?php
			echo "<br/>";
		}
	?>
</body>
</html>




