// class StaticDemo {
//   static int i = 10;
//   static void display() {
//     show();
//     System.out.println(i);
//   }
//   void show() {
//     System.out.println("2");
//   }
// }

class StaticDemo {
  static int i = 0;
  static void display() {
    System.out.println(this.i);
  }
}
