<?php
  include "../layout/navbar/navbar.php";
  include "../../../Client/controller/auth/register.php"
?>

<section class="py-5" style="background-color: #eee;margin-top: 100px;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">



            <div class="col-lg-12 col-xl-11">
                <div class="card text-black rounded-3">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h4 mt-1 mb-5 pb-1">Sign up</p>

                                <form action='./register.php' method='post'>

                                    <?php echo $err != "" ?  "
                                        <div class='alert alert-danger' role='alert'>
                                            Lỗi: $err
                                        </div>
                                    "
                                            :

                                            ''
                                        ?>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="f-name" name="name" class="form-control" />
                                            <label class="form-label" for="f-name">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="l-name" name="email" class="form-control" />
                                            <label class="form-label" for="email">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="pwd" name="pass" class="form-control" />
                                            <label class="form-label" for="pwd">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="pwd-confirm" name="comfirmPass"
                                                class="form-control" />
                                            <label class="form-label" for="pwd-confirm">Repeat your password</label>
                                        </div>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button class="btn btn-primary btn-block w-100 fa-lg gradient-custom-2 mb-3"
                                            type="submit" name="btn_register">Register</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                    class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>