<?php include_once 'header.php' ?>
<div class="center">
  <p>What's your height?</p>
</div>
<?php
// define variables and set to empty values
$heightErr ="";
$height = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["height"])) {
    $heightErr = "Height is required";
  } else {
    $height = test_input($_POST["height"]);
    // check if height is an integer between 90 and 250
    if (!filter_var($height, FILTER_VALIDATE_INT, array("options" => array("min_range"=>90, "max_range"=>250)))) {
      $heightErr = "Height must be an integer between 90 and 250";
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
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHeight: <br>

<input type="text" name="height" style="margin-left:45px" placeholder="cm" value="<?php echo $height;

?>">
  <br>
<a href="weight.php" class="button">Continue</a>
</div>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 100px;
  text-align: left;
  display: inline-block;
  font-size: 20px;
  margin-top: 30px;
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
