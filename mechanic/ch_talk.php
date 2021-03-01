<?php 
function simpleTalk($id,$with){
	include '../db.php';
		$sql = "select * from messages where sender_id = $id OR receiver_id  = $id";
	    $check = mysqli_query($connect,$sql);
        if(mysqli_num_rows($check) > 0):
        	echo "<div class='talk' style='z-index: 1;'><div></div class='converse'>";
        while($rows = mysqli_fetch_array($check)):
        if($rows['sender_id'] == $with){
      echo"<p class='message1'>".$rows['message']."</p>";
        }
       elseif($rows['receiver_id'] == $with){
        echo"<p class='message1'>".$rows['message']."</p>";
      }
endwhile;
echo "<textarea name='message' class='message' placeholder='Message here'></textarea>
			<button class='send'>send</button>";
echo "</div></div></div>";
endif; 
}
simpleTalk(15,3);

