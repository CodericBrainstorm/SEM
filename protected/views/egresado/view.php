<?php

$this->breadcrumbs = array(
	//$model->label(2) => array('admin'),
	//GxHtml::valueEx($model),
);

/*$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Actualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->ID)),
	array('label'=>Yii::t('app', 'Eliminar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ID), 'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' con identificación ' . $model->NRO_OCUMENTO; ?></h1>

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

'TIPO_DOCUMENTO',
'NRO_OCUMENTO',
array(
        'name' => 'depto_exp',
        'type' => 'raw',
        'value' => $model->depto_exp !== null ? GxHtml::encode(GxHtml::valueEx($model->depto_exp)) : null,
        ),
array(
        'name' => 'munip_exp',
        'type' => 'raw',
        'value' => $model->munip_exp!== null ? GxHtml::encode(GxHtml::valueEx($model->munip_exp)) : null,
        ),
'APELLIDO1',
'APELLIDO2',
'NOMBRE1',
'NOMBRE2',
'FechaNacDate',
array(
            'name' => 'depto_nacim',
            'type' => 'raw',
            'value' => $model->depto_nacim !== null ? GxHtml::encode(GxHtml::valueEx($model->depto_nacim)) : null
            ),
array(
            'name' => 'munip_nacim',
            'type' => 'raw',
            'value' => $model->munip_nacim !== null ? GxHtml::encode(GxHtml::valueEx($model->munip_nacim)) : null
            ),
'GENERO',
//'ZONA_RESIDENCIA_ESTUDIANTE',
'DIRECCION_RESIDENCIA',
'TEL',
array(
            'name' => 'depto_resid',
            'type' => 'raw',
            'value' => $model->depto_resid !== null ? GxHtml::encode(GxHtml::valueEx($model->depto_resid)) : null,
            ),
array(
            'name' => 'munip_resid',
            'type' => 'raw',
            'value' => $model->munip_resid !== null ? GxHtml::encode(GxHtml::valueEx($model->munip_resid)) : null,
            ),
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

