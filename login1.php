<?php
session_start();
ob_start();
	include ("connection.php");
// isset -- it will only run if LOGOUT LINK button is clicked

	// isset -- it will only run if SUBMIT BUTTON  has submitted
		//importing
		$username = $_POST["username"];
		$password = $_POST["password"];

		//check if both inuts have vvalue
		if ($username!="" && $password!="") {
			
			//query into the database
    $query="SELECT * FROM `client_info` where username='$username' AND password='$password'";
    $run=(mysql_query($query)) or die (mysql());
    if (mysql_num_rows($run)>0){
			//validate 
				$getCheckrows=mysql_fetch_assoc($run);
				$_SESSION['sessionUsername']=$getCheckrows["username"];
				//Validate permission
				if ($getCheckrows["user_level"] == "admin") {
						$_SESSION['login_user'] = $username;
						$_SESSION['sessionPermission']=$getCheckrows["user_level"]; // Initializing 
					echo "Admin";
					 header("Location: admin.php ");
				}
				else if ($getCheckrows["user_level"] == "client") {
					$_SESSION['login_user'] = $username;
					$_SESSION['sessionPermission']=$getCheckrows["user_level"]; // Initializing Session
					echo "Cashier";
					header("Location: index1.php ");
						
				}
				

			}else{
					 echo "<script>alert('Username and Password are not match, Check the spelling or Register first!')</script>";
					 header ("Location: login.php ");
				}


		}else{
			echo "<script>alert('Please fill all the textbox!')</script>";
			header ("Location: login.php ");
		}
	
?>