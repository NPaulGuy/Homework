/**
 * Преобразуйте user в JSON, затем прочитайте этот JSON в другую переменную.
 */
let user = {
	name: "Василий Иванович",
	age: 35
};
let userJSON = JSON.stringify(user);
alert(userJSON);