<?php include_once 'header.php' ?>
<div class="center">
  <p>Select problem areas</p>
</div>
<form method="post" action="submit.php">
  <input type="checkbox" name="color" value="red">Weak chest<br>
  <input type="checkbox" name="color" value="green"> Slim arms<br>
  <input type="checkbox" name="color" value="blue"> Beer belly<br>
    <input type="checkbox" name="color" value="red"> Slim legs<br>
<a href="height.php" class="button">Continue</a>
</form>
<style>
.button {
  background-color: #4CAF50; /* Green*/
  border: none;
  color: white;
  padding: 15px 50px;
  text-align: right;
  display: inline-block;
  font-size: 16px;
  margin-left: 750px;
  cursor: pointer;
  text-decoration:none;
}

.checkbox{
     background-color: #4CAF50; /* Green*/
  border: none;
  color: white;
  padding: 15px 50px;
  text-align: right;
  display: inline-block;
  font-size: 16px;
  margin-left: 750px;
  cursor: pointer;
  text-decoration:none;
}
</style>
