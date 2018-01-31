import java.util.Scanner;

public class P01_VariableInHexadecimalFormat {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String numb = scan.nextLine();

        System.out.println(Integer.parseInt(numb, 16));
    }
}
