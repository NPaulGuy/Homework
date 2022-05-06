/**
 * Создайте функцию runOnKeys(func, code1, code2, ... code_n), которая запускает func при одновременном нажатии клавиш с кодами code1, code2, …, code_n.
 * Например, код ниже выведет alertпри одновременном нажатии клавиш "Q" и "W" (в любом регистре, в любой раскладке)
 */
function runOnKeys(func, ...codes) {
	let keyCombination = new Map();
	document.addEventListener('keydown', function(event) {
		for (keyCode of codes) {
			if (!keyCombination.has(keyCode)) {
				keyCombination.set(event.code, true);
				return;
			}
		}
		func();
		keyCombination.clear();
	});
	document.addEventListener('keyup', function(event) {
		keyCombination.delete(event.code);
	})
}
runOnKeys(
	() => alert("Кверти в деле!"),
	'KeyQ',
	'KeyW',
	'KeyE',
	'KeyR',
	'KeyT',
	'KeyY'
)