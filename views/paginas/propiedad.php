<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="titulo-propiedad"><?php echo $propiedad->titulo; ?></h1>

    <picture>
        <!-- <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpg"> -->
        <img src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="imagen de propiedad" loading="lazy">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$ <?php echo $propiedad->precio; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad->wc; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad->estacionamiento; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $propiedad->habitaciones; ?></p>
            </li>
        </ul>
        <p><?php echo $propiedad->descripcion; ?></p>

        <p>Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt odio fermentum vel. Nulla facilisi.</p>

    </div>
</main>