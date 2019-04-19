<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/mediaControl.css">
  </head>
  <body>
    <button id="cross" class="btn" data-toggle="modal" data-target="#logoutModal"></button>

    <form action="index.php" method="post">
      <div class="modal modal-wide fade" role="dialog" id="logoutModal">
        <div class="modal-dialog" style="width: 500px;">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Abmelden</h3>
              <button id="cross" class="btn"  data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="username" autocomplete="off" class="form-control company-color-border" placeholder="Benutzername" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" autocomplete="off" class="form-control company-color-border " placeholder="Passwort" required>
              </div>
            </div>

            <div class="modal-footer">
              <input type="submit" class="btn btn-lg company-color company-color-border" name="logout" value="Logout">
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
