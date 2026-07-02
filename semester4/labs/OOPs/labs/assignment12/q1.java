import java.awt.*;

class q1 {

    q1() {

        Frame f = new Frame();

        Button b1 = new Button("One");
        Button b2 = new Button("Two");
        Button b3 = new Button("Three");

        f.setLayout(new FlowLayout());

        f.add(b1);
        f.add(b2);
        f.add(b3);

        f.setSize(300, 200);
        f.setVisible(true);
    }

    public static void main(String[] args) {
        new q1();
    }
}