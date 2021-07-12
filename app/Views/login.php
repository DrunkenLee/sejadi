<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin Pro</title>
    <link href="<?= base_url('assets'); ?>/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets'); ?>/assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4"><?= lang('Auth.loginTitle') ?></h3>
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
                                    <form action="<?= route_to('login') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <!-- Form Group (email address)-->
                                        <?php if ($config->validFields === ['email']) : ?>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress"><?= lang('Auth.email') ?></label>
                                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="email" />
                                                <div class="invalid-feedback"><?= session('errors.login') ?></div>
                                            </div>
                                        <?php else : ?>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress"><?= lang('Auth.emailOrUsername') ?></label>
                                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="text" />
                                                <div class="invalid-feedback"><?= session('errors.login') ?></div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword"><?= lang('Auth.password') ?></label>
                                            <input name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" />
                                            <div class="invalid-feedback"><?= session('errors.password') ?></div>
                                        </div>
                                        <!-- Form Group (remember password checkbox)-->
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                                <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div>
                                        <!-- Form Group (login box)-->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <p></p>
                                            <button class="btn btn-primary" type="submit"><?= lang('Auth.loginAction') ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/js/scripts.js"></script>
</body>

</html>