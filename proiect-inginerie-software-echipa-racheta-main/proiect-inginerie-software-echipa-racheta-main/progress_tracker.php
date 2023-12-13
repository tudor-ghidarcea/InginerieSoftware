<?php include("header.php"); ?>
<?php
					if(isset($_SESSION["useruid"]))
					{
					$useruid = $_SESSION["useruid"];
					$userid=$_SESSION["userid"];
					}
					
?>



<!DOCTYPE html>
<html>
<head>
<br><br><br><br><br>
    <title>Progress Tracker</title>
</head>
<body>
    <h1 style="text-align:center;">Progress Tracker</h1>

    <form action="" method="post" style="text-align:center;">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="current_weight">Current weight:</label>
        <input type="int" id="wakeup_time" name="current_weight" required>

        <input type="submit" name="submit" value="Log weight">
    </form>

    <p>

	<style>
		<? php include "pagini_css.css"?>
	</style>
        <?php 
        require_once('dbh.inc.php');

        // Check if the form is submitted
        if (isset($_POST['submit'])) {
            // Get the form data
            $current_weight= $_POST['current_weight'];
            $date = $_POST['date'];

            // Insert the data into the database
			$sql = "SELECT * FROM `users` WHERE usersId = '$userid'";
			$result = mysqli_query($conn, $sql);
			if($result){
    			$row = mysqli_fetch_assoc($result);
    			$user_id = $row['usersId'];

    			$sql = "INSERT INTO progress_tracker (user_id, date, current_weight) VALUES ('$user_id', '$date', '$current_weight')";
    			mysqli_query($conn, $sql);
    			#echo 'Data inserted successfully!';
			} else {
    			echo 'Error: ' . mysqli_error($conn);
			}

        }

$t_now=date('Y-m-d', strtotime('-0 days'));
	$t = date('Y-m-d', strtotime('-7 days'));
	$t2 = date('Y-m-d', strtotime('-14 days'));
	$t3 = date('Y-m-d', strtotime('-30 days'));
	$sql = "SELECT * FROM progress_tracker WHERE date = '$t_now' AND user_id = '$userid'";
$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
		if(mysqli_num_rows($result) == 0) {
			echo "<h2> You haven't entered today's weight yet.</h2>";
			return;
		}
$row = mysqli_fetch_assoc($result);
$weight_today=$row['current_weight'];
	if (isset($weight_today)){	
 echo "<h2> Your current weight: $weight_today</h2>";
	echo '<br>';
}

	$sql = "SELECT * FROM progress_tracker WHERE date = '$t' AND user_id = '$userid'";
$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
		if(mysqli_num_rows($result) == 0) {
			echo "<h2> No data for one week ago.</h2>";
			return;
		}
$row = mysqli_fetch_assoc($result);
$weight_one_week_ago=$row['current_weight'];
		
        echo "<h2> Weight one week ago: $weight_one_week_ago</h2>";
echo '<br>';
		
	$sql = "SELECT * FROM progress_tracker WHERE date = '$t2' AND user_id = '$userid'";
$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
		if(mysqli_num_rows($result) == 0) {
			echo "<h2> No data for 2 weeks ago.</h2>";
	echo '<br>';
			return;
		}
$row = mysqli_fetch_assoc($result);
$weight_two_weeks_ago=$row['current_weight'];
			if (isset($weight_two_weeks_ago)){	
        echo "<h2>Weight two weeks ago: $weight_two_weeks_ago</h2>";
	echo '<br>';}

$sql = "SELECT * FROM progress_tracker WHERE date = '$t3' AND user_id = '$userid'";
$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
		if(mysqli_num_rows($result) == 0) {
			echo "<h2> No data for 30 days ago.</h2>";
	echo '<br>';
			return;
		}
$row = mysqli_fetch_assoc($result);
$weight_one_month_ago=$row['current_weight'];
	if (isset($weight_one_month_ago)){	
        echo "<h2>Weight 30 days ago: $weight_one_month_ago</h2>";
	echo '<br>';}

        ?>
    </p>
</body>
</html>
<?php include_once 'footer.php' ?>
<style>
h2{margin-bottom:-10px;
margin-left:650px;}

</style>