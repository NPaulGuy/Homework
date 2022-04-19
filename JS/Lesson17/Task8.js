/**
 * У вас есть массив объектов user, и у каждого из объектов есть name, surname и id.
 * Напишите код, который создаст ещё один массив объектов с параметрами id и fullName, где fullName – состоит из name и surname.
 * Примечание: можно было вернуть объект, если обернуть {} в круглые скобки.
 */
 let vasya = { name: "Вася", surname: "Пупкин", id: 1 };
 let petya = { name: "Петя", surname: "Иванов", id: 2 };
 let masha = { name: "Маша", surname: "Петрова", id: 3 };
 let users = [ vasya, petya, masha ];
 let usersMapped = users.map(
	 // Здесь можно было обернуть в (), тогда бы возвращали объект, а не вызывали функцию.
	item => {
		let newObj = {
			fullName : item.name + " " + item.surname,
			id : item.id
		}
		return newObj;
	}
 );
 alert(usersMapped[0].id);
 alert(usersMapped[0].fullName);