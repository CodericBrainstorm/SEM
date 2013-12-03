<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tipotitulo')); ?>:
	<?php echo GxHtml::encode($data->tipotitulo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechainicio')); ?>:
	<?php echo GxHtml::encode($data->fechainicio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fechafin')); ?>:
	<?php echo GxHtml::encode($data->fechafin); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('titulo')); ?>:
	<?php echo GxHtml::encode($data->titulo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('estado')); ?>:
	<?php echo GxHtml::encode($data->estado); ?>
	<br />
	<?php //echo GxHtml::encode($data->getAttributeLabel('egresadoID')); ?>:
		<?php //echo GxHtml::encode(GxHtml::valueEx($data->egresado)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('InstEduID')); ?>:
	<?php echo GxHtml::encode($data->InstEduID); ?>
	<br />
	*/ ?>

</div>