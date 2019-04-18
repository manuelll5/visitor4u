window.onload = function()
{
  row = document.getElementById("row");
  document.getElementById("addrow").onclick = function()
  {
    if(row.style.display == "none")
    {
      row.style.display = "table-row";
    }
    else
    {
      row.style.display = "none";
      admin_employee.style.display = "none";
      admin_employee2.style.display = "none";
      $(".admin_employee_input").prop("disabled", true).prop("required", false);
      terminal.style.display = "none";
      $(".terminal_input").prop("disabled", true).prop("required", false);
    }
    return false;
  }

  benutzer_dropdown = document.getElementById("benutzer_dropdown");
  benutzer = document.getElementById("benutzer");
  admin_employee = document.getElementById("admin_employee");
  admin_employee2 = document.getElementById("admin_employee2");
  terminal = document.getElementById("terminal");
  benutzer_dropdown.onchange = function()
  {
    benutzer.value = this.value;
    if (this.value == "Admin" || this.value == "Mitarbeiter")
    {
      if(this.value == "Admin")
      {
        document.getElementById("type").value = "Admin";
      }
      else
      {
        document.getElementById("type").value = "Mitarbeiter";
      }
      admin_employee.style.display = "table-row";
      admin_employee2.style.display = "table-row";
      $(".admin_employee_input").prop("disabled", false).prop("required", true);
      terminal.style.display = "none";
      $(".terminal_input").prop("disabled", true).prop("required", false);
    }
    else if(this.value == "Terminal")
    {
      admin_employee.style.display = "none";
      admin_employee2.style.display = "none";
      $(".admin_employee_input").prop("disabled", true).prop("required", false);
      terminal.style.display = "table-row";
      $(".terminal_input").prop("disabled", false).prop("required", true);
    }
  }
}
