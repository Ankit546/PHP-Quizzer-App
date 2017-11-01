<?php include 'database.php'; ?>
<?php 
	//get question number which is ?n=1, that is "n"
	//to get that use $_GET["n"];
	// if(isset($_GET['n']))
	
	$number= $_GET['n']; //remember the difference between "" and '' is "" are processed while '' are as it is

	/*
		RETREIVE THE QUESTION FROM DATABASE
	*/

	$query="SELECT * FROM questions
				WHERE question_number=$number";	//never use '' in query bcoz they will not be processed
	//GET RESULT
	$result=$mysqli->query($query) or die();
	if($result==FALSE){
		echo "Not again";
		die();
	}
	$question=$result->fetch_assoc();

	/*
	
		RETREIVE THE QUESTION FROM DATABASE
	*/

	$query="SELECT * FROM choices
				WHERE question_number=$number";	//never use '' in query bcoz they will not be processed
	//GET RESULT
	$choices=$mysqli->query($query) or die();

	$query="SELECT * FROM questions";
	//get results
	$results=$mysqli->query($query) or die();
	
	$total=$results->num_rows; 
	
	//GET method can be used to get the number from URL i guess

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quizzer Application</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>	
			
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current"><h4> Question <?php echo $_GET['n'] ?> of <?php echo $total; ?>:</h4>
			</div>
			<p class="question">
			<?php echo $question['text']; ?>
			</p>
			<form method="POST" action="process.php">
				<ul class="choices">
					<?php while($row=$choices->fetch_assoc()) : ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text'];?></li>	
					<?php endwhile; ?>	
					
				</ul>
				<input type="submit" value="Submit" name="submit">
			</form>
		</div>
	</main>
	<footer>
		<div class="conatiner">
		<p>Copyright &copy; Kumar Ankit 2017</p> 
		</div>
	</footer>
</body>
</html>