<?php
$connect= mysqli_connect('localhost','root','' , 'controlpanel');
if (!$connect){
    echo 'connection error !!' . mysqli_connect_error();
}
 $sql = "INSERT INTO `buttons` (B) VALUES ('B');";
        mysqli_query($connect, $sql);
echo "B";
?>
