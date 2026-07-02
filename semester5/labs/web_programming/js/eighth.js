// ======================================
// CLASS
// ======================================

class Student {

    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    greet() {
        console.log(`Hello, I am ${this.name}`);
    }

    showInfo() {
        console.log(`Name: ${this.name}`);
        console.log(`Age : ${this.age}`);
    }
}


// ======================================
// OBJECTS FROM CLASS
// ======================================

const s1 = new Student("Anik", 21);
const s2 = new Student("Rahul", 20);


// ======================================
// ACCESSING PROPERTIES
// ======================================

console.log(s1.name);
console.log(s2.age);


// ======================================
// CALLING METHODS
// ======================================

s1.greet();
s2.greet();

s1.showInfo();


// ======================================
// INHERITANCE
// ======================================

class Person {

    constructor(name) {
        this.name = name;
    }

    greet() {
        console.log(`Hello ${this.name}`);
    }
}

class Employee extends Person {

    constructor(name, salary) {
        super(name);
        this.salary = salary;
    }

    showSalary() {
        console.log(`Salary: ${this.salary}`);
    }
}


// ======================================
// CHILD CLASS OBJECT
// ======================================

const emp1 = new Employee("Anik", 50000);

emp1.greet();
emp1.showSalary();