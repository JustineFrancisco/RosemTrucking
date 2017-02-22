<?php

session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
?>


     <?php
     include("conn.php");
if (!isset($_FILES['image']['tmp_name'])) {
  echo "";
  }else{
  $location=$_FILES['image']['tmp_name'];
  $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name= addslashes($_FILES['image']['name']);
      
      move_uploaded_file($_FILES["image"]["tmp_name"],"upload_bikes/" . $_FILES["image"]["name"]);
      
      $file="upload_bikes/" . $_FILES["image"]["name"];
      $brandName=$_POST['brandName'];
  $partsContent=$_POST['partsContent'];
  $price=$_POST['price'];


$sql=mysqli_query($dbc,"INSERT into tbl_bikes(brandName, partsContent, price, file) values('$brandName','$partsContent','$price','$file')");
$_SESSION['message'] = "Successfully added!";
header("location:bikestable.php");


  }
?>


<?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Alex Bike</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   <li class="active">
                        <a href="bikestable.php"><i class="fa fa-fw fa-dashboard"></i> List of Items</a>
                    </li>
                    <li>
                        <a href="bikesadd.php"><i class="fa fa-fw fa-edit"></i> Add Item</a>
                    </li>
                    <li >
                        <a href="cmsabout.php"><i class="fa fa-fw fa-edit"></i>About Editable</a>
                    </li>
                    <li>
                        <a href="cmscontact.php"><i class="fa fa-fw fa-edit"></i>Contact Editable</a>
                    </li>
                    <li>
                        <a href="cmsevent.php"><i class="fa fa-fw fa-edit"></i>Event Editable</a>
                    </li>
                        <li>
                        <a href="data1.php"><i class="fa fa-fw fa-dashboard"></i>Database</a>
                    </li>
                       <li>
                        <a href="filters.php"><i class="fa fa-fw fa-dashboard"></i>Filter</a>
                    </li>

                    <li>
                        <a href="feedback.php"><i class="fa fa-fw fa-dashboard"></i>Feedback</a>
                    </li>
                 
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Item
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action="addsample.php.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Brand Name</label>
                                <input class="form-control" name="brandName" required>
                            </div>

                            <div class="form-group">
                                <label>Details</label>
                                <textarea class="form-control" rows="3" name="partsContent" required></textarea>
                            </div>


                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" required>
                            </div>


                            <div class="form-group">
                                <label>File input</label>
                                <input type="file" name="image" accept="image/x-png, image/gif, image/jpeg" >
                            </div>

                    <button type="submit" class="btn btn-lg btn-default">Save</button>
                           
                        </form>

                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
