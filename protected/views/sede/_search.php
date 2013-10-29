<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<!--	<div class="row">
		<?php //echo $form->label($model, 'id'); ?>
		<?php //echo $form->textField($model, 'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'secretaria'); ?>
		<?php echo $form->textField($model, 'secretaria', array('maxlength' => 40)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'coddepto'); ?>
		<?php //echo $form->textField($model, 'coddepto'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'depto'); ?>
		<?php echo $form->textField($model, 'depto', array('maxlength' => 20)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'codmunicipio'); ?>
		<?php //echo $form->textField($model, 'codmunicipio'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'nommunicipio'); ?>
		<?php echo $form->textField($model, 'nommunicipio', array('maxlength' => 20)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'codestablecimiento'); ?>
		<?php //echo $form->textField($model, 'codestablecimiento', array('maxlength' => 15)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'codsede'); ?>
		<?php echo $form->textField($model, 'codsede', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nombresede'); ?>
		<?php echo $form->textField($model, 'nombresede', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'zona'); ?>
		<?php echo $form->textField($model, 'zona', array('maxlength' => 20)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'direccion'); ?>
		<?php //echo $form->textField($model, 'direccion', array('maxlength' => 150)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'telefono'); ?>
		<?php //echo $form->textField($model, 'telefono', array('maxlength' => 15)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'estadosede'); ?>
		<?php echo $form->textField($model, 'estadosede', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nivelessede'); ?>
		<?php echo $form->textArea($model, 'nivelessede'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'modelossede'); ?>
		<?php echo $form->textArea($model, 'modelossede'); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'gradossede'); ?>
		<?php //echo $form->textField($model, 'gradossede', array('maxlength' => 60)); ?>
	</div>-->

	<div class="row">
		<?php //echo $form->label($model, 'establecimientoID'); ?>
		<?php //echo $form->dropDownList($model, 'establecimientoID', GxHtml::listDataEx(InstEstablecimiento::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
