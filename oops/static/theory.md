## static keyword

We can use static keyword with ...

1. variable (class level) -> cannot use with local variable
2. methods
3. block
4. inner class (nested class) -> cannot use with outer class

- We can access static variable directly using the Class name. We do not have to initialize the object of the class.

- static variable belongs to the class, not object.

- If we try to access non-static variable directly using class - error ...

```java
Demo.java:8: error: non-static variable a cannot be referenced from a sta
tic context
    System.out.println(Test.a);
                           ^
1 error
```

- static variables are used for memory management.
- static variable gets memory only once in the class area at the time of class loading.

### static method

- static method belongs to class not object.
- static method can be called directly by class names follows : ClassName.methodName().

### rules of static methods

1. **static** methods belong to the class, not to the object.
2. A **static** method can be accessed directly by class name and doesn't need any object.
3. A **static method** can access only **static data**. It cannot access **non-static data**.

```java
StaticDemo.java:4: error: non-static variable i cannot be referenced from
 a static context
    System.out.println(i);
                       ^
1 error
```

4. A **static method** can call only **other static-methods** and cannot call a **non-static method**.

```java
StaticDemo.java:4: error: non-static method show() cannot be referenced f
rom a static context
    show();
    ^
1 error
```

5. A **static method** cannot refer to **this** or **super** keyword anyway.

```java
StaticDemo.java:15: error: non-static variable this cannot be referenced
from a static context
    System.out.println(this.i);
                       ^
1 error
```

### static block

- static block executes automatically whenn the class is loaded in the memory.
- static block in a class executes at first.
- previous version of jdk 1.6 - in these you can print "hello" without using main() method , just using static method. But jdk 1.6 or latest - you jave to use main() method.
- you can create multiple static blocks. And these will be exeuted top to bottom.

### Use of static block

1. static block is executed at class loading, hence at the time of class loading if we want to perform any activity, we have to define that inside static block.
2. static block is used to initialize the static members.
