<?php
$resultSede = Yii::app()->db->createCommand("select CODIGO_DANE_SEDE from egresado where ID =".$_GET['idegresado'])->queryScalar();
       
$this->breadcrumbs = array(
	'Volver a Egresado' => array('egresado/adminXSede&codsede='. $resultSede)
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('historicolaboral-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1><?php echo Yii::t('app', 'Administrar histórico laboral'); ?></h1>



<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
));  ?>
</div><!-- search-form -->
<div style="float: center;" >
          <a href="index.php?r=historicolaboral/create&idegresado=<?php echo $model->egresadoID; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="CREAR HISTÓRICO LABORAL" class="btn btn-primary pretty" >CREAR HISTÓRICO LABORAL</a>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'historicolaboral-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'vinculacion',
		'fechainicio',
		'fechafin',
		'municipio',
		'empresa',
		
		'sector',
		'cargo',
		'honorariosSMMLV',
		/*'egresadoID',
		array(
				'name'=>'empresaID',
				'value'=>'GxHtml::valueEx($data->empresa0)',
				'filter'=>GxHtml::listDataEx(Empresa::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>