<?php

$this->pageTitle=Yii::app()->name;

$this->widget('bootstrap.widgets.BootBreadcrumbs', array(
    'homeLink'=>CHtml::link('Inicio', array('/site/index')),
    'links'=>array( Yii::t('app', 'Panel de búsqueda')),
));
if(isset($_REQUEST['error']))
{
    echo "<script>alert('Este instrumento está siendo ajustado. Pronto podrá acceder nuevamente.');</script>";
}

?>
<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('inscripcion-grid', {
		data: $(this).serialize()
	});
	return false;
});

$(function(){
    $('.search-btn').click(function(){
        $('body').scrollTo( 500, 1300, {queue:true});
    });
    $('body').scrollTo( 500, 1300, {queue:true});
});

");
?>

<h1>PANEL DE BÚSQUEDA</h1>

<?php echo GxHtml::link(Yii::t('app', 'Ver u ocultar búsqueda '), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('search_egresado', array(
	'model' => $model,
)); 


$idsedeS=Yii::app()->getSession()->get('idsedeSesion');

?>
</div><!-- search-form -->

<?php   
if (isset($_GET['yt0'])){
   
    $this->widget('bootstrap.widgets.BootGridView', array(
            'type'=>'striped bordered condensed',
            'id' => 'inscripcion-grid',
            //'template'=>"{items}",
            'filter'=>$model,
            'emptyText'=>'<span>No se encontraron resultados.</span><br/><a class="btn btn-success" href="index.php?r=inscripcion/create">Crear Inscripción</a>',
            'dataProvider' => $model->busqueda(),
            'columns' => array(
//                    array(
//                        'name'=>'tipo_documento_id',
//                        'value'=>'GxHtml::valueEx($data->tipoDocumento)',
//                        'filter'=>GxHtml::listDataEx(Tipodocumento::model()->findAll(array('condition'=>'inscripcion=1'))),
//                    ),
                    'NRO_OCUMENTO',
                    'APELLIDO1',
                    'APELLIDO2',
                    'NOMBRE1',
                    'NOMBRE2',
                   
                    array(
                        'class'=>'bootstrap.widgets.BootButtonColumn',
                        'headerHtmlOptions'=>array('style'=>'width: 50px;text-align:center'),
                        'htmlOptions'=>array('style'=>'text-align:center'),
                        'template'=>'{caracterizacion}',
                        'header'=>'Caracterización inicial',
                        'buttons'=>array
                        (
                            'caracterizacion' => array
                            (
                                'label'=>'Caracterización',
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/actualizar.jpg',
                                'url'=>'Yii::app()->controller->createUrl("egresado/actualizaXdocumento",array("id"=>$data->ID))',
                                //'url'=>'Yii::app()->controller->createUrl("inscripcion/busqueda",array("error"=>"error"))',
                                
                            ),
                            
                        ),
                    ),
            ),
    ));
}
?>
<a class="btn btn-success btn-normal" href="index.php?r=egresado/create&idsede=<?php echo  $idSedes; ?>">Crear egresado</a>