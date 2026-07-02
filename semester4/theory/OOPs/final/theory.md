## final - keyword

We can use final keyword with variables, methods or with class.

1. If we create final variable it becomes constant, we cannot change the value of final variable throughout the program.
2. If we create any final method, we cannot override it.
3. If we create any final class, we cannot extend it or inherit it.

### Errors

1. If we try to update final variable

```java
Test.java:4: error: cannot assign a value to final variable i
    i += 2;
    ^
1 error
```

2. If we try to override final method of a parent class

```java
Test.java:9: error: m1() in Test cannot override m1() in Demo
  void m1() {
       ^
  overridden method is final
1 error
```

3. If we try to inherit a final class

```java
Test.java:14: error: cannot inherit from final Demo
class Test extends Demo {
                   ^
1 error
```
