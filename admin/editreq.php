<?php
include('../includes/dbh.inc.php');
    session_start();
    if($_SESSION['is_adminlogin']){
        $email = $_SESSION['aEmail'];
    } else {
        echo "<script> location.href='../admin/adminlogin.php'</script> ";
    }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
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
 if (isset($_SESSION['aEmail'])) {
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
    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fa fa-tachometer"></i>Dashboard</a></li>
    <li class="nav-item"><a class="nav-link" href="workorder.php"><i class="fa fa-sort-amount-asc"></i>Work Order</a></li>
    <li class="nav-item"><a class="nav-link" href="request.php"><i class="fa fa-user-plus"></i>Requests</a></li>
    <li class="nav-item"><a class="nav-link" href="photographers.php"><i class="fa fa-camera"></i>Photographers</a></li>
    <li class="nav-item"><a class="nav-link" href="requester.php"><i class="fa fa-users"></i>Requester</a></li>
    <li class="nav-item"><a class="nav-link" href="workreport.php"><i class="fa fa-line-chart  "></i>Work Report</a></li>
    <li class="nav-item"><a class="nav-link" href="adminchangepassword.php"><i class="fa fa-key "></i>Change Password</a></li>
    </ul>
    </div>
    </nav>
    <!-- End side bar -->





<div class="col-sm-8 mt-5 mx-3 form " style="margin-left: 200px;">
<h3 class="text-center"> Update Requester Details </h3>
<?php
if(isset($_REQUEST['edit'])){
$sql = "SELECT * FROM users WHERE idUsers = {$_REQUEST['id']}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

}

if(isset($_REQUEST['requpdate'])) {
    if(($_REQUEST['idUsers'] == "") || ($_REQUEST['fName'] == "") || ($_REQUEST['emailUsers'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    } else {
        $rid = $_REQUEST['idUsers'];
        $rname = $_REQUEST['fName'];
        $remail = $_REQUEST['emailUsers'];
        $sql = "UPDATE users SET idUsers = '$rid', fName = '$rname', emailUsers = '$remail' WHERE idUsers = '$rid'";
        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">UPDATED SUCESSFULLY..!!</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">UNABLE TO UPDATE..!!</div>';
        }
    }
}

?>

<form action="" method="POST" >

<div class="form-group col-md-12">
    <div class="form-group">
    Requester ID
<label for="idUsers"> </label>
<input type="text" name="idUsers" id="isUsers" value="<?php if(isset($row['idUsers'])) {echo $row['idUsers'];} ?>" readonly>
</div>
</div>


<div class="form-group col-md-12">
    <div class="form-group">
    Name
<label for="fName"> </label>
<input type="text" name="fName" id="fName" value="<?php if(isset($row['fName'])) {echo $row['fName'];} ?>" >
</div>
</div>


<div class="form-group col-md-12">
    <div class="form-group">
    Email
<label for="emailUsers"> </label>
<input type="email" name="emailUsers" id="emailUsers" value="<?php if(isset($row['emailUsers'])) {echo $row['emailUsers'];} ?>" readonly>
</div>
</div>

<div class="text-center">
<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
<a href="requester.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)) {echo $msg;} ?>
</form>
</div>







    
</div> <!--End row -->
</div>   
<!--End container -->










































<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
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
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
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