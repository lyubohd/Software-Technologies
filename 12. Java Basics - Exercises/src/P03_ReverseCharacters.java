import java.util.Scanner;

public class P03_ReverseCharacters {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        char a = scan.nextLine().charAt(0);
        char b = scan.nextLine().charAt(0);
        char c = scan.nextLine().charAt(0);

        System.out.println("" + c + b + a);
    }
}
