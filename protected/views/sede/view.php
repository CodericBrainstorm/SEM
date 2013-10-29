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
'secretaria',
'coddepto',
'depto',
'codmunicipio',
'nommunicipio',
'codestablecimiento',
'codsede',
'nombresede',
'zona',
'direccion',
'telefono',
'estadosede',
'nivelessede',
'modelossede',
'gradossede',
array(
			'name' => 'establecimiento',
			'type' => 'raw',
			'value' => $model->establecimiento !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->establecimiento)), array('instEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($model->establecimiento, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('egresadoSedes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->egresadoSedes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('egresadoSede/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('historicoegresados')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->historicoegresados as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('historicoegresado/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>