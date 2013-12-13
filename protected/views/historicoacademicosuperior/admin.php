<?php
$codsede = Yii::app()->db->createCommand("select CODIGO_DANE_SEDE from egresado where id =".$model->egresadoID)->setFetchMode(PDO::FETCH_OBJ)->queryScalar();;

$this->breadcrumbs = array(
      'Volver a Egresados' => array('egresado/AdminXSede&codsede='.$codsede)
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
<div style="float: center;" >
        <a href="index.php?r=historicoacademicosuperior/create&idegresado=<?php echo $_GET['idegresado']; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="Crear Histórico Académico Superior" class="btn btn-primary pretty" >Crear Histórico Académico Superior</a>
</div><?php $this->widget('zii.widgets.grid.CGridView', array(
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