<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contactos</h1>

    <form action="contacto" method="POST">
        
        <h3><?php echo e($tipo); ?></h3>
        
        <?php echo csrf_field(); ?>
        <label for="correo">correo:</label> <br>
        <input 
            type="email" 
            name="correo"
            <?php if($tipo == 'alumno'): ?>
                value = "@alumnos.udg.mx"
            <?php else: ?>
                value = "@gmail.com"
            <?php endif; ?>
            >
            <br>
        <label for="comentario">comentario:</label> <br>
        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
            <br>
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="">
                <option value="Alumno">Alumno</option>
                <option value="Empleador">Empleador</option>
            </select>        
        <input type="submit" value="Enviar">
    </form>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

</body>
</html><?php /**PATH C:\laragon\www\ejemplo-progra-internet\resources\views/contacto.blade.php ENDPATH**/ ?>