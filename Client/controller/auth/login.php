<?php       
if(isset($_SESSION['user'])){
    echo ("<script>location.href='http://localhost/Client/view/client.php'</script>");
}
    include '../../model/config.php';
    include '../../model/login.php';
    $err = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $isUser  = checkUser($email,  $pass);
        if ($email == '' && $pass == '') {
            $err = 'Vui lòng không bỏ trống';
        } 
        // kết quả trả về 1 mảng 
        else if (is_array($isUser)) {
            $_SESSION['user'] = $isUser;
            $check = $_SESSION['user'];
            $err = '';
            echo("<script>alert('Đăng nhập thành công')</script>");
            $yourURL="../../view/client.php";
            echo ("<script>location.href='$yourURL'</script>");
        } 
        else {
            $err = "Tên tài khoản hoặc mật khẩu sai";
        }
    }
?>