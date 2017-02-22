<?php
     include("conn.php");
if (!isset($_FILES['image']['tmp_name'])) {
  echo "";
  }else{
  $location=$_FILES['image']['tmp_name'];
  $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name= addslashes($_FILES['image']['name']);
      
      move_uploaded_file($_FILES["image"]["tmp_name"],"trucks/" . $_FILES["image"]["name"]);
      
      $file="upload_bikes/" . $_FILES["image"]["name"];
      $brandName=$_POST['brandName'];
  $partsContent=$_POST['partsContent'];
  $price=$_POST['price'];


$sql=mysqli_query($dbc,"INSERT into tbl_bikes(brandName, partsContent, price, file) values('$brandName','$partsContent','$price','$file')");
$_SESSION['message'] = "Successfully added!";
header("location:addtruck.php");


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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="blog.php">Reservation</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
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
                    <h2 class="intro-text text-center"><strong>Add trucks</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center"> 


   <div>                 
               

                </div>

                 

 <form role="form" method="post" action="addtruck.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Truck Name</label>
                                <input class="form-control" name="brandName" required>
                            </div>

                            <div class="form-group">
                                <label>Details</label>
                                <textarea class="form-control" rows="3" name="partsContent" required></textarea>
                            </div>


                            <div class="form-group">
                                <label>Plate Number</label>
                                <input class="form-control" name="price" required>
                            </div>


                            <div class="form-group">
                                <label>File input</label>
                                <input type="file" name="image" accept="image/x-png, image/gif, image/jpeg" >
                            </div>

                    <button type="submit" class="btn btn-lg btn-default">Save</button>
                           
                        </form>



</div>
                

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>





