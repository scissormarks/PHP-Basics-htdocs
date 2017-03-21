<?php

// php variable
$my_name = "Mikke"; //Change this and it won't say my name, age nor favorite book
$my_age = 22;
// Backslash \ is used an escape-character
//Marc likes single quotes and thinks you should like them too.
$my_book = 'The Hitchhiker\'s Guide to the Galaxy';
$your_book = "Hitchhiker's guide to the universe";
$author = 'Douglas Adams';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings and Variables</title>
</head>

<body>
<?php 
	
	//Marcs argument forneden
	echo '<h1 class="red">' . 'About Me and ' . $my_book . '</h1>';
	// . is used for concatenation (konatenering) it is in fact a concatenation operator(konkateneringsoperatør)
	echo '<h2>' . $my_book . " was written by " . $author . '</h2>';
// A conditional statement(betingelsessætning)
	// triple = checks for if the type of information is the same as well as if it says the same
	if($my_name === 'Mikkel'){
		echo 'My name is ' . $my_name . " and I am " . $my_age . " years old. " . "My favorite book is " . $my_book;
	} else if($my_name ==='Julian'){ //Else if states that if my_name is Julian then it is to paste the text below.
		echo 'My name is ' . $my_name . " and I am " . $my_age . " years old. " . "My favorite book is " . $my_book;
	} else { 
		echo 'I am ' . $my_name . ' and I am a <b>lie.</b> ';
	}

?>
</body>
</html>