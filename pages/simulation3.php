<?php
$mysqli = new mysqli("localhost","root","","spkdslr");
if($mysqli->connect_errno)
{
	echo "Failed to connect to MySQL: (" .
			$mysqli->connect_errno.") ".$myslqi->connect_error;
}

			session_start();
			if($_SERVER['REQUEST_METHOD'] == "POST")
			    {
						$bobotharga=0;
						$bobotsensor=0;
						$bobotiso=0;
						$bobotres=0;
						$bobotfitur=0;

						$maxScore=0;
						$idMaxScore=0;
						$temp=0;
						$idTemp=0;

						if(isset($_POST['bobotharga']))
						{
							 $bobotharga = $_POST['bobotharga'];
						}
						if(isset($_POST['bobotsensor']))
						{
							 $bobotharga = $_POST['bobotsensor'];
						}
						if(isset($_POST['bobotiso']))
						{
							 $bobotharga = $_POST['bobotiso'];
						}
						if(isset($_POST['bobotres']))
						{
							 $bobotharga = $_POST['bobotres'];
						}
						if(isset($_POST['bobotfitur']))
						{
							 $bobotharga = $_POST['bobotfitur'];
						}
						$sql = "SELECT * FROM alternatifnorm where merk=".$_SESSION['merk'];
						$res = $mysqli->query($sql);
							if($res)
					 		{
						 				while($row = $res->fetch_array())
										{
											$temp = $row['hargaNorm']*$bobotharga+$row['sensorNorm']*$bobotsensor+$row['isoNorm']*$bobotiso+$row['resolusiNorm']*$bobotres+$row['fiturNorm']*$bobotfitur;
											$idTemp = $row['id'];

											if($temp>$maxScore)
											{
												$maxScore=$temp;
												$idMaxScore=$idTemp;
											}

										}
					 		}
							echo $idMaxScore;
							$sql = "SELECT * FROM alternatif where id=".$idMaxScore;
							$res = $mysqli->query($sql);
							if($res)
							{
								$row = $res->fetch_array();
								 echo $row['nama'];
							}
			    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Start Simulation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/simulation.css">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/simulation2.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<style>
	.polaroid {
position: relative;
margin-left: 220px;
width: 220px;
}

.polaroid img {
border: 10px solid #fff;
border-bottom: 45px solid #fff;
-webkit-box-shadow: 3px 3px 3px #777;
	 -moz-box-shadow: 3px 3px 3px #777;
				box-shadow: 3px 3px 3px #777;
}

.polaroid p {
position: absolute;
text-align: center;
width: 100%;
bottom: 0px;
font: 400 18px/1 'Kaushan Script', cursive;
color: #888;
}

a{
	margin-left:220px;
	margin-top:20px;
}
	</style>
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
        <a class="navbar-brand topnav" href="#">DSLR Decision Support System</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#contact">Contact</a>
          </li>
          <li>
            <a href="#login">Login</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Progress Bar -->
  <div class="container">
    <div class="step-progress" >
      <div class="row bs-wizard" style="border-bottom:0;">
      <div class="col-xs-4 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Pilih Merk Kamera</div>
        </div>

        <div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Pilih Bobot Kriteria</div>
        </div>

        <div class="col-xs-4 bs-wizard-step active"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Selesai</div>
        </div>
      </div>
    </div>
    <hr>

    <div class="container">
			<h1>The perfect DSLR for you is:</h1>
			<div class="polaroid">
  			<p><?php echo $row['nama'];?></p>
  			<img src="../img/<?php echo $row['gambar']; ?>" />
			</div>
			<a href="<?php echo $row['review'];?>">Read specification</a>
    </div>
  </div>
</body>
</html>
