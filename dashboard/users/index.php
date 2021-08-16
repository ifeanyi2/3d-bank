<?php
session_start();
include '../config/database.php';
include '../config/config.php';


$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;







if (isset($_POST['log'])) {
 
  if (empty($_POST["account"])) {
    $msg = "Account Number is required";
  } else {
    $account = test_input($_POST["account"]);
    
    }
  
  
  
   if (empty($_POST["password"])) {
    $msg = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
   
  }
    
		
	$account = $link->real_escape_string($_POST['account']);
	$password = $link->real_escape_string($_POST['password']);
	
	
	if($account == "" || $password == ""){
		$msg = "Account or Password fields cannot be empty!";
		
	}else {
   

					$sql = "SELECT * FROM tbl_users WHERE pwd = '$password' AND (acctno='$account' OR username = '$account') ";

          $result = mysqli_query($link, $sql);
          if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

           
            if($row['pwd'] == $password && ($row['acctno'] == $account || $row['username'] == $account) ){
				
              $_SESSION['email']=$_POST['email'];
	               $_SESSION['fname']=$row['fname'];
				   $_SESSION['lname']=$row['lname'];
				   $_SESSION['username']=$row['username'];
				   $_SESSION['acctno']=$row['acctno'];
				   $_SESSION['uid']=$row['id'];
					$_SESSION['pin']=$row['pin'];
          $_SESSION['phone']=$row['phone'];
          
          $_SESSION['pics']=$row['pics'];
          $_SESSION['ip']=$row['ip'];
          $_SESSION['address']=$row['address'];
          $_SESSION['balance']=$row['balance'];
          $_SESSION['country']=$row['country'];

          $_SESSION['utype']=$row['utype'];
		  
          $_SESSION['zipcode']=$row['zipcode'];
		  
          $_SESSION['bdate']=$row['bdate'];
          $_SESSION['bname']=$row['bname'];
		  
		  
          $_SESSION['state']=$row['state'];
		  $_SESSION['city']=$row['city'];
          
		  
		  
            header("location:pin.php?account=".$_SESSION['acctno'] );
				
				 }
			else{
				
				$msg = "Email or Password incorrect!";
			}
		}
		}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../logo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-color: url('f.jpg) !important">
</br>
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container">
            <div class="row">

            
                <div class="col-lg-4"></div>
                <form id="adminpro-form" class="adminpro-form" method="post" action="index.php">

                <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>

                    <div class="col-lg-4">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href=""><img src="../admin/pages/logo/<?php echo $logo;?>" style="max-height:60px; " width="200" height="50" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <h1></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p><b>Account Number</b></p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="account" />
                                        <i class="fa fa-user login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p><b>Password</b></p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="password" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="forgot-password">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                    <button type="submit"  name="log" class="login-button login-button-lg">Log in</button>
                                    </div>
                                </div>
                                
                                Not a member ? <a href="register.php" class="link">Register</a>
                                <a href="reset.php" class="link" style="float:right">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
    </div>

</br></br>

    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>