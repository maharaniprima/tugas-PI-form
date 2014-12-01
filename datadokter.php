<?php
include('koneksi.php');
//Sript oleh belajar pintar php

//buat koneksi ke MySQL
mysql_connect("localhost","root","");

//Pilih nama database tempat tabel akan dibuat
mysql_select_db("medical_center");

//ambil data dari form input yang kita buat sebelumnya
// dengan method POST

$kodepoli = $_POST['kodepoli'];
$kodedokter = $_POST['kodedokter'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telfon = $_POST['telfon'];
$tarif = $_POST['tarif'];
$spesialis = $_POST['spesialis'];
$email = $_POST['email'];
$foto = $_POST['foto'];



$simpan = mysql_query("INSERT INTO formdokter VALUES('$kodepoli','$kodedokter','$password','$nama','$telfon','$tarif','$spesialis','$email','$foto')");

if($simpan){
    echo "Data anda sudah tersimpan";
	echo "<tr>
	  <td>$kodepoli</td>
      <td>$kodedokter</td>
	  <td>$password</td>
	  <td>$nama</td>
	  <td>$telfon</td>
	  <td>$tarif</td>
	  <td>$spesialis</td>
	  <td>$email</td>
	  <td>$foto</td>
	  </tr>";
}else{
    echo "Gagal browww";
}
?>