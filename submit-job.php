<?php

ob_start();
require_once 'config.php';

date_default_timezone_set(America / Toronto);

// read values from the form
$name = $_REQUEST['name'];
$jobs = $_REQUEST['jobs'];
date_default_timezone_set("America/Toronto");
$day = date("D");
$week = date("W");
$other = $_REQUEST['jobbox'];
$space = "";
$flag = 0;
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

if ($other != "") {
    array_push($jobs, $other);
}

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

if ($result > 0)
    header("Location:index.php?result=success");
else
header("Location:index.php?result=fail");
?>