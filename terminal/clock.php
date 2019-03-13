<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div style="position: absolute; margin: -30px 0 0;">
      <table cellpadding="0" cellspacing="0" id="clock">
        <tbody>
          <tr>
            <td><div id="hours"></div></td>
            <td><div id="point">:</div></td>
            <td><div id="minutes"></div></td>
            <td>
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td><div id="daynumber"></div></td>
                    <td><div id="month"></div></td>
                  </tr>
                  <tr>
                    <td colspan="2"><div id="day"></div></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
      <script>
        function replace(type, value) {
          var exchange;
          if(type == "day") {
            switch(value) {
              case "Mon":
                exchange = "Montag";
                break;
              case "Tues":
                exchange = "Dienstag";
                break;
              case "Wed":
                exchange = "Mittwoch";
                break;
              case "Thurs":
                exchange = "Donnerstag";
                break;
              case "Fri":
                exchange = "Freitag";
                break;
              case "Sat":
                exchange = "Samstag";
                break;
              case "Sun":
                exchange = "Sonntag";
                break;
            }
          } else {
            switch(value) {
              case "Jan":
                exchange = "Januar";
                break;
              case "Feb":
                exchange = "Februar";
                break;
              case "Mar":
                exchange = "März";
                break;
              case "Apr":
                exchange = "April";
                break;
              case "May":
                exchange = "Mai";
                break;
              case "Jun":
                exchange = "Juni";
                break;
              case "Jul":
                exchange = "Juli";
                break;
              case "Aug":
                exchange = "August";
                break;
              case "Sep":
                exchange = "September";
                break;
              case "Oct":
                exchange = "Oktober";
                break;
              case "Nov":
                exchange = "November";
                break;
              case "Dec":
                exchange = "Dezember";
                break;
            }
          }
          return exchange;
        }
        function update(now, time) {
          document.getElementById("hours").innerHTML = time[0];
          document.getElementById("minutes").innerHTML = time[1];
          document.getElementById("daynumber").innerHTML = now[2];
          document.getElementById("month").innerHTML = now[1];
          document.getElementById("day").innerHTML = now[0];
        }
        var now = new Date().toString().split(" ");
        now[0] = replace("day", now[0]);
        now[1] = replace("month", now[1]);
        time = now[4].split(":");
        update(now, time);

        var x = setInterval(function() {
          var now = new Date().toString().split(" ");
          now[0] = replace("day", now[0]);
          now[1] = replace("month", now[1]);
          time = now[4].split(":");
          update(now, time);
        }, 1000);
      </script>
      <style>
        #day{height:44px;color:Black;width:204px;font-size:25pt;font-family:arial}
        #month{height:40px;color:Black;width:160px;font-size:23pt;font-family:arial}
        #daynumber{height:50px;color:Black;width:60px;font-size:32pt;font-family:arial;text-align:center}
        #minutes{height:130px;color:Black;width:120px;font-size:70pt;font-family:arial}
        #hours{height:130px;color:Black;width:100px;font-family:arial;font-size:70pt;text-align:right}
        #point{height:140px;color:Black;width:25px;font-family:arial;font-size:70pt;animation:blinker 1.5s linear infinite;}
        @keyframes blinker{50%{opacity:0;}}
      </style>
  </body>
</html>
