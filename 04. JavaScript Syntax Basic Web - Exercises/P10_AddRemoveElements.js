function addRemoveElements(input) {
    let arr = [];

    for (let i = 0; i < input.length; i++) {
        let tokens = input[i].split(" ");

        let cmd = tokens[0];

        if (cmd === "add") {
            let num = Number(tokens[1]);
            arr.push(num);
        } else {
            let index = Number(tokens[1]);
            arr.splice(index, 1);
        }
    }

    for (let num of arr) {
        console.log(num);
    }
}

addRemoveElements(["add 3", "add 5", "add 7", "remove 1"]);