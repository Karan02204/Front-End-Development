// write a function isValidUser(username,password) that returns true only if both username and password are provided (i.e. not empty or false). Otherwise, it should return false
function isValidUser(username, password) {
  // write code here
  if (username && password) {
    return true;
  } else {
    return false;
  }
}

console.log(isValidUser("john", "123")); // true
console.log(isValidUser("", "123")); // false