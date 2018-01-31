package P23_AverageGrades;

public class Student {
    private String name;
    private double[] grades;
    private double averageGrades;

    public Student(String name, double[] grades, double averageGrades) {
        this.name = name;
        this.grades = grades;
        this.averageGrades = averageGrades;
    }

    public String getName() {

        return name;
    }

    public double[] getGrades() {
        return grades;
    }

    public double getAverageGrades() {
        return averageGrades;
    }
}
