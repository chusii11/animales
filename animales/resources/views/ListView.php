<?php
require_once $_CONFIG['FILES']['LAYOUTS']. DIRECTORY_SEPARATOR. 'Head.php'; ?>

<section>
    <header>
        <h2>Listado de perros:</h2>
    </header>
    <?php if (isset($perros)): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($perros as $perro): ?>
                    <tr>
                        <td><?= $perro->getNombre(); ?></td>
                        <td><a href="<?= 'index.php?action=view&id='.$perro->getId(); ?>">Ver</a></td>
                        <td><a href="<?= 'index.php?action=destroy&id='.$perro->getId(); ?>">Borrar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    <?php endif; ?>
</section>

<?php
require_once $_CONFIG['FILES']['LAYOUTS']. DIRECTORY_SEPARATOR. 'Footer.php'; ?>