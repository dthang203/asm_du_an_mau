<?php
    //kiểm tra người dùng có tồn tại chưa
    function checkUser($email,$pass){
        $sql = "SELECT * FROM user WHERE tai_khoan = '$email' AND mat_khau = '$pass'";
        $data = getOne($sql);
        return $data;
    }
?>