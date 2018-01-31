import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.*;
import java.util.function.Function;

public class P25_BookLibraryModification {
    public static void main(String[] args) throws ParseException {
        Scanner scan = new Scanner(System.in);

        int count = Integer.parseInt(scan.nextLine());
        DateFormat formatter = new SimpleDateFormat("dd.MM.yyyy");

        Map<String, Date> data = new HashMap<>();
        for (int i = 1; i <= count; i++) {
            String line = scan.nextLine();
            String[] tokens = line.split(" ");

            String bookName = tokens[0];
            Date releaseDate = formatter.parse(tokens[3]);

            data.put(bookName, releaseDate);
        }

        Date filterData = formatter.parse(scan.nextLine());

        data.entrySet()
                .stream()
                .filter(b -> b.getValue().after(filterData))
                .sorted(Comparator
                        .comparing((Function<Map.Entry<String, Date>, Date>) Map.Entry::getValue)
                        .thenComparing(Map.Entry::getKey))
                .forEach(kvp -> {
                    System.out.println(String.format("%s -> %s", kvp.getKey(), formatter.format(kvp.getValue())));
                });
    }
}
