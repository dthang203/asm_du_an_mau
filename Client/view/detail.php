<?php
    include "layout/navbar/navbar.php";
    include "../model/config.php";
    include "../model/account.php";
    //lấy id của sản phẩm
    $id = $_GET['id'];
    $query = "select * from hang where id = $id";
    $hang = getOne($query);
    $date = date("Y-m-d");
    //lấy danh sách các bình luận liên quan đến sản phẩm dựa trên ID
    function getcmt($id){
    $sql = "SELECT * FROM comment WHERE id_sp  ='$id'";
    return getAll($sql);
    }
    $cmt= getcmt($id);
?>

<div class="container " style="margin-top: 120px">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                <div class="d-flex flex-column justify-content-center">
                    <div class="main_image"> <img style="width : 600px; margin: 20px 0px 20px 60px" name="image"
                            src="../../Client/view/assets/img/<?php echo $hang["hinh_anh"] ?>" alt="lỗi">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="../../Client/controller/cart/add_cart.php" method="POST">
                    <div class="px-3 right-side" style="margin-left: 30px;">
                        <input type="hidden" name="id" value="<?php echo $hang["id"] ?>">
                        <input type="hidden" name="image" value="<?php echo $hang["hinh_anh"] ?>">
                        <input type="hidden" name="name" value="<?php echo $hang["ten_hang"] ?>">
                        <input type="hidden" name="gia" value="<?php echo $hang["gia"] ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 style="color:#6e757c;font-size: 35px; margin: 150px 0 30px 0" name="name">
                                <?php echo $hang["ten_hang"] ?></h1>
                            <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="pr-3 content">
                            <p style="font-size: 15px;font-style: italic; height : 150px ">MÔ TẢ:
                                <?php echo $hang["mo_ta"] ?></p>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <i class="fa-solid fa-star" style="color: #f7bc3d;"></i>
                            <i class="fa-solid fa-star" style="color: #f7bc3d;"></i>
                            <i class="fa-solid fa-star" style="color: #f7bc3d;"></i>
                            <i class="fa-solid fa-star" style="color: #f7bc3d;"></i>
                            <i class="fa-solid fa-star" style="color: #f7bc3d;"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h3 style="margin: 0;color:#6e757c;">Price:</h3>
                            <h2 name="gia" style="color:#6e757c;">$<?php echo $hang["gia"] ?></h2>
                        </div>
                        <div class="mt-3 d-flex flex-column">
                            <!-- <h3 style="margin: 0;color:#6e757c;">Quantity:</h3> -->
                            <div style="margin-top: 10px;" class="d-flex gap-3">
                                <input name='so_luong' min="1"
                                    style="padding:10px;border-radius: 5px; max-width: 100px; border:1px solid #6e757c;outline: none; font-size: 16px;"
                                    value="1" type="number">
                                <button class="btn" style="color:#ec6761;background-color: #ec6761;color:white"
                                    name="addcart">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <!-- cmt  -->
    <!-- kiểm tra xem người dùng đăng nhập chưa -->
    <?php if (empty($_SESSION['user'])) { ?>
    <h4 style="margin-top: 60px">Bạn cần đăng nhập để thực hiện bình luận ! <a style="margin-top: 50px; color: #f7bc3d"
            href="./auth/login.php">Đăng nhập
            ngay</a></h4>
    <?php } else { ?>
    <div class="cmt">
        <h3 style="margin: 60px 0 30px 0;text-align: center;">Comment</h3>
        <form action=""></form>
        <!--fake form because form bị biến mất trong phần else -->
        <form class="form-contact comment_form w-100" action="../controller/comment/add_cmt.php" method="POST">
            <input type="hidden" value="<?php echo $currentAcc['ten'] ?>" name="name" id="name">
            <input type="hidden" value="<?php echo $hang["id"] ?>" name="id_sp" id="id">
            <input type="hidden" value="<?php echo $date ?>" name="date" id="id">
            <div style="display: flex; margin: 0 0 40px 320px">
                <input style="width: 654px" class="form-control border border-dark" name="comment" id="comment"
                    type="text" placeholder="Viết bình luận ">
                <input class="btn btn-outline-secondary" id="send_cmt" name="send_cmt" style="margin-left: 20px;"
                    type="submit" value="Send">
            </div>
        </form>
    </div>
    <?php } ?>
    <section style="background-color: #ad655f;">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="card text-dark">
                        <div class="card-body p-4">
                            <h4 class="mb-0">Recent comments</h4>
                            <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                            <?php foreach ($cmt as $value) : ?>
                            <div class="d-flex flex-start">
                                <div>
                                    <h6 class="fw-bold mb-1"><?php echo $value['name_user'] ?></h6>
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">
                                            <?php echo $value['ngay_nhap'] ?>
                                        </p>
                                    </div>
                                    <p class="mb-0">
                                        <?php echo $value['cmtdesc'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>

                        <hr class="my-0" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
  include "layout/footer/footer.php";
?>