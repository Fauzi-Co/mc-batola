<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">Rin<b>+</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg"><?= lang('Auth.register') ?></p>
                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('register') ?>" method="post">
                    <?= csrf_field() ?>


                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                        </div>

                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                </div>
                <hr>

            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>