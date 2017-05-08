<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
		<div class="container topnav">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand topnav" href="../">DSLR Decision Support System</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="../">Logout</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<div class="container" style="margin-top:100px; width: 40%">
		<!-- Progress Bar -->
		<div class="text-center">
			<h1>Hallo, admin</h1>
		</div>
		<br>
		<div class="">
			<form class="" action="edit.php" method="post">
				<input type='hidden' name="idKamera" value=" <?php echo $_GET['id']; ?> " />
				<?php
				$mysqli=new mysqli("localhost","root","","spkdslr");
				$harga;
				$sensor;
				$maxIso;
				$resolusiFoto;
				$resolusiVideo;
				$fitur;
				if($mysqli->connect_errno){
					echo "Failed to connect to MySQL: (" . $mysqli->connect_errno .")" . $mysqli->connect_error;
				}
				else{
					if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						$id=$_POST['idKamera'];
						$harga=$_POST['pilihHarga'];
						$sensor=$_POST['pilihSensor'];
						$maxIso=$_POST['pilihMaxIso'];
						$resolusiFoto=$_POST['pilihResFoto'];
						$resolusiVideo=$_POST['pilihResVideo'];
						$fitur=$_POST['pilihFitur'];
						$sql2="UPDATE alternatif SET harga=$harga,
						sensor=$sensor,
						maxIso=$maxIso,
						resolusiFoto=$resolusiFoto,
						resolusiVideo=$resolusiVideo,
						fitur=$fitur WHERE id=$id";
						if ($mysqli->query($sql2) === TRUE) {
							echo '<script type="text/javascript">alert($("Update Sukses!"))</script>';
							header('Location: http://localhost/pages/adminPage.php');
						} else {
							echo "Error updating record: ". mysqli_error($mysqli);
						}
					}
					else{
						$id=$_GET['id'];
						$sql="SELECT * FROM alternatif JOIN harga ON alternatif.harga=harga.idHarga
						JOIN	sensor ON alternatif.sensor=sensor.idSensor
						JOIN	maxIso ON alternatif.maxIso=maxIso.idIso
						JOIN		resolusiFoto ON alternatif.resolusiFoto=resolusifoto.idResolusiFoto
						JOIN		resollusiVideo ON alternatif.resolusiVideo=resollusivideo.idResolusiVideo
						JOIN	fitur ON alternatif.fitur=fitur.idFitur
						where id=$id";
						$result=$mysqli->query($sql);
						while($row = $result->fetch_array()){
							echo '<label>Nama alternatif:</label> <b id="namaAlternatif">'.$row['nama'].'</b>';
							echo '<br>';
							echo '<br>';
							echo '<label for="selectHarga">Harga:</label>';
							echo '<select class="form-control" id="selectHarga" name="pilihHarga">';
							echo '<option value="1">0 - 6 Juta</option>';
							echo '<option value="2">6 - 16 Juta</option>';
							echo '<option value="3">> 15 Juta</option>';
							echo '</select>';
							echo '<br>';
							echo '<label for="selectSensor">Sensor:</label>';
							echo '<select class="form-control" id="selectSensor" name="pilihSensor">';
							echo '<option value="1">Full Frame</option>';
							echo '<option value="2">APS-H</option>';
							echo '<option value="3">APS-C</option>';
							echo '</select>';
							echo '<br>';
							echo '<label for="selectMaxIso">Maximum ISO:</label>';
							echo '<select class="form-control" id="selectMaxIso" name="pilihMaxIso">';
							echo '<option value="1">6400</option>';
							echo '<option value="2">12800</option>';
							echo '<option value="3">25600</option>';
							echo '<option value="4">51200</option>';
							echo '<option value="5">102400</option>';
							echo '</select>';
							echo '<br>';
							echo '<label for="selectResFoto">Resolusi Foto:</label>';
							echo '<select class="form-control" id="selectResFoto" name="pilihResFoto">';
							echo '<option value="1">16 - 17.9 MP</option>';
							echo '<option value="2">18 - 19.9 MP</option>';
							echo '<option value="3">20 - 21.9 MP</option>';
							echo '<option value="4">22 - 23.9 MP</option>';
							echo '<option value="5">> 24 MP</option>';
							echo '</select>';
							echo '<br>';
							echo '<label for="selectResVideo">Resolusi Video:</label>';
							echo '<select class="form-control" id="selectResVideo" name="pilihResVideo">';
							echo '<option value="1">1080p 30fps</option>';
							echo '<option value="2">1080p 60fps</option>';
							echo '<option value="3">1080p 120fps</option>';
							echo '<option value="4">4K 30fps</option>';
							echo '<option value="5">4K 60fps</option>';
							echo '</select>';
							echo '<br>';
							echo '<label for="selectFitur">Fitur:</label>';
							echo '<select class="form-control" id="selectFitur" name="pilihFitur">';
							echo '<option value="1">1</option>';
							echo '<option value="2">2</option>';
							echo '<option value="3">3</option>';
							echo '<option value="4">> 3</option>';
							echo '</select>';
							echo '<br>';
						}
						//echo '<button type="button" class="btn btn-primary btn-block">Simpan</button>';
					}
				}
				?>
				<input type="submit" name=""  class="btn btn-primary btn-block" value="Simpan">
			</form>
		</div>
	</div>
	<br>
	<!-- </body>
	<script type="text/javascript">
	function anjeng(){

	alert($("#selectFitur option:selected").index());
}
</script> -->
</html>
