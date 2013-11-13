<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'egresadoID'); ?>
		<?php //echo $form->dropDownList($model, 'egresadoID', GxHtml::listDataEx(EstudEgresado::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'sedeID'); ?>
		<?php //echo $form->dropDownList($model, 'sedeID', GxHtml::listDataEx(SedSede::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'grado'); ?>
		<?php echo $form->textField($model, 'grado', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'anio'); ?>
		<?php echo $form->textField($model, 'anio'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
