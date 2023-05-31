<?php
include "../layout/header.php";
include "../model/config.php";
function addproduct($productDesc, $productImage, $productName, $gia, $ngay_nhap, $so_luong, $id_loai_hang)
{
    $sql = "INSERT into hang (ten_hang, hinh_anh,gia,ngay_nhap,so_luong,mo_ta,id_loai_hang) values(
        '$productName','$productImage','$gia','$ngay_nhap','$so_luong','$productDesc','$id_loai_hang') ";
    getAll($sql);
}
$err = "";
if (isset($_POST["add_product"])) {
    $productName = $_POST["name"];
    $gia = $_POST["price"];
    $so_luong = $_POST["so_luong"];
    $ngay_nhap = $_POST["ngay_nhap"];
    $productDesc = $_POST["mo_ta"];
    $productImage = $_FILES["image"]["name"];
    $id_loai_hang = $_POST["id_loai_hang"];
    if (!$productDesc || !$productImage || !$id_loai_hang || !$productName || !$so_luong    || !$gia   || !$ngay_nhap) {
        $err = 'Vui lòng không bỏ trống';
    } else {
        $err = "";

        $target_dir = "./assets/images/product";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        addproduct($productDesc, $productImage, $productName, $gia, $ngay_nhap, $so_luong, $id_loai_hang);
        $yourURL = "http://localhost/Admin/view/products.php";
        echo ("<script>location.href='$yourURL'</script>");
    }
}
$query = "select * from loai_hang";
$loai_hang = getAll($query);




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
                <li class="breadcrumb-item"><a href="hang.php">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Thêm sản phẩm</li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">
        <div>
            <form method="post" id="form_prd" enctype="multipart/form-data" action="../view/addProduct.php">
                <?php echo $err != "" ?  "
                                        <div class='alert alert-danger' role='alert'>
                                            Lỗi: $err
                                        </div>
                                    "
                    :

                    ''
                ?>
                <div class="row d-flex flex-wrap">
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Ngày nhập</label>
                            <div class="form-control">
                                <input type="date" name="ngay_nhap">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Đơn giá</label>
                            <input type="text" name="price" id="price" class="form-control">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Loại hàng</label>
                            <select name="id_loai_hang" id="id_cate" class="form-control">
                                <?php foreach ($loai_hang as $values) { ?>
                                <option value="<?php echo $values['id_loai_hang'] ?>">
                                    <?php echo $values['ten_loai_hang'] ?> </option>
                                <?php } ?>
                            </select>
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Số lượng</label>
                            <input type="text" name="so_luong" id="so_luong" class="form-control">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Mô tả</label>
                        <textarea name="mo_ta" id="mo_ta" class="form-control" cols="30" rows="10"></textarea>
                        <div class="form-message text-danger mt-2"></div>
                    </div>
                </div>
                <div class="mt-5 mb-5">
                    <input type="submit" name="add_product" value="Submit" class="btn btn-outline-success">
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