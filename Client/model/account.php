<?php
//kiểm tra trạng thái đăng nhập của người dùng
if(!empty($_SESSION)){
    $idUser=$_SESSION['user']['id'];
} else{
    $idUser=0;
}
//lấy thông tin người dùng
    function getOneInfor($id){
        $sql = "SELECT * FROM user WHERE id = '$id'";
        return GetOne($sql);
    }
   
    $currentAcc = getOneInfor($idUser);
?>