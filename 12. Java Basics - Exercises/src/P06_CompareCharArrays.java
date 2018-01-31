import java.util.Scanner;

public class P06_CompareCharArrays {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String[] firstLine = scan.nextLine().split(" ");
        String first = String.join("", firstLine);
        String[] secondLine = scan.nextLine().split(" ");
        String second = String.join("", secondLine);

        int length = Math.min(first.length(), second.length());
        boolean isFinished = true;

        for (int i = 0; i < length; i++) {
            if (first.charAt(i) < second.charAt(i)) {
                System.out.println(first);
                System.out.println(second);
                isFinished = false;
                break;
            } else if (second.charAt(i) < first.charAt(i)) {
                System.out.println(second);
                System.out.println(first);
                isFinished = false;
                break;
            }
        }

        if (isFinished) {
            if (first.length() == length) {
                System.out.println(first);
                System.out.println(second);
            } else {
                System.out.println(second);
                System.out.println(first);
            }
        }
    }
}
