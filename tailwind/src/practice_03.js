function isBetween(x , min , max){
    if(x>=min && x<=max){
        return true;
    } else{
        return false;
    }
}

console.log(isBetween(10, 1, 100)); // true
console.log(isBetween(101, 1, 100)); // false