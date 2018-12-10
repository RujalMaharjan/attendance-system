<?php
    include_once 'connect.php';

?>

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

        <table border="0" cellspacing="0" cellpadding="4">
            <tr>
                <td class="table_titles">SN</td>
                <td class="table_titles">Date</td>
                <td class="table_titles">Time</td>
                <td class="table_titles">NAME</td>
                <td class="table_titles">rfid</td>
            </tr>
            <?php

                // Retrieve all records and display them
                $sql= "SELECT * FROM employee_record;";
                $result = mysqli_query($conn, $sql);

                // Used for row color toggle
                $oddrow = true;

                // process every record
                $check =mysqli_num_rows($result);
                if ($check > 0){
                    while($row = mysqli_fetch_assoc($result) ){
                        if ($oddrow)
                        {
                            $css_class=' class="table_cells_odd"';
                        }
                        else
                        {
                            $css_class=' class="table_cells_even"';
                        }

                        $oddrow = !$oddrow;

                        echo '<tr>';
                        echo '   <td'.$css_class.'>'.$row["SN"].'</td>';
                        echo '   <td'.$css_class.'>'.$row["tdate"].'</td>';
                        echo '   <td'.$css_class.'>'.$row["ttime"].'</td>';
                        echo '   <td'.$css_class.'></td>';
                        echo '   <td'.$css_class.'>'.$row["RFID"].'</td>';
                        echo '</tr>';
                    }
                }

            ?>
        </table>
    </body>
</html>
