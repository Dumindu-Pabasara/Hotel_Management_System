<?php
session_start();
require_once('db.php');
if(isset($_GET['Name'])){
    $name=$_GET['Name'];
    $query="DELETE FROM `web` WHERE 'Name'='$name'";
    $delete=mysqli_query($con,$query);
}

$query="select * from web";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Richwin Hotel Admin Panel </title>