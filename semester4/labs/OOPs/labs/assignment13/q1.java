import java.awt.*;
import java.awt.event.*;

class q1 extends Frame implements ActionListener {

    TextField t;
    Button b;

    q1() {

        t = new TextField(20);
        b = new Button("click me");

        setLayout(new FlowLayout());

        add(t);
        add(b);

        b.addActionListener(this);

        setSize(300, 200);
        setVisible(true);
    }

    public void actionPerformed(ActionEvent e) {
        t.setText("Welcome");
    }

    public static void main(String[] args) {
        new q1();
    }
}