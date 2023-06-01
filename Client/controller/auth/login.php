<?php       
if(isset($_SESSION['user'])){
    header('Location: home.php');
}
    include '../../model/config.php';
    include '../../model/login.php';
    $err = '';
// if (isset($_POST["btn_login"])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();

        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $isUser  = checkUser($email,  $pass);
        if ($email == '' && $pass == '') {
            $err = 'Vui lòng không bỏ trống';
        } 
        else if (is_array($isUser)) {
            $_SESSION['user'] = $isUser;
            $err = '';
            $yourURL="../../view/client.php";
            echo ("<script>location.href='$yourURL'</script>");
        } 
        else {
            $err = "Tên tài khoản hoặc mật khẩu sai";
        }
    }
?>