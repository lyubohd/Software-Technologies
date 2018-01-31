import java.util.Arrays;
import java.util.Scanner;

public class P11_EqualSums {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        boolean findSum = false;

        for (int i = 0; i < numbers.length; i++) {
            if (numbers.length == 1) {
                System.out.println("0");
                findSum = true;
                break;
            }

            int leftSum = 0;
            int rightSum = 0;

            if (i == 0) {
                leftSum = 0;
            } else {
                leftSum = getLeftSum(numbers, i);
            }

            if (i == numbers.length - 1) {
                rightSum = 0;
            } else {
                rightSum = getRightSum(numbers, i + 1);
            }

            if (leftSum == rightSum) {
                System.out.println(i);
                findSum = true;
                break;
            }
        }
        if (!findSum) {
            System.out.println("no");
        }
    }

    private static int getLeftSum(int[] nums, int index) {
        int sum = 0;
        for (int i = 0; i < index; i++) {
            sum += nums[i];
        }
        return sum;
    }

    private static int getRightSum(int[] nums, int index) {
        int sum = 0;
        for (int i = index; i < nums.length; i++) {
            sum += nums[i];
        }
        return sum;
    }
}
