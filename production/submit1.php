<?php 
require('db.php');

// Retrieve data from POST request
$sid = $_POST['sid'];
$status = $_POST['status'];
$dotp = $_POST['dotp'];
$rotp = $_POST['rotp'];

// Check if the OTPs match
if ($dotp == $rotp) {
    // Generate a 6-digit OTP

    // Check if the connection is successful
    if ($con) {
        echo "Connection successful";

        // Prepare the SQL UPDATE statement
        $sql = "UPDATE status SET status = '$status' WHERE sid = '$sid'";

        // Execute the query and check if the update was successful
        if (mysqli_query($con, $sql)) {
            echo "Status updated successfully"; ?>
            <script type="text/javascript">
                window.alert("Status Updated.");
                window.location = "viewtrack1.php";
            </script>
            <?php 
        } else {
            echo "Record not updated"; ?>
            <script type="text/javascript">
                window.alert("Failed to update status");
                window.location = "viewtrack1.php";
            </script>
            <?php 
        }
    } else {
        echo "Connection error";
    }
} else {
    echo "OTP mismatch"; ?>
    <script type="text/javascript">
        window.alert("OTP mismatch");
        window.location = "viewtrack1.php";
    </script>
    <?php 
}
?>