## Polymorphism

many forms

### Types of Polymorphism :

#### 1. Compile Time polymorphism

- Static Polymorphism
- Achieved using Method Overloading

#### 2. Runtime Polymorphism

- Dynamic Polymorphism
- Achieved using Method Overriding

### How to achieve Method Overloading and Overriding :

#### Method Overloading

1. Same name
2. Same class
3. Different Arguments (no. of arguments, type 0f arguments, sequence of arguments)

#### Method Overriding

1. Same name
2. Different class
3. same arguments (no. of arguments, sequence of arguments, type of arguments)
4. inheritance

### Can we achieve method overloading by changing the return type of method only?

**Ans :** In java this is not possible because of the ambiguity.

### Can we overload java main() method ?

**Ans :** Yes, we can have any no. of main() methods in a class by method overloading. This is because JVM always calls main() which receives string array as arguments only.

## Overriding cases :

### Do overriding method must have same return type (or subtype) ?

**Ans :** From Java 5.0 onwards it is possible to have different return type fro a overriding method in child class, but child's return type should be subtype of parent's return type. This phenomena is known as covariant return type.

### Access-Modifiers and Overriding

The Access-Modifier for an overriding method can allow more, but not less, access than the overridden method. For example a protected instance method in the super-class can be made public, but not private, in the super-class. Doing so, will generate compile time error.

### Overriding and Exception-Handling

Below are 2 rules to note when overriding methods related to exception handling.

- **Rule 1:** If the super-class overridden method does not throws an exception, subclass overriding method can only throws the unchecked exception, throwing checked exception will lead to compile-time error.

- **Rule 2:** If the super-class overridden method does throw and exception, subclass overriding method can only throw same, subclass exception. Throwing parent exception in Exception hierarchy will lead to compile time error. Also there is no issue if subclass overridden method is not throwing any exception.

### Overriding and Abstract Method

Abstract methods in an interface or abstract-class are meant to be overridden in derived concrete classes, otherwise compile time error will be thrown.

### Invoking Overridden method from sub-class

We can call parent class method in overriding method using 'super' keyword.

### Which methods can override ?

- **Final Methods cannot be overridden :**
  If we don't want a method to be overridden, we declare it as final.
- **Static method cannot be overridden :**
  (Method overriding vs Method Hiding) When you defines a static method with same signature as a static method in base class, it is known as method hiding.
- **Private methods cannot be overridden :**
  Private methods cannot be overridden because they are bonded during compile time. Therefor we can't even override private methods in a subclass.

### Overriding and synchronized/strictfp method

The presence of synchronized or strictfp modifier with method have no effect on the rules of overriding, i.e. it is possible that a synchronized/strictfp method can override a non-synchronized /strictfp one and vice-versa.
