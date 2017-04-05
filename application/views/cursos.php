<h2>Cursos</h2>

<?php foreach ($cursos as $curso_item): ?>

        <h3><?php echo $curso_item['nombre']; ?></h3>
        <div class="main">
                <?php echo "<p>codigo curso: ".$curso_item['codigo']."</p>"; ?>
                <?php echo " <p>profesor: ".$curso_item['profesor']." ".$curso_item['apellido']."</p>"; ?>
                <?php echo " <p>dpto_profesor: ".$curso_item['dpto']."</p>"; ?>
                <?php echo " <p>aula: ".$curso_item['aula']."</p>"; ?>
        </div>
       

<?php endforeach; ?>