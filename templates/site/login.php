<link rel="stylesheet" href="<?= $static_url('css/signin.css') ?>"/>
<div class="flash-messages" style="margin: 0 auto; width: 40%;">
    <? if ($successMsg) { ?>
        <div class="alert alert-success"><?= $successMsg ?></div>
    <? } ?>
    <? if ($infoMsg) { ?>
        <div class="alert alert-info"><?= $infoMsg ?></div>
    <? } ?>
    <? if ($warningMsg) { ?>
        <div class="alert alert-warning"><?= $warningMsg ?></div>
    <? } ?>
    <? if ($errorMsg) { ?>
        <div class="alert alert-danger"><?= $errorMsg ?></div>
    <? } ?>
</div>
<form class="form-signin" role="form" method="POST" action="<?= $url_for(null, 'loginAction') ?>">
    <h2 class="form-signin-heading">请登录</h2>
    <input type="username" name="username" class="form-control" placeholder="用户名" required autofocus>
    <input type="password" name="password" class="form-control" placeholder="密码" required>
    <label class="checkbox">
        <input type="checkbox" value="remember-me"> 记住我
        <a href="/index.php/auth/qq/login">
            <img src="<?= $static_url('qq/Connect_logo_1.png') ?>" alt="QQ帐号登录"/>
            登录
        </a>
    </label>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="登录"/>
    <a href="<?= $url_for(null, 'registerPageAction') ?>">新用户？注册</a>
</form>