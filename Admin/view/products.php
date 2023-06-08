<?php
include "../layout/header.php";
include "../model/config.php";
$query = "select *,loai_hang.ten_loai_hang from hang join loai_hang on  hang.id_loai_hang = loai_hang.id_loai_hang";
$hang = getAll($query);
?>

</div>
</div>
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Quản lý sản phẩm</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="admin.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Bảng</a></li>
                <li class="breadcrumb-item active">Sản phẩm</li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <div class="card card-table" style="display:inline-block ;">

                    <div class="btn" style="margin-left: 1030px; width: 200px; margin-top: 20px"><a
                            href="addProduct.php"><button>Thêm
                                Sản phẩm</button></a></div>

                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Ngày nhập</th>
                                    <th>Số lượng</th>
                                    <th>Mô tả</th>
                                    <th>Loai_hang</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hang as  $value) : ?>
                                <tr class="odd gradeX">
                                    <td style="width: 150px;"><?php echo $value["ten_hang"]?></td>
                                    <td>
                                        <img src="./assets/images/product/<?php echo $value['hinh_anh'] ?>" alt=""
                                            style="width:100px;">
                                    </td>
                                    <td><?php echo $value["gia"]?></td>
                                    <td class="center"><?php echo $value["ngay_nhap"]?></td>
                                    <td class="center"><?php echo $value["so_luong"]?></td>
                                    <td class="center" style="width: 330px;"><?php echo $value["mo_ta"]?></td>
                                    <td class="center"><?php echo $value["ten_loai_hang"]?></td>
                                    <td class="center">
                                        <a href="updateProduct.php?id=<?php echo $value["id"] ?>"><button
                                                class="update">Update</button></a>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa ??')"
                                            href="../controller/products/deleteProduct.php?id=<?php echo $value["id"] ?>"><button
                                                class="delete">Delete</button></a>
                                    </td>
                                </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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