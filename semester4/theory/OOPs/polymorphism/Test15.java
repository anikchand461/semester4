class Test15 {
  // this will override correctly is in the clild or parent eny method 
  // synchronized / strictfp
  synchronized void show() {
    System.out.println("1");
  }
}

class YYY extends Test15 {
  void show() {
    System.out.println("2");
  }
  public static void main(String[] args) {
    YYY y = new YYY();
    y.show();
  }
}

