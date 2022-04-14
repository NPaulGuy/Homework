/**
 * Это ladder (лестница) – объект, который позволяет подниматься вверх и спускаться:
 * let ladder = {
		step: 0,
		up() {
			this.step++;
		},
		down() {
			this.step--;
		},
		showStep: function() { // показывает текущую ступеньку
			alert( this.step );
		}
	};
	Измените код методов up, down и showStep таким образом, чтобы их вызов можно было сделать по цепочке
 */
let ladder = {
	step: 0,
	up() {
		this.step++;
		return this;
	},
	down() {
		this.step--;
		return this;
	},
	showStep: function() {
		alert(this.step);
		return this;
	}
};
ladder.up().down().down().showStep();