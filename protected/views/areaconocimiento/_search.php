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
		<?php echo $form->label($model, 'area_conocimiento'); ?>
		<?php echo $form->textField($model, 'area_conocimiento', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nota'); ?>
		<?php echo $form->textField($model, 'nota'); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'historicoegresadoID'); ?>
		<?php //echo $form->dropDownList($model, 'historicoegresadoID', GxHtml::listDataEx(Historicoegresado::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>-->

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
