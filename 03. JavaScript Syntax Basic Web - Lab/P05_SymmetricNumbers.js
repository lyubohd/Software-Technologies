function symmetricNumbers(number) {
    let result = [];
    for (let i = 1; i <= number; i++){
        let currentNumber = i.toString();

        let isPalindrome = true;
        for (let j = 0; j < currentNumber.length / 2; j++){
            let left = currentNumber[j];
            let right = currentNumber[currentNumber.length - 1 - j];

            if (left !== right){
                isPalindrome = false;
                break;
            }
        }
        if (isPalindrome) {
            result.push(i);
        }
    }
    console.log(result.join(" "));
}

symmetricNumbers(100);