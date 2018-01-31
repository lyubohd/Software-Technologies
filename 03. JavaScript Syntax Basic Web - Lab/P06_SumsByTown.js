function sumsByTown(input) {
    let towns = input.map(JSON.parse);
    let townSum = {};

    for (let town of towns) {
        if (town.town in townSum) {
            townSum[town.town] += town.income;
        } else {
            townSum[town.town] = town.income;
        }
    }

    let sortedTowns = Object.keys(townSum).sort();

    for (let town of sortedTowns) {
        console.log(`${town} -> ${townSum[town]}`);
    }
}
