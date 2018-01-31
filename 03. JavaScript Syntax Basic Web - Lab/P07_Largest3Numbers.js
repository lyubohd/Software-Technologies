function largestThreeNumbers(input) {
    let numbers = input.sort((a, b) => b - a);

    let count = Math.min(3, numbers.length);

    for (let i = 0; i < count; i++) {
        console.log(numbers[i]);
    }
}

largestThreeNumbers(["10", "30", "15", "20", "50", "5"]);