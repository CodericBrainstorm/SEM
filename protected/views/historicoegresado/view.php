<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Actualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Eliminar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'egresado',
			'type' => 'raw',
			'value' => $model->egresado !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->egresado)), array('estudEgresado/view', 'id' => GxActiveRecord::extractPkValue($model->egresado, true))) : null,
			),
array(
			'name' => 'sede',
			'type' => 'raw',
			'value' => $model->sede !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->sede)), array('sedSede/view', 'id' => GxActiveRecord::extractPkValue($model->sede, true))) : null,
			),
'grado',
'anio',
'esgraduado',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('areaconocimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->areaconocimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('areaconocimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>