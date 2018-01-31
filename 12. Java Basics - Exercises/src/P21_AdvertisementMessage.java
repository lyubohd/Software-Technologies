import java.util.Random;
import java.util.Scanner;

public class P21_AdvertisementMessage {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String[] phrases = {"Excellent product.",
                "Such a great product.",
                "I always use that product.",
                "Best product of its category.",
                "Exceptional product.",
                "I can't live without this product."};
        String[] events = {"Now I feel good.",
                "I have succeeded with this product.",
                "Makes miracles. I am happy of the results!",
                "I cannot believe but now I feel awesome.",
                "Try it yourself, I am very satisfied.",
                "I feel great!"};
        String[] author = {"Diana", "Petya", "Stella",
                "Elena", "Katya", "Iva", "Annie", "Eva"};
        String[] cities = {"Burgas", "Sofia", "Plovdiv", "Varna", "Ruse"};

        int msgCount = Integer.parseInt(scan.nextLine());

        Random random = new Random();

        for (int i = 0; i < msgCount; i++) {
            String randomMsg = randomStr(phrases, random) + " " +
                    randomStr(events, random) + " " +
                    randomStr(author, random) + " - " +
                    randomStr(cities, random);

            System.out.println(randomMsg);
        }
    }

    private static String randomStr(String[] phrases, Random random) {
        int insex = random.nextInt(phrases.length);
        return phrases[insex];
    }
}
