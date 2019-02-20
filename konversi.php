<?php

$jam = $_POST['waktu'];
$ma1 = $_POST['w1'];
$ma2 = $_POST['w2'];
$hitung = $_POST['hasil'];

//Jam
if ($ma1=="jam" && $ma2=="menit") {
	$hitung =  $jam * 60 ;
	echo $hitung. "menit";
	}
elseif ($ma1=="jam" && $ma2=="detik") {
	$hitung =   $jam * 3600;
	echo $hitung. "detik";
}

//Menit
elseif ($ma1=="menit" && $ma2=="jam") {
	$hitung = $jam / 60 ;
	echo $hitung. "jam";
	}
elseif ($ma1=="menit" && $ma2=="detik") {
	$hitung = $jam * 60 ;
	echo $hitung. "detik";
}

//Detik
elseif ($ma1=="detik" && $ma2=="jam") {
	$hitung =  $jam / 3600;
	echo $hitung. "jam";
	}
elseif ($ma1=="detik" && $ma2=="menit") {
	$hitung =  $jam / 60;
	echo $hitung. "menit";
}

?>