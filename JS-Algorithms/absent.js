// REAL LIFE EXAMPLE: MAG ABSENT O INDI
// Kung may balatian, mag absent ako
// Kung wala, indi ako mag absent (mag eskwela ako)

const readline = require("readline");
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question("May balatian ka da? (huo/oo / indi/wala) ", (answer) => {
    let sagot = answer.trim().toLowerCase();
    let mayBalatian = sagot === "huo" || sagot === "oo" || sagot === "yes";

    if (mayBalatian) {
        console.log("Mag absent ko, indi ko mag eskwela.");
    } else {
        console.log("Indi ako mag absent, mag eskwela gid ako.");
    }
    rl.close();
});