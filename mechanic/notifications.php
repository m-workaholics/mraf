	<div id="moth" style="z-index: 1;display: none">
			<?php 
$id = $_SESSION['id'];
$sql = "select * from messages where receiver_id = '$id' ORDER BY date DESC";
$check = mysqli_query($connect,$sql);
if(mysqli_num_rows($check) > 0):
?>

<span id="span" title="Close Notifications" onclick="document.getElementById('moth').style.display='none'">&times;</span>

<div class="notifications">
	<br>
	<?php 
while($rows = mysqli_fetch_array($check)):
	$id2 = $rows['sender_id'];
	$sql2 = "select * from users where id = '$id2'";
$check2 = mysqli_query($connect,$sql2);
if(mysqli_num_rows($check2) > 0):
	while($send = mysqli_fetch_array($check2)):
 ?>
	<div class="single-notify">
		<p class="date"><?php echo $rows['date'] ?></p>
		<p class="messenger"><?php echo $send['last_name']." Messaged You" ?></p>
	</div>
	<?php 
endwhile;
endif;
   endwhile;
	?>
</div>
<?php  
endif;
 ?>
</div>
