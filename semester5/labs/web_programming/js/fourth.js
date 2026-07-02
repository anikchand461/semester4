// objects ................................

const student = {
    name: "Anik",
    age: 21,
    city: "Haldia"
};

console.log(student.name);
console.log(student["name"]);

// changing value
student.age = 22;
console.log(student);

// add new property 
student.college = "HIT";
console.log(student);

// delete property
delete student.college;
console.log(student);


// object methods ..........

const db = {
    name: "Anik",

    greet: function(){
      console.log("Hello");
      console.log(db.name);
    }
};

db.greet();
console.log(Object.keys(db));
