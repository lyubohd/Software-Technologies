import java.util.Arrays;
import java.util.Scanner;

public class P07_MaxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] numbers = Arrays.stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int start = numbers[0];
        int len = 1;
        int bestStart = 0;
        int bestLen = 0;

        for (int pos = 1; pos < numbers.length; pos++) {
            if (start == numbers[pos]) {
                len++;
            } else {
                start = numbers[pos];
                len = 1;
            }
            if (len > bestLen) {
                bestLen = len;
                bestStart = start;
            }
        }
        for (int i = 0; i < bestLen; i++) {
            System.out.print(bestStart + " ");
        }
    }
}
