<nav class="main-header navbar navbar-expand">

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url(); ?>/public/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="http://127.0.0.1:5500/maps.html" class="nav-link">Maps</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="http://127.0.0.1:5500/maps.html" class="nav-link">Beta</a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
    <form action="<?= base_url(); ?>/public/UISet/setMode" method="POST">

        <div class="custom-control custom-radio">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="mode-ui" id="option1" value="light" autocomplete="off" <?= ($ui_mode[0]['code'] == 'light' ? 'checked' : ''); ?>> Light
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="mode-ui" id="option2" value="dark" autocomplete="off" <?= ($ui_mode[0]['code'] == 'dark-mode' ? 'checked' : ''); ?>> Dark
                </label>
                <input type="hidden" name="code" id="mode-c" value="">
                <input type="hidden" name="link" id="link-c" value="">
            </div>
        </div>
        <button id="sb" type="submit" hidden></button>
        <script>
            $('input[type=radio][name=mode-ui]').change(function() {
                if (this.value == 'light') {
                    $('#mode-c').val('light');
                    $('#link-c').val(window.location.href);
                    $('#sb').click();
                } else if (this.value == 'dark') {
                    $('#mode-c').val('dark-mode');
                    $('#link-c').val(window.location.href);
                    $('#sb').click();
                }
            });
        </script>
    </form>
</nav>