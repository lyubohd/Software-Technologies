import java.util.Arrays;
import java.util.Scanner;

public class P09_MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int number;
        int bestNumber = numbers[0];
        int numberCount = 0;
        int bestNumberCount = 0;

        for (int i = 0; i < numbers.length; i++) {
            number = numbers[i];
            for (int j = i; j < numbers.length; j++) {
                if (number == numbers[j]) {
                    numberCount++;
                }
            }
            if (numberCount > bestNumberCount) {
                bestNumberCount = numberCount;
                bestNumber = number;
            }
            numberCount = 0;
        }
        System.out.println(bestNumber);
    }
}
