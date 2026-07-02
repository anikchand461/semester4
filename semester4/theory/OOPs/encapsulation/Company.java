class Employee {
  // data hiding
  private int empid;

  // setter 
  public void setEmpid(int eid) {
    empid = eid;
  }

  // getter
  public int getEmpid() {
    return empid;
  }
}

class Company {
  public static void main(String[] args) {
    Employee e = new Employee();
    e.setEmpid(101);
    int data = e.getEmpid();
    System.out.println(data);
  }
}
