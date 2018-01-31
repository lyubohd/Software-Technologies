import java.util.Arrays;
import java.util.Scanner;

public class P08_MaxSequenceOfIncreasingElements {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int length = 1;
        int bestLength = 1;
        int index = 0;

        for (int i = 0; i < numbers.length - 1; i++) {
            int curr = numbers[i];
            int next = numbers[i + 1];

            if (next > curr) {
                length++;
                if (length > bestLength) {
                    bestLength = length;
                    index = i + 1;
                }
            } else {
                length = 1;
            }
        }

        index = index - bestLength + 1;
        String[] result = new String[bestLength];

        for (int i = 0; i < bestLength; i++) {
            String numAsStr = Integer.toString(numbers[index]);
            result[i] = numAsStr;
            index++;
        }

        System.out.println(String.join(" ", result));
    }
}
