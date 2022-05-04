/**
 * Создайте «Карусель» –- ленту изображений, которую можно листать влево-вправо нажатием на стрелочки.
 * В дальнейшем к ней можно будет добавить анимацию, динамическую подгрузку и другие возможности.
 * P.S. В этой задаче разработка структуры HTML/CSS составляет 90% решения.
 */
// отметить картинки для удобства разработки
// этот код может быть удалён по вашему усмотрению
let currentImageNumber = 0;
let imagesArr = document.querySelectorAll('li')
for(let li of imagesArr) {
	if (currentImageNumber < 3 && currentImageNumber >= 0) {
		li.className = 'active';
		currentImageNumber++;
	} 
}
// Становимся на начало, чтобы при нажатии на стрелки можно было изменить активные картинки
currentImageNumber = 0;
leftArrow.onclick = function () {
	// Если мы стоим на начале, то прокрутки не будет
	if (currentImageNumber > 0) {
		let buffImageNumber = currentImageNumber;
		for (
			;
			buffImageNumber < currentImageNumber + 3 && buffImageNumber < imagesArr.length;
			buffImageNumber++
		) {
			imagesArr[buffImageNumber].className = '';
		}
		buffImageNumber = currentImageNumber - 3 < 0 ? 0 : currentImageNumber - 3;
		let count = buffImageNumber;
		for (
			let count = buffImageNumber;
			count < buffImageNumber + 3 && count < imagesArr.length;
			count++
		) {
			imagesArr[count].className = 'active';
		}
		currentImageNumber = buffImageNumber;
	}
}
rightArrow.onclick = function () {
	if (currentImageNumber + 3 < imagesArr.length) {
		let buffImageNumber = currentImageNumber;
		for (
			;
			buffImageNumber < currentImageNumber + 3;
			buffImageNumber++
		) {
			imagesArr[buffImageNumber].className = '';
		}
		buffImageNumber = currentImageNumber + 3 >= imagesArr.length ? imagesArr.length - 3 : currentImageNumber + 3;
		for (
			let count = buffImageNumber;
			count < buffImageNumber + 3 && count < imagesArr.length;
			count++
		) {
			imagesArr[count].className = 'active';
		}
		currentImageNumber = buffImageNumber;
	}
}