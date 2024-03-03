let div = document.getElementById("elem2");
let text = document.getElementById("inputText");

// let btnNew = document.getElementById("btnNew").onclick = RenewText;
// let btnAdd = document.getElementById("btnAdd").onclick = AddText;

function RenewText() {
    div.textContent = text.value;
    text.value = "";
}

function AddText() {
    div.textContent += text.value;
    text.value = "";
}