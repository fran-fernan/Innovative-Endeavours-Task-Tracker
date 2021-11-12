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
    <div style="line-height:100%;">
        <br>
    </div>

    <div id="tasks" class="tabcontent">
        <div class="container jobs row">
            <form action="submit-job.php" method="post">
                <div class="input-field col s2">
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Christian" onclick="NameRequired()"
                                required />
                            <span class="black-text" style="font-size:16px;">Christian</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Ghazi" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Ghazi</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Jessie" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Jessie</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Violeta" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Violeta</span>
                        </label></p>
                    <p><label>
                            <input class="with-gap" name="name" type="radio" value="Zayanna" onclick="NameRequired()" />
                            <span class="black-text" style="font-size:16px;">Zayanna</span>
                        </label></p>
                </div>
                <div class="input-field col s5">
                    <div style="line-height:150%;">
                        <br>
                    </div>
                    <div class="input-field col s6">
                        <input name="task" id="task_box" type="text" required>
                        <label for="task_box">Task Number</label>
                        <input type="hidden" id="startTime" name="startTime" value="00:00">
                        <input type="hidden" id="startTimeRaw" name="startTimeRaw" value="00:00">
                        <input type="hidden" id="endTime" name="endTime" value="00:00">
                        <input type="hidden" id="totalTime" name="totalTime" value="00:00">
                    </div>
                </div>
                <div class="input-field col s5">
                    <div style="line-height:150%;">
                        <br>
                    </div>
                    <center><a class="button" id="button" onclick="startTimer()">Start Timer</a></center>
                    <center><input type="submit" id="endButton" onclick="endTimer()" value="End Timer" style="display: none;"></center>

                </div>
                <div class="col s12">
                    <div style="line-height:250%;">
                        <br>
                    </div>
                    <center>
                        <h6 style="font-size: 120px;"><span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span></h6>
                    </center>
                </div>

            </form>
        </div>
    </div>

    <div id="history" class="tabcontent">
        <div class="container jobs row">
            <form method="post" action="header('Location:index.php?result=success')">
                <div class="input-field col s2">
                    <p><label>
                        <input class="with-gap" name="name" type="radio" value="Christian" onclick="NameRequired()"
                            required />
                        <span class="black-text" style="font-size:16px;">Christian</span>
                    </label></p>
                    <p><label>
                        <input class="with-gap" name="name" type="radio" value="Ghazi" onclick="NameRequired()" />
                        <span class="black-text" style="font-size:16px;">Ghazi</span>
                    </label></p>
                    <p><label>
                        <input class="with-gap" name="name" type="radio" value="Jessie" onclick="NameRequired()" />
                        <span class="black-text" style="font-size:16px;">Jessie</span>
                    </label></p>
                    <p><label>
                        <input class="with-gap" name="name" type="radio" value="Violeta" onclick="NameRequired()" />
                        <span class="black-text" style="font-size:16px;">Violeta</span>
                    </label></p>
                    <p><label>
                        <input class="with-gap" name="name" type="radio" value="Zayanna" onclick="NameRequired()" />
                        <span class="black-text" style="font-size:16px;">Zayanna</span>
                    </label></p>
                    <div style="line-height:150%;">
                        <br>
                    </div>
                    <input type="submit" class="button" style="padding: 8px 10px;font-size: 18px;background-color: #e57373" value="Pick Name">
                </div>
            </form>
            <?php
                require_once 'config.php';
        
                $query = "SELECT * from tasks;";
                $result = mysqli_query($conn, $query);

                echo "<div>";
                echo "<table style='table-layout: fixed;width:80%;'>";
                echo "<tr><th>Date</th>";
                echo "<th>Task</th>";
                echo "<th>Time Start</th>";
                echo "<th>Time Finish</th>";
                echo "<th>Time Total</th></tr>";
                
                $name = $_POST['name'];
                $query = "Select * from tasks where name='$name'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr style='background-color:#f0f0f0'><td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["task"] . "</td>";
                    $amPmStart = date("g:i:s a", strtotime($row["time_start"]));
                    echo "<td>" . $amPmStart . "</td>";
                    $amPmEnd = date("g:i:s a", strtotime($row["time_end"]));
                    echo "<td>" . $amPmEnd . "</td>";
                    $time_diff = strtotime($row["time_end"]) - strtotime($row["time_start"]);

                    echo "<td>" . gmdate("H:i:s", $time_diff) . "</td></tr>";
                }
                echo "</table>";
                echo "</div>";

            ?>
        </div>
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
        document.getElementById("endButton").style.display="none";
    });
    /*
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });
    */

    function startTimer() {
        document.getElementById("button").style.display="none";
        document.getElementById("endButton").style.fontSize = "26px"; 
        document.getElementById("endButton").style.display="inline-block";
        document.getElementById("endButton").style.padding="18px 25px";
        document.getElementById("endButton").style.cursor="pointer";
        document.getElementById("endButton").style.textAlign="center";
        document.getElementById("endButton").style.textDecoration="none";
        document.getElementById("endButton").style.outline="none";
        document.getElementById("endButton").style.color="#fff";
        document.getElementById("endButton").style.backgroundColor="rgb(193, 85, 85)";
        document.getElementById("endButton").style.border="none";
        document.getElementById("endButton").style.borderRadius="15px";
        document.getElementById("endButton").style.boxShadow="0 9px #999";

        //save start time to variable
        var d = new Date(); // for now
        d.getHours();
        d.getMinutes(); // =>  30
        d.getSeconds(); // => 51

        document.getElementById("startTimeRaw").setAttribute("value", d);
        document.getElementById("startTime").setAttribute("value", d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
        localStorage.setItem("startTime", d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
        localStorage.setItem("task", document.getElementById("task_box").value);
        
        //stopwatch
        var min = 0, sec = 0, hour = 0;

        setInterval(function(){
            if (sec > "59"){
                sec = 0;
                min++;
            }
            else{
                sec++;
            }
            if (min > "59"){
                min = 0;
                hour++;
            }
            document.getElementById("seconds").innerHTML = (sec).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
            document.getElementById("minutes").innerHTML = (min).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
            document.getElementById("hours").innerHTML = (hour).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
        }, 1000)
        
    }

    function endTimer() {
        //save end time to variable
        var d = new Date(); // for now
        d.getHours();
        d.getMinutes(); // =>  30
        d.getSeconds(); // => 51

        document.getElementById("endTime").setAttribute("value", d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
        localStorage.setItem("endTime", d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());

        //save total time to variable
        var startTime = Date.parse(document.getElementById("startTimeRaw").value)
        var totalTime = d - startTime;
        var convertedTime = new Date(totalTime).toISOString().slice(11,19);
        document.getElementById("totalTime").setAttribute("value", convertedTime);
        localStorage.setItem("totalTime", convertedTime);
        console.log("start time: " + document.getElementById("startTime").value);
        console.log("end time: " + document.getElementById("endTime").value);
        console.log("total time: " + convertedTime);
        console.log(totalTime);
    }
    
    </script>

</body>

</html>