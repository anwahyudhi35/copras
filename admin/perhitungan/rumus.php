<?php 
//per penyakit
$total = 0;
$total1 = "SELECT * FROM tumbuhan_obat";
foreach ($dbh -> query($total1) as $totalan) {
	$total++;

}


//Diare
$diare1 = 0;
$diare2 = 0;
$diare3 = 0;
$diare4 = 0;
//--------
$diare5 = 0;
$diare6 = 0;
$diare7 = 0;
$diare8 = 0;
$diare9 = 0;
//-------
$diare11 = 0;
$diare12 = 0;
$diare13 = 0;
$diare14 = 0;
$diare15 = 0;
$diare16 = 0;
$diare17 = 0;
$diare18 = 0;
$diare19 = 0;
$diare20 = 0;
$diare21 = 0;

//------

$diare22 = 0;
$diare23 = 0;
$diare24 = 0;
$diare25 = 0;
$diare26 = 0;
//ahp

$ahp1 = "SELECT * FROM tumbuhan_obat";
foreach ($dbh->query($ahp1) as $data) :
	
	if ($data['cara_pengolahan'] == "Langsung") {
		$diare1++;
		
	}elseif ($data['cara_pengolahan'] == "Dihaluskan") {
		$diare2++;
		
	}elseif ($data['cara_pengolahan'] == "Direbus") {
		$diare3++;
		
	}


	if ($data['cara_penggunaan'] == "Diminum" ) {
		$diare5++;
		
	}elseif ($data['cara_penggunaan'] == "Dimakan") {
		$diare6++;
		
	}elseif ($data['cara_penggunaan'] == "Dioles") {
		$diare7++;
		
	}elseif ($data['cara_penggunaan'] == "Dikumur") {
		$diare8++;
		
	}


	if ($data['bagian_tumbuhan'] == "Akar" ) {
		$diare11++;

	}elseif ($data['bagian_tumbuhan'] == "Umbi") {
		$diare12++;

		
	}elseif ($data['bagian_tumbuhan'] == "Semua") {
		$diare13++;

		
	}elseif ($data['bagian_tumbuhan'] == "Kulit Buah") {
		$diare14++;

		
	}elseif ($data['bagian_tumbuhan'] == "Kulit Batang") {
		$diare15++;

		
	}elseif ($data['bagian_tumbuhan'] == "Daun") {
		$diare16++;

		
	}elseif ($data['bagian_tumbuhan'] == "Batang") {
		$diare17++;

		
	}elseif ($data['bagian_tumbuhan'] == "Getah") {
		$diare18++;

		
	}elseif ($data['bagian_tumbuhan'] == "Bunga") {
		$diare19++;

		
	}elseif ($data['bagian_tumbuhan'] == "Biji") {
		$diare20++;

		
	}elseif ($data['bagian_tumbuhan'] == "Buah") {
		$diare21++;
		
	}	


	if ($data['jenis_tumbuhan'] == "Pohon") {
		$diare22++;
	}elseif ($data['jenis_tumbuhan'] == "Liana") {
		$diare23++;
	}
	elseif ($data['jenis_tumbuhan'] == "Herba") {
		$diare24++;
	}
	elseif ($data['jenis_tumbuhan'] == "Perdu") {
		$diare25++;
	}
	elseif ($data['jenis_tumbuhan'] == "Semak") {
		$diare26++;
	}


endforeach;





//copras

//Maag
//ahp

//copras

//Sariawan
//ahp

//copras

//Ambeien
//ahp

//copras

//Sakit Perut
//ahp

//copras

//Sembelit
//ahp

//copras

//Disentri
//ahp

//copras

//Sakit Gigi
//ahp

//copras

//Cacingan
//ahp

//copras


 ?>