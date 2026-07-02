// possible : can access the variables inside the fn from outside 

let username = "Anik";

function login(){

    let message = "Welcome";

    console.log(username);
}

login();
console.log(message);




// not possible ... cannot access the local variable globally 

function demo() {
  let name = "Anik";
}

console.log(name);   // error 
