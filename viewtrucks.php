<!DOCTYPE html>
<html lang="en">




<?php
include('conn.php');
$query = "SELECT * FROM tbl_bikes";
 $sql = mysqli_query($dbc, $query);
        $row = mysqli_fetch_assoc($sql);
    $num = mysqli_num_rows($sql); 
        $rows = $num;
        $pageRows = 2;
        $last = ceil($rows/$pageRows);
        if ($last < 1) {
          $last = 1;
      }
      $pagenum = 1;
      if(isset($_GET['pn'])){
        $pagenum = preg_replace('#[^0-9]#','',$_GET['pn']);
      }
      if ($pagenum < 1) {
        $pagenum = 1;
      }else if($pagenum > $last){
        $pagenum = $last;
      } 
      $limit = 'LIMIT '.($pagenum - 1) * $pageRows.','.$pageRows;
          $query = "SELECT brandName, partsContent FROM tbl_bikes $limit";
  $sql = mysqli_query($dbc, $query);
      $textline1 = "Items(<b>$rows</b>)";
      $textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
      $paginationCtrls = '';
      if ($last != 1) {
        if ($pagenum > 1) {
          $previous = $pagenum - 1;
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp;&nbsp;';
        for ($i=$pagenum - 4; $i < $pagenum; $i++) { 
            if ($i>0) {
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp;&nbsp;';
            }
          } 
        }
        $paginationCtrls .= ''.$pagenum.' &nbsp; ';
        for ($i=$pagenum + 1; $i <= $last; $i++) { 
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp;&nbsp;';
            if ($i>=$pagenum + 4) {
            break;
            }
          }
      if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= '&nbsp &nbsp<a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a>
';
      }
    }
$list = '';
 ?>







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
                <a class="navbar-brand" href="index.html">Business Casual</a>
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
                        <a href="blog.php">Reservation</a>
                    </li>
                    <li>
                        <a href="index.php">Logout</a>
                    </li>
                </ul>
            </div>








            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
        </div>

<?php



  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
$sql = "SELECT * FROM tbl_bikes where id='$id'";
$result = mysqli_query($dbc, $sql);
 while ($list = mysqli_fetch_assoc($result)) {
        

         $dateArrival=$list['dateArrival'];
             $file=$list['file'];
         $brandName=$list['brandName'];
         $partsContent=$list['partsContent'];
         $price=$list['price'];
              $date = explode(" ",$dateArrival);
              $dateAr  = $date[0];
              $id = $list['id']; 
}







              ?>
      

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong><?php echo $brandName?></strong>
                    </h2>
                    <hr>
                </div>





                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="<?php echo $file?>" alt="">
                    <h2 name = "truck" value"<?php echo $brandName?>"><?php echo $brandName?>
                        </h2>
                        <h2 name = "plate" value "<?php echo $price?>">Plate no. &nbsp;<?php echo $price?></h2>
                    </h2>
                    <p><?php echo $partsContent?></p>
             


                    <hr>
            


<h2 class="intro-text text-center">Reservation Info
                    </h2>


          <form id="form1" name="form1" method="post" action="viewtrucks.php?id=<?php echo $id?>">
<center><table width="250" height="200" border="0" cellpadding="0" cellspacing="0">
 
<tr><td>Username</td><td><input type="text" name="username" value=""></td></td></tr>

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
   <input type="submit" name="reserve" value="Reserve" id="button"> </td>
  </tr>
<td> 
   <input type="submit" name="next" value="next" id="button"> </td>
  </tr>

  </table></center>

</table>

</form>



            </div>




<div class="row">
            <div class="box">
                <div class="col-lg-12">
                   

                   
                </div>
                                <div class="clearfix"></div>
            </div>
        </div>








<?php } ?>


 


<?php




 if (isset($_POST['next'])){
if ($id = "32") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";

}
}






$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('rosem', $con)or die(mysql_error());

if (isset($_POST['reserve'])){

$username=$_POST['username'];
$date=$_POST['date'];
$time=$_POST['time'];
$product=$_POST['product'];

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
 
    $query="insert into reservation(truckname,platenum,username,date,time,product) values ('$brandName','$price','$username','$date','$time','$product')";

    if (mysql_query($query)){
        echo"<script>alert('You are succesfully registered')</script>";
        echo "<script>window.open('blog.php','_self')</script>";
    } 
  }
}

   
?>





            </div>
        </div>

    </div>
    <!-- /.container -->














  

    <!-- jQuery -->
    <script src="BikesCabalen/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="BikesCabalen/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>








