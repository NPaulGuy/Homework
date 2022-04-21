/**
 * У нас есть объект.
 * Напишите деструктурирующее присваивание, которое:
 * свойство name присвоит в переменную name.
 * свойство years присвоит в переменную age.
 * свойство isAdmin присвоит в переменную isAdmin (false, если нет такого свойства)
 */
let user = { name: "John", years: 30, isAdmin : true };
let {years : age, isAdmin = false, name} = user;
alert(name);
alert(age);
alert(isAdmin);