<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('area_conocimiento')); ?>:
	<?php echo GxHtml::encode($data->area_conocimiento); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nota')); ?>:
	<?php echo GxHtml::encode($data->nota); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('historicoegresadoID')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->historicoegresado)); ?>
	<br />

</div>