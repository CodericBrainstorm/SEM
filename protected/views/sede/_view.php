<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('secretaria')); ?>:
	<?php echo GxHtml::encode($data->secretaria); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('coddepto')); ?>:
	<?php echo GxHtml::encode($data->coddepto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('depto')); ?>:
	<?php echo GxHtml::encode($data->depto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('codmunicipio')); ?>:
	<?php echo GxHtml::encode($data->codmunicipio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nommunicipio')); ?>:
	<?php echo GxHtml::encode($data->nommunicipio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('codestablecimiento')); ?>:
	<?php echo GxHtml::encode($data->codestablecimiento); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('codsede')); ?>:
	<?php echo GxHtml::encode($data->codsede); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nombresede')); ?>:
	<?php echo GxHtml::encode($data->nombresede); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('zona')); ?>:
	<?php echo GxHtml::encode($data->zona); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('direccion')); ?>:
	<?php echo GxHtml::encode($data->direccion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('telefono')); ?>:
	<?php echo GxHtml::encode($data->telefono); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('estadosede')); ?>:
	<?php echo GxHtml::encode($data->estadosede); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nivelessede')); ?>:
	<?php echo GxHtml::encode($data->nivelessede); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('modelossede')); ?>:
	<?php echo GxHtml::encode($data->modelossede); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('gradossede')); ?>:
	<?php echo GxHtml::encode($data->gradossede); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('establecimientoID')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->establecimiento)); ?>
	<br />
	*/ ?>

</div>