<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>Dziękujemy!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="Maro" />
	<meta name="robots" content="noindex" />
    <link rel='stylesheet' href='style.css' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>
	<div class="nav">
		<div class="center">
			<div class='box'>
			<h1>Ania&nbsp;&amp;&nbsp;Marek</h1>
			</div>
			<h3>Ślub&nbsp;i&nbsp;wesele</h3>
		</div>
	</div>
		
	<noscript><div class="center"><h2 style="color: red">Uwaga! Twoja przeglądarka nie obsługuje Java Script! Nie będziesz mógł wybrać swojej książki!</h2></div></noscript>
		
	<div class="wrappler">

<?php
//catch POST
if (isset($_POST["accept"])){
	$form_name1 = $_POST['1stName'];
	if (isset($_POST['2ndName'])){
	$form_name2 = $_POST['2ndName'];
	}
	$book_position = $_POST['book_number'];
} else{
	header("Refresh:0; url=index.php");
	exit();
}
//connect db
include('connect.php');
if ($connect == true){
	echo "<div class='emo'><img src='img/emo_smile.jpg' alt='smile' /></div>";
	} else {
	echo "<div class='emo'><img src='img/emo_sad.png' alt='smile' /></div>";
	echo "<h4>Nie udalo sie polaczyc!. Blad: ".mysqli_connect_error($connect)."</h4>";
	echo "<h4>Proszę poinformuj administratora!</h4>";
	exit();
}

mysqli_query($connect, "set names utf8");
//trim
trim($form_name1);
if ($form_name2 != ''){
trim($form_name2);
} else {
unset($form_name2);
}

//preg_match(A-z) + polish
if (!preg_match('/^[a-ząćęłńóśźż]+$/ui', $form_name1)){
	header("Refresh:0; url=index.php");
	exit();
}
if (isset($form_name2)){
	if (!preg_match('/^[a-ząćęłńóśźż]+$/ui', $form_name2)){
	header("Refresh:0; url=index.php");
	exit();
	}
}

//query
if (isset($form_name1) && isset($form_name2)){
	$query = "UPDATE ksiazki 
	SET Name_1='".$form_name1."', 
	Name_2='".$form_name2."', 
	Owner=1 
	WHERE ID_book='".$book_position."'";
} elseif (isset($form_name1)) {
	$query = "UPDATE ksiazki 
	SET Name_1='".$form_name1."', 
	Owner=1 
	WHERE ID_book='".$book_position."'";
} else {
	header("Refresh:0; url=index.php");
	exit();
}
//db query
mysqli_query($connect, $query);	
mysqli_close($connect);
header("Refresh:5; url=http://mmanczak.ayz.pl/ksiazki");
?>
		<div class="center thanks">
			<h1>Dziękujemy!</h1>
			<p>Polecamy księgarnie internetowe takie jak Czytam.pl i Livro.pl!</p>
		</div>

	</div>
			


	<script src="script.js" type="text/javascript"></script>    
</body>

</html>	