<?php include 'database.php' ?>
<?php session_start(); ?>

<?php 

	//check to see if score is set
	if(!isset($_SESSION['score'])){
		$_SESSION['score']=0;
	}
	
	if(isset($_POST['submit'])){
		
		$number=$_POST['number'];	//undefined index error only for number!! 
		$selected_choice=$_POST['choice'];
		
		$next=$number+1;
		echo $number;
		echo $next;
		

		/*
			* Get total questions
		*/
			$query="SELECT * FROM questions";
			//get result
			$result=$mysqli->query($query) or die();
			$total=$result->num_rows;

		/*
			* Get correct choices
		*/
			$query="SELECT * FROM choices
					WHERE question_number=$number AND is_correct=1";

			//get result
					$result=$mysqli->query($query) or die();

			//get row
					$row=$result->fetch_assoc();

			//set correct choice
					$correct_choice=$row['id'];

			//now compare
					if($correct_choice==$selected_choice){
						//answer is correct
						$_SESSION['score']++;
					}
					
					if($number==$total){
						//if the current number that is "n", the question.php. If that is the last question then redirect to final.php and exit
						header("Location:final.php");
						exit();
					}
					else{
						header("Location: question.php?n=".$next);
						//else proceed to next question
					}
	}
?>