
<?php 

include ('config.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARMS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Residence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kenderaan.php">Vehicles</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">ASTAKONA RESIDENCE</h1>
          <h2 class="masthead-subheading mb-0">RESIDENCE INFO MANAGEMENT</h2>
          <a href="kenderaan.php" class="btn btn-primary btn-xl rounded-pill mt-5">Vehicles Management</a>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
      <div class="container">
        
         
              <h2 class="display-4">RESIDENCE INFORMATION</h2>
               
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Address</th>
                <th></th>
                <th>Owner Name</th>
				<th>Occupants</th>
				<th>Status</th>
				
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM maklumat_rumah";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                echo "</tr><td>" . $row["no_rumah"]. "</td><td>" . $row["nama_jalan"]. "</td><td> " . $row["nama_pemilik"]. "</td><td> " . $row["nama_penghuni"]. "</td><td> " . $row["status_rumah"];
                }
            } else {
            echo "0 results";
            }
            ?>
     </tbody>
    </table>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
