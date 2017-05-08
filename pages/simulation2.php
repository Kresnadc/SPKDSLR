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
						if(isset($_POST['merk']))
						{
              $selectedmerk = "";
              foreach($_POST['merk'] as $merk){
                  $selectedmerk.=$merk.",";
                }
                $selectedmerk=rtrim($selectedmerk,", ");
                $arrayMerk = explode(',', $selectedmerk);
                if(sizeof($arrayMerk)==1)
                {
                  $_SESSION['merk']="'".$arrayMerk[0]."'";
                }
                else{
                  $_SESSION['merk']="'".$arrayMerk[0]."' OR merk='".$arrayMerk[1]."'";
                }
                echo $_SESSION['merk'];
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

        <div class="col-xs-4 bs-wizard-step active"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Pilih Bobot Kriteria</div>
        </div>

        <div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Selesai</div>
        </div>
      </div>
    </div>
    <hr>

    <div class="">
      <form action="simulation3.php" method="post">
       <!--
       Harga
       Jenis Sensor
       ISO
       Resolusi Foto
       Resolusi Kamera
       Fitur
       -->
        <h3 class="text-center">Pilih bobot kriteria kamera DSLR sesuai keinginan anda</h5>
      <p class="bg-warning small">Note : Nilai total bobot kriteria harus 10!</p>
      <div class="form-group">
        <label for="harga">Harga</label>
        <select class="form-control" name="bobotharga" id="harga">
          <option value="0">0%</option>
          <option value="5">5%</option>
          <option value="10">10%</option>
          <option value="15">15%</option>
          <option value="20">20%</option>
          <option value="25">25%</option>
          <option value="30">30%</option>
          <option value="35">35%</option>
          <option value="40">40%</option>
          <option value="45">45%</option>
          <option value="50">50%</option>
          <option value="55">55%</option>
          <option value="60">60%</option>
          <option value="65">65%</option>
          <option value="70">70%</option>
          <option value="75">75%</option>
          <option value="80">80%</option>
          <option value="85">85%</option>
          <option value="90">90%</option>
          <option value="95">95%</option>
          <option value="100">100%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sensor">Jenis Sensor</label>
        <select class="form-control" name="bobotsensor" id="sensor">
          <option value="0">0%</option>
          <option value="5">5%</option>
          <option value="10">10%</option>
          <option value="15">15%</option>
          <option value="20">20%</option>
          <option value="25">25%</option>
          <option value="30">30%</option>
          <option value="35">35%</option>
          <option value="40">40%</option>
          <option value="45">45%</option>
          <option value="50">50%</option>
          <option value="55">55%</option>
          <option value="60">60%</option>
          <option value="65">65%</option>
          <option value="70">70%</option>
          <option value="75">75%</option>
          <option value="80">80%</option>
          <option value="85">85%</option>
          <option value="90">90%</option>
          <option value="95">95%</option>
          <option value="100">100%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="iso">ISO Maksimum</label>
        <select class="form-control" name="bobotiso" id="iso">
          <option value="0">0%</option>
          <option value="5">5%</option>
          <option value="10">10%</option>
          <option value="15">15%</option>
          <option value="20">20%</option>
          <option value="25">25%</option>
          <option value="30">30%</option>
          <option value="35">35%</option>
          <option value="40">40%</option>
          <option value="45">45%</option>
          <option value="50">50%</option>
          <option value="55">55%</option>
          <option value="60">60%</option>
          <option value="65">65%</option>
          <option value="70">70%</option>
          <option value="75">75%</option>
          <option value="80">80%</option>
          <option value="85">85%</option>
          <option value="90">90%</option>
          <option value="95">95%</option>
          <option value="100">100%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="resfoto">Resolusi Maksimum</label>
        <select class="form-control" name="bobotres" id="resfoto">
          <option value="0">0%</option>
          <option value="5">5%</option>
          <option value="10">10%</option>
          <option value="15">15%</option>
          <option value="20">20%</option>
          <option value="25">25%</option>
          <option value="30">30%</option>
          <option value="35">35%</option>
          <option value="40">40%</option>
          <option value="45">45%</option>
          <option value="50">50%</option>
          <option value="55">55%</option>
          <option value="60">60%</option>
          <option value="65">65%</option>
          <option value="70">70%</option>
          <option value="75">75%</option>
          <option value="80">80%</option>
          <option value="85">85%</option>
          <option value="90">90%</option>
          <option value="95">95%</option>
          <option value="100">100%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="fitur">Fitur Kamera</label>
        <select class="form-control" name="bobotfitur" id="fitur">
          <option value="0">0%</option>
          <option value="5">5%</option>
          <option value="10">10%</option>
          <option value="15">15%</option>
          <option value="20">20%</option>
          <option value="25">25%</option>
          <option value="30">30%</option>
          <option value="35">35%</option>
          <option value="40">40%</option>
          <option value="45">45%</option>
          <option value="50">50%</option>
          <option value="55">55%</option>
          <option value="60">60%</option>
          <option value="65">65%</option>
          <option value="70">70%</option>
          <option value="75">75%</option>
          <option value="80">80%</option>
          <option value="85">85%</option>
          <option value="90">90%</option>
          <option value="95">95%</option>
          <option value="100">100%</option>
        </select>
      </div>
        <p>Total Nilai Bobot : <span id="total-bobot">0</span></p>

        <div class="form-group text-right">
          <button type="button" class="btn btn-default" onclick="document.location.href = 'simulation.php';">Back</button>
          <input type="submit" class="btn btn-default" id="sim2-submit" disabled>
          <br>
          <p><span id="warning" style="color:red;"></span></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
