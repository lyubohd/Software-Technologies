import java.util.Scanner;
import java.util.TreeMap;

public class P07_SumsByTown {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int n = Integer.parseInt(scan.nextLine());

        TreeMap<String, Double> sumsByTown = new TreeMap<>();

        for (int i = 1; i <= n; i++) {
            String[] tokens = scan.nextLine().split("\\|");

            String town = tokens[0].trim();
            double income = Double.parseDouble(tokens[1].trim());

            sumsByTown.putIfAbsent(town, 0.0);
            sumsByTown.put(town, sumsByTown.get(town) + income);
        }

        for (String key : sumsByTown.keySet()) {
            System.out.println(key + " -> "+ sumsByTown.get(key));
        }
    }
}
