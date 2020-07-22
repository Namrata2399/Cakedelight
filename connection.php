<?php
$server ='localhost';
$username='root';
$password='';
$dbName='data';

$conn = mysqli_connect($server,$username,$password,$dbName);
if($conn){
    echo "connection successful";
}
else{
    echo "error";
}

?>
