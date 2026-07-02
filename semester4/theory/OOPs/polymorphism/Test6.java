class Test6 {

  public static void main(String[] args) {
    Test5 t = new Test5();
    t.show('a');
  }

  void show(StringBuffer a) {
    System.out.println("stringbuffer method");
  }

  void show(String s) {
    System.out.println("string method");
  }
}






