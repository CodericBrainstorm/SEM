<div class="form">


<?php $form = $this->beginWidget('BActiveForm', array(
	'id' => 'historicoacademicosuperior-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('BAlert',array(
'content'=>'<p>Campos con <span class="required">*</span> son requiredos.</p> ',
)); ?>
<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo $form->fieldClass($model, 'tipotitulo'); ?>">
		<?php echo $form->labelEx($model,'tipotitulo'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'tipotitulo', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'tipotitulo'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'fechainicio'); ?>">
		<?php echo $form->labelEx($model,'fechainicio'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'fechainicio'); ?>
		<?php echo $form->error($model,'fechainicio'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'fechafin'); ?>">
		<?php echo $form->labelEx($model,'fechafin'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'fechafin'); ?>
		<?php echo $form->error($model,'fechafin'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'titulo'); ?>">
		<?php echo $form->labelEx($model,'titulo'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'titulo', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'titulo'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'estado'); ?>">
		<?php echo $form->labelEx($model,'estado'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'egresadoID'); ?>">
		<?php echo $form->labelEx($model,'egresadoID'); ?>
                <div class="controls">
		<?php echo $form->dropDownList($model, 'egresadoID', GxHtml::listDataEx(InstEduSup::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'egresadoID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'InstEduID'); ?>">
		<?php echo $form->labelEx($model,'InstEduID'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'InstEduID'); ?>
		<?php echo $form->error($model,'InstEduID'); ?>
                </div>
		</div><!-- row -->

<div class="form-actions">
<?php
echo BHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div>
</div><!-- form -->