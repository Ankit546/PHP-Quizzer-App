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
		<h2>Add a Question</h2>
		<form method="POST" action="add.php">
			<p>
					<label>Question Number:</label>
					<input type="number" name="question_number">
				</p>
				<p>
					<label>Question Text:</label>
					<input type="text" name="question_text">
				</p>
				<p>
					<label>Choice #1:</label>
					<input type="text" name="choice1">
				</p>
				<p>
					<label>Choice #2:</label>
					<input type="text" name="choice2">
				</p>
				<p>
					<label>Choice #3:</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label>Choice #4:</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label>Choice #5:</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label>Correct choice Number:</label>
					<input type="number" name="correct_choice">
				</p>
					<input type="submit" value="Submit">
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