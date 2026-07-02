

class BookTheaterSeat {
    int total_seats = 10;
    void BookSeat(int seats) {
        if (total_seats > seats) {
            System.out.println("seats booked syccessfully");
            total_seats -= seats;
            System.out.println("seats left : " + total_seats);
        } else {
            System.out.println("seats cannot be popped");
            System.out.println("seats left" + total_seats);
        }
    }
}

public class MovieBookApp extends Thread {
    static BookTheaterSeat b;
    int seats;
    public void run() {
        b.BookSeat(seats);
    }

    public static void main(String[] args) {
        b = new BookTheaterSeat();
        
        MovieBookApp anik = new MovieBookApp();
        anik.seats = 7;
        anik.start();

        MovieBookApp oneek = new MovieBookApp();
        oneek.seats = 6;
        oneek.start();
    }
}