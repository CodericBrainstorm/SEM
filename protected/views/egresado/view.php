<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

/*$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Actualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->ID)),
	array('label'=>Yii::t('app', 'Eliminar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ID), 'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'ID',
'CODIGO_SED',
//'ID_old',
'MUN_CODIGO',
'CODIGO_DANE_ESTABLEDUCATIVO',
'CODIGO_DANE_SEDE',
'CONS_SEDE',
'establecimiento_id',
'TIPO_DOCUMENTO',
'NRO_OCUMENTO',
'EXPEDICION_DOC_DPTO',
'EXPEDICION_DOC_MUN',
'APELLIDO1',
'APELLIDO2',
'NOMBRE1',
'NOMBRE2',
'FechaNacDate',
'DEPARTAMENTO_NACIMIENTO',
'MUNICIPIO_NACIMIENTO',
'GENERO',
//'ZONA_RESIDENCIA_ESTUDIANTE',
'DIRECCION_RESIDENCIA',
'TEL',
'RESIDENCIA_DEPARTAMENTO',
'RESIDENCIA_MUNICIPIO',
'ESTRATO',
'SISBEN',
'POB_VICT_CONF',
'DPTO_EXP',
'MUN_EXP',
'PROVIENE_OTRO_MUN',
'TIPO_DISCAPACIDAD',
'CAPACIDADES_EXCEPCIONALES',
'ETNIA',
'INS_FAMILIAR',

'ESPECIALIDAD',

'Grupo_id',
'SUBSIDIADO',


//'NOMBRE_ESTABLECIMIENTO',

'NOMBRE_SEDE',

'DISCAP1',

'COD_MUN1',
	),
)); ?>

