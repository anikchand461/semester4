import java.awt.*;
import javax.swing.*;

class q5 {

    q5() {

        Frame f = new Frame();

        f.setLayout(new BorderLayout());

        f.add(new Button("North"), BorderLayout.NORTH);
        f.add(new Button("South"), BorderLayout.SOUTH);

        Panel p1 = new Panel(new GridLayout(2,2));
        p1.add(new Button("G1"));
        p1.add(new Button("G2"));
        p1.add(new Button("G3"));
        p1.add(new Button("G4"));

        Panel p2 = new Panel(new FlowLayout());
        p2.add(new Button("Flow1"));
        p2.add(new Button("Flow2"));

        JPanel p3 = new JPanel();
        p3.setLayout(new BoxLayout(p3, BoxLayout.Y_AXIS));
        p3.add(new JButton("Box1"));
        p3.add(new JButton("Box2"));

        f.add(p1, BorderLayout.CENTER);
        f.add(p2, BorderLayout.WEST);
        f.add(p3, BorderLayout.EAST);

        f.setSize(500, 300);
        f.setVisible(true);
    }

    public static void main(String[] args) {
        new q5();
    }
}