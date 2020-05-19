<?php
include('../includes/dbh.inc.php');
session_start();
if($_SESSION['is_login']){
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href='../login.php'</script> ";
}
if(isset($_REQUEST['submitrequest'])){
    //checking for empty fields//
    if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || ($_REQUEST['requestdate'] == "")){
        $msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'> Fill ALL Fields..!!</div>";
    } else {
$rinfo = $_REQUEST['requestinfo'];
$rdesc = $_REQUEST['requestdesc'];
$rname = $_REQUEST['requestername'];
$radd1 = $_REQUEST['requesteradd1'];
$radd2 = $_REQUEST['requesteradd2'];
$rcity = $_REQUEST['requestercity'];
$rstate = $_REQUEST['requesterstate'];
$rzip = $_REQUEST['requesterzip'];
$remail = $_REQUEST['requesteremail'];
$rmobile = $_REQUEST['requestermobile'];
$rdate = $_REQUEST['requestdate'];

$sql = "INSERT INTO usersubmitrequest(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, request_date)VALUES('$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";

if($conn->query($sql) == TRUE){
    $genid = mysqli_insert_id($conn);
    $msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2'> Request submitted Successfully..!!</div>";
    $_SESSION['myid'] = $genid;
    echo "<script> location.href='../memberLogin/submitrequestsuccess.php'</script> ";
} else {
    $msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'> Unable to Submit your request..!!</div>";
}
    }
}
?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Submit Request Form</title>
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../css/login.css">

</head>
<body>






<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> info@grandframez.com.au</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +61 432290047 </a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +61 405279315 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="../index.php">G<span>rand</span>F<span>rame</span>Z</a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
<?php
 if (isset($_SESSION['email'])) {
    echo '
    <form action="../includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
    </form>';
 }
 else{
    echo 'You are logged out!!';
 }


?>
                    </div>
                </div>


                

            </div>
        </div>
    </div> <!-- End site branding area -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="shop.php">Services</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
















<!--start container -->
<div class="container-fluid" style="margin-top:40px;">
 <!--start row --><div class="row">
  <!--side bar -->
    <nav class="col-sm-2 bg-light sidebar py-5">
    <div class="sidebar-sticky">
    <ul class="nav flex-column">
    <li class="nav-item"><a class="nav-link" href="user.login.success.php"><i class="fa fa-user"></i>profile</a></li>
    <li class="nav-item"><a class="nav-link" href="submitRequest.php"><i class="fa fa-plus"></i>Book</a></li>
    <li class="nav-item"><a class="nav-link" href="serviceStatus.php"><i class="fa fa-spinner "></i>Booking Status</a></li>
    <li class="nav-item"><a class="nav-link" href="changePassword.php"><i class="fa fa-key "></i>Change password</a></li>
    </ul>
    </div>
    </nav>
    <!-- End side bar -->
    
</div> <!--End row -->
</div>   
<!--End container -->






    <div class="form" style="margin-top: -130px";>
    <form  action="" method="post" class="mx-5">
    <div class="form-group col-md-12">
    <div class="form-group">
            
              Request Info.<span class="req">*</span>
            
            <input type="text"  name="requestinfo" id="inputRequestInfo">
          </div>
          </div>
          <div class="form-group col-md-12">
          <div class="form-group"  >
            
              Description<span class="req"></span>
           
            <input type="text"  name="requestdesc" id="inputRequestDescription" >
          </div>
          </div>
          <div class="form-group col-md-12">
          <div class="form-group">
          
              Name<span class="req"></span>
            
            <input type="text"  name="requestername" id="inputName">
          </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
          
              Address Line 1<span class="req"></span>
            
            <input type="text"  name="requesteradd1" id="inputAddress">
          </div>
          <div class="form-group col-md-6">
          
              Address Line 2<span class="req"></span>
            
            <input type="text"  name="requesteradd2" id="inputAddress2">
          </div>
          </div>
          <div class="form-now">
          <div class="form-group col-md-6">

          E-mail<span class="req"></span>
          <input type="email"  name="requesteremail" id="inputEmail">
          </div>
          <div class="form-group col-md-6">

          Mobile<span class="req"></span>
          <input type="text"  name="requestermobile" id="inputMobile" value = "" pattern="[0-9]{10,13}">
          </div>
          </div>
          <div class="form-now">
          <div class="form-group col-md-6">

          City<span class="req"></span>
          <input type="text"  name="requestercity" id="inputCity">
          </div>
          <div class="form-group col-md-6">

          State<span class="req"></span>
          <input type="text"  name="requesterstate" id="inputState">
          </div>
          </div>
          <div class="form-now">
          <div class="form-group col-md-6">

          Zip<span class="req"></span>
          <input type="text"  name="requesterzip" id="inputZip" value = "" pattern="[0-9]{4}">
          </div>

          <div class="form-group col-md-6">

          Date<span class="req"></span>
          <input type="date"  name="requestdate" id="inputDate">
          </div>
          </div>
      
          

          <button type="submit" name="submitrequest" class="button button-block"/>Submit</button>
         
          </form>
          <?php if(isset($msg)) {echo $msg;} ?>
          </div>


    






















          <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <h2>G<span>rand</span>F<span>rame</span>Z</h2>
                        <p>At Grand Framez we focus on providing excellent services with the highest level of customer satisfaction. with a variety of services to choose from ,we are sure you will be happy working with us.look around at our website and if you have any question please contact us.</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/grandframez" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/grandframez" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCiwPYz5XxEbKkB-ohrnp31g" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://plus.google.com/grandframez" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.instagram.com/grandframez/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="../login.php">Login</a></li>
                            <li><a href="../contact.php">Contact</a></li>
                            <li><a href="../privacypolicy.php">Privacy Policy</a></li>
                            <li><a href="../t&c.php">T&C</a></li>
                            <li><a href="../index.php">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="../shop.php">services</a></li>
                        </ul>
                        <ul>
                            <li><a href="../admin/adminlogin.php">Admin Login</a></li>
                        </ul>                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2020 Grand FrameZ. All Rights Reserved.</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="../js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="../js/main.js"></script>
  </body>
</html>