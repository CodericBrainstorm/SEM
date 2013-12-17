<?php

$this->breadcrumbs = array(
      'Volver a Histórico del egresado' => array('historicoegresado/admin&idsede='.$model->sedeID.'&idegresado='.$model->egresadoID)
  );


?>

<h1><?php echo Yii::t('app', 'Ver Historico Egresado'); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
            'egresadoID',
            'sedeID',
//array(
//			'name' => 'egresado',
//			'type' => 'raw',
//			'value' => $model->egresado !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->egresado)), array('estudEgresado/view', 'id' => GxActiveRecord::extractPkValue($model->egresado, true))) : null,
//			),
//array(
//			'name' => 'sede',
//			'type' => 'raw',
//			'value' => $model->sede !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->sede)), array('sedSede/view', 'id' => GxActiveRecord::extractPkValue($model->sede, true))) : null,
//			),
'grado',
'anio',

	),
)); ?>

