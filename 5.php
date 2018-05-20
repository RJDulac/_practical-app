<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

	echo rand(1, 100) . "<br>";

	$someString = "Hello I'm a String";

	echo strtoupper($someString) . "<br>";

	$someArray = [13, 43, 44, 43, 50, 100, 400, 300];

	echo sort($someArray);

	print_r($someArray);


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>