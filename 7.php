<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data



*/

	$connection = mysqli_connect('localhost', 'root', '', 'read_prac'); //connect to read_prac database

	if(!$connection) { //check connection
		die("Database connection Failed") . mysqli_error($connection); //mysqli_error provides more error information
	} 

	
		 
	$query = "SELECT * FROM reports"; //select all from reports
	$result = mysqli_query($connection, $query); //send query to database

	if(!$result) {//check if query went through
		die('QUERY FAILED!' . mysqli_error());
	}

	while($records = mysqli_fetch_assoc($result)) {//use while loop to display associative array
		// print_r($records);
		echo $records['days']; //print out days
		echo $records['months']; //print out months
	}		
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
