i=0;
function myFunction(x) {
// TODO: i == 0 verschönern
  if(i == 0){
    x.classList.toggle("change");
    document.getElementById("mySidenav").style.width = "calc(100% - 28px)";
    i++;
  }else{
    x.classList.toggle("change");
    document.getElementById("mySidenav").style.width = "0";
    i--;
  }
}
