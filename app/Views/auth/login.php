  <?= $this->extend('auth/templates/index'); ?>
  <?= $this->section('content'); ?>
  <div class="login-page">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1">Mc<b>Batola</b></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg"><?= lang('Auth.loginTitle') ?> untuk masuk</p>
          <?= view('Myth\Auth\Views\_message_block') ?>

          <form action="<?= route_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <?php if ($config->validFields === ['email']) : ?>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
            <?php else : ?>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
            <?php endif; ?>


            <div class="input-group mb-3">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" placeholder="<?= lang('Auth.password') ?>">

              <div class="invalid-feedback">
                <?= session('errors.password') ?>
              </div>
            </div>


            <div class="row">

              <?php if ($config->allowRemembering) : ?>
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                    <label for="remember">
                      <?= lang('Auth.rememberMe') ?>
                    </label>
                  </div>
                </div>
              <?php endif; ?>

              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
              </div>

            </div>
          </form>
          <hr>

          <?php if ($config->activeResetter) : ?>
            <p class="mb-1">
              <a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
            </p>
          <?php endif; ?>

          <?php if ($config->allowRegistration) : ?>
            <p class="mb-0">
              <a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
            </p>
          <?php endif; ?>

        </div>

      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>