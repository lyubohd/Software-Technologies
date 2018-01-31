import java.util.Scanner;

public class P10_IndexOfLetters {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < 26; i++) {
            sb.append((char) ('a' + i));
        }

        char[] input = scan.nextLine().toLowerCase().toCharArray();

        for (char currentChar : input) {

            int index = sb.indexOf(String.valueOf(currentChar));

            System.out.println(String.format("%c -> %d", currentChar, index));
        }
    }
}
