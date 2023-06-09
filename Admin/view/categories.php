<?php
include "../layout/header.php";
include "../model/config.php";
$query = "select * from loai_hang";
$loai_hang = getAll($query);
?>
</div>
</div>
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Loại hàng</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="admin.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Bảng</a></li>
                <li class="breadcrumb-item active">Loại hàng</li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <div class="card card-table" style="display:inline-block ;">

                    <div class="btn" style="margin-left: 1030px; width: 200px; margin-top: 20px"><a
                            href="addCate.php"><button>Thêm Loại
                                Hàng</button></a></div>

                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>Tên loại hàng</th>
                                    <th class="center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($loai_hang as $value) : ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $value["ten_loai_hang"] ?></td>
                                    <td class="center">
                                        <a href="updateCate.php?id=<?php echo $value["id_loai_hang"] ?>"><button
                                                class="update">Update</button></a>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa ??')"
                                            href="../controller/categories/delete.php?id=<?php echo $value["id_loai_hang"] ?>"><button
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