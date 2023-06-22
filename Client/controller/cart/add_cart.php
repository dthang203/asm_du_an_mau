<?php
    session_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];

    if(isset($_POST['addcart'])){
        var_dump($_POST);
        $id=$_POST['id'];
        $hinh_anh=$_POST['image'];
        $ten_hang=$_POST['name'];
        $gia=$_POST['gia'];
        $so_luong=isset($_POST['so_luong']) ?  $_POST['so_luong'] : '1';
        $tong=$so_luong * $gia;
       
        if (count($_SESSION["cart"]) > 1){
            foreach ($_SESSION["cart"] as $index => $value){
                if($value['id'] == $id){
                    $_SESSION["cart"][$index]['so_luong'] = $so_luong;
                }
            }
        }
        $new_hang = array (
            'id'=>$id,
            'image'=>$hinh_anh,
            'name'=>$ten_hang,
            'gia'=>$gia,
            'so_luong'=>$so_luong,
            'tong'=>$tong
        );

        $_SESSION["cart"][] = $new_hang;
        
    }

    header("Location: ../../../../../Client/view/cart.php");
?>