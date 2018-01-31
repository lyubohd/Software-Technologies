import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

public class P18_Phonebook {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        Map<String, String> phonebook = new HashMap<>();

        while (true) {
            String input = scan.nextLine();

            if (input.equals("END")) {
                break;
            }

            String[] tokens = input.split(" ");
            if (tokens[0].equals("A")) {
                String name = tokens[1];
                String number = tokens[2];

                phonebook.put(name, number);
            } else if (tokens[0].equals("S")) {
                String name = tokens[1];

                if (phonebook.containsKey(name)) {
                    System.out.println(String.format("%s -> %s", name, phonebook.get(name)));
                } else {
                    System.out.println(String.format("Contact %s does not exist.", name));
                }
            }
        }
    }
}
