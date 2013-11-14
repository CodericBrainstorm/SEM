<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Administrar'),
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
	$.fn.yiiGridView.update('egresado-grid', {
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

<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php  $this->renderPartial('_search', array(
	'model' => $model,
));  ?>
</div><!-- search-form -->
 <div style="float: center;" >
        <a href="index.php?r=egresado/busqueda&idsede=<?php echo $model->CODIGO_DANE_SEDE; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="CREAR EGRESADO" class="btn btn-primary pretty" >CREAR EGRESADO</a>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'egresado-grid',
	'dataProvider' => $model->search(),
        
	'filter' => $model,
	'columns' => array(
		'ID',
		'CODIGO_SED',
		
		'CODIGO_DANE_SEDE',
		
		'NRO_OCUMENTO',
		
		'APELLIDO1',
		'APELLIDO2',
		'NOMBRE1',
		'NOMBRE2',
		'FechaNacDate',
		'DEPARTAMENTO_NACIMIENTO',
		'MUNICIPIO_NACIMIENTO',
		'GENERO',
		
		'NOMBRE_ESTABLECIMIENTO',
		
              array(
                'class'=>'CLinkColumn',
                'label'=>'Historico x Estud.',
                'urlExpression'=>'"index.php?r=historicoegresado/admin&idegresado=".$data->ID',
                'header'=>'Historico x Estud.',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/hist_acad.jpg',
                  
              ) ,
             array(
                'class'=>'CLinkColumn',
                'label'=>'Historico x Estud. Sup.',
                //'urlExpression'=>'index.php?r=egresado/admin',
                'header'=>'Historico x Estud. Sup.',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/acadsuperior.jpg',
                  
              ) ,
             array(
                'class'=>'CLinkColumn',
                'label'=>'Historico trabajo',
                //'urlExpression'=>'index.php?r=egresado/admin',
                'header'=>'Historico trabajo',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/trabajo.jpg',
                  
              ) ,
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>