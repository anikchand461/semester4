class Test {
  int i;

  // case 1: 
  // in the following case this changes the varibale value perfectly 
  // because here is the instance variable and the loacl varibale has different names

  // void setValue(int x) {
  //   i = x;
  // }

  // case 2:
  // in the following case prints value of i as 0
  // because the instance varibale value is not updated.

  // void setValue(int i) {
  //   i = i;
  // }

  // case 3: perfect 
  // the following code correctly changes the value of i using the this kwyword 
  void setValue(int i) {
    this.i = i;
  }

  void show() {
    System.out.println(i);
  }
}

class XYZ {
  public static void main(String[] args) {
    Test t = new Test();
    t.setValue(10);
    t.show();
  }
}
