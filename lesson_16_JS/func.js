function checkAge(age){
	return (age >= 18) ? true : console.log('Parents allowed?');
}

checkAge(15);

////////////////////////////////////////////////////////////////

function min(num1, num2){
	return console.log((num1 < num2) ? num1 : num2);
}

min(0, -1);

/////////////////////////////////////////////////////////////////

function pow(num1, num2){
	let res = 1;
	for (let i = 1; i <= num2; i++){
		 res = res * num1; 
    }
	return	console.log(res);
}

pow(2, 4);

//////////////////////////////////////////////////////////////////

let strToUp = "I dont love JS!"; 

function strUpperWord(str){
	return str.replace(/(^|\s)\S/g, function(a) {return a.toUpperCase()});
}
console.log(strUpperWord(strToUp));

//////////////////////////////////////////////////////////////////

let textArr = ['I love JS!', 'I dont love JS!'];
let str = 'dont';

function inArray(text, arr){
	for(let i = 0; i < arr.length; i++){
	    let res = arr[i].includes(text);
	    if(res){
	    	return true;
	    }
	}
	return false;
}

console.log(inArray(str, textArr));