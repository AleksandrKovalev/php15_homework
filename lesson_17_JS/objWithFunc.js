const user = {

}

user.name = 'John';
user.surname ='Smith';
user.name = 'Pete';

console.log('surname' in user);

////////////////////////////////////////////////////////////////////

function isEmpty(obj){
	for(let key in obj){
		if(obj !== undefined){
			return false;
		}
	}
	return true;
}

console.log(isEmpty(user));

////////////////////////////////////////////////////////////////////

let salaries = {
	'Ivan': 1000,
	'Dmitriy': 1600,
	'Anton': 1300
};

function sumSalar(obj){
	let sum = 0;
	if(!isEmpty(obj)){
		for(let salary of Object.values(obj)){
			sum += salary;
		}
	}
	return sum;
}

console.log(sumSalar(salaries));

/////////////////////////////////////////////////////////////////////

function multiplyNumeric(obj){
	for(let key in obj){
		if(typeof obj[key] == 'number'){
			obj[key] *= 2;
		}
	}	
}
console.log(multiplyNumeric(salaries));
console.log(salaries.Ivan);
