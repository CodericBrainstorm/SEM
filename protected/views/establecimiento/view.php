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
'secretariaID',
'coddepto',
'codmunicipio',
'codigo',
'nombre',
'direccion',
'telefono',
array(
			'name' => 'tipo',
			'type' => 'raw',
			'value' => $model->tipo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tipo)), array('instTipo/view', 'id' => GxActiveRecord::extractPkValue($model->tipo, true))) : null,
			),
array(
			'name' => 'sector',
			'type' => 'raw',
			'value' => $model->sector !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->sector)), array('instSector/view', 'id' => GxActiveRecord::extractPkValue($model->sector, true))) : null,
			),
array(
			'name' => 'zona',
			'type' => 'raw',
			'value' => $model->zona !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->zona)), array('instZona/view', 'id' => GxActiveRecord::extractPkValue($model->zona, true))) : null,
			),
'jornadasestablecimientoID',
'nivelesestablecimientoID',
'gradosestablecimiento',
'modeloseducativos',
'capacidadesexcepcionales',
'discapacidades',
'idiomas',
array(
			'name' => 'estado',
			'type' => 'raw',
			'value' => $model->estado !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->estado)), array('instEstado/view', 'id' => GxActiveRecord::extractPkValue($model->estado, true))) : null,
			),
'calendario',
'correoelectronico',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('instCapacidadexcepcionalEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instCapacidadexcepcionalEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instCapacidadexcepcionalEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instDiscapacidadEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instDiscapacidadEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instDiscapacidadEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instGradoEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instGradoEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instGradoEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instHistoricorectores')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instHistoricorectores as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instHistoricorectores/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instIdiomaEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instIdiomaEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instIdiomaEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instJornadaEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instJornadaEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instJornadaEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instModeloseducativosEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instModeloseducativosEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instModeloseducativosEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('instNivelEstablecimientos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->instNivelEstablecimientos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('instNivelEstablecimiento/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('sedSedes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->sedSedes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('sedSede/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>