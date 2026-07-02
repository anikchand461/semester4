function greet(){
    console.log("Hello");
}
greet();
greet();
greet();



// ......................................................

function greet2(name){
    console.log("Hello " + name);
}
greet2("Anik");



// ......................................................

function add(a, b){
    return a + b;
}
let result = add(10, 20);
console.log(result);



// arrow fn ..............................................

const add2 = (a,b) => {
    return a+b;
};

const add3 = (a,b) => a+b;

console.log(add2(3, 4));
console.log(add3(1, 2));

