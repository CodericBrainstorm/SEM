<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('activo')); ?>:
	<?php echo GxHtml::encode($data->activo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nombrecompleto')); ?>:
	<?php echo GxHtml::encode($data->nombrecompleto); ?>
	<br />

</div>