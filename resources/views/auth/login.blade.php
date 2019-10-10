@include('layouts/header')

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="login-card card-block">
                        <form class="md-float-material" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="text-center">
                                <img src="<?= asset('/images/logo-blue.png'); ?>" alt="logo">
                            </div>
                            <h3 class="text-center txt-primary">
                                <?= trans("login.form_signin"); ?>
                            </h3>
                            <div class="md-input-wrapper">
                                <input name="email" type="email" class="md-form-control" autocomplete="off" required />
                                <label><?= trans("login.form_email"); ?></label>
                            </div>
                            <div class="md-input-wrapper">
                                <input name="password" type="password" class="md-form-control" autocomplete="off" required />
                                <label><?= trans("login.form_pass"); ?></label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                                    <label class="input-checkbox checkbox-primary">
                                        <input type="checkbox" id="checkbox">
                                        <span class="checkbox"></span>
                                    </label>
                                    <div class="captions"><?= trans('login.form_remember'); ?></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                <a href="forgot-password.html" class="text-right f-w-600"> <?= trans('login.form_forgot_pass'); ?></a>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 text-center">
                                <span class="text-muted"><?= trans('login.form_dont_have_account'); ?></span>
                                <a href="/register" class="f-w-600 p-l-5"><?= trans('login.form_register'); ?></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('layouts/footer')