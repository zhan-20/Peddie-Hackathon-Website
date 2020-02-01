<?php
if (isset($_POST['login_user'])) {
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
    /*$permissions=1;
    if (isset($_POST['permit'])){
        if ($_POST['permit']=="Yes")
        $permissions=0;
        else $permissions=1;
    }
    */
    $link = mysqli_connect('localhost', 'root', 'THaaa123+', 'Peddie_Hackathon');
    //$query="INSERT INTO Peddie_Hackathon(Email, TeamName, TeamLeader, TeamMember1, TeamMember2, TeamMember3, PermissionsSigned) VALUES ('$email', '$teamname', '$teamleader', '$member1', '$member2', '$member3', $permissions)";
    $query="INSERT INTO Peddie_Hackathon(Email, TeamName, TeamLeader, TeamMember1, TeamMember2, TeamMember3) VALUES ('$email', '$teamname', '$teamleader', '$member1', '$member2', '$member3')";
    if(mysqli_query($link, $query)){
     echo "Records inserted successfully.";
    } else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
    }
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>Congratulations! You're in!</head>
</html>