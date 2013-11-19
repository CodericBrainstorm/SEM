
<style type="text/css">
    .titulo-carac{
        background-color: #bebec5;
        color: black;
        padding-left: 3px;
        padding:0px 8px 0px 14px;
        margin-bottom:18px;
        text-shadow:0 1px 0 rgba(255,255,255,0.5);
        border:1px solid dimgray;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        font-size: 20px;
    }
    .table_inscripcion td {
        vertical-align: text-top;
    }
    .formaciones-td {
        float: left;  align: text-bottom;
       
    }
    .checkbox.inline {  margin-left: 0;}
    
</style>


<div class="form">


<?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id' => 'areaconocimiento-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('BAlert',array(
'content'=>'<p>Campos con <span class="required">*</span> son requiredos.</p> ',
)); ?>
<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo $form->fieldClass($model, 'area_conocimiento'); ?>">
		<?php echo $form->labelEx($model,'area_conocimiento'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'area_conocimiento', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'area_conocimiento'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'nota'); ?>">
		<?php echo $form->labelEx($model,'nota'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'nota'); ?>
		<?php echo $form->error($model,'nota'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'historicoegresadoID'); ?>">
		<?php echo $form->labelEx($model,'historicoegresadoID'); ?>
                <div class="controls">
		<?php echo $form->dropDownList($model, 'historicoegresadoID', GxHtml::listDataEx(Historicoegresado::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'historicoegresadoID'); ?>
                </div>
		</div><!-- row -->

<div class="form-actions">
<?php
echo BHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div>
</div><!-- form -->