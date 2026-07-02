## this keyword

this keyword is a reference variable refers to the current class instance variable.

```java
class test {
  int i;
  void setValues(int i) {
    this.i = i;
    // here this is representing the current object
    // and this.i is representing the instance variable i, not the local variable of the setValues() method
  }
}
```

### Use of this keyword

1. this keyword can be used to refer current class instance variable.
2. this keyword can be used to invoke current class method(implicitly).
3. this() can be used to invoke current class constructor.
4. this can be used to pass as an argument in the method call.
5. this can be used to pass as an argument in the constructor call.
6. this can be used to return the current class instance from the method.
