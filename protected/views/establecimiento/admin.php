<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
);

//$this->menu = array(
//		array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
//		array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
//	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('establecimiento-grid', {
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

<?php //echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'establecimiento-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'secretaria',
		'nom_depto',
		'nom_municipio',
		'codigo',
		'nombre',
		
		'direccion',
		'telefono',
		/*array(
				'name'=>'tipoID',
				'value'=>'GxHtml::valueEx($data->tipo)',
				'filter'=>GxHtml::listDataEx(InstTipo::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'sectorID',
				'value'=>'GxHtml::valueEx($data->sector)',
				'filter'=>GxHtml::listDataEx(InstSector::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'zonaID',
				'value'=>'GxHtml::valueEx($data->zona)',
				'filter'=>GxHtml::listDataEx(InstZona::model()->findAllAttributes(null, true)),
				),
		'jornadasestablecimientoID',
		'nivelesestablecimientoID',
		'gradosestablecimiento',
		'modeloseducativos',
		'capacidadesexcepcionales',
		'discapacidades',
		'idiomas',
		array(
				'name'=>'estadoID',
				'value'=>'GxHtml::valueEx($data->estado)',
				'filter'=>GxHtml::listDataEx(InstEstado::model()->findAllAttributes(null, true)),
				),
		'calendario',
		'correoelectronico',
		*/
		array(
			'class' => 'CButtonColumn',
		),
            array(
                'class'=>'CLinkColumn',
                'label'=>'Sedes',
                'urlExpression'=>'"index.php?r=sede/admin&idsede=".$data->id',
                'header'=>'Administrar Sedes',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/sede2.png',
                 'htmlOptions'=>array('style'=>'text-align:center;width:5px;'),  
              ) ,
            
	),
)); ?>