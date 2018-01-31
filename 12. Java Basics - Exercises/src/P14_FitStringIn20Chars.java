import java.util.Scanner;

public class P14_FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine();

        if (input.length() > 20) {
            input = input.substring(0, 20);
            System.out.println(input);
        } else if (input.length() < 20) {
            padRight(input, 20, '*');
        }
    }

    private static void padRight(String input, int symbols, char c) {
        StringBuilder sb = new StringBuilder();
        sb.append(input);
        for (int i = input.length(); i < symbols; i++) {
            sb.append(c);
        }
        System.out.println(sb);
    }
}
