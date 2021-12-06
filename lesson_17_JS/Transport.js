class Transport{
	constructor(maxSpeed,weight,color){
		this.maxSpeed = maxSpeed;
		this.weight = weight;
		this.color = color;
	}
	ride(){
		console.log('brrrrrrrrr!!!!');
	}
	turn(){
		console.log('Turn in some direction');
	}
}

class Car extends Transport{
	ride(){
		super.ride();
		console.log('from class Car!!!');
	}
	specific(){
		console.log(`This car have max speed is:${this.maxSpeed}, 
					weight is: ${this.weight} and ${this.color} color`);
	}
}

class Motorbike extends Transport{
	ride(){
		super.ride();
		console.log('from class Motorbike!!!');
	}
	specific(){
		console.log(`This motorbike have max speed is:${this.maxSpeed}, 
					weight is: ${this.weight} and ${this.color} color`);
	}
}

class Bicycle extends Transport{
	ride(){
		super.ride();
		console.log('from class Bicycle!!!');
	}
	specific(){
		console.log(`This bicycle have max speed is:${this.maxSpeed}, 
			weight is: ${this.weight} and ${this.color} color`);
	}
}

let car = new Car('200','2000','red');
let motorbike = new Motorbike('50', '250', 'green');
let car2 = new Car('80','2000','yelow');
let motorbike2 = new Motorbike('120', '250', 'blue');
let bicycle = new Bicycle('20','20','black');
let motorbike3 = new Motorbike('250', '250', 'grey');

let arrObj = [];
arrObj.push(car, car2, motorbike, motorbike2, motorbike3, bicycle);

function sortBySpeed(arr) { 
        return arr.sort((a, b) => parseInt(a.maxSpeed) > parseInt(b.maxSpeed) ? 1 : -1); 
    }; 
 
let sorterArray = sortBySpeed(arrObj); 
console.log('sorterArray - ', sorterArray);

Transport.prototype.turnLeft = function(){
	console.log('Turn left!!!');