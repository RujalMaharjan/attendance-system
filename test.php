
<html>
    <head>
        <title>Attendance Record</title>
        <style type="text/css">
            .table_titles, .table_cells_odd, .table_cells_even {
                    padding-right: 20px;
                    padding-left: 20px;
                    color: #000;
            }
            .table_titles {
                color: #FFF;
                background-color: #666;
            }
            .table_cells_odd {
                background-color: #CCC;
            }
            .table_cells_even {
                background-color: #FAFAFA;
            }
            table {
                border: 2px solid #333;
            }
            body { font-family: "Trebuchet MS", Arial; }
        </style>
    </head>

    <body>
    
        <h1>Attendance Record</h1>

        </br>
            <?php

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "attendance";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connecti   on failed: " . $conn->connect_error);
                }
                // Retrieve all records and display them
                $sql= "SELECT * FROM employee_record WHERE SN='12';";
                
                $result = $conn->query($sql);
                
                // Used for row color toggle
                $oddrow = true;

                // process every record
                
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        if ($oddrow) 
                        { 
                            $css_class=' class="table_cells_odd"'; 
                        }
                        else
                        { 
                            $css_class=' class="table_cells_even"'; 
                        }

                        $oddrow = !$oddrow;

                        echo '</br>';
                        echo '   </br>'.$row["SN"];
                        echo '   </br>'.$row["tdate"];
                        echo '   </br>'.$row["ttime"];
                        echo '   </br>'.$row["RFID"];
                        echo '</br>';
                    }
                }
                
            ?>
        </table>
    </body>
</html>