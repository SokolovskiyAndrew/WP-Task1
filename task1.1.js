let figures = [5, 8, 1, 4, 9, 2, 10, 7, 3, 6];

for (let i = 0; i < figures.length; i++) {
    for (let j = 0; j < figures.length; j++) {
        if (figures[i] < figures[j]) {
            let task = figures[i];
            figures[i] = figures[j];
            figures[j] = task;
        }
    }
}

console.log(figures);