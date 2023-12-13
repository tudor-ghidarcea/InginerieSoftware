<?php include_once 'header.php' ?>
<h1 style="margin-top:150px;margin-left:-15px;" >Fit Upp</h1>
<div class="center">
  <p>is an app that makes regular workouts accessible, effective and joyful</p>
</div>
<br>
<a href="workout_start.php" class="button">Choose a program <div class="arrow-1"></div>
</a>
<style>
<?php include 'pagini_css.css'; ?>
.button {
  background-color: #4CAF50; /* Green*/
  border: none;
  color: white;
  padding: 15px 50px;
  text-align: right;
  display: inline-block;
  font-size: 16px;
  margin-left: 660px;
  cursor: pointer;
  text-decoration:none;

}
.center {	
  margin: auto;
  width: 20%;
  font-size:20px;
}
.arrow-1 {
  width:100px;
  height:30px;
  display: flex;
}
.arrow-1:before {
  content: "";
  background: currentColor;
  width:15px;
  clip-path: polygon(0 10px,calc(100% - 15px) 10px,calc(100% - 15px) 0,100% 50%,calc(100% - 15px) 100%,calc(100% - 15px) calc(100% - 10px),0 calc(100% - 10px));
  animation: a1 1.5s infinite linear;
}
@keyframes a1 {
  90%,100%{flex-grow: 1}
}


</style>