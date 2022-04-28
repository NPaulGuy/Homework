/**
 * Вычислите координаты центра поля и с помощью JS поместите туда мяч.
 * Элемент должен позиционироваться за счёт JavaScript, а не CSS.
 * Код должен работать с любым размером мяча (10, 20, 30 пикселей) и любым размером поля без привязки к исходным значениям.
 */
let fieldHalfWidth = field.clientWidth / 2;
let fieldHalfHeight = field.clientHeight / 2;
let ballHalfWidth = ball.clientWidth / 2;
let ballHalfHeight = ball.clientHeight / 2;
ball.style.marginLeft = (fieldHalfWidth - ballHalfWidth) + 'px';
ball.style.marginTop = (fieldHalfHeight - ballHalfHeight) + 'px';