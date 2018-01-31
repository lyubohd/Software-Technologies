function keyValuePairs(input) {
    let dict = [];
    for (let i = 0; i < input.length - 1; i++) {
        let tokens = input[i].split(" ");
        let key = tokens[0];
        let value = tokens[1];

        dict[key] = value;
    }

    let filterKey = input[input.length - 1];

    if (filterKey in dict) {
        console.log(dict[filterKey]);
    } else {
        console.log("None");
    }
}

keyValuePairs(["key value",
    "key eulav",
    "test tset",
    "key"]);