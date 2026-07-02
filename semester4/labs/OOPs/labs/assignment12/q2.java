import java.awt.*;

class q2 extends Frame {

    q2() {
        setSize(300, 300);
        setVisible(true);
    }

    public void paint(Graphics g) {

        g.setColor(Color.RED);
        g.drawString("Red Text", 100, 100);

        g.setColor(Color.BLUE);
        g.drawString("Blue Text", 100, 130);

        g.setColor(Color.GREEN);
        g.drawString("Green Text", 100, 160);
    }

    public static void main(String[] args) {
        new q2();
    }
}