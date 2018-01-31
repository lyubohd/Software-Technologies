function multiplyDivideANumber(nums) {
    let n = Number(nums[0]);
    let x = Number(nums[1]);
    let operation;
    if (x >= n) {
        operation = x * n;
    } else {
        operation = n / x;
    }
    return operation;
}

console.log(multiplyDivideANumber([144, 12]));