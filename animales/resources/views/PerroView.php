<?php require_once $_CONFIG['FILES']['LAYOUTS']. DIRECTORY_SEPARATOR. 'Head.php'; ?>

<section>
    <header>
        <h2>Mostrar perro</h2>
    </header>
    <article>
        <ul>
            <li><span>Nombre: </span><?=$perro->getNombre();?></li>
            <li><span>Raza: </span><?=$perro->getRaza();?></li>
            <li><span>Edad: </span><?=$perro->getEdad();?></li>
        </ul>
    </article>
</section>

<?php require_once $_CONFIG['FILES']['LAYOUTS']. DIRECTORY_SEPARATOR. 'Footer.php'; ?>