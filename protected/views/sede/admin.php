<?php

$this->breadcrumbs = array(
	//$model->label(2) => array('index'),
	//Yii::t('app', 'Administrar'),
);

/*$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sede-grid', {
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
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'sede-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'secretaria',
		//'coddepto',
		'depto',
		//'codmunicipio',
		'nommunicipio',
		
		'codestablecimiento',
		'codsede',
		'nombresede',
		'zona',
		'direccion',
		'telefono',
		'estadosede',
		'nivelessede',
		//'modelossede',
		'gradossede',
		/*array(
				'name'=>'establecimientoID',
				'value'=>'GxHtml::valueEx($data->establecimiento)',
				'filter'=>GxHtml::listDataEx(InstEstablecimiento::model()->findAllAttributes(null, true)),
				),*/
		
		array(
			'class' => 'CButtonColumn',
                       'template'=>'{update}{view}{delete}',
                        'buttons'=>array(
                                        'update'=>array(
                                                        'visible'=>'true',
                                                ),
                                        'view'=>array(
                                                        'visible'=>'true',
                                                ),
                                        'delete'=>array(
                                                        'visible'=>'false',
                                                ),
                        ),
		),
               array(
                'class'=>'CLinkColumn',
                'label'=>'Sedes',
                'urlExpression'=>'"index.php?r=egresado/adminxSede&codsede=".$data->codsede',
                'header'=>'Administrar Egresado',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/alumno.jpg',
                 'htmlOptions'=>array('style'=>'text-align:center;width:5px;'),  
              ) ,
	),
)); ?>