
<h2>actualizar Profesores</h2>
<?= form_open('controlp/upprofesor'); ?>
<div>
	<?= form_label("id a actualizar","id"); ?>
	<?= form_input('id','',['id'=> 'id']); ?>
</div>
<div>
	<?= form_label("nombre","nombre"); ?>
	<?= form_input('nombre','',['id'=> 'nombre']); ?>
</div>
<div>
	<?= form_label('cedula','cedula');?>
	<?= form_input('cedula','',['id'=> 'cedula']); ?>
</div>
<div>
	<?= form_label("fecha_nacimiento","fecha_nacimiento"); ?>
	<?= form_input('fecha_nacimiento','',['id'=> 'fecha_nacimiento']); ?>
</div>
<div>
	<?= form_label("lugar_nacimiento","lugar_nacimiento"); ?>
	<?= form_input('lugar_nacimiento','',['id'=> 'lugar_nacimiento']); ?>
</div>
<div>
	<?= form_label("titulo","titulo"); ?>
	<?= form_input('titulo','',['id'=> 'titulo']); ?>
</div>
<div>
	<?= form_label("departamento","departamento"); ?>
	<?= form_input('departamento','',['id'=> 'departamento']); ?>
</div>

<?= form_submit('','registrar');?>
<?= form_close(); ?>

