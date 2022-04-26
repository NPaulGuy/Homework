/**
 * Напишите код для выбора элемента с атрибутом data-widget-name из документа и прочитайте его значение.
 */
let div = document.body.firstElementChild;
alert(div.dataset.widgetName);
alert(div.textContent);