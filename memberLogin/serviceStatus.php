<?php
include('../includes/dbh.inc.php');
session_start();
if($_SESSION['is_login']){
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href='../login.php'</script> ";
}
?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign-Up/Login Form</title>
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
            
              Enter Request ID:<span class="req">*</span>
            
            <input type="number"  name="checkid" id="checkid" >
          </div>
          </div>
          <button type="submit" name="searchrequest" class="button button-block"/>Search</button>
         
         </form>
         
         <?php
            if(isset($_REQUEST['checkid'])){
                if($_REQUEST['checkid'] == ""){
                    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> FILL ALL FIELDS </div>';
                } else {
                    $sql = "SELECT * FROM assignwork WHERE request_id = {$_REQUEST['checkid']}";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if(($row['request_id'] == $_REQUEST['checkid'])){ ?>
        <br><br>
                    <h3 class="text-center mt-5">Assigned Booking Details</h3>
                    <table class="table table-bordered">
                    <tbody>
                    <tr>
                    <td>Request ID</td>
                    <td><?php if(isset($row['request_id'])){echo $row['request_id'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Request Info</td>
                    <td><?php if(isset($row['request_info'])){echo $row['request_info'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Request Description</td>
                    <td><?php if(isset($row['request_desc'])){echo $row['request_desc'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Name</td>
                    <td><?php if(isset($row['requester_name'])){echo $row['requester_name'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Address line 1</td>
                    <td><?php if(isset($row['requester_add1'])){echo $row['requester_add1'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Address line 2</td>
                    <td><?php if(isset($row['requester_add2'])){echo $row['requester_add2'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>City</td>
                    <td><?php if(isset($row['requester_city'])){echo $row['requester_city'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>State</td>
                    <td><?php if(isset($row['requester_state'])){echo $row['requester_state'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Pin Code</td>
                    <td><?php if(isset($row['requester_zip'])){echo $row['requester_zip'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>E-mail</td>
                    <td><?php if(isset($row['requester_email'])){echo $row['requester_email'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Mobile</td>
                    <td><?php if(isset($row['requester_mobile'])){echo $row['requester_mobile'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Assigned Booking Date</td>
                    <td><?php if(isset($row['assign_date'])){echo $row['assign_date'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Assigned Photographer</td>
                    <td><?php if(isset($row['assign_tech'])){echo $row['assign_tech'];} ?></td>
                    </tr>
        
                    <tr>
                    <td>Customer Sign</td>
                    <td></td>
                    </tr>
        
                    <tr>
                    <td>Photographer Sign</td>
                    <td></td>
                    </tr>
                    </tbody>
                    </table>
                    <div class="text-center">
                    <form action="" class="d-print-none">
                    <input class="btn btn-danger" type="submit" value="print" onclick="window.print()">
                    </form>
                    </div>
                    <?php } else {
                        echo '<div class="alert alert-info mt-4"> Your Request Is Still Pending..!!</div>';
                    } 
                }

        }?>
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