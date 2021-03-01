<div id="update-me" style="display: none">
	<p>Control what users can see on your bench?</p>
	<form class="easy-form">
		<div class="form-group">
		<label>First Name</label>
		<input type="text"name="f_name"id="f_name" class="form-group" disabled value="<?php echo      $user_fname?>"readonly>
		</div>
		<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="l_name" id="l_name" class="form-group" disabled value="<?php echo      $user_lname?>"readonly>
</div>
		<label>Email</label>
		<input type="email" name="email" id="email" class="form-group" disabled value="<?php echo      $email?>"readonly>
		<br><br>
		 <label>Vehicles</label>
		<!--<input type="text" name="job" id="job"> -->
		<?php include 'vehicles.php'; ?>
		<span id="job_span" style="color: red;font-weight: bold;display: none">JOB REQUIRED ???????</span>
		<br>
		<label>Work Time</label>
		<input type="text" name="time" id="time" placeholder="Ex: Monday-Friday" class="form-group">
		<span id="time_span" style="color: red;font-weight: bold;display: none">WORK TIME REQUIRED ????</span>
		<input type="button" class="btn btn-info btn-fill pull-right keepBtn"  name="update" value="ADD NEW" onclick="updateMyrepr(<?php echo $_SESSION['id'] ?>)">
	</form>

<!-- right side bar -->

<div class="bg-bus-color">


<div class="card card-wheels">

<div class="bg-image">
	<img src="images/car1.jpg" alt=""> <span><i> 4 wheels vehicle</i></span>
</div>
<div class="b-image">
<span><i> 2 wheels vehicle</i></span> <img src="images/bicycle.jpeg" alt=""> 
</div>
<div class="g-image">
	<img src="images/car2.jpeg" alt=""> <span><i> 6 wheels vehicle</i></span>
</div>

<div class="conten">

<div class="4-wheel">
	<!-- <a href="#">
		<img src="" alt="">
	</a> -->
</div>

</div>
</div>


</div>








<!-- ends here -->
</div>