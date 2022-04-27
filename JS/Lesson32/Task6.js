/**
 * Создайте цветные часы.
 * Для стилизации используйте HTML/CSS, JavaScript должен только обновлять время в элементах.
 */
let timerID = "";
let hours = document.createElement('label');
let doubleDots = document.createTextNode(':');
let minutes = document.createElement('label');
let seconds = document.createElement('label');
hours.setAttribute('class', 'red');
hours.setAttribute('id', 'hour');
minutes.setAttribute('class', 'green');
minutes.setAttribute('id', 'minutes');
seconds.setAttribute('class', 'blue');
seconds.setAttribute('id', 'seconds');
document.body.append(hours, doubleDots, minutes, doubleDots.cloneNode(), seconds);

function clockStart() {
	timerID = setTimeout(function run() {
		if (timerID === 0) {
			return;
		}
		let currentTime = new Date();
		if (currentTime.getHours() < 10) {
			hours.textContent = "0" + currentTime.getHours();
		} else {
			hours.textContent = currentTime.getHours();
		}
		if (currentTime.getMinutes() < 10) {
			minutes.textContent = "0" + currentTime.getMinutes();
		} else {
			minutes.textContent = currentTime.getMinutes();
		}
		if (currentTime.getSeconds() < 10) {
			seconds.textContent = "0" + currentTime.getSeconds();
		} else {
			seconds.textContent = currentTime.getSeconds();
		}
		setTimeout(run, 1000);
	}, 0);
}
function clockStop() {
	timerID = 0;
}