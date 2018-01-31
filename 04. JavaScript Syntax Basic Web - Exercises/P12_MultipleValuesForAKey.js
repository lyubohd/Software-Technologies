function multipleValuesForAKey(input) {
    let dict = [];
    for (let i = 0; i < input.length - 1; i++) {
        let tokens = input[i].split(" ");
        let key = tokens[0];
        let value = tokens[1];

        if (key in dict) {
            dict[key].push(value);
        } else {
            dict[key] = [];
            dict[key].push(value);
        }
    }

    let filterKey = input[input.length - 1];

    if (filterKey in dict) {
        for (let value of dict[filterKey]) {
            console.log(value);
        }
    } else {
        console.log("None")
    }
}

multipleValuesForAKey(["key value",
    "key eulav",
    "test tset",
    "key"
]);