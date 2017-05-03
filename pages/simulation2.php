<!DOCTYPE html>
<html>
<head>
	<title>Start Simulation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/simulation.css">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>
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
          <div class="bs-wizard-info text-center">Pilih merk yang anda inginkan</div>
        </div>

        <div class="col-xs-4 bs-wizard-step active"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Pilih bobot untuk setiap kriteria kamera yang anda inginkan</div>
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
      <form action="simulation2.php" method="get">
       <!--
       Harga
       Jenis Sensor
       ISO
       Resolusi Foto
       Resolusi Kamera
       Fitur
       -->
        <h5>Pilih bobot kriteria kamera DSLR sesuai keinginan anda.</h5>
        <h6>Nilai total bobot kriteria harus 10!</h6>
        <div class="form-group">
          <label for="">Harga</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Jenis Sensor</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">ISO Maksimum</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Resolusi Kamera Maksimum</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Resolusi Video Maksimum</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Fitur Kamera</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-default">
        </div>
      </form>   
    </div>
  </div>

</body>
</html>