<div id="accSettings" style="display:none">
<div class="content">
<div class="container-fluid">

<!-- ::before -->
<div class="row">

<div class="col-md-8">
    <!-- <div class="card"> -->
  <div class="header">
      <h4 class="title">Edit profile</h4>
  </div>

  <div class="content">
<form action="#" class="move-form">
<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="BAF.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="admin12">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" value="<?php echo $user_email; ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- end of first row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="<?php echo $user_fname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value=" <?php echo $user_lname; ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- end of second row -->


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="Musanze-North">
                                            </div>
                                        </div>
                                    </div>

            <!-- end of third row -->


            <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" value="Musanze">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="Rwanda">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Street Code</label>
                                                <input type="number" class="form-control" placeholder="Street Code">
                                            </div>
                                        </div>
                                    </div>



                                    <!-- end of fourth row -->




                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">I am BAF user, I m fond of its services so much, go go BAF and special thanks to M-workaholics</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right keepBtn">Update Profile</button>
                                    <div class="clearfix"></div>

</form>



  </div>

    <!-- </div> -->
</div>

          <!-- for pictures -->



     <div class="bg-color">
                        <div class="card card-user">
                            <div class="image">
                                <img src="images/another.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="../uploads/<?php echo $user_pic; ?>" alt="..."/>

                                    <!-- <input type="hidden" value="<?php echo $user_pic; ?>" name="unlink"> -->
                             <span class="quote"><i>"I enjoy using Irinde system"</i></span>
                                    <hr>
                            
                        </div>
                        </div>
                 

          <!-- ends here -->
</div>


</div>


</div>

<footer class="footer">


</footer>
</div>