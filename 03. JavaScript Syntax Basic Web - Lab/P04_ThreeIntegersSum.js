function threeIntegersSum(input) {
    let tokens = input[0].split(' ').map(Number);

    let num1 = tokens[0];
    let num2 = tokens[1];
    let num3 = tokens[2];

    if (num1 + num2 === num3) {
        if (num1 <= num2) {
            console.log(`${num1} + ${num2} = ${num3}`);
        } else {
            console.log(`${num2} + ${num1} = ${num3}`);
        }
    } else if (num1 + num3 === num2) {
        if (num1 <= num3) {
            console.log(`${num1} + ${num3} = ${num2}`);
        } else {
            console.log(`${num3} + ${num1} = ${num2}`);
        }
    } else if (num2 + num3 === num1) {
        if (num2 <= num3) {
            console.log(`${num2} + ${num3} = ${num1}`);
        } else {
            console.log(`${num3} + ${num2} = ${num1}`);
        }
    } else {
        console.log("No")
    }
}

threeIntegersSum(["30 20 10"]);