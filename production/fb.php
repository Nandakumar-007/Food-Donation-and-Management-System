		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];





if($con){
	echo"connection successful";
	$sql="INSERT INTO rfb VALUES('','$a','$b','$c')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Feedback sent successfully  ");
            window.location="sendfeedback.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("feedback sent failed ");
            window.location="sendfeedback.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		