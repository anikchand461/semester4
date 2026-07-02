let name = " Anik";   // name is a variable 

/*
creating variables :
let -> value can change
const -> value cannot change 
*/

let n = 7;
n = 6;

const m = 8;
// m = 6;

/*
m = 6;
  ^
TypeError: Assignment to constant variable.
*/

// number datatype ... inclues all like float , int , .. etc

// boolean ... t/f

// undefined ... variable exist but no value 
let x;
console.log(x);  // undefined

// checking dtype 

console.log(typeof name);
console.log(typeof (n));
console.log(typeof (true));




// ...........................................................

let y = 10 + 5;
console.log(y);

// == and is 

console.log(5 == "5"); // check values only  // true
console.log(5 === "5"); // check value and dtype  // false
console.log(5 !== "5");  // true

console.log(!true);





// string .....................................................


console.log(name);
console.log(name.length); // 4 -> _ A n i k
console.log(name.toUpperCase());
console.log(name.toLowerCase());
console.log(name.trim());

let first = "Anik";
let last = "Chand";
console.log(first + " " + last);

name = "Anik";
let age = 22;
console.log(`My name is ${name} and I am ${age}`);

let text = "JavaScript";
console.log(text.includes("Script"));
console.log(text.startsWith("Java"));
console.log(text.endsWith("Script"));

// slice
console.log(text.slice(0, 4));  // same as python 

let s = "I love Java";
console.log(s.replace("Java", "Python"));





// arrays .....................................................

let fruits = ["Apple", "Banana", "Mango"];
console.log(fruits[0]);
console.log(fruits.length);

fruits[1] = "Orange";
console.log(fruits);


fruits.push("Mango");
console.log(fruits);

fruits.pop();
console.log(fruits);

fruits.unshift("Apple");  // add item at beginning 
console.log(fruits);


fruits.shift();  // remove 1st item
console.log(fruits);

console.log(fruits.includes("Banana"));  // check item existance

console.log(fruits.indexOf("Banana"));

// loop
for(let fruit of fruits){
    console.log(fruit);
}

