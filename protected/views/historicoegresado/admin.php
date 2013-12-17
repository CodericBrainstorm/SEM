<?php

$this->breadcrumbs = array(
	'Volver a Egresado' => array('egresado/adminXSede&codsede='. $_GET['idsede'])
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



<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<div style="float: center;" >
        <a href="index.php?r=historicoegresado/create&idsede=<?php echo $_GET['idsede']; ?>&idegresado=<?php echo $_GET['idegresado']; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="Crear histórico egresado" class="btn btn-primary pretty" >CREAR HISTÓRICO EGRESADO</a>
</div>
<div>
    <?php 
       $result = Yii::app()->db->createCommand("select NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2 from egresado where id =".$model->egresadoID)->queryRow();
       $resultSede = Yii::app()->db->createCommand("select nombresede from sed_sede where codsede =".$_GET['idsede'])->queryScalar();
       
        echo '<BR><strong style="color:#05C"> Sede: ' . $resultSede . ' >>  Egresado: ' . $result['NOMBRE1'].' '. $result['NOMBRE2'].' '. $result['APELLIDO1'].' </strong>' ;
    ?>
</div>

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
                'urlExpression'=>'"index.php?r=areaconocimiento/admin&idhistoricoegresado=".$data->id',
                
                'header'=>'Area del conocimiento',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/areaconocimiento.png',
                  
              ) ,
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>