<?php
include "../../model/config.php";

$Name = $_POST["name"];
$id_sp = $_POST["id_sp"];
$date=$_POST["date"];
$cmt = $_POST["comment"];
echo "$Name";
$query = "INSERT into comment(cmtdesc,ngay_nhap,name_user,id_sp) values('$cmt','$date','$Name','$id_sp') ";
echo $Name;
connect($query);
header("location:../../../../../Client/view/detail.php?id=$id_sp");

?>