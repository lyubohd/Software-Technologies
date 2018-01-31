import java.util.Scanner;

public class P13_ReverseString {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        char[] input = scan.nextLine().toCharArray();
        printReverse(input);
    }

    private static void printReverse(char[] input) {
        for (int i = input.length - 1; i >= 0; i--) {
            System.out.print(input[i]);
        }
    }
}
