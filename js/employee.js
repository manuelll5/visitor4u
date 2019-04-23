// function displayNone() {
//   var x = document.getElementsByClassName('displayNone');
//   if (x.style.display === "none") {
//     x.style.display = "";
//   } else {
//     x.style.display = "none";
//   }
// }

// BUG: Mehrere id´s noch nicht möglich
function displayNone() {
  var x = document.getElementById("displayNone");
  if (x.style.display === "none") {
    x.style.display = "";
  } else {
    x.style.display = "none";
  }
}
