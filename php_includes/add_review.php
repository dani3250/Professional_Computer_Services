<?php
include 'db.php';

$tbl_review = 'tbl_review';
$id = $_GET['id'];
$cost = $_GET['cost'];
$review = $_GET['review'];
$sql = "INSERT INTO tbl_review (fk_comp_id,review_desc) VALUES('$id','$review')";
mysql_query($sql);


?>