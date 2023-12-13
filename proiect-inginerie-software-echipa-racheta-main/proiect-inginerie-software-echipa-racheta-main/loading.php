<?php include_once 'header.php' ?>
<p style="margin-left:30%;
margin-top:100px;
    font-size: 60px;">Suggesting workout program...</p>
    <div style="width: 100%; margin-left:47%;">
        <div style="width: 50%; height: 100px; float: left;"> 
        </div>
        <div style=" margin-top: 100px; height: 100px; "> 
        
<div class="loader"></div>
<button class="hidden" id="myButton" onclick="location.href='training.php'">Finish</button>

     </div>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;

}
.hidden {
    display: none;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 114px;
  text-align: left;
  font-size: 16px;
  margin-top: 10px;
position: absolute;
  top: 50%;
  left: 54%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  cursor: pointer;
  text-decoration:none;
  width: 100%;
   max-width: 290px;
   box-sizing: border-box;
}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.title {
    font-size: 50px;
}
.subtitle {
	margin-left:-500px;
    font-size: 30px;
}

</style>

<script>
setTimeout(function(){
  var spinner = document.querySelector('.loader');
  spinner.style.display = 'none';
  var button = document.getElementById("myButton");
  button.style.display = 'block';
}, 5000);
</script>
