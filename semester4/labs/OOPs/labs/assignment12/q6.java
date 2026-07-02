import java.awt.*;

class q6 extends Frame {

    q6() {
        setSize(500, 500);
        setVisible(true);
    }

    public void paint(Graphics g) {

        // house body
        g.setColor(Color.YELLOW);
        g.fillRect(150, 200, 200, 100);

        // roof
        g.setColor(Color.ORANGE);
        int x[] = {150, 200, 300, 350};
        int y[] = {200, 120, 120, 200};
        g.fillPolygon(x, y, 4);

        // door
        g.setColor(Color.GREEN);
        g.fillRect(225, 220, 40, 80);

        // windows
        g.setColor(Color.CYAN);
        g.fillOval(170, 230, 40, 40);
        g.fillOval(290, 230, 40, 40);

        // pond
        g.setColor(Color.BLUE);
        g.fillOval(140, 350, 220, 40);
    }

    public static void main(String[] args) {
        new q6();
    }
}