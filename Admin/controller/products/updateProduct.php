<?php 
    include "../../model/config.php ";
    $name= $_POST["name"];
    $image = $_FILES["image"]["name"];
    $gia = $_POST["price"];
    $soluong = $_POST["so_luong"];
    $mota=  $_POST["mo_ta"];
    $ngay_nhap = $_POST["ngay_nhap"];
    $id_loai_hang = $_POST["id_loai_hang"];
    $id=$_POST["id"];
    $query = "UPDATE hang SET ten_hang= '$name', id_loai_hang = '$id_loai_hang',hinh_anh ='$image', gia ='$gia', ngay_nhap='$ngay_nhap',so_luong ='$soluong',mo_ta ='$mota'  where id=$id";
    connect($query);
    move_uploaded_file($_FILES["image_update"]["tmp_name"],"../../../Client/view/assets/img/".$_FILES["image_update"]["name"]);

    header("location:../../../../../Admin/view/products.php");
?>