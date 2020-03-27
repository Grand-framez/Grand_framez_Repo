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




    <div class="col-sm-4 mb-5 jumbotron" > <!-- 2nd row -->
   
<?php
$sql = "SELECT request_id, request_info, request_desc, request_date FROM usersubmitrequest";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){ 
        
echo '<div class=" card mt-5 mx-5 " style="margin-top:-40px;" >';
    echo '<div class="form text-center  " >';
        echo 'Request ID:'. $row['request_id'];
    echo '</div>';
    echo '<div class="form text-center table" style="margin-top:-30px;" >';
    echo '<h5 class="card-title">Request Info:'. $row['request_info'];
    echo '</h5>';
    echo '<p class="card-text">'. $row['request_desc'];
    echo '</p>';
    echo '<p class="card-text"> Request Date: '. $row['request_date'];
    echo '</p>';
echo '<form action="" method="POST">';
echo '<input type="hidden" name="id" value='. $row["request_id"]. '>';
echo '<input type="submit"  value="view" name="view"> <br>';
echo '<input type="submit"  value="Delete" name="close">';
echo '</form>';
    echo '</div><br><br>';
echo '</div>';
    }
}
?>
</div>


<?php
if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM usersubmitrequest WHERE request_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
if(isset($_REQUEST['close'])){
    $sql = "DELETE FROM usersubmitrequest WHERE request_id = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    } else {
        echo "UNABLE TO DELETE";
    }
}
if(isset($_REQUEST['assign'])){
    if(($_REQUEST['requestid'] == "") || ($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || ($_REQUEST['inputdate'] == "") || ($_REQUEST['assigntech'] == "") ){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $rid = $_REQUEST['requestid'];
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
        $rassigntech = $_REQUEST['assigntech'];
        $rdate = $_REQUEST['inputdate'];

        $sql = "INSERT INTO assignwork (request_id, request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, assign_tech, assign_date) VALUES ('$rid', '$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rassigntech', '$rdate')";
        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Order Assigned Successfully.!!</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Assign.!!</div>';
        }
    }
}
?>





<div class="form col-sm-5 mt-5 jumbotron"  style="margin-top:0px; margin-left:50px;">
<form  action="" method="post" class="mx-5">

<h5 class="text-center">Assign Work Order Request</h5>

<div class="form-group col-md-12">
    <div class="form-group">
            
              Request ID<span class="req">*</span>
            
            <input type="text"  name="requestid" id="inputRequestId" value="<?php if(isset($row['request_id']))echo $row['request_id']; ?>" readonly>
          </div>
          </div>

    <div class="form-group col-md-12">
    <div class="form-group">
            
              Request Info.<span class="req">*</span>
            
            <input type="text"  name="requestinfo" id="inputRequestInfo" value="<?php if(isset($row['request_info']))echo $row['request_info']; ?>">
          </div>
          </div>
          <div class="form-group col-md-12">
          <div class="form-group"  >
            
              Description<span class="req"></span>
           
            <input type="text"  name="requestdesc" id="inputRequestDescription" value="<?php if(isset($row['request_desc']))echo $row['request_desc']; ?>" >
          </div>
          </div>
          <div class="form-group col-md-12">
          <div class="form-group">
          
              Name<span class="req"></span>
            
            <input type="text"  name="requestername" id="inputName" value="<?php if(isset($row['requester_name']))echo $row['requester_name']; ?>">
          </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
          
              Address Line 1<span class="req"></span>
            
            <input type="text"  name="requesteradd1" id="inputAddress" value="<?php if(isset($row['requester_add1']))echo $row['requester_add1']; ?>">
          </div>
          <div class="form-group col-md-6">
          
              Address Line 2<span class="req"></span>
            
            <input type="text"  name="requesteradd2" id="inputAddress2" value="<?php if(isset($row['requester_add2']))echo $row['requester_add2']; ?>">
          </div>
          </div>
          <div class="form-now">
          <div class="form-group col-md-6">

          E-mail<span class="req"></span>
          <input type="email"  name="requesteremail" id="inputEmail" value="<?php if(isset($row['requester_email']))echo $row['requester_email']; ?>">
          </div>
          <div class="form-group col-md-6">

          Mobile<span class="req"></span>
          <input type="text"  name="requestermobile" id="inputMobile" pattern="[0-9]{10,13}" value="<?php if(isset($row['requester_mobile']))echo $row['requester_mobile']; ?>">
          </div>
          </div>
          <div class="form-now">
          <div class="form-group col-md-6">

          City<span class="req"></span>
          <input type="text"  name="requestercity" id="inputCity" value="<?php if(isset($row['requester_city']))echo $row['requester_city']; ?>">
          </div>
          <div class="form-group col-md-6">

          State<span class="req"></span>
          <input type="text"  name="requesterstate" id="inputState" value="<?php if(isset($row['requester_state']))echo $row['requester_state']; ?>">
          </div>
          </div>
          <div class="form-now">
          <div class="form-group col-md-6">

          Zip<span class="req"></span>
          <input type="text"  name="requesterzip" id="inputZip"  pattern="[0-9]{4}" value="<?php if(isset($row['requester_zip']))echo $row['requester_zip']; ?>">
          </div>

          <div class="form-group col-md-6">

          Date<span class="req"></span>
          <input type="date"  name="inputdate" id="inputDate">
          </div>
          </div>

          <div class="form-group col-md-12">
          <div class="form-group">
          
              Assign Photographer<span class="req"></span>
            
            <input type="text"  name="assigntech" id="assigntech">
          </div>
          </div>
          

          <button type="submit" name="assign" class="button button-block"/>Assign</button>
          
         
          </form>
          <?php if(isset($msg)){echo $msg; } ?>
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