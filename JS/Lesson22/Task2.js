/**
 * Напишите функцию replacer для JSON-преобразования, которая удалит свойства, ссылающиеся на meetup.
 */
let room = {
	number: 23
};
let meetup = {
	title: "Совещание",
	occupiedBy: [{name: "Иванов"}, {name: "Петров"}],
	place: room
};
room.occupiedBy = meetup;
meetup.self = meetup;
alert( JSON.stringify(meetup, function replacer(key, value) {
	if (key) {
		return value === meetup ? undefined : value;
	} else {
		return value;
	}
}));