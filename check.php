<?php
require 'server.php';
session_start();

$sql1 = "SELECT room, teacher, batch, subject, day, time FROM `timetable` WHERE id='".$_SESSION['id']."';";
$result = $conn->query($sql1);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
    $room = $row['room'];
    $teacher = $row['teacher'];
    $batch = $row['batch'];
    $subject = $row['subject'];
    $day = $row['day'];
    $time = $row['time'];
	}
}else{
    $room = NULL;
    $teacher = NULL;
    $batch = NULL;
    $subject = NULL;
    $day = NULL;
    $time = NULL;
}

if (isset($_GET['room']))
{
    $room1 = $_GET['room'];
    $batch1 = $_GET['batch'];
    $day1 = $_GET['day'];
    $time1 = $_GET['time'];

    $sql1 = "SELECT id FROM `timetable` WHERE id='".$_SESSION['id']."' and room =".$room1." and batch =".$batch1." and day =".$day1." and time =".$time1.";";
    $result = $conn->query($sql1);
    if($result->num_rows>0){
        echo False;
    } else{
        echo True;
    }
}
elseif (isset($_GET['teacher']))
{
    $teacher1 = $_GET['teacher'];
    $batch1 = $_GET['batch'];
    $day1 = $_GET['day'];
    $time1 = $_GET['time'];

    $sql1 = "SELECT id FROM `timetable` WHERE id='".$_SESSION['id']."' and teacher =".$teacher1." and batch =".$batch1." and day =".$day1." and time =".$time1.";";
    $result = $conn->query($sql1);
    if($result->num_rows>0){
        echo False;
    } else{
        echo True;
    }
}
elseif (isset($_GET['batch']))
{
    $batch1 = $_GET['batch'];

    $sql1 = "SELECT day, time, subject, teacher, room FROM `timetable` WHERE id='".$_SESSION['id']."' and batch =".$batch1.";";
    $result = $conn->query($sql1);
    $myObject = new stdClass();
    $i = 0;
    $myJSON = NULL;
    if($result->num_rows>0){
        
        while($row = $result->fetch_assoc()){
            $i = $i+1;
            $myObject->$i = new stdClass();
            $myObject->$i->room = $row['room'];
            $myObject->$i->teacher = $row['teacher'];
            $myObject->$i->batch = $_GET['batch'];
            $myObject->$i->subject = $row['subject'];
            $myObject->$i->day = $row['day'];
            $myObject->$i->time = $row['time'];
            //      $myArray = array($room, $teacher, $batch, $subject,$day, $time);
            
            $myJSON = json_encode($myObject);
        }
    } else{
        $myJSON = NULL;
        echo $myJSON;
    }
    echo $myJSON;
}

?>