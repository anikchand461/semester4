## Abstraction

Abstraction is hiding internal implementation and just highlighting the setup services that we are offering.

As in the car case, relevant parts like steering, gear, horn, accelerator, breaks etc. are shown to driver because they are necessary for driving. But the driver need not know the internal functioning of engine, gear etc. Thus, showing relevant data to the user and hiding implementation details from the user is called Abstraction.

### Don't get confused between Abstraction & Encapsulation

| Abstraction                                                                                                     | Encapsulation                                                                 |
| --------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| **1.** Abstraction is detail hiding (Implementation hiding)                                                     | **1.** Encapsulation is data hiding (Information hiding)                      |
| **2.** Data abstraction deals with exposing the interface to the user and hiding the details of implementation. | **2.** Encapsulation groups together data and methods that act upon the data. |

### How to achieve abstraction in Java ?

1. Abstract class (0 - 100%)
2. Interfaces (100%)

### Abstract method, class

1. A method without body (no implementation) is known as Abstract method.
2. If a class has an abstract method, it should be declared abstract as well but not vice-versa.
3. If a regular class inherits an abstract class then the class must have to implement all the abstract methods of abstract parent class or it has to be declared abstract as well.
4. Abstract methods in an abstract class are meant to be overridden in derived concrete classes otherwise compile-time error will be thrown.
5. Abstract classes cannot be instantiated, meant we cannot create an object of abstract class.

### Interfaces

1. It is used to achieve abstraction.
2. Supports multiple inheritance.
3. Used to achieve Loose Coupling.
4. Inside interface every **method** is the type of **Public abstract** by default.
5. Every **field** is the type of **public static final** by default.
6. In java 8 - you can create body of a method by using **default concrete** keyword.
7. And also in java 8 - you can create body with a static method.
8. In java 9 - we can also define **private methods**.
9. Conditions for method overriding :

- same name
- different class
- same arguments (no. of arg, types of arg, sequence of arg)
- inheritance

10. We cannot create objects of Interfaces
11. Interface tells the class what to do, but does not tell how to achieve that.
