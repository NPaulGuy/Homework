/**
 * Напишите код, как получить…
 * элемент <div>?
 * <ul>?
 * второй <li> (с именем Пит)?
 */
alert(document.body.firstElementChild.textContent);
alert(document.body.children[1].textContent);
alert(document.body.children[1].lastElementChild.textContent);