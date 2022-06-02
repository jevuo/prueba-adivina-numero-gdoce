<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba GDOCE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <br />
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <h2 class="form-title" style="color:lightcyan">Prueba adivina el número</h2>

                    </nav>
                    <form name='formulario' action="<?php echo e(url('result')); ?>" method='post'>
                        <?php echo csrf_field(); ?>

                        <br />
                        <div class="form-row">
                            <div class="col">
                            <h2 class="text">Introduzca un número del 1 al 10000000000:</h2>
                                <input type="number" class="form-control" name="numero" />
                            </div>
                        </div>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <br />
                        <div class="form-group row">
                            <div class="col">
                                <input type="submit" value="Enviar" class="btn btn-secondary" />
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ProyectosMios\prueba-adivina-numero-gdoce\resources\views/form.blade.php ENDPATH**/ ?>