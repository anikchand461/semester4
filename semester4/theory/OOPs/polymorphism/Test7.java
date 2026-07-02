class Test7 {

  public static void main(String[] args) {
    Test7 t = new Test7();
    t.show('a');
  }

  void show(StringBuffer a) {
    System.out.println("stringbuffer method");
  }

  void show(String s) {
    System.out.println("string method");
  }
}


