<?php

$this->breadcrumbs = array(
	 'Volver a Egresados' => array('egresado/AdminXSede&codsede='.$codsede)
	//Yii::t('app', 'Administrar'),
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

<h1><?php echo Yii::t('app', 'Administrar Area del Conocimiento'); ?></h1>



<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
));?>
</div><!-- search-form -->
<div style="float: center;" >
        <a href="index.php?r=areaconocimiento/create&idhistegres=<?php echo $_GET['idhistoricoegresado']; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="CREAR AREA CONOCIMIENTO" class="btn btn-primary pretty" >CREAR AREA CONOCIMIENTO</a>
</div>
<div>
    <?php 
       $idegres = Yii::app()->db->createCommand("select egresadoID from historicoegresado where id =".$model->historicoegresadoID)->queryScalar();
       $result = Yii::app()->db->createCommand("select NOMBRE_SEDE, NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2 from egresado where id =".$idegres)->queryRow();
        echo '<BR><strong style="color:#05C"> Sede: ' . $result['NOMBRE_SEDE'] . ' >>  Egresado: ' . $result['NOMBRE1'].' '. $result['NOMBRE2'].' '. $result['APELLIDO1'].' </strong>' ;
    ?>
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