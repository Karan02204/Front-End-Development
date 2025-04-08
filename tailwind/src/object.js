const car = new Object();

car.brand = 'Ford';
car.model = 'Mustang';
car.year = 1964;


car.getDetails = function(){
    return `${this.brand} ${this.model} ${this.year}`;
}


console.log(car.brand);
console.log(car.model);
console.log(car.year);
console.log("\n");

console.log(car.getDetails());