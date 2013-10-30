<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Editar'),
);

/*$this->menu = array(
	array('label' => Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label' => Yii::t('app', 'Crear') . ' ' . $model->label(), 'url'=>array('create')),
	array('label' => Yii::t('app', 'Ver') . ' ' . $model->label(), 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
);*/
?>

<h1><?php echo Yii::t('app', 'Editar') . ' ' . GxHtml::encode($model->label()) . ' ' ; ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>