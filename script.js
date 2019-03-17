var books = new Array(56);
books[0] = 'Mitologia nordycka- Gaiman Neil';
books[1] = 'Czarne narcyzy  - Puzyńska Katarzyna';
books[2] = 'Grzech aniołów - Link Charlotte';
books[3] = 'Jak przejąć kontrolę nad światem,<br /> nie wychodząc z domu - Masłowska Dorota';
books[4] = 'Wzgórze psów - Żulczyk Jakub';
books[5] = 'Kolekcjoner motyli - Hutchison Dot';
books[6] = 'Pazur sprawiedliwości - Swann Leonie';
books[7] = 'Dotyk - Hildebrandt Tomasz';
books[8] = 'Mroczna toń - A. J. Banner';
books[9] = 'Droga do odkupienia - Hart John';
books[10] = 'Odcięci - Fitzek Sebastian, Tsokos Michael';
books[11] = 'Pasażer 23 - Fitzek Sebastian';
books[12] = 'Sherlock Holmes. Księga wszystkich dokonań - Doyle Arthur Conan';
books[13] = 'W pułapce pamięci - Baldacci David';
books[14] = 'Piąta Ewangelia - Caldwell Ian';
books[15] = 'Listy pachnące tymiankiem<br /> -Makis Eve';
books[16] = 'Sklep rzeczy zapomnianych Vintage - Gloss Susan';
books[17] = 'Sufrażystki - Ribchester Lucy';
books[18] = 'Doktor Jekyll i Pan Hyde - Stevenson Robert Louis';
books[19] = 'Pamiętnik starego ubeka<br /> - Wolski Marcin';
books[20] = 'Jedz i pracuj... nad własnym zdrowiem<br /> - Szaciłło Karolina, Szaciłło Maciej';
books[21] = 'Moje wypieki. Całkiem nowe przepisy - Świątkowska Dorota';
books[22] = 'Gotuj sprytnie jak Jamie - Oliver Jamie';
books[23] = 'Gotuj zdrowo dla całej rodziny<br /> - Oliver Jamie';
books[24] = 'Qmam kasze, czyli powrót do korzeni - Sobczak Maia';
books[25] = 'Pogorzelisko – Sumliński Wojciech';
books[26] = 'ABW. Nic nie jest tym, czym się wydaje<br /> - Sumliński Wojciech';
books[27] = 'Baśnie braci Grimm<br /> - Grimm Wilhelm, Grimm Jakub';
books[28] = 'Baśnie braci Grimm dla dorosłych i młodzieży. Bez cenzury - Pullman Philip';
books[29] = 'Baśnie - Andersen Hans Christian';
books[30] = 'Zaklinaczka dzieci.<br />  - Hogg Tracy, Blau Melinda';
books[31] = 'Jak mówić żeby dzieci nas słuchały(...)<br /> - Faber Adele, Mazlish Elaine';
books[32] = 'Nie z miłości. Mądrzy rodzice - silne dzieci<br /> - Juul Jesper';
books[33] = 'Ciąża Instrukcja obsługi. - Jordan Sarah, Ufberg David';
books[34] = 'Pierwszy rok życia dziecka.  - Ford Gina';
books[35] = 'Walc pożegnalny - Kundera Milan';
books[36] = 'Judasz - Lee Tosca';
books[37] = 'Zapomniany Legion - Kane Ben';
books[38] = 'Droga do Indii - Forster Edward Morgan';
books[39] = 'Diamentowa góra -Wong Cecily';
books[40] = 'Tudorowie Narodziny dynastii - Hickson Joanna';
books[41] = 'Najmroczniejszy sekret - Alex Marwood';
books[42] = 'Sekretny dziennik Laury Palmer - Lynch Jennifer';
books[43] = 'Przez stany POPświadomośći <br />- Jakub Ćwiek';
books[44] = 'Chemik - Meyer Stephenie';
books[45] = 'Opowieści miłosne śmiertelne i tajemnicze<br /> - Poe Edgar Allan';
books[46] = 'Opowieści tajemnicze i szalone - Edgar Allan Poe';
books[47] = 'Kobieta ze znamieniem<br /> - Nesser Hakan';
books[48] = 'Komisarz i cisza - Nesser Hakan';
books[49] = 'Na spokojnych wodach - Sten Viveca';
books[50] = 'Zima w bikini - Oskarsson Lena';
books[51] = 'Taniec z aniołem<br /> - Edwardson Ake';
books[52] = 'Osobliwy dom pani Peregrine<br /> - Riggs Ransom';
books[53] = 'Baśnie osobliwe - Ransom Riggs, Andrew Davidson';
books[54] = 'Człowiek o 24 twarzach - Keyes Danie';
books[55] = 'JavaScript i jQuery. - Duckett Jon';

// window.addEventListener('load',function(){

// });

// var guzik = document.getElementsByClassName("button");

// var ktory = document.getElementById("1").id;

// guzik.addEventListener("click", openForm(ktory), false);


function openForm (bookID){
	bookID = Number(bookID);
	var popUpForm = document.getElementById("myForm");
	var closeButton = document.getElementById("close");
	var myBook = document.getElementById("chosenBook");
	var chosenBook = document.getElementById("chosen");
	chosenBook.value = bookID;
	var imgBook = "img/" + (bookID) + ".jpg";
	
	//show modal
	popUpForm.style.display = "block";
	myBook.src = imgBook;
	
	//close button
	closeButton.onclick = function() {
    popUpForm.style.display = "none";
	}
	
	//close beyond window area
	window.onclick = function(outside) {
		if (outside.target == popUpForm) {
			popUpForm.style.display = "none";
		}
	} 
}
//back to top	
jQuery(document).ready(function($){
	var offset = 300,
	offset_opacity = 1200,
	scroll_top_duration = 700,
	$back_to_top = $('.cd-top');

	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
});