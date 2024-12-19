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
            <h1 class="titulo">Mi Increible Galeria en PHP y MySQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto):?>
                <?php if($foto['imagen'] == "subir"): ?>
                    <div class="thumb">
                        <a href="subir.php">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="thumb">
                        <a href="foto.php?id=<?php echo $foto['id']; ?>">
                            <img src="fotos/<?php echo $foto['imagen'];?>" alt="">
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>



            <div class="paginacion">
                <?php if($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual-1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif; ?>

                <?php if($pagina_actual != $total_paginas): ?>
                    <a href="index.php?p=<?php echo $pagina_actual+1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">
            Galeria creada por Joel Martinez - @joel_smj
        </p>
    </footer>
</body>
</html>