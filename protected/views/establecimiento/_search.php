<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<!--	<div class="row">
		<?php //echo $form->label($model, 'id'); ?>
		<?php //echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'secretariaID'); ?>
		<?php //echo $form->textField($model, 'secretariaID'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'coddepto'); ?>
		<?php //echo $form->textField($model, 'coddepto', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'codmunicipio'); ?>
		<?php //echo $form->textField($model, 'codmunicipio', array('maxlength' => 6)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'codigo'); ?>
		<?php echo $form->textField($model, 'codigo', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 100)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'direccion'); ?>
		<?php //echo $form->textField($model, 'direccion', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'telefono'); ?>
		<?php //echo $form->textField($model, 'telefono', array('maxlength' => 12)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'tipoID'); ?>
		<?php //echo $form->dropDownList($model, 'tipoID', GxHtml::listDataEx(Tipo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'sector'); ?>
		<?php echo $form->dropDownList($model, 'sector', GxHtml::listDataEx(Sector::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'zonaID'); ?>
		<?php echo $form->dropDownList($model, 'zonaID', GxHtml::listDataEx(Zona::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'jornadasestablecimientoID'); ?>
		<?php echo $form->textField($model, 'jornadasestablecimientoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nivelesestablecimientoID'); ?>
		<?php echo $form->textField($model, 'nivelesestablecimientoID'); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'grados'); ?>
		<?php //echo $form->textField($model, 'grados', array('maxlength' => 80)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'modeloseducativos'); ?>
		<?php //echo $form->textArea($model, 'modeloseducativos'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'capacidadesexcepcionales'); ?>
		<?php //echo $form->textArea($model, 'capacidadesexcepcionales'); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'discapacidades'); ?>
		<?php //echo $form->textArea($model, 'discapacidades'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'idiomas'); ?>
		<?php //echo $form->textArea($model, 'idiomas'); ?>
	</div>-->

	<div class="row">
		<?php //echo $form->label($model, 'estado'); ?>
		<?php //echo $form->dropDownList($model, 'estado', GxHtml::listDataEx(Estado::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'calendario'); ?>
		<?php echo $form->textField($model, 'calendario', array('maxlength' => 1)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'correoelectronico'); ?>
		<?php //echo $form->textField($model, 'correoelectronico', array('maxlength' => 100)); ?>
	</div>-->

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
