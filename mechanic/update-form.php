
<div id="mechanic-wrapper" class="modal">

<form class="modal-content" id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">

    <div class="imgcontainer">
        <span onclick="document.getElementById('mechanic-wrapper').style.display='none'" class="close" title="Close Form" style="font-size: 40px;">&times;</span>

        <img src="../uploads/<?php echo $user_pic; ?>" alt="logo" class="logo" style="width:130px !important; height:130px !important">
        <h1 style="text-align:center">Mechanic</h1>
</div>
    <input type="file" name="image" id="new-mechanic-image" style="margin-left: 70px;"> <br>
    <input type="hidden" value="<?php echo $user_pic; ?>" name="unlink">
    <button type="submit" id="sub-mit2">UPLOAD</button> <br>
</form>


</div>