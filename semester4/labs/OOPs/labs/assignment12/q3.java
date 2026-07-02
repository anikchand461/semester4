import java.awt.*;
import java.awt.event.*;

class q3 extends Frame implements ItemListener {

    Checkbox c1, c2;
    Label l;

    q3() {

        CheckboxGroup g = new CheckboxGroup();

        c1 = new Checkbox("Java", g, false);
        c2 = new Checkbox("Python", g, false);

        l = new Label();

        setLayout(new FlowLayout());

        add(c1);
        add(c2);
        add(l);

        c1.addItemListener(this);
        c2.addItemListener(this);

        setSize(300, 200);
        setVisible(true);
    }

    public void itemStateChanged(ItemEvent e) {

        if (c1.getState()) {
            l.setText("Java Selected");
        }
        else {
            l.setText("Python Selected");
        }
    }

    public static void main(String[] args) {
        new q3();
    }
}