<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Caesar Cipher - Nomor 4</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

	
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">


		<?php
		
		if(isset($_POST['submit1'])){
				function Cipher($ch, $key)
				{
					if (!ctype_alpha($ch))
							return $ch;
	
					$offset = ord(ctype_upper($ch) ? 'A' : 'a');
					return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
				}
	
				function Encipher($input, $key)
				{
					$output = "";
	
					$inputArr = str_split($input);
					foreach ($inputArr as $ch)
							$output .= Cipher($ch, $key);
	
					return $output;
				}
	
				function Decipher($input, $key)
				{
						return Encipher($input, 26 - $key);
				}
				
				
			}else if(isset($_POST['submit2'])){
				function Cipher($ch, $key)
				{
					if (!ctype_alpha($ch))
							return $ch;
	
					$offset = ord(ctype_upper($ch) ? 'A' : 'a');
					return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
				}
	
				function Encipher($input, $key)
				{
					$output = "";
	
					$inputArr = str_split($input);
					foreach ($inputArr as $ch)
							$output .= Cipher($ch, $key);
	
					return $output;
				}
	
				function Decipher($input, $key)
				{
						return Encipher($input, 26 - $key);
				}
			}
			?>

	<!-- Form -->
	<section>
	<h3>Kriptografi - Caesar Cipher</h3>
			<form name="enkripsi" method="post">
				<div class="row uniform 50%">
					<div class="12u$">
						<textarea name="plain" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                               	oninput="setCustomValidity('')" type="text" class="form-control" rows="2" placeholder="Masukkan Teks"></textarea>            
            		</div>

					<div class="12u$">
						<input title="Pilih Key" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                               oninput="setCustomValidity('')" type="number" class="form-control" name="metode" placeholder="Masukkan Key">
					</div>

					<div class="12u$">
						<ul class="actions">
							<li><input type="submit" name="submit1" value="Enkripsi" /></li>
							<li><input type="submit" name="submit2" value="Dekripsi" /></li>
						</ul>
					</div>

					
					
				</div>
			</form>

			<label>Key</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#98FB98">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo $_POST['metode'];} 
                          if (isset($_POST['submit2'])){ echo $_POST['metode'];}?></b></td>
                      </tr>
				  </table>
				  
				  <label>Plainteks</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#98FB98">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Decipher(Encipher($_POST['plain'], $_POST['metode']),$_POST['metode']);} 
                          if (isset($_POST['submit2'])){ echo Encipher(Decipher($_POST['plain'], $_POST['metode']),$_POST['metode']);}?></b></td>
                      </tr>
                  </table>
             
                  <label>Cipherteks</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#98FB98">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Encipher($_POST['plain'], $_POST['metode']);} 
                          if (isset($_POST['submit2'])){ echo Decipher($_POST['plain'], $_POST['metode']);}?></b></td>
                      </tr>
				  </table>
				  
	</section>

				

	</body>
</html>