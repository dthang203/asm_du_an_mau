<?php
  include "../layout/navbar/navbar.php";
  include "../../../Client/controller/auth/login.php"
?>

<section class=" gradient-form py-5" style="background-color: #eee;margin-top: 100px;">
    <div class="container ">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-xl-10 ">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">Login to use your account</h4>
                                </div>

                                <form class="form form-login" action="./login.php" method="post">

                                    <?php echo $err != "" ?  "
                                        <div class='alert alert-danger' role='alert'>
                                            Lỗi: $err
                                           
                                        </div>
                                    "
                                    :

                                    ''
                                ?>

                                    <p>Please login to your account </p>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username">Email</label>
                                        <input type="email" id="input-email" name="email" class="form-control"
                                            minlength="4" appForbiddenName="bob">

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="input-password">Password</label>
                                        <input type="password" id="input-password" name="pass" class="form-control" />

                                    </div>

                                    <div class="d-flex flex-column align-items-center  pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block w-100 fa-lg gradient-custom-2 mb-3"
                                            type="submit">Log
                                            in</button>
                                        <a class="text-muted" href="#!">Forgot password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <button class="btn-1 btn-outline-danger"><a href="./register.php">
                                                Create new</a></button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-dark px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>