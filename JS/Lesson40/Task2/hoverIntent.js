'use strict';

// Здесь показан набросок класса
// с возможностями, которые нам понадобятся
class HoverIntent {

	constructor({
		sensitivity = 0.1, // скорость ниже 0.1px/ms значит "курсор на элементе"
		interval = 100, // измеряем скорость каждые 100ms: определяем дистанцию между предыдущей и новой позицией.
		elem,
		over,
		out
	}) {
		this.sensitivity = sensitivity;
		this.interval = interval;
		this.elem = elem;
		this.over = over;
		this.out = out;
		// убедитесь, что "this" сохраняет своё значение для обработчиков.
		this.onMouseMove = this.onMouseMove.bind(this);
		this.onMouseOver = this.onMouseOver.bind(this);
		this.onMouseOut = this.onMouseOut.bind(this);

		// назначаем обработчики
		elem.addEventListener("mouseover", this.onMouseOver);
		elem.addEventListener("mouseout", this.onMouseOut);
		// продолжите с этого места
		this.calculateSpeed = this.calculateSpeed.bind(this);
		
	}

	onMouseOver(event) {
		if (this.isCalculating) return;
		this.isCalculating = true;
		this.startX = event.clientX;
		this.startY = event.clientY;
		this.startTime = Date.now();
		elem.addEventListener("mousemove", this.onMouseMove);
		this.intervalIndex = setInterval(this.calculateSpeed, this.interval);
	}

	onMouseOut(event) {
		// Если ушли за границы элемента, то убираем подсказку.
		if (!event.relatedTarget || !elem.contains(event.relatedTarget)) {
			elem.removeEventListener("mousemove", this.onMouseMove);
			this.isCalculating = false;
			clearInterval(this.intervalIndex);
			this.out.call(this.elem, event);
		}
		
	}

	onMouseMove(event) {
		this.curX = event.pageX;
		this.curY = event.pageY;
		this.curTime = Date.now();
	}

	calculateSpeed() {
		let speed = Math.sqrt(
			Math.pow(this.curX - this.startX, 2)
			+ Math.pow(this.curY - this.startY, 2)
		) / (this.curTime - this.startTime);
		if (speed > this.sensitivity) {
			this.startX = this.curX;
			this.startY = this.curY;
			this.startTime = this.curTime;
		} else {
			clearInterval(this.intervalIndex);
			this.over.call(this.elem);
		}
	}

	destroy() {
		elem.removeEventListener('mouseover', this.onMouseOver);
		elem.removeEventListener('mouseout', this.onMouseOut);
		elem.removeEventListener('mousemove', this.onMouseMove);
	}

}