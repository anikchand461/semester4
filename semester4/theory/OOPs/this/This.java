class This {
  void display() {
    System.out.println("hello");
  }
  void show() {
    // here this is used to call the current class method
    this.display();
  }
  public static void main(String[] args) {
    This demo = new This();
    demo.show();
  }
}
