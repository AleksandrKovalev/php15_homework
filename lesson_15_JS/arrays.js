let prodPrice = ['product1: 34','product2: 12', 'product3: 93', 'product4: 6', 'product5: 91'];
prodPrice.push('product6: 63');
prodPrice.unshift('product: 32');
console.log(prodPrice);

for (let i = 0; i < prodPrice.length; i++){
	if(i % 2 == 0 && i != 0){
		console.log(prodPrice[i]);
	}
}

////////////////////////////////////////////////////////
let numbers = [3, 35, 85, 5, 6, 8];
let biggestNum = 0;

for (let i = 0; i < numbers.length; i++){
	if(numbers[i] > biggestNum){
		biggestNum = numbers[i];
	}
}

console.log(biggestNum);

////////////////////////////////////////////////////

let num1 = [2, 4, 6, 3, 9];
let num2 = [2, 5, 6, 7, 9];
let cache;

for(let i = 0; i < num1.length; i++){
	if (num2[i] == num1[i]){
		console.log('sovpalo');
	}else console.log('NE sovpalo');
}
////////////////////////////////////////////////////

let textArr = ['I love JS!', 'I dont love JS!'];

for(let i = 0; i < textArr.length; i++){
	let str = 'dont';
	let res = textArr[i].includes(str);
	if (res) {
		delete textArr[i];
	}
	console.log(textArr);
}