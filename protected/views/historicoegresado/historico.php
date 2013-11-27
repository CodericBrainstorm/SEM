	<style type="text/css">
    .summary{
        color: white;
    }
    .breadcrumbs,  .breadcrumbs a {color: #fff;}
</style>

<?php

//$this->breadcrumbs = array(
//	'Volver a administrar Sedes' => array('sede/admin')
//);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('modulo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 style="color:#FFFFFF"><?php echo Yii::t('app', 'Módulos Existentes'); ?></h1>



<?php //echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">

</div>


<?php 
$idsede='';
if (isset($_GET['codigoestablecimiento']))
     $codigoestablecimiento = $_REQUEST['codigoestablecimiento'];

?>


<?php
$dataproviderm='';

    $dataproviderm = new CSqlDataProvider("SELECT anio, COUNT(*) as num_estudiantes FROM historicoegresado he JOIN sed_sede s ON(s.codsede=he.sedeID) 
            WHERE he.grado>10 AND s.codestablecimiento='125290000839' GROUP BY he.anio", array(
                'totalItemCount' => 4,
                'keyField'=> 'ID',
                'sort' => array(
                    'attributes' => array(
                        'num_estudiantes', 'anio'
                    ),
                ),
                'pagination' => false,
            ));
   $dataproviderm->getData();


//$sede = Sede::model()->findByPk($idsede);
//$dpto = Departamento::model()->findByPk($sede->DEPARTAMENTO_ID);
//$municip = Municipio::model()->findByPk($sede->MUNICIPIO_ID);
//$tiposede = Tiposede::model()->findByPk($sede->TIPOSEDE_ID);
//echo '<strong style="color:#52BDF5">'.$dpto->nombre.' >> '.$municip->nombre.' >> '.$sede->RADICADO.'-'.$sede->NOMBRESEDE.' >> tipo: '.$tiposede->DESCRIPCION.'</strong>';
$this->widget('zii.widgets.grid.CGridView', array(
       
	'id' => 'modulo-grid',
	'dataProvider' => $dataproviderm,
       
        //'filter' => $model,
        
	'columns' => array(
		//'IDCONSECUTIVOMODULO',
		'anio',
		'num_estudiantes',
		
	),
)); 

?>