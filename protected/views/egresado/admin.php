<?php

//si va a mostrar los egresados por sede
if(isset($model->CODIGO_DANE_SEDE)){
    $idEE = Yii::app()->db->createCommand("select codestablecimiento FROM sed_sede WHERE codsede=".$model->CODIGO_DANE_SEDE)->queryScalar();
   
    $this->breadcrumbs = array(
	'Volver a Sedes' => array('sede/admin&codigoestablecimiento='.$idEE)
    );
}

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

<h1><?php echo Yii::t('app', 'Administrar') . ' ' . 'Egresados' ?></h1>



<?php echo GxHtml::link(Yii::t('app', 'Búsqueda Avanzada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php 
   $this->renderPartial('_search', array(
	'model' => $model,
)); 

Yii::app()->getSession()->add('idsedeSesion', $model->CODIGO_DANE_SEDE);
//print_r ($_SESSION);
?>
</div><!-- search-form -->
 <div style="float: center;" >
          <a href="index.php?r=egresado/busqueda&idsede=<?php echo $model->CODIGO_DANE_SEDE; ?>&iframe=true&width=100%&height=35%"  style ="margin-left:35px;" title="CREAR EGRESADO" class="btn btn-primary pretty" >CREAR EGRESADO</a>
</div>
<DIV>
<?php
     //echo $model->NOMBRE_ESTABLECIMIENTO;
   // echo '<strong style="color:#000000"> NOMBRE EE: ' . $model->NOMBRE_ESTABLECIMIENTO . ' >> ' . $model->NOMBRE_SEDE. '</strong>' ; 
 ?>
 </DIV>
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
		
		'NOMBRE_ESTABLECIMIENTO',
                'NOMBRE_SEDE',
		
              array(
                'class'=>'CLinkColumn',
                'label'=>'Historico x Estud.',
                'urlExpression'=>'"index.php?r=historicoegresado/admin&idegresado=".$data->ID."&idsede=".$data->CODIGO_DANE_SEDE',
                'header'=>'Historico x Estud.',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/hist_acad.jpg',
                  
              ) ,
             array(
                'class'=>'CLinkColumn',
                'label'=>'Historico x Estud. Sup.',
                'urlExpression'=>'"index.php?r=historicoacademicosuperior/admin&idegresado=".$data->ID',
                'header'=>'Historico x Estud. Sup.',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/acadsuperior.jpg',
                  
              ) ,
             array(
                'class'=>'CLinkColumn',
                'label'=>'Historico trabajo',
                'urlExpression'=>'"index.php?r=historicolaboral/admin&idegresado=".$data->ID',
                'header'=>'Historico trabajo',
                   
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/trabajo.jpg',
                  
              ) ,
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>