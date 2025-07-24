		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];

$d=date("l jS \of F Y h:i:s A");

$e=$_POST['p4'];
if($con){
	echo"connection successful";
	$sql="INSERT INTO status VALUES('','$a','$b','$c','$d', 'requested','','$e')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Status Updated");
            window.location="viewdeliver.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("successfully sent Deliver Member");
            window.location="viewdeliver.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		