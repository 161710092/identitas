<?php
	include_once 'Identitas.php';

	$human1 = new identitas();
	$human2 = new identitas();
	$human3 = new identitas();
	$human4 = new identitas();
	$human5 = new identitas();

	echo '<b>Identitas Siswa</b>'.'<br>'.
	'----------------------------------------'.'<br>';

	$human1-> set_nama('Angga Nur Aprizal');
	$human1-> set_tl('Bandung');
	$human1-> set_kelas('XI RPL 2');
	$human1-> set_status('Misteri');

	echo 'Nama Siswa : '.$human1-> get_nama().'<br>'.
		'Tempat Lahir : '.$human1-> get_tl().'<br>'.
		'Kelas : '.$human1-> get_kelas().'<br>'.
		'Status : '.$human1-> get_status().'<br>'.
		'----------------------------------------'.'<br>';

	$human2-> set_nama('Syarul');
	$human2-> set_tl('Bandung');
	$human2-> set_kelas('XI RPL 2');
	$human2-> set_status('Misteri');

	echo 'Nama Siswa : '.$human2-> get_nama().'<br>'.
		'Tempat Lahir : '.$human2-> get_tl().'<br>'.
		'Kelas : '.$human2-> get_kelas().'<br>'.
		'Status : '.$human2-> get_status().'<br>'.
		'----------------------------------------'.'<br>';

	$human3-> set_nama('Diandra');
	$human3-> set_tl('Bandung');
	$human3-> set_kelas('XI RPL 2');
	$human3-> set_status('Misteri');

	echo 'Nama Siswa : '.$human3-> get_nama().'<br>'.
		'Tempat Lahir : '.$human3-> get_tl().'<br>'.
		'Kelas : '.$human3-> get_kelas().'<br>'.
		'Status : '.$human3-> get_status().'<br>'.
		'----------------------------------------'.'<br>';

	$human4-> set_nama('Melan');
	$human4-> set_tl('Bandung');
	$human4-> set_kelas('XI RPL 2');
	$human4-> set_status('Misteri');

	echo 'Nama Siswa : '.$human4-> get_nama().'<br>'.
		'Tempat Lahir : '.$human4-> get_tl().'<br>'.
		'Kelas : '.$human4-> get_kelas().'<br>'.
		'Status : '.$human4-> get_status().'<br>'.
		'----------------------------------------'.'<br>';

	$human5-> set_nama('Alif');
	$human5-> set_tl('Bandung');
	$human5-> set_kelas('XI RPL 2');
	$human5-> set_status('Misteri');

	echo 'Nama Siswa : '.$human5-> get_nama().'<br>'.
		'Tempat Lahir : '.$human5-> get_tl().'<br>'.
		'Kelas : '.$human5-> get_kelas().'<br>'.
		'Status : '.$human5-> get_status().'<br>'.
		'----------------------------------------'.'<br>';
		
?>