
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	<form action="6.php" method="post">
		<input type="text" name="username">
		<br>
		<input type="password" name="password">
		<br>
		<input type="submit" name="submit">
	</form>


 

	<?php  



	if(isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$mininum = 5;

		echo $password . " ";

		if(strlen($username) < $mininum) {
			echo $username . " " . "is not long enough";
		} else {
			echo $username . " " . "is good";
		}

	}

		




/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>