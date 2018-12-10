<?php
         $MyUsername = "root";  // enter your username for mysql
         $MyPassword = "root";  // enter your password for mysql
         $MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server
        $MyDatabase = "attendance";

         $conn = mysqli_connect($MyHostname , $MyUsername, $MyPassword, $MyDatabase);
        
?>