function printLines(input) {
    for (let i = 0; i < input.length; i++) {
        if (input[i] !== "Stop") {
            console.log(input[i]);
        } else {
            return;
        }
    }
}

printLines(["3", "6", "5", "4", "Stop", "10", "12"]);