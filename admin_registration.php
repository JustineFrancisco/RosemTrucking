
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
                </ul>
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
                    <h2 class="intro-text text-center">Admin Registration</h2>
             
                </div>
                <div class="col-lg-12 text-center"> 


   
<form id="form1" name="form1" method="post" action="admin_registration.php">
                 <center><table width="620" height="500" border="0" cellpadding="7" cellspacing="7">
  <tr>
    <td>First Name</td>
    <td><input type="text" name="fname"></td> 
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input type="text" name="mname"></td> 
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lname"></td> 
  </tr>
  <tr>
    <td>Company Name</td>
    <td><input type="text" name="compname"></td> 
  </tr>

<tr>
    <td>Street</td>
    <td><input type="text" name="street"></td> 
  </tr>
<tr>
    <td>Barangay</td>
    <td><input type="text" name="barangay"></td> 
  </tr>
<tr>
    <td>City</td>
    <td><input type="text" name="city"></td> 
  </tr>
<tr>
    <td>Province</td>
    <td><input type="text" name="province"></td> 
  </tr>

  <tr>
    <td>Email</td>
    <td><input type="text" name="email"></td> 
  </tr>
  <tr>
    <td>Contact Number</td>
    <td><input type="text" name="contact"></td> 
  </tr>
  <tr>
    <td>User Name</td>
    <td><input type="text" name="username"></td> 
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="text" name="password"></td> 
  </tr>
  <tr><td></td><td>   <input type="submit" name="submit" value="Submit" id="button"> </td></a>
                    <hr></td></tr>
</table></center>


</div>
                

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('rosem', $con)or die(mysql_error());
if (isset($_POST['submit'])){

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$compname=$_POST['compname'];
$street=$_POST['street'];
$barangay=$_POST['barangay'];
$city=$_POST['city'];
$province=$_POST['province'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];


if($fname==''){
    echo "<script>alert('Enter Your FirstName!')</script>";

}

if($mname==''){

    echo "<script>alert('Enter Your MiddleName!')</script>";

}
if($lname==''){

    echo "<script>alert('Enter Your Lastname!')</script>";

}
if($compname==''){

    echo "<script>alert('Enter Your Lastname!')</script>";

}

if($barangay==''){

    echo "<script>alert('Enter Your Barangay!')</script>";

}if($street==''){

    echo "<script>alert('Enter Your Street!')</script>";


}if($city==''){

    echo "<script>alert('Enter Your Town!')</script>";

}if($province==''){

    echo "<script>alert('Enter Your Province!')</script>";

}if($contact==''){

    echo "<script>alert('Enter Your ContactNumber!')</script>";

}
if($email==''){

    echo "<script>alert('Enter Your ContactNumber!')</script>";

}

if($username==''){

    echo "<script>alert('Make a Username!')</script>";

}if($password==''){

    echo "<script>alert('Make a Password!')</script>";

}

else{

    $query="insert into client_info(fname,mname,lname,compname,street,barangay,city,province,email,contact,username,password,user_level) values ('$fname','$mname','$lname','$compname','$street','$barangay','$city','$province','$email','$contact','$username','$password','admin')";

    if (mysql_query($query)){
        echo"<script>alert('You are succesfully registered')</script>";
        echo"<script>window.open('admin.php','_self')</script>";
    } 
}
}   
?>