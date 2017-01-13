<?php
// Usage without mysql_list_dbs()
$dbname = "mydb";
//$dbname='mysql';

$link = mysqli_connect('localhost', 'root', 'root',$dbname);
$sql= "Select * from product";
$result = mysqli_query($link,$sql);

$return_array = array();

while ($row = mysqli_fetch_array($result)) {
    $return_array[]=$row;
}

echo json_encode($return_array);

?>