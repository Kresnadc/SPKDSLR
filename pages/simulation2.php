<?php
if($_SERVER['REQUEST_METHOD'] == "GET")
{
  if(isset($_GET['merk']))
  {
   
  }else{
     header ('Location:simulation.php');
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
      <form action="simulation3.php" method="get">
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
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sensor">Jenis Sensor</label>
          <select class="form-control" name="bobotsensor" id="sensor">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="iso">ISO Maksimum</label>
          <select class="form-control" name="bobotiso" id="iso">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="resfoto">Resolusi Foto Maksimum</label>
          <select class="form-control" name="bobotresfoto" id="resfoto">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="resvideo">Resolusi Video Maksimum</label>
          <select class="form-control" name="bobotresvideo" id="resvideo">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="fitur">Fitur Kamera</label>
          <select class="form-control" name="bobotfitur" id="fitur">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
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