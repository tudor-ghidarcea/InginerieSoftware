<?php include_once 'header.php' ?>
<div class="center">
  <p>What's your current and target weight?</p>
</div>
<?php
// define variables and set to empty values
$weightErr = "";
$weight = "";
$targetErr = "";
$target = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["weight"])) {
    $weightErr = "Current weight is required";
  } else {
    $weight = test_input($_POST["weight"]);
    if (!filter_var($weight, FILTER_VALIDATE_INT, array("options" => array("min_range"=>35, "max_range"=>200)))) {
      $weightErr = "Current weight must be an integer between 35 and 200";
    }
  }
  if (empty($_POST["target"])) {
    $targetErr = "Target is required";
  } else {

    if (!filter_var($target, FILTER_VALIDATE_INT, array("options" => array("min_range"=>35, "max_range"=>200)))) {
      $targetErr = "Target weight must be an integer between 35 and 200";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<div class="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Current Weight: <input type="text" name="weight" placeholder="kg" value="<?php echo $weight;?>">
  <span class="error">* <?php echo $weightErr;?></span>
  <br><br>
  Target weight:<input type="text" name="target" placeholder="kg" value="<?php echo $target;?>">
  <span class="error">* <?php echo $targetErr;?></span>
  <br><br>
<a href="pushup.php" class="button">Continue</a>
</div>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 100px;
  text-align: left;
  display: inline-block;
  font-size: 16px;
  margin-top: 10px;
  cursor: pointer;
  text-decoration:none;
  width: 100%;
   max-width: 290px;
   box-sizing: border-box;
}
.center{    display: block;
    text-align: center;
font-size:50;
margin-top:170px;}
div.form
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
   	margin-left:30px;
    margin-right: auto;
    text-align: left;
}
</style>
