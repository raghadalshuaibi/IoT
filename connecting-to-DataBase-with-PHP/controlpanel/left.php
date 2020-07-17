<?php
$connect= mysqli_connect('localhost','root','' , 'controlpanel');
if (!$connect){
    echo 'connection error !!' . mysqli_connect_error();
}
 $sql = "INSERT INTO `buttons` (L) VALUES ('L');";
        mysqli_query($connect, $sql);
echo "L";
?>
