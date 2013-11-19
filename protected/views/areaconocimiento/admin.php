<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
);
//
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
	$.fn.yiiGridView.update('areaconocimiento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>



<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
));?>
</div><!-- search-form -->
<div style="float: center;" >
        <a href="index.php?r=areaconocimiento/create&idhistegres=<?php echo $_GET['idegresado']; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="CREAR EGRESADO" class="btn btn-primary pretty" >CREAR AREA CONOCIMIENTO</a>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'areaconocimiento-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
                'historicoegresadoID',
		'area_conocimiento',
		'nota',
//		array(
//				'name'=>'historicoegresadoID',
//				'value'=>'GxHtml::valueEx($data->historicoegresado)',
//				'filter'=>GxHtml::listDataEx(Historicoegresado::model()->findAllAttributes(null, true)),
//				),
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>