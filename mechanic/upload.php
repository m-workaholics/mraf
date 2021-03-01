<?php
session_start();
$id = $_SESSION['id'];
$link = $_POST['unlink'];
include('../db.php');
if($_FILES['image']['name'] != ""):
$temporary_filename = $_FILES["image"]["tmp_name"];
$final_filename = rand(1, 100).$_FILES["image"]["name"];
$final_filename = preg_replace('/\s/', '', $final_filename);
if(move_uploaded_file($temporary_filename, "../uploads/" . $final_filename) &&
mysqli_query($connect,"UPDATE mechanic SET photo = '$final_filename' WHERE id = '$id'")):
  unlink("../uploads/$link")
?>
<script type="text/javascript">
  window.history.back();
</script>
<?php 
endif;
endif;
?>