import java.util.Scanner;

public class P17_ChangeToUppercase {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String text = scan.nextLine();

        while (true) {
            int startIndex = text.indexOf("<upcase>");
            int endIndex = text.indexOf("</upcase>");

            if (startIndex == -1 || endIndex == -1) {
                break;
            }

            startIndex += "<upcase>".length();

            String oldText = "<upcase>" + text.substring(startIndex, endIndex) + "</upcase>";
            String replacer = text.substring(startIndex, endIndex).toUpperCase();

            text = text.replaceAll(oldText, replacer);
        }

        System.out.println(text);
    }
}
