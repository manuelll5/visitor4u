//Beginn addLogin
function displayNone() {
  var displayNone = document.getElementById("displayNone");
  if (displayNone.style.display === "none") {
    displayNone.style.display = "";
  } else {
    displayNone.style.display = "none";
    
    admin_employee1.style.display = "none";
    admin_employee2.style.display = "none";
    terminal.style.display = "none";
    // TODO: Hier select option auf Benutzer setzten
  }
}
//Ende addLogin

//Beginn dropdownMenu
window.onload = function() {
  //Variablen deklaration
	var benutzer_dropdown = document.getElementById("benutzer_dropdown");
  var benutzer = document.getElementById("benutzer");
  var admin_employee1 = document.getElementById("admin_employee1");
  var admin_employee2 = document.getElementById("admin_employee2");
  var terminal = document.getElementById("terminal");
  //Beginn funktion zum auswählen Admin, Mitarneiter oder Terminal
	benutzer_dropdown.onchange = function() {
    benutzer.value = this.value;
		if (this.value == "Admin" || this.value == "Mitarbeiter") {
			if(this.value == "Admin") {
				document.getElementById("type").value = "Admin";
			} else {
				document.getElementById("type").value = "Mitarbeiter";
			}
			admin_employee1.style.display = "";
			admin_employee2.style.display = "";
			terminal.style.display = "none";
		} else if(this.value == "Terminal") {
			admin_employee1.style.display = "none";
			admin_employee2.style.display = "none";
			terminal.style.display = "";
		}
  }
}
