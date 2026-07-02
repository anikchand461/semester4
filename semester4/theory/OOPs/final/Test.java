// class Demo {
//   // you cannot override a final method of the parent class 
//   final void m1() {
//     System.out.println("i am in class demo");
//   }
// }

final class Demo {
  void m1() {
    System.out.println("i ma in class Demo");
  }
}

class Test extends Demo {

  void m1() {
    System.out.println("i am in class Test");
  }

  public static void main(String[] args) {
    // final int i = 10;
    // i += 2;
    // System.out.println(i);
    
    
  }
}
