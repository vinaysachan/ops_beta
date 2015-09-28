<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta name="author" content="Vinay Sachan" />
        <meta name="description" content="put your page description here" />
        <meta name="Keywords" content="put your page Keywords here" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="noindex, nofollow" />
        <title><?= SITE_NAME ?> Admin Login</title>
        <link rel="shortcut icon" href="<?= base_url('assets/img/onlinephpstudy.png') ?>"/>
        <link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet"/>
        <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
    </head>
    <body>
        <div class="login_box">
            <form action="" method="post" class="form-horizontal">
                <?=(!empty($error)) ? $error : '' ?>
                <h2 class="form-signin-heading">Please sign in</h2>
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">User Name :</label>
                    <div class="col-sm-8">
                        <input name="username" type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password :</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <button type="submit" name="submit" value="login" class="btn col-sm-6 pull-right">Sign in</button>
            </form>
        </div>    
    </body>
</html>