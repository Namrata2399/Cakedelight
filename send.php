<?php
include 'connection.php';

$message= $_POST['message'];
$name =  $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$sql = "INSERT INTO  `mydata` (`message`,`name`,`email`,`subject`) VALUES('$message','$name','$email','$subject')";

$result = mysqli_query($conn,$sql);
if($result){
    echo "record added";

}
else{
    echo mysqli_error($conn);
}

?>
