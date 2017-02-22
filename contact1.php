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

    <div class="brand">ROSEM TRUCKING SERVICES CORPORATION</div>
    <div class="address-bar">Calulut City of San Fernando Pampanga</div>

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
                <a class="navbar-brand" href="index.html">ROSEM TRUCKING SERVICES CORPORATION</a>
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Rosem Trucking Services Corpration</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=15.0888178,120.6617004&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">rosem.corporation@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>CALULUT
                            <br>City of San Fernando Pampanga Philippines 2000</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Client
                        <strong>feed back</strong>
                    </h2>
                    <hr>
                    <p>\Rosem Trucking Services Corporation will love to know the feed back of our clients. Thankyou for visiting our website</p>
                     <form id="form1" name="form1" method="post" action="contact1.php">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value = <?php echo $_SESSION['login_user']; ?>>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" name = "email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" name="number" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" name ="message" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('rosem', $con)or die(mysql_error());

$Truckname = 'Truck1';
$platenum = 'AAA111';
if (isset($_POST['save'])){

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];


if($name==''){
    echo "<script>alert('Enter Your Name!')</script>";
      
}

if($email==''){

    echo "<script>alert('Enter Your Email!')</script>";

}
if($number==''){

    echo "<script>alert('Enter Your Contact Number!')</script>";

}
if($message==''){

    echo "<script>alert('Enter Your Message!')</script>";

}


else{
 
    $query="insert into feedback(name,email,num,message) values ('$name','$email','$number','$message')";

    if (mysql_query($query)){
        echo"<script>alert('Thankyou for yor feed back.')</script>";
        echo "<script>window.open('contact1.php','_self')</script>";
    } 
  }
}

   
?>