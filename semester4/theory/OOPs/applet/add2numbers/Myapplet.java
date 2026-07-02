import java.applet.Applet;
import java.awt.Graphics;

/*
<applet code="Myapplet" height="100" weight="200">
</applet>
*/

public class Myapplet extends Applet {
  public void paint(Graphics g) {
    g.drawLine(20, 20, 100, 80);
  }
}

