<?php

$this->breadcrumbs = array(
    'Volver a Areas del conocimiento' => array('areaconocimiento/admin&idhistoricoegresado='.$model->historicoegresadoID)
//	GxHtml::valueEx($model),
);

?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'area_conocimiento',
'nota',
array(
			'name' => 'historicoegresado',
			'type' => 'raw',
			'value' => $model->historicoegresado !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->historicoegresado)), array('historicoegresado/view', 'id' => GxActiveRecord::extractPkValue($model->historicoegresado, true))) : null,
			),
	),
)); ?>

