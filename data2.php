<?php
	$c = array(
		"caption"=>"BANYAK KAPAL YANG KELUAR",
		"subCaption"=>"PELABUHAN",
		"xAxisName"=>"HARI",
		"yAxisName"=>"JUMLAH KAPAL",
		"theme"=>"fint"
	);

	$d = array();

	$aksi_koneksi = mysqli_connect("localhost","id10588140_pelabuhan","pelabuhan","id10588140_pelabuhan");
	$q = "SELECT hari, jumlah FROM grafik GROUP BY (hari)";
	$hq = mysqli_query($aksi_koneksi, $q);
	while ($rc= mysqli_fetch_assoc($hq)) {
		array_push($d, array("label"=>$rc["hari"],"value"=>$rc["jumlah"]));
	}
	$gab = array("chart"=>$c, "data"=>$d);
	echo $jsonnya = json_encode($gab);

?>