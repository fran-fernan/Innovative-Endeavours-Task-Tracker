<?php
// write PHP code that checks if a session exists
session_start();
//if the session doesn't exist
if (!isset($_SESSION['username'])) {
    //redirect back to the login page
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Erindale Fleece Social Enterprise</title>

        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>

        <?php
        $week = date("W") - 1;
        $defaultOpen = "defaultOpen";
        if (isset($_REQUEST['result'])) {
            $week = $_REQUEST['result'];
        }
        ?>

        <div id="wrapper">

            <?php
            require_once 'header.php';
            ?>

        </div>

        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'previous')" id="<?php echo $defaultOpen; ?>">Previous Weeks</button>
            <button class="tablinks" onclick="openTab(event, 'delete')">Delete Entries</button>
        </div>

        <div id="previous" class="tabcontent">
            <h3>Week <?php echo $week; ?></h3>
            <h5 style="text-align:center;">Current week is week <?php echo date("W"); ?></h5>
            <div style="display:flex;justify-content:center;">
                <form action="submit-job.php">
                    <div style="padding: 0px 700px 0px 0px"><input type="button" value="previous" onclick="previousWeek()"></div>
                </form>
                <div><input type="button" value="next"></div>
            </div>

            <?php
            require_once 'config.php';

            $query = "Select * from tblEFSE;";
            $result = mysqli_query($conn, $query);

            echo "<h5><table id='jobs' data-vertable='ver5'>";
            echo "<tr><th class='corner1'></th>";
            echo "<th>Monday</th>";
            echo "<th>Tuesday</th>";
            echo "<th>Wednesday</th>";
            echo "<th>Thursday</th>";
            echo "<th class='corner2'>Friday</th></tr>";

            //Zayanna
            echo "<tr><td>Zayanna</td>";
            $query = "Select * from tblEFSE where name='Zayanna' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Zayanna' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Zayanna' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Zayanna' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Zayanna' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            //Ackum
            echo "<tr><td>Ackum</td>";
            $query = "Select * from tblEFSE where name='Ackum' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ackum' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ackum' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ackum' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ackum' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            //Mahnoor
            echo "<tr><td>Mahnoor</td>";
            $query = "Select * from tblEFSE where name='Mahnoor' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Mahnoor' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Mahnoor' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Mahnoor' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Mahnoor' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            //Christa
            echo "<tr><td>Christa</td>";
            $query = "Select * from tblEFSE where name='Christa' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Christa' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Christa' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Christa' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Christa' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            //Tarik
            echo "<tr><td>Tarik</td>";
            $query = "Select * from tblEFSE where name='Tarik' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Tarik' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Tarik' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Tarik' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Tarik' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            //Aisha
            echo "<tr><td>Aisha</td>";
            $query = "Select * from tblEFSE where name='Aisha' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Aisha' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Aisha' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Aisha' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Aisha' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            //Ibrahim
            echo "<tr><td class='corner3'>Ibrahim</td>";
            $query = "Select * from tblEFSE where name='Ibrahim' and day='Mon' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ibrahim' and day='Tue' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ibrahim' and day='Wed' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ibrahim' and day='Thu' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td>";

            $query = "Select * from tblEFSE where name='Ibrahim' and day='Fri' and week='" . $week . "' group by job;";
            $result = mysqli_query($conn, $query);
            echo "<td class='corner4'>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['job'] . "</br>";
            }
            echo "</td></tr>";

            echo "</table></h5>";
            ?>

        </div>

        <div id="delete" class="tabcontent">
            delete

        </div>

    </body>

    <script>
        function previousWeek() {
            alert("jo");
            $week = $week - 1;

        }

        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</html>