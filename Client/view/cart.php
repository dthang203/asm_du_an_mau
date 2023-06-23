<?php
    include "layout/navbar/navbar.php";  
    //kiểm tra có tồn tại giỏ hàng hay ko
    //tính tổng
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $tong=0;
        foreach($cart as $value => $items){
         $tt=$items['gia'] * $items['so_luong'];
         $tong+=$tt;
        }
        //thay đổi số lượng
        if(isset($_POST['updated_quantity'])){
            $new_quantity = $_POST['updated_quantity'];
            $id = $_POST['id_updated'];
            foreach($_SESSION['cart'] as $key => $value) {
                if($value['id'] == $id){
                    $_SESSION['cart'][$key]['so_luong'] = $new_quantity;
                }
            }
        }
    }
    else {
        $cart=[];
        $tong=0;
        echo 'chua co gio hang';
    }
?>


<div class="container p-3 rounded cart" style='margin-top:100px'>
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2">
                <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span
                        class="ml-2">Continue Shopping</span></div>
                <hr>
                <h6 class="mb-0">Shopping cart</h6>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                        <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <?php foreach($cart as $value => $items) :?>
                <div class="d-flex  justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex gap-2 flex-row">
                        <td class="product-thumbnail">
                            <a href="#"><img style="width : 60px; margin: 0px 10px 0px 0px"
                                    src="../../Client/view/assets/img/<?= $items['image']?>" alt="cart-image"></a>
                        </td>
                        <div style="width: 150px" class="ml-2"><span
                                class="font-weight-bold d-block"><?= $items['name']?></span><span class="spec">Sản phẩm
                                chính hãng </span></div>
                    </div>
                    <div class="d-flex flex-row gap-5 align-items-center">
                        <span class="d-block ml-5 amount font-weight-bold">$ <?= $items['gia'] ?>
                        </span><i class="fa fa-trash-o ml-3 text-black-50"></i>
                        <form action="" onsubmit='return false' class='form_number'>
                            <input min='1' type="number" class='quantity' value="<?= $items['so_luong']?>"
                                style='max-width: 100px;'>
                            <input type="text" hidden class='id_update' value='<?= $items['id']?>'>

                        </form>
                    </div>
                    <div>
                        <span class="product-subtotal total">Total: <?= $items['gia'] * $items['so_luong'] ?> $</span>
                    </div>
                    <div>
                        <a onclick="return confirm('Bạn có chắc muốn xóa ??')"
                            href="../../Client/controller/cart/delete_cart.php?id=<?= $items['id']?>">
                            <button type="button" class="btn btn-primary">
                                Xoa
                            </button>
                        </a>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-info">
                <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img
                        class="rounded" src="https://i.imgur.com/WU501C8.jpg" width="30"></div><span
                    class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card"
                        value="payment" checked> <span><img width="30"
                            src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>

                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30"
                            src="https://img.icons8.com/officel/48/000000/visa.png" /></span> </label>

                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30"
                            src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span> </label>


                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30"
                            src="https://img.icons8.com/officel/48/000000/paypal.png" /></span> </label>
                <div><label class="credit-card-label">Name on card</label><input type="text"
                        class="form-control credit-inputs" placeholder="Name"></div>
                <div><label class="credit-card-label">Card number</label><input type="text"
                        class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                <div class="row">
                    <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text"
                            class="form-control credit-inputs" placeholder="12/24"></div>
                    <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text"
                            class="form-control credit-inputs" placeholder="342"></div>
                </div>
                <hr class="line">
                <div class="d-flex justify-content-between information">
                    <span>Subtotal</span><span class="total_all">$<?php echo $tong?></span>
                </div>
                <div class="d-flex justify-content-between information"><span>Total(Incl.
                        taxes)</span><span class="total_all">$<?php echo $tong?></span></div><button
                    class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button">
                    <div class='d-flex justify-content-between gap-3'>

                        <span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
  include "layout/footer/footer.php";
?>

<script>
const link = location.href;
let quantitys = document.querySelectorAll(".quantity");
let id = document.querySelectorAll('.id_update');
let total = document.querySelectorAll('.total')
let total_all = document.querySelectorAll('.total_all');
let amount = document.querySelectorAll('.amount')
console.log(amount)
quantitys.forEach((quantity, index) => {
    quantity.onchange = (e) => {
        $.ajax({
            type: "POST",
            url: link,
            data: {
                id_updated: id[index].value,
                updated_quantity: quantity.value,
            },
            success: function(res) {
                console.log('Successfully updated quantity');
                let tong = +amount[index].innerText.slice(1) * +quantity.value;
                console.log(amount[index].innerText)
                total[index].innerText = "Total: " + tong + '$';
                Array.from(total_all).forEach(function(element) {
                    // let all_total = Array.from(total).reduce((all, currentValue) => all.innerText)
                    let a = Array.from(total).map((ele) => Number(ele.innerText.slice(0,
                        -1).slice(7)))
                    let all_total = a.reduce((all, currentValue) => all + currentValue)
                    element.innerText = all_total + '$'
                })
            },
            error: function(e) {
                console.log(e.message);
            }
        })
    }
})
</script>

<style>
.payment-info {
    background: blue;
    padding: 10px;
    border-radius: 6px;
    color: #fff;
    font-weight: bold;
}

.product-details {
    padding: 10px;
}

body {
    background: #eee;
}

.cart {
    background: #fff;
}

.p-about {
    font-size: 12px;
}

.table-shadow {
    -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
}

.type {
    font-weight: 400;
    font-size: 10px;
}

label.radio {
    cursor: pointer;
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none;
}

label.radio span {
    padding: 1px 12px;
    border: 2px solid #ada9a9;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 300;
}

label.radio input:checked+span {
    border-color: #fff;
    background-color: blue;
    color: #fff;
}

.credit-inputs {
    background: rgb(102, 102, 221);
    color: #fff !important;
    border-color: rgb(102, 102, 221);
}

.credit-inputs::placeholder {
    color: #fff;
    font-size: 13px;
}

.credit-card-label {
    font-size: 9px;
    font-weight: 300;
}

.form-control.credit-inputs:focus {
    background: rgb(102, 102, 221);
    border: rgb(102, 102, 221);
}

.line {
    border-bottom: 1px solid rgb(102, 102, 221);
}

.information span {
    font-size: 12px;
    font-weight: 500;
}

.information {
    margin-bottom: 5px;
}

.items {
    -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
    box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
}

.spec {
    font-size: 11px;
}
</style>