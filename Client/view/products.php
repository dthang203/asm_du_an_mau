<?php
  include "layout/navbar/navbar.php";
  include "../model/config.php";
//lấy tất cả categories
function getCategory()
{
    $sql = 'SELECT * FROM loai_hang';
    return getAll($sql);
}

//tìm categories theo id
function findCategory($id)
{
    $sql = "SELECT * FROM hang WHERE id_loai_hang  ='$id'";
    return getAll($sql);
}
$allCate = getCategory();

//kiểm tra trên url có cate không
$cate = isset($_GET['cate']) ? $_GET['cate'] : "all";
if($cate == "all"){
    $sql = "select * from hang";
    $hang = getAll($sql);
}else{
    $sql = "select * from hang where id_loai_hang = '$cate'";
    $hang = getAll($sql);
}


?>
<div class="">
    <section class="py-11 bg-light-gradient border-bottom border-white border-5">
        <div class="bg-holder overlay overlay-light"
            style="background-image:url(assets/img/banner_pducts.avif);background-size:cover;object-fit: cover;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row flex-center">
                <div class="col-12 mb-10">
                    <div class="d-flex align-items-center flex-column">
                        <h1 class="fw-bold fs-lg-4">Our Products</h1>
                        <h1 class="" style="font-size: 18px;font-style: italic;">Exclusively designed for you</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- sidebar + content -->
<section class="">
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <div class="col-lg-3">
                <!-- Toggle button -->
                <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span>Show filter</span>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent1" style="border:none">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item" style="border:none">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-dark bg-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"
                                    style="background-color: white !important; border-bottom:1px solid #ccc;">
                                    Categories
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne">
                                <div class="accordion-body" style="padding:0">
                                    <ul class="list-unstyled" style="margin-left: 20px;">
                                        <li><a href='?cate=all'
                                                style="font-size: 16px;padding:15px 8px; border-bottom: 1px solid #ccc; color:#6e757c !important"
                                                class="active d-block text-dark text-decoration-none">All </a></li>
                                        <?php foreach ($allCate as $value) : ?>
                                        <li>
                                            <a href="?cate=<?php echo $value['id_loai_hang'] ?>"
                                                style="font-size: 16px;padding:15px 8px; border-bottom: 1px solid #ccc; color:#6e757c !important"
                                                class="active d-block text-dark text-decoration-none"><?php echo $value['ten_loai_hang'] ?>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <!-- content -->
            <div class="col-lg-9">
                <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                    <!-- <strong class="d-block py-2">32 Items found </strong> -->
                    <!-- input -->
                    <div class="ms-auto d-flex gap-2 align-items-center">
                        <div class="btn-group shadow-0 border">
                            <a class="btn btn-light" style="border:none" [class.active]="typeList"
                                (click)="changeListColumn()" title="List view">
                                <i class="fa fa-bars fa-lg"></i>
                            </a>

                        </div>
                    </div>
                </header>
                <div>
                    <div class="row">
                        <?php foreach ($hang as $value) : ?>
                        <div class="col-md-12  justify-content-center mb-3">
                            <div class="card shadow-0 border rounded-3">
                                <div class="card-body">
                                    <div class="row g-0">

                                        <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                            <div
                                                class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                                <img [routerLink]="'/products/'+item?._id"
                                                    src="./assets/img/<?php echo $value['hinh_anh'] ?>" class="w-100" />
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-5 col-sm-7">

                                            <h2
                                                style="padding:0;margin:0; width: 400px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <a
                                                    href="./detail.php?id=<?php echo $value["id"] ?>"><?php echo $value["ten_hang"] ?></a>
                                            </h2>
                                            <div class="d-flex flex-row">
                                                <div class="text-warning mb-1 me-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>

                                                </div>

                                            </div>

                                            <p class="text mb-4 mb-md-0">
                                                Description: <?php echo $value["mo_ta"] ?>
                                            </p>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-sm-5">
                                            <div class="d-flex align-items-center gap-2">
                                                <h2 class="price" style="margin:0;color:#ed1d24">Gia:
                                                    $<?php echo $value["gia"] ?></h2>
                                            </div>
                                            <h6 class="text-success">Free shipping</h6>
                                            <div class="mt-4 d-flex ">
                                                <a href="./detail.php?id=<?php echo $value["id"] ?>">
                                                    <button class="btn btn-primary shadow-0" style="margin-right: 10px;"
                                                        name="addcart">Buy
                                                        this</button>
                                                </a>
                                                <!-- <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                                                        class="fas fa-heart fa-lg px-1"></i> <i
                                                        class="fa-regular fa-heart"></i> </a> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>

                </div>

                <hr />

                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li *ngFor='let page of totalPages' class="page-item" routerLink="/products"
                            [queryParams]="{page: page}"><a class="page-link" routerLink="/products">1</a></li>
                        <li class="page-item">
                            <a (click)="nextPage()" class="page-link" routerLink="/products"
                                [queryParams]="{ page: currentPage} " aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Pagination -->
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<!-- Footer -->
<?php
  include "layout/footer/footer.php";
?>