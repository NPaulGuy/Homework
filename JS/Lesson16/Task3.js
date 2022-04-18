/**
 * На входе массив чисел, например: arr = [1, -2, 3, 4, -9, 6].
 * Задача: найти непрерывный подмассив в arr, сумма элементов в котором максимальна.
 * Функция getMaxSubSum(arr) должна возвращать эту сумму.
 * Если все элементы отрицательные – ничего не берём(подмассив пустой) и сумма равна «0»
 */
// Примечание: словесно было сказано найти непрерывный подмассив с максимальной суммой, поэтому изначально решалась задача возвращения именно подмассива.
// Возвращение ПОДМАССИВА с максимальной суммой:
// Если все элементы отрицательные или массив пустой, то возвращаем ноль.
// Если только единичный элемент - максимальная сумма, то возвращаем его.
function getMaxSubSum(arr) {
	if (arr.length > 0) {
		let maxIndex = 0;
		let maxSum = 0;
		let maxSubArr = [];
		for (let i = 1; i < arr.length; i++) {
			if (arr[i] > arr[maxIndex]) {
				maxIndex = i;
				maxSum = arr[i];
				maxSubArr = [maxSum];
			}
		}
		if (maxSum <= 0) {
			return 0;
		}
		let subArr = [];
		let bufferSum = 0;
		// Равно двум, чтобы начать искать суммы подмассивов размером 2 элемента и больше(до всего массива целиком).
		for (let subArrayLength = 2; subArrayLength < arr.length; subArrayLength++) {
			for (let i = 0; i + subArrayLength <= arr.length; i++) {
				for (let j = i; j < i + subArrayLength; j++) {
					bufferSum += arr[j];
					subArr.push(arr[j]);
				}
				if (bufferSum > maxSum) {
					maxSum = bufferSum;
					maxSubArr = subArr;
				}
				subArr = [];
				bufferSum = 0;
			}
		}
		return maxSubArr;
	} else {
		return 0;
	}
	
}
// Возращение САМОЙ СУММЫ
/*function getMaxSubSum(arr) {
	let maxSum = 0;

	for (let i = 0; i < arr.length; i++) {
		let bufferSum = 0;
		for (let j = i; j < arr.length; j++) {
			bufferSum += arr[j];
			maxSum = Math.max(maxSum, bufferSum);
		}
	}

  return maxSum;
}*/
let arr = [12, -13, 32, 64, -30];
//alert(getMaxSubSum(arr));
alert(String(getMaxSubSum(arr)));