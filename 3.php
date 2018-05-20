<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  


$love = 7;

if($love > 7) {
	echo "Love is greater than 7";
} elseif ($love < 7) {
	echo "Love is less than 7";
} else {
	echo "I love PHP" . "<br>";
}


for($i = 0; $i < 10; $i++) {
	echo $i . "<br>";
}

$num = 34;

switch($num) {
	case 30;
	echo "number is 30";
	break;
	case 31;
	echo "number is 31";
	break;
	case 32;
	echo "number is 32";
	break;
	case 33;
	echo "number is 33";
	case 34;
	echo "number is 34";
	break;
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>