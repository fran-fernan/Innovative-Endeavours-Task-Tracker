<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Erindale Transition Skills app</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

</head>

<body>

    <?php
        $defaultOpen = "defaultOpen";
        if (isset($_REQUEST['result'])) {
            if ($_REQUEST['result'] == "success") {
                $defaultOpen = "";
                $defaultOpenSuccess = "defaultOpen";
            } else if ($_REQUEST['result'] == "fail") {
                echo "Soemthing went wrong.";
            }
        } else {
            
        }
        ?>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">&nbsp;&nbsp;&nbsp;Innovative Endeavors Task Tracker</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="tablinks" onclick="openTab(event, 'tasks')" id="<?php echo $defaultOpen; ?>">tasks</a>
                </li>
                <li><a class="tablinks" onclick="openTab(event, 'history')"
                        id="<?php echo $defaultOpenSuccess; ?>">history</a></li>
                <li><a class="tablinks" onclick="openTab(event, 'admin')">admin</a></li>
            </ul>
        </div>
    </nav>

    <div id="tasks" class="tabcontent">
        <div class="container jobs row">
            <form action="submit-job.php" method="post">
                <div class="input-field col s2">
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Zayanna" onclick="NameRequired()"
                                required />
                            <span class="black-text" style="font-size:16px;">Zayanna</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Ackum" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Ackum</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Mahnoor" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Mahnoor</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Christa" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Christa</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Tarik" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Tarik</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Aisha" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Aisha</span>
                        </label></p>
                </div>
                <div class="input-field col s5">
                    <div class="input-field col s6">
                        <input name="jobbox" id="last_name" type="text" class="validate">
                        <label for="last_name">Task Number</label>
                    </div>
                </div>
                <div class="input-field col s5">
                    <center><input type="submit" class="button" id="button" value="Start Timer" disabled></center>

                </div>
                <div class="col s12">
                    <center>
                        <h1>00:00:00</h1>
                    </center>
                </div>

            </form>
        </div>
    </div>
    </div>

    <div id="history" class="tabcontent">
        <h5>
            <center>What skill did you do today?</center>
        </h5>
        <?php
        require_once 'config.php';

        $week = date("W");

        $query = "Select * from tblEFSE;";
        $result = mysqli_query($conn, $query);

        echo "<h6><table id='jobs' data-vertable='ver5'>";
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

        //Raham
        echo "<tr><td>Raham</td>";
        $query = "Select * from tblEFSE where name='Raham' and day='Mon' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Raham' and day='Tue' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Raham' and day='Wed' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Raham' and day='Thu' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Raham' and day='Fri' and week='" . $week . "' group by job;";
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
        
        //Ghazi
        echo "<tr><td class='corner3'>Ghazi</td>";
        $query = "Select * from tblEFSE where name='Ghazi' and day='Mon' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ghazi' and day='Tue' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ghazi' and day='Wed' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ghazi' and day='Thu' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ghazi' and day='Fri' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td class='corner4'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td></tr>";
        
        //Ala
        echo "<tr><td class='corner3'>Ala</td>";
        $query = "Select * from tblEFSE where name='Ala' and day='Mon' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ala' and day='Tue' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ala' and day='Wed' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ala' and day='Thu' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Ala' and day='Fri' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td class='corner4'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td></tr>";
        
        //Dana
        echo "<tr><td class='corner3'>Dana</td>";
        $query = "Select * from tblEFSE where name='Dana' and day='Mon' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Dana' and day='Tue' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Dana' and day='Wed' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Dana' and day='Thu' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td>";

        $query = "Select * from tblEFSE where name='Dana' and day='Fri' and week='" . $week . "' group by job;";
        $result = mysqli_query($conn, $query);
        echo "<td class='corner4'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['job'] . "</br>";
        }
        echo "</td></tr>";

        echo "</table></h6>";
        ?>
    </div>

    <div id="admin" class="tabcontent">
        <h4 style="text-align:center;">Sign in</h4>
        <div class="loginDiv">
            <div class="login1">
                <form action="submit-login.php">
                    <label class="loginlabel">Username:&nbsp;
                        <input type="text" name="username"></br></br></label>
                    <label class="loginlabel">Password:&nbsp;
                        <input type="text" name="password"></label>
            </div>
            <div class="login2">
                <div style="line-height:150%;"><br></div>
                <input type="submit" value="Login" class="loginbutton" id="loginbutton">
                </form>
            </div>
            <div style="line-height:2400%;"><br></div>
        </div>
        <p style="text-align:right;">Programmed by: Francival Fernandez</p>
    </div>

    <script>
    //alert("System upgrade in progress");
    function NameRequired() {
        document.getElementById('button').disabled = false;
    }

    /*function Check() {
     document.getElementById("button").disabled = false;
     
     if (document.getElementById("otherradio").checked == true) {
     document.getElementById('jobbox').setAttribute('required', 'required');
     document.getElementById('jobbox').style.border = "2px solid black";
     } else {
     document.getElementById('jobbox').style.border = "1px solid black";
     }
     
     }*/

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

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('select').formSelect();
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });
    </script>



</body>

</html>