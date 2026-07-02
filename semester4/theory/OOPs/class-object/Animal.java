class Animal {

  String color;
  int age;

  public void eat() {
    System.out.println("I am eating");
  }

  void initObj(String c, int a) {
    color = "ch";
    age = a;
  }

  void display() {
    System.out.println(color + " " + age);
  }

  public static void main(String[] args) {
    System.out.println("1");
    Animal cat = new Animal();
    cat.eat();
    cat.run();

    // object initialization technique - by reference variable
    cat.color = "black";
    cat.age = 12;

    Birds sp = new Birds();
    sp.fly();

    cat.initObj("anik", 23);

    cat.display();
  }

  public void run() {
    System.out.println("I am running");
  }
}

class Birds {
  void fly() {
    System.out.println("I am flying");
  }
}
