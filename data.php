<?php
	$c = array(
		"caption"=>"BANYAK KAPAL YANG KELUAR",
		"subCaption"=>"PELABUHAN",
		"xAxisName"=>"HARI",
		"yAxisName"=>"JUMLAH KAPAL",
		"theme"=>"fint"
	);

	$d = array();

	$aksi_koneksi = mysqli_connect("localhost","root","","pelabuhan");
	$q = "SELECT * FROM kapal";
	$hq = mysqli_query($aksi_koneksi, $q);
	while ($rc= mysqli_fetch_assoc($hq)) {
		array_push($d, array("label"=>$rc["idKapal"],"value"=>$rc["usia"]));
	}
	$gab = array("chart"=>$c, "data"=>$d);
	echo $jsonnya = json_encode($gab);

?>