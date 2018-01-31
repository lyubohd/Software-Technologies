import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class P19_PhonebookUpgrade {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        Map<String, String> phonebook = new TreeMap<>();

        while (true) {
            String input = scan.nextLine();

            if (input.equals("END")) {
                break;
            }

            String[] tokens = input.split(" ");
            if (tokens[0].equals("A")) {
                String name = tokens[1];
                String numbers = tokens[2];

                phonebook.put(name, numbers);
            } else if (tokens[0].equals("S")) {
                String name = tokens[1];
                if (phonebook.containsKey(name)) {
                    System.out.println(String.format("%s -> %s", name, phonebook.get(name)));
                } else {
                    System.out.println(String.format("Contact %s does not exist.", name));
                }
            } else if (tokens[0].equals("ListAll")) {
                for (String name : phonebook.keySet()) {
                    System.out.println(String.format("%s -> %s", name, phonebook.get(name)));
                }
            }
        }
    }
}
