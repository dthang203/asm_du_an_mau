<?php
function createAccount($email, $userName, $password){
    $sql = "INSERT INTO user (ten, mat_khau, tai_khoan, vai_tro, hinh)
     VALUES('$userName','$password','$email','user', 'default.jpg')";
    getAll($sql);
}


function checkEmail($email){
    $sql = "SELECT * FROM user WHERE tai_khoan = '$email'";
    return getOne($sql);
}

?>