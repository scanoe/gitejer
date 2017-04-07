

<h2>lista profesores</h2>

<?php foreach ($elemento as $ele): ?>

       <h3> <?php echo $ele->__get('nombre'); ?> </h3>
       	<p> cedula : <?php echo $ele->__get('cedula'); ?> <p>
    
       

<?php endforeach; ?>