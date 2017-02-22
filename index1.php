<?php
session_start();
ob_start();


    if ($_SESSION['sessionPermission'] != "client" ) {
  header("Location: index.php ");
            exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ROSEM TRUCKING SERVICES CORPORATION</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand"> <img src="trucks/123.png" style="width:130px; height:130px;"> ROSEM TRUCKING SERVICES CORPORATION    </div>
    <div class="address-bar">Calulut City of San Fernando Pampanga </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">ROSEM TRUCKING SERVICES AND CORPORATION</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index1.php">Home</a>
                    </li>
                    <li>
                        <a href="about1.php">About</a>
                    </li>
                    <li>
                        <a href="contact1.php">Contact</a>
                    </li>
                    <li>
                        <a href="reservation.php">Reservation</a>
                    </li>
                    <li>
                     <a href="logout.php">Log-OUt</a> </li>
                       <li> <button type="button" data-toggle="modal" data-target="#myModal"><img src="trucks/noti.png" style="width:30px; height:30px;"> </button></li>
                     <li>  
                    My name: <?php echo $_SESSION['login_user']; ?>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<div class="container">

  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">My Reservations</h4>
        </div>
        <div class="modal-body">
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rosem";
$name = $_SESSION['login_user'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM reservation where username = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   echo "<table border = 1 cellpadding = 10>";
   echo "<tr>" . "<th>Truck Name: </th>" . " <th>Plate Number </th>" .  " <th>User Name</th> " . " <th>Date</th>" . " <th>Time</th>" . " <th>Prdoct to Deliver</th>" . " <th>Status</th> </tr> ".  "<br>";
    while($row = $result->fetch_assoc()) {
        
        echo "<tr><td>" . $row["truckname"]. "</td><td>" . $row["platenum"]."</td><td>". $row["username"]."</td><td>". $row["date"]."</td> <td>". $row["time"] ."</td><td>" . $row["product"] . "</td><td>" . $row["status"]. "</td>";
                            echo '</tr>';
    




    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" style="width:130px; height:500px;" src="trucks/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" style="width:130px; height:500px;" src="trucks/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" style="width:130px; height:500px;" src="trucks/3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">ROSEM TRUCKING CORPORATION</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Justine Francisco</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Reserve for a truck
                        <strong>worth reserving</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>ROSEM Trucking Services Corporation was started at the year of 2004 from that year the name of the corporation was EFQ (Emmanuel Francisco Quizon) Trucking Services. In the year 2009 the trucking services change the name to ERQ Trucking Services and at the year of 2016 the owner decided to make the trucking services into a corporation. The corporation is located at Calulut City of San Fernando Pampanga. The current President of the corporation is Ms. Riza Quizon, Secretary is Mrs. Rosario Quizon, Treasurer is Ms. Rixca Quizon, and the corporation has two Stockholders Ms. Raquel Antipolo and Mr. Emmanuel Quizon.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
