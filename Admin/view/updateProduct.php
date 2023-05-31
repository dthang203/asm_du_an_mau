<?php
include "../layout/header.php";
include "../model/config.php";
$id= $_GET['id'];
$query = "select * from hang where id = $id";
$item = getOne($query);
$query1 = "select * from loai_hang";
$loai_hang = getAll($query1);
?>
</div>
</div>
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Cập nhập sản phẩm</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="admin.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="hang.php">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Cập nhập sản phẩm</li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">
        <div>
            <form method="post" id="form_prd" enctype="multipart/form-data"
                action="../controller/products/updateProduct.php">
                <div class="row d-flex flex-wrap">
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Ngày nhập</label>
                            <div class="form-control">
                                <input type="date" required name="ngay_nhap" value="<?php echo $item["ngay_nhap"] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form1" hidden>
                            <input type="text" name="id" value="<?php echo $item["id"] ?>" hidden>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $item["ten_hang"] ?>">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="image" id="image" class="form-control"
                                value="<?php echo $item["hinh_anh"] ?>">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Đơn giá</label>
                            <input type="text" name="price" id="price" class="form-control" required
                                value="<?php echo $item["gia"] ?>">
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
                            <input type="text" name="so_luong" id="so_luong" class="form-control" required
                                value="<?php echo $item["so_luong"] ?>">
                            <div class="form-message text-danger mt-2"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Mô tả</label>
                        <textarea name="mo_ta" required id="mo_ta" class="form-control" cols="30"
                            rows="10"><?php echo $item["mo_ta"] ?></textarea>
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