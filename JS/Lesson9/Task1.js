/**
 * Перепишите функцию, чтобы она делала то же самое, но без if, в одну строку.
 * Сделайте два варианта функции checkAge:
 * Используя оператор ? и Используя оператор ||
 */
/*
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    return confirm('Родители разрешили?');
  }
}
*/
// (1)
/*function checkAge(age) {
	return age > 18 ? true : confirm('Родители разрешили?');
}*/
// (2)
function checkAge(age) {
	return age > 18 || confirm('Родители разрешили?');
}
let age = 18;
checkAge(age);