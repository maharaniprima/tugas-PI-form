<?php 
session_start();

//untuk "login_multiuser" bisa diganti dan sesuaikan dengan folder project
//tujuan seperti dibuat menggunakan $_SERVER['HTTP_HOST'] agar hostname berubah sendiri secara dinamis

$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/Project/login_multiuser/';

// store session data jika sukses
$_SESSION['register']=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Registrasi Dokter</title>
	<link href="<?php echo $base_url;?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>asset/css/style.css" rel="stylesheet">
	
    <link href="<?php echo $base_url;?>asset/css/datepicker2.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="<?php echo $base_url;?>asset/img/book.ico">
	<script type="text/javascript" src="<?php echo $base_url;?>asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>asset/js/scripts.js"></script>
	
    <script type="text/javascript" src="<?php echo $base_url;?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $base_url;?>asset/js/bootstrap-datepicker2.js"></script>

<style type="text/css">
      html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
      }

      #full-screen-background-image {
        z-index: -999;
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
      }

      #wrapper {
  	  width: 1000px;
      margin: auto;
      background-color:rgba(255,255,255,0.9);
      border-radius: 50px;
      }

      a:link, a:visited, a:hover {
        color: #333;
        font-style: italic;
      }

      a.to-top:link,
      a.to-top:visited, 
      a.to-top:hover {
        margin-top: 1000px;
        display: block;
        font-weight: bold;
        padding-bottom: 30px;
        font-size: 30px;
      }

    </style>

</head>
<body>

<div id="wrapper">
<div class="page-header"><h3><img src="../../orang.png" width="50" height="50" /> Daftar Registrasi Dokter</div>
</div>
  
  <img src="../../guest.jpg" id="full-screen-background-image" />
  
<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			
<fieldset style="width: 100%; margin: auto;">
<legend>Formulir Input Data Dokter</legend>
<form action="datadokter.php" method="post">
		
		<p>
            Kode Poli<br />
            <input type="text" name="kodepoli" required="required" />
        </p>
		
        <p>Kode Dokter
            <br />
            <input type="text" name="kodedokter" required="required" />
        </p>
		
		<p>
            Password<br />
            <input type="password" name="password" required="required" />
        </p>
		
        <p>
            Nama Dokter<br />
            <input type="text" name="nama" required="required" />
        </p>
        
        <p>
		    Alamat<br />
			<input type="text" name="nama" required="required" />
        </p>
		
		<p>
            Telfon<br />
            <input type="text" name="telfon" required="required" />
        </p>
		
		<p>
			Tarif<br />
			<input type="text" name="tarif" required="required" />
        
		<p>
            Spesialis<br />
            <select type="text" name="spesialis">
			<option> </option>
		    <option>Spesialis Gigi</option>		
			<option>Spesialis Kulit dan Kelamin</option>
			<option>Spesialis Penyakit Dalam</option> 
			<option>Umum</option>
			<option>Spesialis Kandungan</option> 
			</select></p>
		
		<p>
            Email<br />
            <input type="email" name="email" required="required" />
        </p>
        
		
		<p>
            Pilih File Foto<br />
            <input type="file" name="foto" required="required" />
        </p>
        
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('Reset data yang telah dimasukan?')">
        </p>
    </form>
</fieldset>
			</div>
		</div>
	</div>
</div>

    <script> 
    //options method for call datepicker
	$('#datepicker').datepicker({
         format: 'dd-mm-yyyy',
		 autoclose: true,
		 todayHighlight: true
	})
    </script>
	
</body>
</html>