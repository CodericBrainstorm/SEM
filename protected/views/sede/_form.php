<div class="form">


<?php $form = $this->beginWidget('BActiveForm', array(
	'id' => 'sede-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('BAlert',array(
'content'=>'<p>Campos con <span class="required">*</span> son requiredos.</p> ',
)); ?>
<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo $form->fieldClass($model, 'secretaria'); ?>">
		<?php echo $form->labelEx($model,'secretaria'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'secretaria', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'secretaria'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'coddepto'); ?>">
		<?php echo $form->labelEx($model,'coddepto'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'coddepto'); ?>
		<?php echo $form->error($model,'coddepto'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'depto'); ?>">
		<?php echo $form->labelEx($model,'depto'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'depto', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'depto'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'codmunicipio'); ?>">
		<?php echo $form->labelEx($model,'codmunicipio'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'codmunicipio'); ?>
		<?php echo $form->error($model,'codmunicipio'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'nommunicipio'); ?>">
		<?php echo $form->labelEx($model,'nommunicipio'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'nommunicipio', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'nommunicipio'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'codestablecimiento'); ?>">
		<?php echo $form->labelEx($model,'codestablecimiento'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'codestablecimiento', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'codestablecimiento'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'codsede'); ?>">
		<?php echo $form->labelEx($model,'codsede'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'codsede', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'codsede'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'nombresede'); ?>">
		<?php echo $form->labelEx($model,'nombresede'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'nombresede', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'nombresede'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'zona'); ?>">
		<?php echo $form->labelEx($model,'zona'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'zona', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'zona'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'direccion'); ?>">
		<?php echo $form->labelEx($model,'direccion'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'direccion', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'direccion'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'telefono'); ?>">
		<?php echo $form->labelEx($model,'telefono'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'telefono', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'telefono'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'estadosede'); ?>">
		<?php echo $form->labelEx($model,'estadosede'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'estadosede', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'estadosede'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'nivelessede'); ?>">
		<?php echo $form->labelEx($model,'nivelessede'); ?>
                <div class="controls">
		<?php echo $form->textArea($model, 'nivelessede'); ?>
		<?php echo $form->error($model,'nivelessede'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'modelossede'); ?>">
		<?php echo $form->labelEx($model,'modelossede'); ?>
                <div class="controls">
		<?php echo $form->textArea($model, 'modelossede'); ?>
		<?php echo $form->error($model,'modelossede'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'gradossede'); ?>">
		<?php echo $form->labelEx($model,'gradossede'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'gradossede', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'gradossede'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'establecimientoID'); ?>">
		<?php echo $form->labelEx($model,'establecimientoID'); ?>
                <div class="controls">
		<?php echo $form->dropDownList($model, 'establecimientoID', GxHtml::listDataEx(InstEstablecimiento::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'establecimientoID'); ?>
                </div>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('egresadoSedes')); ?></label>
		<?php echo $form->checkBoxList($model, 'egresadoSedes', GxHtml::encodeEx(GxHtml::listDataEx(EgresadoSede::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('historicoegresados')); ?></label>
		<?php echo $form->checkBoxList($model, 'historicoegresados', GxHtml::encodeEx(GxHtml::listDataEx(Historicoegresado::model()->findAllAttributes(null, true)), false, true)); ?>
<div class="form-actions">
<?php
echo BHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div>
</div><!-- form -->