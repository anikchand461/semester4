import java.awt.*;
import java.awt.event.*;

class q2 extends Frame implements ActionListener {

    Label l;
    Button b1, b2, b3;

    q2() {

        l = new Label("Button status");

        b1 = new Button("OK");
        b2 = new Button("Submit");
        b3 = new Button("Cancel");

        setLayout(new FlowLayout());

        add(l);
        add(b1);
        add(b2);
        add(b3);

        b1.addActionListener(this);
        b2.addActionListener(this);
        b3.addActionListener(this);

        setSize(300, 200);
        setVisible(true);
    }

    public void actionPerformed(ActionEvent e) {

        String s = e.getActionCommand();

        l.setText(s + " Button clicked");
    }

    public static void main(String[] args) {
        new q2();
    }
}