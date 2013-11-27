<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('historicoacademicosuperior-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1><?php echo Yii::t('app', 'Administrar Historico Institutos Superiores por Egresado'); ?></h1>



<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'historicoacademicosuperior-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'tipotitulo',
		'fechainicio',
		'fechafin',
		'titulo',
		'estado',
		/*
		array(
				'name'=>'egresadoID',
				'value'=>'GxHtml::valueEx($data->egresado)',
				'filter'=>GxHtml::listDataEx(InstEduSup::model()->findAllAttributes(null, true)),
				),
                 */
		'nombreinstituto',
		
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>