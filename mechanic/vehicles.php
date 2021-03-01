<?php
// include('../db.php');
$sql = "select * from vehicles";
$check = mysqli_query($connect,$sql);
if (mysqli_num_rows($check) > 0):
    while($rows = mysqli_fetch_assoc($check)){
    	echo "<div class='check_box'><input type='checkbox' name='check_veh' class='vehicles_checkbox' value='".$rows['vehicle_id']."'>".$rows['vehicle_name']."</div>";
    }
endif;

?>