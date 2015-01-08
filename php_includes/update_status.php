<?php
session_start();
include 'db.php';


$status = $_GET['status'];
$id = $_GET['id'];
mysql_query("UPDATE tbl_mock SET fk_status='$status' WHERE id=$id");

$_SESSION["onsite_message"] = "The complaint has been moved to on-site work";
header ("location: ../offSiteWork.php");
?>