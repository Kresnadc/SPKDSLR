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

    <div class="container" style="margin-top:100px; width: 40%">
        <div class="text-center">
            <h1>Hallo, admin</h1>
        </div>
        <br>
        <div class="">
            <?php
            $mysqli=new mysqli("localhost","root","","spkdslr");
            if($mysqli->connect_errno){
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno .")" . $mysqli->connect_error;
            }
            else{
                $id=$_GET['id'];
                $sql="SELECT * FROM alternatif JOIN harga ON alternatif.harga=harga.idHarga
                JOIN	sensor ON alternatif.sensor=sensor.idSensor
                JOIN	maxIso ON alternatif.maxIso=maxIso.idIso
                JOIN	resolusiFoto ON alternatif.resolusiFoto=resolusifoto.idResolusiFoto
                JOIN	resolusiVideo ON alternatif.resolusiVideo=resolusivideo.idResolusiVideo
                JOIN	fitur ON alternatif.fitur=fitur.idFitur
                where id=$id";
                $result=$mysqli->query($sql);
                while($row = $result->fetch_array()){
                    echo '<label>Nama alternatif:</label> <b id="namaAlternatif">'.$row['nama'].'</b>';
                    echo '<br>';
                    echo '<br>';
                    echo '<label for="harga">Harga:</label>';
                    echo '<input type="text" class="form-control" id="harga" value="'.$row['pilihanHarga'].'">';
                    echo '<br>';
                    echo '<label for="Sensor">Sensor:</label>';
                    echo '<input type="text" class="form-control" id="Sensor" value="'.$row['pilihanSensor'].'">';
                    echo '<br>';
                    echo '<label for="maxISO">Maximum ISO:</label>';
                    echo '<input type="text" class="form-control" id="maxISO" value="'.$row['pilihanIso'].'">';
                    echo '<br>';
                    echo '<label for="resFoto">Resolusi Foto:</label>';
                    echo '<input type="text" class="form-control" id="resFoto" value="'.$row['pilihanResolusiFoto'].'">';
                    echo '<br>';
                    echo '<label for="resVid">Resolusi Video:</label>';
                    echo '<input type="text" class="form-control" id="resVid" value="'.$row['pilihanResolusiVideo'].'">';
                    echo '<br>';
                    echo '<label for="fitur">Fitur:</label>';
                    echo '<input type="text" class="form-control" id="fitur" value="'.$row['pilihanFitur'].'">';
                    echo '<br>';
                    echo '<button type="button" class="btn btn-primary btn-block">Simpan</button>';
                }
            }
            ?>
        </div>
    </div>
    <br>
</body>
</html>
