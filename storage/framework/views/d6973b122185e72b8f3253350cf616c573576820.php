<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menúlife</title>
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/CVILLERAARROYO/favicon/master/favicon.png">
        <!--Bootstrap link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- styles css-->
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
        <!--font-->
        <!--link font google-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="welcome">
        <div class="flex-center position-ref full-height">

            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a id="nav-li" href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                         <a id="nav-li" href="<?php echo e(route('login')); ?>">Iniciar sesión</a>
                        <a id="nav-li" href="<?php echo e(route('register')); ?>">Registrarse</a>
                    <?php endif; ?>
                </div>

            <?php endif; ?>
           <div class="content">
            <div class="comida">
               <img class="img-fluid" id="comida"  src="https://static.wixstatic.com/media/3949cf_6988ba7f825f4165918a1254f3b231db.png/v1/fill/w_784,h_393,al_c,usm_0.66_1.00_0.01/3949cf_6988ba7f825f4165918a1254f3b231db.png" alt="comida">
            </div>
                <div class="title-welcome">
                     <h1>Menúlife</h1>
                </div>
            </div>
        </div>
</body>
</html>
