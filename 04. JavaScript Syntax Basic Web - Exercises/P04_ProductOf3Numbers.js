/**
 * @return {string}
 */
function productOf3Numbers(nums) {
    let x = Number(nums[0]);
    let y = Number(nums[1]);
    let z = Number(nums[2]);
    let output = "";
    let count = 0;
    if (x < 0) {
        count++;
    }
    if (y < 0) {
        count++;
    }
    if (z < 0) {
        count++;
    }
    if (count % 2 === 0) {
        output = "Positive";
    } else {
        output = "Negative";
    }
    return output;
}

console.log(productOf3Numbers([-3, -4, 5]));
