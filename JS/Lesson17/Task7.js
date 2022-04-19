/**
 * У вас есть массив объектов user, и в каждом из них есть user.name. Напишите код, который преобразует их в массив имён.
 */
function arrObjToArrNames(arrObj) {
	let arrNames = arrObj.map(
		item => item.name
	);
	return arrNames;
}
let vasya = { name: "Вася", age: 25 };
let petya = { name: "Петя", age: 30 };
let masha = { name: "Маша", age: 28 };
let users = [vasya, petya, masha];
let names = arrObjToArrNames(users);
alert(names);