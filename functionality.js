var message = [
  "S",
  "T",
  "E",
  "P",
  "H",
  "E",
  "N",
  "R",
  "E",
  "I",
  "M",
  "A",
  "N",
  "N",
  "S",
  "T",
  "P",
  "H",
  "R",
  "M",
  "A",
];
var chars = [];
var counter = 0;

function decrypt() {
  var name = document.getElementsByClassName("name")[0];
  var char = name.getElementsByClassName("chars");
  for (let i = 0, j = name.children.length; i < j - 1; i++) {
    let compareChar = char[i].innerHTML;
    if (compareChar != message[i]) {
      let randomNum = Math.floor(Math.random() * message.length);
      char[i].innerHTML = message[randomNum];
      counter = 0;
    } else {
      document.getElementsByClassName("chars")[i].style.borderColor =
        "transparent";
      document.getElementsByClassName("chars")[i].style.backgroundColor =
        "none";
      counter += 1;
    }
  }
}
