<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Great  Quiz</title>
<link rel="stylesheet" href="php_styles.css" type="text/css"> 
</head>


<body>

<h1>Quiz Results</h1>

<?php

$myName = "Malachi Lee";

echo "This quiz is scored by $myName.<br />";

//include("php_styles.css");
function scoreQuestions(){
if(count($_GET) != 10){
		
		echo "<br>";
		echo "You did not answer all of the questions";
}

else{
$CorrectAnswers = array("b" ,"d","a", "b", "c","b","d","a","b","c");
$TotalCorrect = 0;




$Count = 1;

while ($Count <= 10)
{
	echo "<p>Question $Count: ", $_GET["question$Count"];
if($_GET["question$Count"] == $CorrectAnswers[$Count-1]){
	echo " (Correct!)</p>";
	++$TotalCorrect;
	//
}

else
{
	echo " (Incorrect)</p>";
}
	++$Count;
}
echo "<p><strong>You scored $TotalCorrect out of 10 answers correctly!</strong></p>";
}
}

 
scoreQuestions();











?>



</body>
</html>