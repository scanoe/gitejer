
<p>registrar estudiante</p>
<?= form_open('registro/validar'); ?>
<div>
	<?= form_label("nombre","nombre"); ?>
	<?= form_input('nombre','',['id'=> 'nombre']); ?>
</div>
<div>
	<?= form_label('apellido','apellido');?>
	<?=form_input('apellido','',['id'=> 'apellido']); ?>
</div>
<div>
	<?= form_label("sexo","sexo"); ?>
	<?= form_input('sexo','',['id'=> 'sexo']); ?>

</div>
<div>
	<?= form_label("correo","correo"); ?>
	<?= form_input('correo','',['id'=> 'correo']); ?>
</div>
<div>
	<?= form_label("nacimiento","nacimiento"); ?>
	<?= form_input('nacimiento','NULL',['id'=> 'nacimiento']); ?>
</div>
<?= form_submit('','registrar');?>
<?= form_close(); ?>

