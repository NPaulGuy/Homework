/**
 * Cоздать меню, которое по нажатию открывается либо закрывается
 * P.S. HTML/CSS исходного документа можно и нужно менять.
 */
button.onclick = function () {
	if (text.hidden) {
		if(!closedArrow.hidden) {

		}
		closedArrow.hidden = true;
		openedArrow.hidden = false;
		text.hidden = false;
	} else {
		closedArrow.hidden = false;
		openedArrow.hidden = true;
		text.hidden = true;
	}
}