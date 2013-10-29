<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('egresado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
Si lo desea, puede ingresar un operador de comparación (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) al principio de cada uno de los valores de la búsqueda para especificar la forma en la comparación que debe hacer.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php /*$this->renderPartial('_search', array(
	'model' => $model,
)); */ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'egresado-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'ID',
		'CODIGO_SED',
		'ID_old',
		'MUN_CODIGO',
		'CODIGO_DANE_ESTABLEDUCATIVO',
		'CODIGO_DANE_SEDE',
		/*
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
		'ZONA_RESIDENCIA_ESTUDIANTE',
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
		'CARACTER',
		'ESPECIALIDAD',
		'GRUPO_CURSO',
		'METODOLOGIA',
		'Grupo_id',
		'SUBSIDIADO',
		'REPITENTE',
		'NUEVO',
		'SIT_ACAD_ANO_ANT',
		'CON_ALUM_ANO_ANT',
		'ID_ALUMNO',
		'COR_ID',
		'CAB_FAMILIA',
		'BEN_MAD_FLIA',
		'BEN_VET_FP',
		'BEN_HER_NAC',
		'EST_ID',
		'NOMBRE1_FON',
		'NOMBRE2_FON',
		'APELLIDO1_FON',
		'APELLIDO2_FON',
		'PER_ID',
		'ESTADO',
		'INTERNADO',
		'VAL_DES_PERIODO2',
		'NUM_CONVENIO',
		'BUENO',
		'CAR_ID',
		'FEC_CREACION',
		'NOMBRE_ESTABLECIMIENTO',
		'CTE_ID_SECTOR',
		'NOMBRE_SEDE',
		'CTE_ID_ZONA',
		'DISCAP1',
		'grado1',
		'COD_MUN1',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>