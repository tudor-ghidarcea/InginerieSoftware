<?php include("header.php"); ?>

<section class="index-intro">

<?php
					if(isset($_SESSION["useruid"]))
					{
					echo "<p>Bine ati venit,  " . $_SESSION["useruid"] . "</p>";
					
					}
					
?>
		
<style>
<?php include 'pagini_css.css'; ?>
</style>


<?php include ("footer.php"); ?>