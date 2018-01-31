function printNumbersInReversedOrder(numbers) {
    for (let i = numbers.length - 1; i >= 0; i--) {
        console.log(numbers[i]);
    }
}

printNumbersInReversedOrder([1, 2, 3, 4, 5]);