import java.util.Scanner;

public class P03_ThreeIntegersSum {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int a = scan.nextInt();
        int b = scan.nextInt();
        int c = scan.nextInt();

        if (!checkThreeIntegers(a, b, c) && !checkThreeIntegers(a, c, b) && !checkThreeIntegers(c, b, a)) {
            System.out.println("No");
        }
    }

    private static boolean checkThreeIntegers(int num1, int num2, int num3) {
        if (num1 + num2 != num3) {
            return false;
        } else {
            if (num1 < num2) {
                System.out.println(String.format("%d + %d = %d", num1, num2, num3));
            } else {
                System.out.println(String.format("%d + %d = %d", num2, num1, num3));
            }
        }
        return true;
    }
}
