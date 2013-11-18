
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
	'id' => 'historicoegresado-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
    <table class="table_inscripcion">
        <tr>
            <td>
                <?php echo $form->labelEx($model,'A&ntilde;o'); ?>
                <div class="controls">
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'anio',
			'value' => $model->anio,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy',
				),
			)); ?>
                
            </td>
            <td>
               <?php echo $form->textFieldRow($model, 'grado', array('maxlength' => 255)); ?>
            </td>
        </tr>
    </table>

    
    
    
<div class="form-actions">
<?php
     $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar Histórico', 'size' => 'large'));
     $this->endWidget();
?>
</div>
</div><!-- form -->