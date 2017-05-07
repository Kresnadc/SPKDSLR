<!DOCTYPE html>
<html>
<head>
	<title>Start Simulation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/simulation.css">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/simulation.js"></script>
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
            <a href="login.html">Login</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <div class="container">
    <!-- Progress Bar -->
    <div class="step-progress" >
      <div class="row bs-wizard" style="border-bottom:0;">

        <div class="col-xs-4 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Pilih Merk Kamera</div>
        </div>

        <div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
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

    <div class="text-center">
      <form action="simulation2.php" method="post">
        <p>Pilih merk yang Anda inginkan :</p>
        <div class="radio">
          <label class="form-check-label">
            <img src="../img/Canon_logo.png" id="img-canon" class="img-responsive center-block" alt="Canon Logo" width="200">
            <input id="rad-canon" type="checkbox" name="merk[]" value="Canon" class="form-check-input" >Canon
          </label>
        </div>
        <div class="radio">
          <label class="form-check-label">
            <img src="../img/Nikon_2003.png" id="img-nikon" class="img-responsive center-block" alt="Nikon Logo" width="150">
            <input id="rad-nikon" type="checkbox" name="merk[]" value="Nikon" class="form-check-input">Nikon
          </label>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
