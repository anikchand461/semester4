import java.awt.*;

class q4 extends Frame {

    q4() {

        setLayout(new GridLayout(4, 2));

        add(new Label("First Name"));
        add(new TextField());

        add(new Label("Last Name"));
        add(new TextField());

        add(new Label("Date of Birth"));
        add(new TextField());

        add(new Button("Submit"));
        add(new Button("Reset"));

        setSize(400, 200);
        setVisible(true);
    }

    public static void main(String[] args) {
        new q4();
    }
}