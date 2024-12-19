<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenido">
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>

    
    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="formulario" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">
            
            <label for="texto">Descripcion</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion..."></textarea>

            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error?></p>
            <?php endif; ?>

            <input type="submit" class="submit" value="Subir Foto">
        
        
        </form>
    </div>

    <footer>
        <p class="copyright">
            Galeria creada por Joel Martinez - @joel_smj
        </p>
    </footer>
</body>
</html>