class Test11 {
  void show() throws RuntimeException {
    System.out.println("hello");
  }
}

class XYZZ extends Test11 {
  // in the clild class there must be the exception which is in the same level of the exception in parent class or lower level that the parent exception.
  public void show() throws Exception {
    System.out.println("2");
  }

  public static void main(String[] args) {
    Test11 t = new Test11();
    t.show();

    XYZZ x = new XYZZ();
    x.show();
  }
}


