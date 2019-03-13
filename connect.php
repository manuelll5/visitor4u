<?php
    // activate error reporting
    error_reporting(E_NOTICE | E_ALL);
    if (!ini_get('display_errors')) {
        ini_set('display_errors', '1');
    }

    /*
        creates a connection to the database and returns it
    */
    function createConnection() {
        // mysql database connection information
        $host   = 'localhost';
        $user   = 'root';
        $pw     = '';
        $db     = 'anmeldung';
        
        $error_connection   = 'Verbindung kann nicht hergestellt werden';
        $error_access       = "Zugriff zur DB $db ist nicht möglich";
        $error_insert       = 'Daten wurden nicht korrekt eingegeben!! Bitte Daten prüfen';

         // create the connection
        $conn = new mysqli($host, $user, $pw);

        // check the connection
        if ($conn->connect_error) {
            die ($error_connection . $conn->connect_error);
        }
        
        // select the correct database
        mysqli_select_db($conn, $db) or die($error_access.mysql_errno());
       
        // return the connection
        return $conn; 
    }
?>