<?php
$work_time = $_POST['time'];
$mech_id = $_POST['id'];
$vehicles = explode(",",$_POST['veh']);
echo count($vehicles)." Requested Business(es)\n";
$servername = "localhost";
$username = "root";
$password = "didmun3438@!";
$dbname = "breakdown";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Business where mech_id = '$mech_id'";
$result = $conn->query($sql);

if ($result->num_rows  == 1) {
	echo "\nYou had one business";
    while($row = $result->fetch_assoc()) {
        echo "<br> Business ID: ". $row["busy_id"]. " \n Time : ". $row["job_time"]. "\nBusiness: " . $row["job"] . "<br>";
    }
}  
if($result->num_rows  == 0 || $result->num_rows  == 1 || $result->num_rows  == 2) {
	for($i=0;$i<count($vehicles);$i++):
    $sql = "INSERT INTO Business (mech_id,job,job_time) values('$mech_id','$vehicles[$i]','$work_time')";

if (mysqli_query($conn, $sql)) {
    $in = 3;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
endfor;
echo $i." Business added";
}
else{
	echo $result->num_rows." Business Exists\nNo New Business Added";
}

$conn->close();

?>