let a = prompt("Введите число A:");
let first = parseInt(a, 10);
let b = prompt("Введите число B:");
let second = parseInt(b, 10);
if(!isNaN(first) && !isNaN(second)) {
    let result = first + second;
    alert(`A = ${a}\nB = ${b}\nA + B = ${result}`);
    console.log(`A = ${a}\nB = ${b}\nA + B = ${result}`);
}
else {
    alert("Ошибка");
    console.log("Ошибка");
}