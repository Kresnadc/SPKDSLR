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
  <div class="step-progress" >
    <div class="container">
      <div class="row bs-wizard" style="border-bottom:0;">

      <div class="col-xs-3 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">step1</div>
        </div>

        <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">step2</div>
        </div>

        <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">step3</div>
        </div>

        <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 4</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">step4</div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    
  </div>
</div>

</body>
</html>