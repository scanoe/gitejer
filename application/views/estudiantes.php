<h2>Estudiantes</h2>

<?php foreach ($stu as $stu_item): ?>

        <h3><?php echo $stu_item['nombre']." ".$stu_item['apellido']; ?></h3>
        <div class="main">
                <?php echo "<p>sexo: ".$stu_item['sexo']."</p>"; ?>
                <?php echo " <p>nacimiento: ".$stu_item['nacimiento']."</p>"; ?>
                <?php echo " <p>correo: ".$stu_item['correo']."</p>"; ?>
                <?php echo " <p>semestre: ".$stu_item['semestre']."</p>"; ?>
        </div>
       

<?php endforeach; ?>