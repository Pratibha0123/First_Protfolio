<?php
$servername ="localhost";
$username="root";
$password ="";


$conn = mySqli_connect($servername,$username,$password);

if(!$conn){
    die("sorry we are failed : ".mySqli_connect_error());
}else{
    echo "connection was successful";
}
?>