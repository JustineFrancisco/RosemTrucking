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



        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Truck number 2</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/1.jpg" alt="">
                    <hr class="visible-xs">


<h2 class="intro-text text-center">Reservation Info
                    </h2>


          <form id="form1" name="form1" method="post" action="truck2.php">
<center><table width="250" height="200" border="0" cellpadding="0" cellspacing="0">
 
<tr><td>Username</td><td><input type="text" name="username" value="<?php echo $_SESSION['login_user']; ?>" readOnly = true></td></td></tr>

 <tr>
    <td>Date :</td>
    <td><input type="date" name="date" value=""></td>

<tr>
    <td>Time :</td>
    <td><input type="time" name="time" value=""></td>
</tr>
   
  </tr> 
<tr>
<td>Product to be deliver:</td>
<td><input type="text" name="product" value=""></td>
</tr>

  <tr>
  <td> </td>
  <td> 
   <input type="submit" name="reserve" value="Reserve" id="button"> </td></tr></form>
 <tr><td></td><td>

 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="UGAQN58AAZRVQ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</form>

</td></tr>
  </table></center>

</table>




                </div>
            </div>
        </div>

      -- /.container -->



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
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('rosem', $con)or die(mysql_error());

$Truckname = 'Truck2';
$platenum = 'BBB222';

if (isset($_POST['reserve'])){
date_default_timezone_set('Asia/Manila');
$date1 = date('Y-m-d');
$username=$_POST['username'];
$date=$_POST['date'];
$time=$_POST['time'];
$product=$_POST['product'];
if($date1 > $date){
     echo "<script>alert('Invalid date for reservation!')</script>";
     echo "<script>window.open('truck1.php','_self')</script>";
}
else{

    $quer="SELECT * FROM `reservation` where date='$date' AND truckname = 'Truck2'";
    $run=(mysql_query($quer)) or die (mysql());
    if (mysql_num_rows($run)>0){
           
            echo "<script>alert('Date is alredy taken!')</script>";
            echo "<script>window.open('truck2.php','_self')</script>";
                }
            
else{




if($username==''){
    echo "<script>alert('Enter Your Username!')</script>";
      
}

if($date==''){

    echo "<script>alert('Enter Your Date!')</script>";

}
if($time==''){

    echo "<script>alert('Enter Your Time!')</script>";

}
if($product==''){

    echo "<script>alert('Enter Your Product!')</script>";

}


else{
 
    $query="insert into reservation(truckname,platenum,username,date,time,product,status) values ('$Truckname','$platenum','$username','$date','$time','$product','Pending')";

    if (mysql_query($query)){
        echo"<script>alert('Your reservation is now in confirmation proccess. Please set up the payment for your reservation will be accepted')</script>";
        echo "<script>window.open('truck1.php','_self')</script>";
        
    } 
  }
}
}
}
   
?>