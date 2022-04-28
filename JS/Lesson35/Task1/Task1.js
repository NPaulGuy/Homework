/**
 * В ифрейме ниже располагается документ с зелёным «полем».
 * Используйте JavaScript, чтобы найти координаты углов, обозначенных стрелками.
 * В документе уже реализована функциональность, когда при клике на любом месте показываются соответствующие координаты.
 * Ваш код должен при помощи DOM получить четыре пары координат:
 * верхний левый, внешний угол (это просто).
 * нижний правый, внешний угол (тоже просто).
 * верхний левый, внутренний угол (чуть сложнее).
 * нижний правый, внутренний угол (есть несколько способов, выберите один).
 * Координаты, вычисленные вами, должны совпадать с теми, которые возвращаются по клику мыши.
 * P.S. Код должен работать, если у элемента другие размеры или есть рамка, без привязки к конкретным числам.
 */
let myCoords = field.getBoundingClientRect();
//(1)
let pageX = myCoords.left;
let pageY = myCoords.top;
alert(pageX + ":" + pageY);
//(2)
pageX = myCoords.right;
pageY = myCoords.bottom;
alert(pageX + ":" + pageY);
//(3)
pageX = myCoords.left + field.clientLeft;
pageY = myCoords.top + field.clientTop;
alert(pageX + ":" + pageY);
//(4)
pageX = myCoords.right - field.clientLeft;
pageY = myCoords.bottom - field.clientTop;
alert(pageX + ":" + pageY);
//(4) - второй способ
//clientLeft/Top - отступ рамки; clientWidth/Height - размер окна элемента
pageX = myCoords.left + field.clientLeft + field.clientWidth;
pageY = myCoords.top + field.clientTop + field.clientHeight;
