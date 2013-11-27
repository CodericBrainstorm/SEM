<div class="form">


<?php $form = $this->beginWidget('BActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('BAlert',array(
'content'=>'<p>Campos con <span class="required">*</span> son requiredos.</p> ',
)); ?>
<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo $form->fieldClass($model, 'username'); ?>">
		<?php echo $form->labelEx($model,'username'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'username', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'username'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'password'); ?>">
		<?php echo $form->labelEx($model,'password'); ?>
                <div class="controls">
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'password'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'name'); ?>">
		<?php echo $form->labelEx($model,'name'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'name', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'name'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'enabled'); ?>">
		<?php echo $form->labelEx($model,'enabled'); ?>
                <div class="controls">
		<?php echo $form->checkBox($model, 'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>
                </div>
		</div><!-- row -->

<div class="form-actions">
<?php
echo BHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div>
</div><!-- form -->