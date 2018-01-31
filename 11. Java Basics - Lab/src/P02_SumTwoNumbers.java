import java.util.Scanner;

public class P02_SumTwoNumbers {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        double a = Double.parseDouble(scan.nextLine());
        double b = Double.parseDouble(scan.nextLine());

        double sum = a + b;
        System.out.println(sum);
    }
}
