
<?= form_open('universidad/FiltrarE'); ?>

<div>
	<?= form_label('','edad');?>
	<?=form_input('edad','',['id'=> 'edad']); ?>
</div>

<?= form_submit('','Filtrar por edad');?>
<?= form_close(); ?>

<h2>lista Estudiantes</h2>

<?php foreach ($elemento as $ele): ?>

       <h3> <?php echo $ele->__get('nombre'); ?> </h3>
       	<p> Edad : <?php echo $ele->__get('edad'); ?> <p>
    
       

<?php endforeach; ?>