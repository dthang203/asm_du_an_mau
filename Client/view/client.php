<?php
    include "layout/navbar/navbar.php";
    include "../model/config.php";
    $query = "select * from hang";
    $hang = getAll($query);
?>
<div class="">
    <section class="py-11 bg-light-gradient border-bottom border-white border-5">
        <div class="bg-holder overlay overlay-light"
            style="background-image:url(assets/img/header-bg.png);background-size:cover;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row flex-center">
                <div class="col-12 mb-10">
                    <div class="d-flex align-items-center flex-column">
                        <h1 class="fw-normal"> With an outstanding style, only for you</h1>
                        <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Exclusively designed for you</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0" id="header" style="margin-top: -23rem !important;">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/her.png"
                        width="790" alt="..." />
                    <div class="card-img-overlay d-flex flex-center">
                        <a class="btn btn-light" href="">For
                            Her</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/him.png"
                        width="790" alt="..." />
                    <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-light" href="">For Him
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">All Products</h5>
            </div>
            <div class="row">
                <?php foreach ($hang as $value) : ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid" style="border-radius: 5px; overflow: hidden; margin-bottom: 20px">
                        <div class="product-image">
                            <a href="./detail.php?id=<?php echo $value["id"] ?>" class="image">
                                <img class="pic-1" src="../../Client/view/assets/img/<?php echo $value["hinh_anh"] ?>">
                                <img class="pic-2" src="../../Client/view/assets/img/<?php echo $value["hinh_anh"] ?>">
                            </a>
                            <ul class="product-links">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="far fa-star"></li>
                                <li class="far fa-star"></li>
                            </ul>
                            <h3 class="title"><a
                                    href="./detail.php?id=<?php echo $value["id"] ?>"><?php echo $value["ten_hang"] ?></a>
                            </h3>
                            <div class="price"><?php echo $value["gia"] ?></div>
                        </div>
                    </div>


                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section>
    <div class="container">
        <div class="row h-100 g-0">
            <div class="col-md-6">
                <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                    <h4 class="text-800">Exclusive collection 2021</h4>
                    <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Be exclusive</h1>
                    <p class="mb-5 fs-5">The best everyday option in a Super Saver range within a reasonable price. It
                        is our responsibility to keep you 100 percent stylish. Be smart trendy with us.</p>
                    <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="#"
                            role="button">Explore</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/outfit.png"
                        alt="..." />
                    <div class="card-img-overlay bg-dark-gradient">
                        <div class="d-flex align-items-end justify-content-center h-100"><a
                                class="btn btn-lg text-light fs-4" href="" role="button">Outfit<svg
                                    class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-100 g-2 py-1">
            <div class="col-md-4">
                <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/vanity-bag.png"
                        alt="..." />
                    <div class="card-img-overlay bg-dark-gradient">
                        <div class="d-flex align-items-end justify-content-center h-100"><a
                                class="btn btn-lg text-light fs-4" href="" role="button">Vanity Bags<svg
                                    class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/hat.png"
                        alt="..." />
                    <div class="card-img-overlay bg-dark-gradient">
                        <div class="d-flex align-items-end justify-content-center h-100"><a
                                class="btn btn-lg text-light fs-4" href="" role="button">Hats<svg
                                    class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/high-heels.png"
                        alt="..." />
                    <div class="card-img-overlay bg-dark-gradient">
                        <div class="d-flex align-items-end justify-content-center h-100"><a
                                class="btn btn-lg text-light fs-4" href="" role="button">High Heels<svg
                                    class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

<section>
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Best Sellers</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php foreach ($hang as $value) : ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid" style="border-radius: 5px; overflow: hidden;margin-bottom: 20px">
                            <div class="product-image">
                                <a href="./detail.php?id=<?php echo $value["id"] ?>" class="image">
                                    <img class="pic-1"
                                        src="../../Client/view/assets/img/<?php echo $value["hinh_anh"] ?>">
                                    <img class="pic-2"
                                        src="../../Client/view/assets/img/<?php echo $value["hinh_anh"] ?>">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="far fa-star"></li>
                                    <li class="far fa-star"></li>
                                </ul>
                                <h3 class="title"><a
                                        href="./detail.php?id=<?php echo $value["id"] ?>"><?php echo $value["ten_hang"] ?></a></a>
                                </h3>
                                <div class="price"><?php echo $value["gia"] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0" id="outlet">
    <div class="container">
        <div class="row h-100 g-0">
            <div class="col-md-6">
                <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/summer.png"
                        alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                        <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                            <h1 class="fs-md-4 fs-lg-7 text-light">Summer of '21 </h1>
                        </div>
                    </div><a class="stretched-link" href=""></a>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="row h-100 g-0">
                    <div class="col-md-6 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                src="assets/img/sunglasses.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient rounded-0">
                                <div class="p-5 p-xl-5 p-md-0">
                                    <h3 class="text-light">Sunglasses</h3>
                                </div>
                            </div><a class="stretched-link" href=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                src="assets/img/footwear.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient rounded-0">
                                <div class="p-5 p-xl-5 p-md-0">
                                    <h3 class="text-light">Footwear</h3>
                                </div>
                            </div><a class="stretched-link" href=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                src="assets/img/hat-black-border.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient rounded-0">
                                <div class="p-5 p-xl-5 p-md-0">
                                    <h3 class="text-light">Hat</h3>
                                </div>
                            </div><a class="stretched-link" href=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                src="assets/img/watches.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient rounded-0">
                                <div class="p-5 p-xl-5 p-md-0">
                                    <h3 class="text-light">Watches</h3>
                                </div>
                            </div><a class="stretched-link" href=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section>
    <div class="container">
        <div class="row h-100 g-0">
            <div class="col-md-6">
                <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                    <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Gentle Formal Looks </h1>
                    <p class="mb-5 fs-5">We provide the top formal apparel package to make your job look confident and
                        comfortable. Stay connect.</p>
                    <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="" role="button">Explore
                            Collection</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-span h-100 text-white"><img class="card-img h-100"
                        src="assets/img/sharp-dress.png" alt="..." /><a class="stretched-link" href=""></a></div>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->

<section class="py-11 mt-5">
    <div class="bg-holder overlay overlay-0"
        style="background-image:url(assets/img/cta.png);background-position:center;background-size:cover;"></div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carousel slide carousel-fade" id="carouseCta" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row h-100 align-items-center g-2">
                                <div class="col-12">
                                    <div class="text-light text-center py-2">
                                        <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our Outlets in
                                        </h5>
                                        <h1 class="display-1 text-white fw-normal mb-8">London</h1><a
                                            class="btn btn-lg text-light fs-1" href="" role="button">See Addresses<svg
                                                class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="row h-100 align-items-center g-2">
                                <div class="col-12">
                                    <div class="text-light text-center py-2">
                                        <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our Outlets in
                                        </h5>
                                        <h1 class="display-1 text-white fw-normal mb-8">Bristol</h1><a
                                            class="btn btn-lg text-light fs-1" href="" role="button">See Addresses<svg
                                                class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="row h-100 align-items-center g-2">
                                <div class="col-12">
                                    <div class="text-light text-center py-2">
                                        <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our Outlets in
                                        </h5>
                                        <h1 class="display-1 text-white fw-normal mb-8">Birmingham</h1><a
                                            class="btn btn-lg text-light fs-1" href="" role="button">See Addresses<svg
                                                class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"><button class="carousel-control-prev" type="button"
                                data-bs-target="#carouseCta" data-bs-slide="prev"><span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                    class="visually-hidden">Previous</span></button><button
                                class="carousel-control-next" type="button" data-bs-target="#carouseCta"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Next </span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
  include "layout/footer/footer.php";
?>