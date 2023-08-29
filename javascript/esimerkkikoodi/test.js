let scores = [
    ["Mary Sue", 66, 87, 78],
    ["John Doe", 55, 68, 74],
    ["Jane Doe", 79, 92, 98]
];



console.log(scores[0][0]);

console.log(scores[scores.length-1][(scores[scores.length-1]).length-1]);

const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799};
console.log(student.birthYear);

scores.unshift(["Milly Mae", 76, 87, 92]);
scores.push(["Ted Tyler", 54, 62, 84]);
console.log(scores);
console.log(scores[scores.length-1][(scores[scores.length-1]).length-1]);

scores.forEach((score) => {
    let average = (score[1] + score[2] + score[3]) / 3;
    score.push(average);
});
console.log(scores);
scores.forEach((score) => {
    score.forEach((item) => {
        console.log(item);
    })
})

console.log(typeof(this));