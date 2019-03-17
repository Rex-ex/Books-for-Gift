<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>Ania &amp; Maro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="Maro" />
	<meta name="robots" content="noindex" />
    <link rel='stylesheet' href='style.css' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script src='jquery.js' type='text/javascript'></script>
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
//base connect
include('connect.php');
	if ($connect == true){
		echo "<div class='emo'><img src='img/emo_smile.jpg' alt='connect correct!'/></div>";
		} else {
		echo "<div class='emo'><img src='img/emo_sad.png' alt='connect fail!' /></div>";
		echo "<h4>Nie udalo sie polaczyc!. Blad: ".mysqli_connect_error($connect)."</h4>";
		echo "<h4>Proszę poinformuj administratora!</h4>";
		exit();
	}
//base connect end	
?>	
		<div class="greetings">
		<h2>Szanowni goście!</h2>
		<p>Przedstawiamy Wam przykładowe pozycje książek, które sprawią Nam radość.<br/>	
		Jeżeli znacie inne ciekawe tytuły i chcielibyście podzielić się nimi, zachęcamy do tego!<br />
		Możecie wybrać daną książkę, która zostanie do Was przypisana,  aby podarowane książki się nie dublowały.
		</p> 		
		</div>
		
<?php
include('books.php');
$numBooks = count($books);
$num_rows = ceil($numBooks/4);
$book_position = 1;
//Query to aaray owned books
		$ownedArray = [];
		mysqli_query($connect, "set names utf8"); 
		$query = "SELECT ID_book from ksiazki where Owner='1'";
		$result = mysqli_query($connect, $query);
		while ($row = mysqli_fetch_assoc($result)){
			 array_push($ownedArray, $row["ID_book"]);
		}
//Query end
	
		for($i=1; $i<=$num_rows; $i++){
			echo '<div class="section group">';
			for($j=1; $j<=4; $j++){
				if ($book_position>$numBooks){
				break;	
				}
				echo '<div class="col span_1_of_4">';
				echo '<div class="book">';
				echo '<div class="book_title">';
				echo "<h4>".$books[$book_position - 1]."</h4>";
				echo '</div>';
				echo "<img src='img/".$book_position.".jpg' alt='' />";
				if (in_array($book_position, $ownedArray)){
					$query_forName = "SELECT Name_1 from ksiazki where ID_book=".$book_position."";
					$result_forNames = mysqli_query($connect, $query_forName);
					$owner_Names = mysqli_fetch_assoc($result_forNames);
					
					$query_forName2 = "SELECT Name_2 from ksiazki where ID_book=".$book_position."";
					$result_forNames2 = mysqli_query($connect, $query_forName2);
					$owner_Names2 = mysqli_fetch_assoc($result_forNames2);
					
					if ($owner_Names2["Name_2"] != ''){
						echo "<h1 class='center red'>".$owner_Names["Name_1"]." & ".$owner_Names2["Name_2"]."</h1>";
					} else {
						echo "<h1 class='center red'>".$owner_Names["Name_1"]."</h1>";
					}										
				} else {
						echo "<div class='owner'>";
						echo "<a href='#' class='button' id='".$book_position."' onclick='openForm(".$book_position.");return false'>Wybierz mnie!</a>";
						echo "</div>";
				}	
								
				echo "</div>";
				echo "</div>";
				$book_position++;
			}
		echo "</div>";
		}
	
	mysqli_close($connect);
?>
	</div>
			
	<div class="footer">
		<div class="center">
			<div class='box'>
			<h2>Ania:&nbsp;793&nbsp;706&nbsp;879,&nbsp; Marek:&nbsp;791&nbsp;918&nbsp;383</h2>
			</div>
		</div>
	</div>
	
	<div id="myForm">
		<div id="myFormContent">
			<span id="close">&times;</span>
				<div class="center_form">
				<h1>Wybrana&nbsp;książka:</h1>
				</div>
				<div class="book_form">
					<img id="chosenBook" src='img/question-mark.jpg' alt='' />
				</div>
				<div class="center_form">
					<form method="post" action="dziekujemy">
						<ul class="form_list">
						<li>
						<p>Wpisz imię pierwszej osoby:&nbsp;<span class="red">*</span></p>
						<input id='chosen' type='hidden' name="book_number" value=''>
						<input type='text' name="1stName" maxlength="12" required>
						</li>
						<li>
						<p>Wpisz imię drugiej osoby:</p>
						<input type='text' name="2ndName"  maxlength="12">
						</li>
						</ul>
						<button type="submit" name="accept">Potwierdź</button>
						<button type="reset">Wyczyść</button>
					</form>
				</div>
		</div>
	</div>	
<a href='#0' class='cd-top'>Top</a>	
<script src="script.js" type="text/javascript"></script> 
   
</body>

</html>