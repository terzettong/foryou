<?php
    $mysqli = require __DIR__ . "/database.php";

$id = $_GET['type_id'];
// $data = null;
$year_id = $_GET['year_id'];


$getData = mysqli_query($con, "SELECT count(*) as maxNo FROM account_details WHERE service ='{$id}' AND year ='{$year_id}'   ");
$query = mysqli_fetch_assoc($getData);
$userNo = $query['maxNo'];

$love='I LOVE YOU';
echo $userNo;