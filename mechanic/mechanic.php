<?php
include "../db.php";
session_start();
  
    if(!isset($_SESSION['id'])){
        echo "<meta http-equiv='refresh' content='0; URL = ../index/iindex.php'>";
    }else{
        $user_id = $_SESSION['id']; 
        $email = $_SESSION['email']; 
     $user = mysqli_query($connect,"SELECT * FROM mechanic WHERE id='$user_id'");
     $user_info = mysqli_fetch_array($user);
      $user_pic=$user_info["photo"];
      $user_fname= $user_info["first_name"];
      $user_lname=$user_info["last_name"];
      $user_email=$user_info["email"];
    

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo.gif" />

<!-- bootstrapp links -->


<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- ends here -->
<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<!-- Animation library for notifications   -->
<link href="assets/css/animate.min.css" rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />


<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

<link rel="stylesheet" href="mechanic.css">



    <script>
    // function readAppliers(){
    //     document.getElementById("mechDis").style.display = 'block';
    //     document.getElementById("all_fields").style.display = 'none'
    //     document.getElementById("accSettings").style.display = 'none';

    // }
    function accountSettings(){
        document.getElementById("accSettings").style.display = 'block';
        document.getElementById("all_fields").style.display = 'none'
       
    }
    </script>

<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript">
var request = false;
if (window.XMLHttpRequest) {
    request = new XMLHttpRequest();
}
else if (window.ActiveXObject) {
    request = new ActiveXObject('Microsoft.XMLHTTP');
}
		function allowMechanic(id) {
		if(request){
			var status = document.getElementById('status');
            request.open('POST', "actsOfAdmin.php", true);
            request.onreadystatechange = function(){
                if (request.readyState == 4 && request.status == 200) {
                    status.style.color = "green";
                    status.innerHTML = request.responseText;
                            if(request.responseText == 'Done'){
            	document.getElementById(`${id}`).style.display = 'none';
                window.location.assign("./");
            }
                }
            }	
             status.style.color = "blue";
            status.innerHTML = "Registering...";
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send("&id="+id+"&action=allow");
		}
	}
	</script>
	<style type="text/css">

/* .btn{
border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;
} */
	</style>



    <title>BAF|mechanic</title>
</head>

<body>
    <div class="nav-bar"></div>
    <div id="img-logo"><img src="images/logo.gif" alt=""><i class="fas fa-search"></i><input type="text" id="search" placeholder="Search...">
    <i class="fa fa-plus-square"></i><i class="fas fa-edit"></i><i class="fas fa-bell bell" title="Notification" onclick="document.getElementById('moth').style.display='block'"></i><i class="fas fa-door-open" title="Logout"></i></div>

<!-- upload photo -->

<div id="mechanic-wrapper" class="modal">

<form class="modal-content" id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">

    <div class="imgcontainer">
        <span onclick="document.getElementById('mechanic-wrapper').style.display='none'" class="close" title="Close Form" style="font-size: 40px;">&times;</span>

        <img src="../uploads/<?php echo $user_pic; ?>" alt="logo" class="logo" style=" margin-left:100px !important; border-radius:50% !important;  width:150px !important; height:150px !important">
        <h1 style="text-align:center">User</h1>
</div>
    <input type="file" name="image" id="new-mechanic-image" style="margin-left: 70px;"> <br>
    <input type="hidden" value="<?php echo $user_pic; ?>" name="unlink">
    <button type="submit" id="sub-mit2">UPLOAD</button> <br>
</form>


</div>

<!--  -->


<!--  -->
  <?php  include 'notifications.php'; ?>
    <div class="personal">
    <div class="profile" onclick="document.getElementById('mechanic-wrapper').style.display='block'">
        <img src="../uploads/<?php echo $user_pic; ?>" alt="" onclick="document.getElementById('mechanic-wrapper').style.display='block'">
             <!-- <p>Click to update</p> -->
            </div>
            <span id="names"><?php echo "<b>Mr/Mrs.</b> ".$user_fname ." ".$user_lname; ?></span>
    

        <div class="content">
            <ul>
            <li><a href="#" onclick="showUpdate()"><i class="fas fa-rss"></i> FEEDBACK</a></li>
                <li><a href="#" ><i class="fas fa-users"></i> CLIENTS</a></li>
                <li><a href="#"><i class="fas fa-warehouse"></i> WORKSPACE</a></li>
                <li><a href="#" onclick="showMap()"><i class="fas fa-map-marker-alt"></i> MAP</a></li>

                <li><a href="#"><i class="fas fa-comments"></i> SUGGESTION</a></li>                 
                  <li><a href="#" onclick="accountSettings()"><i class="fas fa-cog"></i> ACCOUNT SETTINGS</a></li>
                <li><a id="out-log" href="../logout.php"><i class="fas fa-sign-out-alt"></i> LOG OUT >>></a></li>
    </a></li>

            </ul>
        </div>

    </div>
    <div class="all_fields" id="all_fields">
        <div class="bar">Dear <?php echo $user_fname?>, Find your location ...</div>

        <div class="map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247951.09099703954!2d29.47520742996726!3d-1.8407058140938108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c29654e73840e3%3A0x7490b026cbcca103!2sRwanda!5e0!3m2!1sen!2srw!4v1569479893511!5m2!1sen!2srw"
                width="1500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <div class="in-form">
                <input type="text" id="location" placeholder="Where are you?">

                <input type="text" name="" id="zipcode" placeholder="Street code: KN-XXX-XX">
                <input type="submit" name="" id="sub-mit" value="Find me"><i class="fas fa-globe"></i>
            </div>
        </div>
       
    </div>
<!-- display appliers -->

   
<?php

 
   include "update-form.php";
    include "map.php";
   include "busy.php";
   include "account.php";
   include 'ch_talk.php';
   ?>
<script src="mechanic.js"></script>
</body>

</html>
<?php
    }
?>