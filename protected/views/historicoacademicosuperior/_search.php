<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	

	<div class="row">
		<?php echo $form->label($model, 'tipotitulo'); ?>
		<?php echo $form->textField($model, 'tipotitulo', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechainicio'); ?>
		<?php echo $form->textField($model, 'fechainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fechafin'); ?>
		<?php echo $form->textField($model, 'fechafin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'titulo'); ?>
		<?php echo $form->textField($model, 'titulo', array('maxlength' => 40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'estado'); ?>
		<?php echo $form->textField($model, 'estado'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model, 'nombreinstituto'); ?>
		<?php echo $form->textField($model, 'nombreinstituto'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
