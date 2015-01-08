<?php
session_start();
include 'db.php';

$id = $_GET['id'];
$collect_date = $_GET['clct_date'];
$brand = $_GET['brand'];
$model = $_GET['model'];
$serial = $_GET['serial'];
$estimate = $_GET['estmte'];
$remarks = $_GET['remarks'];

$sql = "UPDATE tbl_mock SET recieve_date='$collect_date', brand='$brand', model='$model', serial_no='$serial',estimation_cost='$estimate',remarks='$remarks'  WHERE id=$id";
mysql_query($sql);
$sql = "UPDATE tbl_mock SET fk_status='3' WHERE id=$id";
mysql_query($sql);

$_SESSION["update_message"] = "The complaint has been moved to on-site work";
header ("location: ../OnSiteWork.php");
?>