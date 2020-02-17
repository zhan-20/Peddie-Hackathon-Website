<?php
session_start();
//$email1=$_SESSION['email'];
//$teamname1=$_SESSION['teamname'];
//$member11=$_SESSION['member1'];
//$member21=$_SESSION['member2'];
//$member31=$_SESSION['member3'];
//$permissions1=$_SESSION['permission'];
if(isset($_POST['login_user'])) {
    global $email;
global $teamname;
global $teamleader;
global $member1;
global $member2;
global $member3;
global $permissions;
$email=$_POST['email'];
    $teamname=$_POST['teamname'];
    $teamleader=$_POST['leader'];
    $member1=$_POST['member1'];
    $member2="NONE";
    if (isset($_POST['member2'])) {
        $member2=$_POST['member2'];
    }
    $member3="NONE";
    if (isset($_POST['member3'])) {
        $member3=$_POST['member3'];
    }
    /*if (isset($_POST['permit'])){
      if ($_POST['permit']=="Yes")
      $permissions=0;
      else $permissions=1;
      }
   */
  $permissions=1;
    $link2 = mysqli_connect('localhost', 'root', 'THaaa123+', 'Peddie_Hackathon');
    $query2="INSERT INTO Peddie_Hackathon(Email, TeamName, TeamLeader, TeamMember1, TeamMember2, TeamMember3, PermissionsSigned) VALUES ('$email', '$teamname', '$teamleader', '$member1', '$member2', '$member3', $permissions)";
    if(mysqli_query($link2, $query2)){
        $message12="Record Inserted Successfully";
        echo "<script type='text/javascript'>alert('$message12');</script>";
        echo "<script type='text/javascript'>window.location.replace('./index.html');</script>";
        die();
    } else {
    $message12="ERROR: Could not able to execute $query2. " . mysqli_error($link2);
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    mysqli_close($link2);
}
?>