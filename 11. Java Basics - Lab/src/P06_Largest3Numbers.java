import java.util.Arrays;
import java.util.Comparator;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P06_Largest3Numbers {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine();
        List<Integer> nums = Arrays
                .stream(input.split(" "))
                .map(Integer::parseInt)
                .sorted(Comparator.reverseOrder())
                .collect(Collectors.toList());

        int count = Math.min(nums.size(), 3);
        for (int i = 0; i < count; i++) {
            System.out.println(nums.get(i));
        }
    }
}
