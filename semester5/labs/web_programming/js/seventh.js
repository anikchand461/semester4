// ======================================
// 1. Reference Error
// ======================================

try {
    console.log(age);
} catch (error) {
    console.log("Reference Error:");
    console.log(error.message);
}


// ======================================
// 2. Type Error
// ======================================

try {
    let age = 21;

    age.toUpperCase();
} catch (error) {
    console.log("\nType Error:");
    console.log(error.message);
}


// ======================================
// 3. Basic try-catch
// ======================================

try {
    console.log(x);
} catch (error) {
    console.log("\nSomething went wrong!");
}


// ======================================
// 4. finally
// ======================================

try {
    console.log("\nRunning try block");
} catch (error) {
    console.log(error.message);
} finally {
    console.log("Always runs");
}


// ======================================
// 5. Custom Error
// ======================================

try {
    let age = 15;

    if (age < 18) {
        throw new Error("Age must be 18+");
    }

    console.log("Access Granted");
} catch (error) {
    console.log("\nCustom Error:");
    console.log(error.message);
}


// ======================================
// 6. Real Example
// ======================================

function divide(a, b) {
    try {
        if (b === 0) {
            throw new Error("Cannot divide by zero");
        }

        return a / b;
    } catch (error) {
        console.log("\nDivide Error:");
        console.log(error.message);
    }
}

console.log(divide(10, 2));
divide(10, 0);