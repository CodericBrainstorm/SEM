<div class="form">


<?php $form = $this->beginWidget('BActiveForm', array(
	'id' => 'historicoegresado-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('BAlert',array(
'content'=>'<p>Campos con <span class="required">*</span> son requiredos.</p> ',
)); ?>
<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo $form->fieldClass($model, 'egresadoID'); ?>">
		<?php echo $form->labelEx($model,'egresadoID'); ?>
                <div class="controls">
		<?php echo $form->dropDownList($model, 'egresadoID', GxHtml::listDataEx(EstudEgresado::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'egresadoID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'sedeID'); ?>">
		<?php echo $form->labelEx($model,'sedeID'); ?>
                <div class="controls">
		<?php echo $form->dropDownList($model, 'sedeID', GxHtml::listDataEx(SedSede::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'sedeID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'grado'); ?>">
		<?php echo $form->labelEx($model,'grado'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'grado', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'grado'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'anio'); ?>">
		<?php echo $form->labelEx($model,'anio'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'anio'); ?>
		<?php echo $form->error($model,'anio'); ?>
                </div>
		</div><!-- row -->
		
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('areaconocimientos')); ?></label>
		<?php echo $form->checkBoxList($model, 'areaconocimientos', GxHtml::encodeEx(GxHtml::listDataEx(Areaconocimiento::model()->findAllAttributes(null, true)), false, true)); ?>
<div class="form-actions">
<?php
echo BHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div>
</div><!-- form -->