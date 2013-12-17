<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('vinculacion')); ?>:
	<?php echo GxHtml::encode($data->vinculacion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechainicio')); ?>:
	<?php echo GxHtml::encode($data->fechainicio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechafin')); ?>:
	<?php echo GxHtml::encode($data->fechafin); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('municipio')); ?>:
	<?php echo GxHtml::encode($data->municipio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('empresa')); ?>:
	<?php echo GxHtml::encode($data->empresa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sector')); ?>:
	<?php echo GxHtml::encode($data->sector); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('cargo')); ?>:
	<?php echo GxHtml::encode($data->cargo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('honorariosSMMLV')); ?>:
	<?php echo GxHtml::encode($data->honorariosSMMLV); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('egresadoID')); ?>:
	<?php echo GxHtml::encode($data->egresadoID); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('empresaID')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->empresa0)); ?>
	<br />
	*/ ?>

</div>