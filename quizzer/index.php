<?php include 'database.php'; ?>
<?php

	$query="SELECT * FROM questions";
	//get results
	$results=$mysqli->query($query) or die();
	$total=$results->num_rows; 

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
			<h1>Test your PHP knowledge</h1>	
			
		</div>
	</header>
	<main>
		<div class="container">
		<h3>This is a multiple choice quiz to test your PHP knowledge</h3>
			<ul>
			<li><b>Number of questions</b>: <?php echo $total; ?></li>
			<li><b>Type</b>: Multiple Choice Questions </li>
			<li><b>Estimated Time</b>: <?php echo ($total*0.5); ?> minutes</li>
			</ul>
			<a href="question.php?n=1">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="conatiner">
		<p>Copyright &copy; Kumar Ankit 2017</p> 
		</div>
	</footer>
</body>
</html>