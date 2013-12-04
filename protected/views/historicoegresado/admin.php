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
	$.fn.yiiGridView.update('historicoegresado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Administrar Histórico de Egresados'); ?></h1>

<p>
Si lo desea, puede ingresar un operador de comparación (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) al principio de cada uno de los valores de la búsqueda para especificar la forma en la comparación que debe hacer.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'historicoegresado-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
//		array(
//				'name'=>'egresadoID',
//				'value'=>'GxHtml::valueEx($data->egresado)',
//				'filter'=>GxHtml::listDataEx(EstudEgresado::model()->findAllAttributes(null, true)),
//				),
//		array(
//				'name'=>'sedeID',
//				'value'=>'GxHtml::valueEx($data->sede)',
//				'filter'=>GxHtml::listDataEx(SedSede::model()->findAllAttributes(null, true)),
//				),
		'grado',
		'anio',
//              
		array(
                'class'=>'CLinkColumn',
                'label'=>'Area del conocimiento',
                'urlExpression'=>'"index.php?r=areaconocimiento/admin&idegresado=".$data->id',
                
                'header'=>'Area del conocimiento',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/areaconocimiento.png',
                  
              ) ,
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>