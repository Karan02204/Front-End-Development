const person ={
    'firstName' : 'John' ,
    'lastName' : 'Doe' ,
    'age' : 30 ,
    
    fullName: function(){
        return this.firstName + ' ' + this.lastName;
    } ,

    greet: function(){
        console.log("Hello, my name is " + this.fullName() + " and I am " + this.age + " years old.");
    }
};

console.log(person.firstName);
console.log(person["lastName"]);
console.log(person.fullName());


person.age = 31;
console.log(person.age);