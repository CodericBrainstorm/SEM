<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('egresadoID')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->egresado)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sedeID')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->sede)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('grado')); ?>:
	<?php echo GxHtml::encode($data->grado); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('anio')); ?>:
	<?php echo GxHtml::encode($data->anio); ?>
	<br />
	

</div>