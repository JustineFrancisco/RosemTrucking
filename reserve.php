<?php
session_start();
ob_start();


    if ($_SESSION['sessionPermission'] != "admin" ) {
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
<style> 

table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    height: 50px;
    vertical-align: middle;
}

</style>
</head>

<body>

    <div class="brand">ROSEM TRUCKING SERVICES CORPORATION</div>
    <div class="address-bar">ADMIN</div>

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
                        <a href="admin_registration.php">Register</a>
                    </li>
                    <li>
                        <a href="pending.php">Pending</a>
                    </li>
                    <li>
                        <a href="reserve.php">Reserved</a>
                    </li>
                    <li>
                        <a href="dispatched.php">Dispatched</a>
                    </li>
                     <li>
                        <a href="canceled.php">Canceled</a>
                    </li>

                    <li>
                        <a href="feedback.php">Feed Back</a>
                    </li>
                   <li>
                     <a href="logout.php">Log-OUt</a> </li>
                     <li>  
                    My name: <?php echo $_SESSION['login_user']; ?>

                   
                    </li>  
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Approved</strong><br>
                         <iframe height="120px" width="11%" src="blank.php" name="iframe_a"></iframe>
                    </h2>
                    <hr>
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rosem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM reservation where status = 'Approved'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   echo "<table border = 1 cellpadding = 10>";
   echo "<tr>" . "<th>Truck Name: </th>" . " <th>Plate Number </th>" .  " <th>User Name</th> " . " <th>Date</th>" . " <th>Time</th>" . " <th>Prdoct to Deliver</th>" . " <th>Status</th> </tr> ".  "<br>";
    while($row = $result->fetch_assoc()) {
        
        echo "<tr><td>" . $row["truckname"]. "</td><td>" . $row["platenum"]."</td><td>". $row["username"]."</td><td>". $row["date"]."</td> <td>". $row["time"] ."</td><td>" . $row["product"] . "</td><td>" . $row["status"]. "</td>";
        echo '<td> <a href="editstatus1.php?id='.$row['id']. '"target = "iframe_a">Update</a> </div></td>';
                            echo '</tr>';
    






    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

                </div>
                </div>
         

                <div class="clearfix"></div>

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
