class Test4 {

  public static void main(String[] args) {
    Test4 t = new Test4();
    t.show('a');
  }

  void show(int a) {
    System.out.println("int method");
  }

  void show(String s) {
    System.out.println("string method");
  }
}


// automatic promotion 

