<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
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

	<div class="container" style="margin-top:100px">
		<!-- Progress Bar -->
		<div class="text-center">
			<h1>Hallo, admin</h1>
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="text-center">Alternatif</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Sensor</th>
						<th class="text-center">Maximum ISO</th>
						<th class="text-center">Resolusi Foto</th>
						<th class="text-center">Resolusi Video</th>
						<th class="text-center">Fitur</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!--php here-->
					<?php
					$mysqli=new mysqli("localhost","root","","spkdslr");
					if($mysqli->connect_errno){
						echo "Failed to connect to MySQL: (" . $mysqli->connect_errno .")" . $mysqli->connect_error;
					}
					else{
						$sql="SELECT * FROM alternatif JOIN harga ON alternatif.harga=harga.idHarga
						JOIN	sensor ON alternatif.sensor=sensor.idSensor
						JOIN	maxIso ON alternatif.maxIso=maxIso.idIso
						JOIN	resolusiFoto ON alternatif.resolusiFoto=resolusifoto.idResolusiFoto
						JOIN	resolusiVideo ON alternatif.resolusiVideo=resolusivideo.idResolusiVideo
						JOIN	fitur ON alternatif.fitur=fitur.idFitur
						ORDER BY id ";
						$result=$mysqli->query($sql);

						while($row = $result->fetch_array()){
							echo "<tr>";
							echo "<td>".$row['nama']."</td>";
							echo "<td>".$row['pilihanHarga']."</td>";
							echo "<td>".$row['pilihanSensor']."</td>";
							echo "<td>".$row['pilihanIso']."</td>";
							echo "<td>".$row['pilihanResolusiFoto']."</td>";
							echo "<td>".$row['pilihanResolusiVideo']."</td>";
							echo "<td>".$row['pilihanFitur']."</td>";
							echo '<td><button class="btn btn-default"><a href=edit.php?id='.$row['id'].' style="text-decoration: none">Edit</a></button></td>';
							echo "</tr>";
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
