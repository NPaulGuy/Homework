/**
 * Создайте декоратор spy(func), который должен возвращать обёртку, которая сохраняет все вызовы функции в своём свойстве calls.
 * Каждый вызов должен сохраняться как массив аргументов.
 */
function spy(func) {
	function coverFunc() {
		coverFunc.calls.push(hash(...arguments));
		let result = func.call(this, ...arguments);
		return result;
	}
	coverFunc.calls = [];
	return coverFunc;
}
function hash() {
	return [...arguments];
}
function work(a, b) {
	alert(a + b);
}
activeFunc = spy(work);
activeFunc(1, 2);
activeFunc(4, 5);
for (let args of activeFunc.calls) {
	alert('call:' + args.join());
}