import java.util.Scanner;

public class P16_URLParser {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String[] input = scan.nextLine().split("://");

        String protocol = "";
        String server = "";
        String resourses = "";

        if (input.length > 1) {
            protocol = input[0];
            String[] tokens = input[1].split("/");

            server = tokens[0];
            resourses = getResources(tokens);
        } else {
            String[] tokens = input[0].split("/");

            server = tokens[0];
            resourses = getResources(tokens);
        }

        System.out.println(String.format("[protocol] = \"%s\"", protocol));
        System.out.println(String.format("[server] = \"%s\"", server));
        System.out.println(String.format("[resource] = \"%s\"", resourses));
    }

    private static String getResources(String[] tokens) {
        StringBuilder sb = new StringBuilder();

        for (int i = 1; i < tokens.length; i++) {
            if (i > 1) {
                sb.append("/");
            }
            sb.append(tokens[i]);
        }
        return sb.toString();
    }
}
