// Check Eligibility for Discount
//Write a function isEligibleForDiscount(age, isMember) that returns true if either:
// - The user is a member (isMember is true) , OR
// - The user is atleast 60 years old (age>=60)
//otherwise return false

function isEligibleForDiscount(age, isMember){
    if(isMember || age>=60){
        return true;
    } else{
        return false;
    }
}

console.log(isEligibleForDiscount(59, false)); // false
console.log(isEligibleForDiscount(60, false)); // true