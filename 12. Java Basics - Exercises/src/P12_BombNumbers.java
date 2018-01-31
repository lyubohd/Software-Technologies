import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P12_BombNumbers {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        List<Integer> numbers = Arrays
                .stream(scan.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());
        int bomb = scan.nextInt();
        int power = scan.nextInt();

        for (int i = 0; i < numbers.size(); i++) {
            if (numbers.get(i) == bomb) {
                int leftTimes = Math.min(power, i);
                int rightTimes = Math.min(power, numbers.size() - i - 1);

                numbers.subList(i - leftTimes, i + rightTimes + 1).clear();
                i = 0;
            }
        }
        int sum = numbers.stream().mapToInt(Integer::intValue).sum();
        System.out.println(sum);
    }
}
