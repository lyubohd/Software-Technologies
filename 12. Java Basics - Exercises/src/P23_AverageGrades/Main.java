package P23_AverageGrades;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int studentCount = Integer.parseInt(scan.nextLine());

        ArrayList<Student> students = new ArrayList<>();
        for (int i = 1; i <= studentCount; i++) {
            String[] tokens = scan.nextLine().split(" ");

            String studentName = tokens[0];
            double[] studentGrades = Arrays
                    .stream(tokens)
                    .skip(1)
                    .mapToDouble(Double::parseDouble)
                    .toArray();
            double averageGrade = getAverageGrade(studentGrades);

            Student student = new Student(studentName, studentGrades, averageGrade);
            students.add(student);
        }

        students.stream()
                .filter(s -> s.getAverageGrades() >= 5.00)
                .sorted((a, b) -> {
                    int result = a.getName().compareTo(b.getName());

                    if (result == 0) {
                        result = Double.compare(b.getAverageGrades(), a.getAverageGrades());
                    }

                    return result;
                })
                .forEach(s -> {
                    System.out.println(String.format("%s -> %.2f", s.getName(), s.getAverageGrades()));
                });
    }

    private static double getAverageGrade(double[] studentGrades) {
        double averageGrade = 0.0;

        for (int i = 0; i < studentGrades.length; i++) {
            averageGrade += studentGrades[i];
        }

        averageGrade /= studentGrades.length;
        return averageGrade;
    }
}
