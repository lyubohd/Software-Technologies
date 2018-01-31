function capitalCaseWords(input) {
    let result = [];

    for (let i = 0; i < input.length; i++) {
        let words = input[i]
            .split(/\W+/)
            .filter(w => w.length > 0);

        for (let word of words) {
            if (word === word.toUpperCase()) {
                result.push(word);
            }
        }
    }
    console.log(result.join(", "));
}

capitalCaseWords(["We start by HTML, CSS, JavaScript, JSON and REST."]);