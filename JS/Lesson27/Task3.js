/**
 * Результатом декоратора debounce(f, ms) должна быть обёртка, которая передаёт вызов f не более одного раза в ms миллисекунд. Другими словами, когда мы вызываем debounce, это гарантирует, что все остальные вызовы будут игнорироваться в течение ms.
 * На практике debounce полезен для функций, которые получают/обновляют данные, и мы знаем, что повторный вызов в течение короткого промежутка времени не даст ничего нового. Так что лучше не тратить на него ресурсы.
 */
function debounce(f, ms) {
	let isWorking = false;
	function fBounce() {
		if(!isWorking) {
			f.call(this, ...arguments);
			isWorking = true;
			setTimeout(() => isWorking = false, ms);
		}
	}
	return fBounce;
}
let f = debounce(alert, 1000);
f(1);
f(2);
setTimeout( () => f(3), 100);
setTimeout( () => f(4), 1100);
setTimeout( () => f(5), 1500);