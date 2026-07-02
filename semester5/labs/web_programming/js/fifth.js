// math obj ..............................................

// =======================================
// JAVASCRIPT MATH OBJECT PRACTICE
// =======================================

// =======================================
// Math.PI
// =======================================

console.log("Math.PI");
console.log(Math.PI);


// =======================================
// Math.round()
// =======================================

console.log("\nMath.round()");
console.log(Math.round(4.4));
console.log(Math.round(4.5));
console.log(Math.round(4.9));


// =======================================
// Math.floor()
// =======================================

console.log("\nMath.floor()");
console.log(Math.floor(4.9));
console.log(Math.floor(7.99));
console.log(Math.floor(10.1));


// =======================================
// Math.ceil()
// =======================================

console.log("\nMath.ceil()");
console.log(Math.ceil(4.1));
console.log(Math.ceil(7.01));
console.log(Math.ceil(10.0001));


// =======================================
// Math.max()
// =======================================

console.log("\nMath.max()");
console.log(Math.max(10, 20, 5, 50));
console.log(Math.max(100, 200, 300));


// =======================================
// Math.min()
// =======================================

console.log("\nMath.min()");
console.log(Math.min(10, 20, 5, 50));
console.log(Math.min(100, 200, 300));


// =======================================
// Math.pow()
// =======================================

console.log("\nMath.pow()");
console.log(Math.pow(2, 3));
console.log(Math.pow(5, 2));
console.log(Math.pow(10, 4));


// =======================================
// Exponent Operator **
// =======================================

console.log("\nExponent Operator **");
console.log(2 ** 3);
console.log(5 ** 2);
console.log(10 ** 4);


// =======================================
// Math.sqrt()
// =======================================

console.log("\nMath.sqrt()");
console.log(Math.sqrt(25));
console.log(Math.sqrt(81));
console.log(Math.sqrt(144));


// =======================================
// Math.random()
// =======================================

console.log("\nMath.random()");
console.log(Math.random());
console.log(Math.random());
console.log(Math.random());


// =======================================
// Random Number 0-9
// =======================================

console.log("\nRandom Number (0-9)");
console.log(Math.floor(Math.random() * 10));


// =======================================
// Random Number 1-10
// =======================================

console.log("\nRandom Number (1-10)");
console.log(Math.floor(Math.random() * 10) + 1);


// =======================================
// Dice Simulator
// =======================================

console.log("\nDice Simulator");

let dice = Math.floor(Math.random() * 6) + 1;

console.log("Dice:", dice);


// =======================================
// OTP Generator
// =======================================

console.log("\nOTP Generator");

let otp = Math.floor(1000 + Math.random() * 9000);

console.log("OTP:", otp);


// =======================================
// Array Example
// =======================================

console.log("\nArray Example");

let marks = [70, 80, 95, 60, 88];

console.log("Highest:", Math.max(...marks));
console.log("Lowest :", Math.min(...marks));


// =======================================
// Mini Calculator Example
// =======================================

console.log("\nMini Calculator");

let a = 15;
let b = 4;

console.log("Addition:", a + b);
console.log("Subtraction:", a - b);
console.log("Multiplication:", a * b);
console.log("Division:", a / b);
console.log("Remainder:", a % b);


// =======================================
// END
// =======================================