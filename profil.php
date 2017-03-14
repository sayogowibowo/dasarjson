<?php
	$json_data=file_get_contents("profil.json");
	$obj = json_decode($json_data);
	echo "Nama : "; echo $obj->nama;
	echo "<br>";
	echo "NIM : "; echo $obj->nim;
	echo "<br>";
	
	echo "Alamat : "; echo $obj->alamat;
	echo "<br>";
	echo "no HP : "; echo $obj->no_hp;
	echo "<br>";
	echo "Mata kuliah 1: ";echo $obj->mata_kuliah[0];
	echo "<br>";
	echo "Mata kuliah 2: ";echo $obj->mata_kuliah[1];
	echo "<br>";
	echo "Mata kuliah 3: ";echo $obj->mata_kuliah[2];
?>