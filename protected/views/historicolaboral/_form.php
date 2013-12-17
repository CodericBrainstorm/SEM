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
	'id' => 'historicolaboral-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
<table class="table_inscripcion">
        <tr>
            <td><B>Vinculación<B><br>
              <?php echo $form->dropDownList($model, 'vinculacion', array('Independiente'=>'Independiente', 'Empleado'=>'Empleado')); ?>
	    </td>
	    <td>
		<?php echo $form->labelEx($model,'fechainicio'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'fechainicio',
			'value' => $model->fechainicio,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
                                'yearRange' =>'1970:2010',
				),
			)); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'fecha fin'); ?>
                <div class="controls">
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'fechafin',
			'value' => $model->fechafin,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
                                'yearRange' =>'1970:2010',
				),
			)); ?>
		</td>
		<td>
		    <?php echo $form->textFieldRow($model, 'municipio'); ?>
		</td>
                <tr>
                </tr>
                <td>
                    <?php echo $form->textFieldRow($model, 'empresa'); ?>
		</td>
		<td>
		   <?php echo $form->textFieldRow($model,'sector'); ?>
                </td>
                <td>
		    <?php echo $form->textFieldRow($model, 'cargo'); ?>
		</td>
                <td>
                    <?php echo $form->textFieldRow($model, 'honorariosSMMLV'); ?>
	        </td>
             </tr>
           </table>

<div class="form-actions">
<?php
$this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar', 'size' => 'large'));
     $this->endWidget();
?>
</div>
</div><!-- form -->