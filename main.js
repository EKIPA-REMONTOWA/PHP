function mrugnij(onmouseover) {
	if (onmouseover == true){
		var elements = document.getElementsByClassName("slonik");
			if (elements.length >= 1) {
				slonik = elements.item(0);
				slonik.style.backgroundImage = "url(images/slonik2.png)";
			}
	} 
	else {
		var elements = document.getElementsByClassName("slonik");
			if (elements.length >= 1) {
				slonik = elements.item(0);
				slonik.style.backgroundImage = "url(images/slonik.png)";
			}
	}
}
function woosh(){
	var wsh = new Audio("sounds/woosh.wav");
	wsh.play();
}