function storingObjects(input) {
    let students = [];

    for (let i = 0; i < input.length; i++) {
        let tokens = input[i].split(" -> ");

        let name = tokens[0];
        let age = Number(tokens[1]);
        let grade = Number(tokens[2]);

        let student = {};
        student.name = name;
        student.age = age;
        student.grade = grade;

        students.push(student);
    }

    for (let student of students){
        console.log(`Name: ${student.name}`);
        console.log(`Age: ${student.age}`);
        console.log(`Grade: ${student.grade.toFixed(2)}`);
    }
}

storingObjects(["Pesho -> 13 -> 6.00",
    "Ivan -> 12 -> 5.57",
    "Toni -> 13 -> 4.90"]);