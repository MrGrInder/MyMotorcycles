<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
              integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
              crossorigin="anonymous">
        <link rel="stylesheet" href="/css/login.css">
    </head>
    <body>
            <div class="login-box">
                <div class="login-inner">
                    <form class="form-signin" method="post">
                        <h2 class="form-signin-heading">Авторизация</h2>
                        <?php if (isset($errorMessage)) {?>
                            <div class="alert alert-danger">
                                <?php echo $errorMessage; ?>
                            </div>
                        <?php }?>
                        <label for="login" class="sr-only">Логин</label>
                        <input name="login" type="text" class="form-control" placeholder="Логин" required="" autofocus="">
                        <label for="password" class="sr-only">Пароль</label>
                        <input name="password" type="password" class="form-control" placeholder="Пароль" required="">
                        <div class="checkbox">
                            <label>
                                <input name="remember_me" type="checkbox"> Чужой ПК
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизоваться</button>
                    </form>
                </div>
            </div>
    </body>
</html>
