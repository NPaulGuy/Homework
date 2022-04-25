/**
 * Создайте «тормозящий» декоратор throttle(f, ms), который возвращает обёртку, передавая вызов в f не более одного раза в ms миллисекунд. Те вызовы, которые попадают в период «торможения», игнорируются.
 * Отличие от debounce – если проигнорированный вызов является последним во время «задержки», то он выполняется в конце.
 */
function throttle(f, ms) {
	let isWorking = false;
	let savedArgs, savedThis;
	function fThrottle() {
		if(isWorking) {
			savedArgs = arguments;
			savedThis = this;
			return;
		}
		f.call(this, ...arguments);
		isWorking = true;
		setTimeout(function() {
			isWorking = false;
			if (savedArgs) {
				fThrottle.call(savedThis, ...savedArgs);
				savedArgs = null;
				savedThis = null;
			}
		}, ms);
	}
	return fThrottle;
}
function f(a) {
	console.log(a);
}
let f1000 = throttle(f, 1000);
f1000(1);
f1000(2);
f1000(3);