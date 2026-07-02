class Test5 {

  public static void main(String[] args) {
    Test5 t = new Test5();
    t.show('a');
  }

  void show(Object a) {
    System.out.println("object method");
  }

  void show(String s) {
    System.out.println("string method");
  }
}


// automatic promotion 


