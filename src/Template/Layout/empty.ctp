<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?php echo $BASE_URL; ?>"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo 'Phần mềm quản lý bán hàng'; ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo $BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $BASE_URL; ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $BASE_URL; ?>/css/main.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <img src="<?php echo $BASE_URL; ?>/images/logoqn.png" alt="MeKong"
                             class="img-responsive col-sm-4 col-sm-offset-4" style="padding: 15px;"/>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <section class="main" role="main">
            <div class="container">
                <div class="row">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </section>
    </body>
</html>