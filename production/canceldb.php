		
<?php 
require('db.php');

$a=$_POST['p1'];






if($con){
	echo"connection successful";
	$sql="delete from complaint where cid='$a'";

	if (mysqli_query($con, $sql)) {
             ?>
			   		<script type="text/javascript">
            window.alert("Complaint  Cancel successfully  ");
            window.location="cancel.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Complaint Cancel failed ");
            window.location="cancel.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		