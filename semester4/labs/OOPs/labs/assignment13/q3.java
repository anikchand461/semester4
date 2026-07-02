import java.awt.*;
import java.awt.event.*;

class q3 extends Frame implements ActionListener {

    TextField t1, t2;
    Label l;
    Button b;

    q3() {

        t1 = new TextField(10);
        t2 = new TextField(10);

        l = new Label();

        b = new Button("Add");

        setLayout(new FlowLayout());

        add(t1);
        add(t2);
        add(b);
        add(l);

        b.addActionListener(this);

        setSize(300, 250);
        setVisible(true);
    }

    public void actionPerformed(ActionEvent e) {

        int a = Integer.parseInt(t1.getText());
        int b = Integer.parseInt(t2.getText());

        int sum = a + b;

        l.setText("Their sum is = " + sum);
    }

    public static void main(String[] args) {
        new q3();
    }
}