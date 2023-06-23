<?php
include "../layout/header.php";
include "../model/config.php";
$err ="";
if (isset($_POST["add_cate"]))  {
    $name_cate = $_POST["name"];
    $err="";
    if ($name_cate == '') {
        $err = 'Vui lòng không bỏ trống';
        
    } 
    else {
        $err = "";
        $query = "insert into loai_hang(ten_loai_hang) values('$name_cate ') ";
        connect($query);

        $yourURL = "http://localhost/Admin/view/categories.php";
        echo ("<script>location.href='$yourURL'</script>");
    }
}
?>
?>
</div>
</div>
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Loại hàng</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="admin.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="loai_hang.php">Loại hàng</a></li>
                <li class="breadcrumb-item active">Thêm loại hàng</li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">
        <div>
            <form method="post" id="form_1" action="addCate.php">
                <?php echo $err != "" ?  "
                                        <div class='alert alert-danger' role='alert'>
                                            Lỗi: $err
                                        </div>
                                    "
                            :

                            ''
                        ?>
                <div class="d-flex justify-content-center">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <label for="name_cate" class="form-label">Tên danh mục</label>
                            <input type="text" name="name" id="name_cate" class="form-control">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="col-3">
                        <button class="btn btn-outline-success" name="add_cate" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="assets\lib\jquery\jquery.min.js" type="text/javascript"></script>
    <script src="assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets\js\app.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net\js\jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-bs4\js\dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-buttons\js\dataTables.buttons.min.js" type="text/javascript">
    </script>
    <script src="assets\lib\datatables\datatables.net-buttons\js\buttons.flash.min.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\jszip\jszip.min.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\pdfmake\pdfmake.min.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\pdfmake\vfs_fonts.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-buttons\js\buttons.colVis.min.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-buttons\js\buttons.print.min.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-buttons\js\buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-buttons-bs4\js\buttons.bootstrap4.min.js" type="text/javascript">
    </script>
    <script src="assets\lib\datatables\datatables.net-responsive\js\dataTables.responsive.min.js"
        type="text/javascript"></script>
    <script src="assets\lib\datatables\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dataTables();
    });
    </script>
    </body>

    </html>