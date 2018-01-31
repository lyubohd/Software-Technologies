import java.util.Scanner;

public class P15_CensorEmailAddress {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String email = scan.nextLine();
        String[] emailTokens = email.split("@");
        String text = scan.nextLine();

        String censoredUserEmail = censoredEmail(emailTokens[0]);
        String replacedEmail = censoredUserEmail + "@" + emailTokens[1];

        text = text.replaceAll(email, replacedEmail);

        System.out.println(text);

    }

    private static String censoredEmail(String username) {
        int userNameLength = username.length();

        StringBuilder sb = new StringBuilder();

        for (int i = 0; i < userNameLength; i++) {
            sb.append("*");
        }
        return sb.toString();
    }
}
