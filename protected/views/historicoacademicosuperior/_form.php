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
	'id' => 'historicoacademicosuperior-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('bootstrap.widgets.BootAlert');?>
<?php echo $form->errorSummary($model); ?>
     <table class="table_inscripcion">
         <tr class="row">
             <td>
		<?php echo $form->dropDownListRow($model, 'tipotitulo',array('' => 'Seleccione...','Profesional'=>'Profesional',
                'Técnico'=>'Técnico','Técnologico'=>'Técnologico' )); ?>
                <?php echo $form->error($model,'tipotitulo'); ?>
              </td>
              <td>
                <?php echo $form->textFieldRow($model, 'nombreinstituto', array("style"=>"width:310px")); ?>
		<?php echo $form->error($model,'nombreinstituto'); ?>
              </td>
              <td>
                <?php echo $form->textFieldRow($model, 'titulo', array("style"=>"width:310px")); ?>
		<?php echo $form->error($model,'titulo'); ?>
              </td>
        </tr>  
        <tr class="row">
             <td>
	        <?php echo $form->labelEx($model,'fecha inicio'); ?>
                <div class="controls">
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'fechainicio',
			'value' => $model->fechainicio,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
                                'yearRange' =>'1970:2013',
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
                                'yearRange' =>'1970:2013',
				),
			)); ?>
		
          </td>
              <td>
                <?php echo $form->dropDownListRow($model, 'estado',array('' => 'Seleccione...','1'=>'Incompleto',
                '2'=>'Terminado')); ?>
                <?php echo $form->error($model,'estado'); ?>
              </td>
        </tr>  
    </table>
  <div class="form-actions">
    <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar', 'size' => 'large'));
     $this->endWidget();
    ?>
  </div>
</div><!-- form -->