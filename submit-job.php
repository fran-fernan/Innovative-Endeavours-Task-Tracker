<?php

ob_start();
require_once 'config.php';

date_default_timezone_set(America / Toronto);

// read values from the form
$name = $_REQUEST['name'];
$task = $_REQUEST['task'];
date_default_timezone_set("America/Toronto");
$date = date("m-d-Y");
$startTime = $_REQUEST['startTime'];
$endTime = $_REQUEST['endTime'];

/*
echo "name: " . $name;
echo "\ntask: " . $task;
echo "\ndate: " . $date;
echo "\nstartTime: " . $startTime;
echo "\nendTime: " . $endTime;
*/
/*
  $index = array_search("other", $jobs);

  echo "name: " . $name . " jobs: " . $jobs . " otherjob: " . $other;
  print_r($jobs);

  echo "array: ";
  for ($i = 0; $i < count($jobs); $i++)
  echo $jobs[$i] . " | ";
  echo "<br>other: " . $other . "<br>index: " . $index;

  if ($index !== FALSE) {
  for ($i = 0; $i <= 15; $i++) {
  if ($other == $space) {
  $flag = 1;
  }
  $space .= " ";
  }
  if ($flag != 1)
  $jobs[$index] = $other;
  }
 */
/*
if ($jobs == "" && $other != "") {
    $query = "insert into tblEFSE (name, job, day, week) values ('$name', '$other', '$day', '$week')";
    $result = mysqli_query($conn, $query);
} else if ($jobs != "") {

    for ($i = 0; $i < count($jobs); $i++) {
        //if ($jobs[$i] !== "other") {
        $query = "insert into tblEFSE (name, job, day, week) values ('$name', '$jobs[$i]', '$day', '$week')";
        $result = mysqli_query($conn, $query);
        //}
    }
}
*/

//$query = "insert into tasks (name, task, date, time_start, time_end) values ($name, $task, $date, $startTime, $endTime)";
$query = "insert into tasks (name, task, date, time_start, time_end) values ('$name', $task, '$date', '$startTime', '$endTime')";
$result = mysqli_query($conn, $query);
/*
if ($result > 0)
    header("Location:index.php?result=success");
else
header("Location:index.php?result=fail");
*/
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Erindale Transition Skills app</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

</head>

<body>
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
    <div style="line-height:200%;">
        <br>
    </div>
    <div id="results" style="text-align:center;font-size:24px;">
    </div>
</body>
<script>
     document.getElementById("results").innerHTML="Task " + localStorage.getItem("task") + " was completed in " + localStorage.getItem("totalTime");
</script>
</html>