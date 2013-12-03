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
	'id' => 'sede-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
<?php echo $form->errorSummary($model); ?>
   <table class="table_inscripcion">
        <tr class="row0">
            
            <td>
                 <?php echo $form->textFieldRow($model, 'secretaria', array('maxlength' => 10, 'readOnly'=>true)); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'coddepto', array('maxlength' => 16, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'coddepto'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'depto', array('maxlength' => 6, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'depto'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'codmunicipio', array('maxlength' => 12, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'codmunicipio'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'nommunicipio', array('maxlength' => 12, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'nommunicipio'); ?>
             </td>
	</tr>
        
	<tr>
            
	    <td>
		<?php echo $form->textFieldRow($model, 'codestablecimiento', array('maxlength' => 18, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'codestablecimiento'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'codsede'); ?>
		<?php echo $form->error($model,'codsede'); ?>
            </td>
            <td>
		<?php echo $form->textFieldRow($model, 'nombresede', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'nombresede'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'zona', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'zona'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'direccion', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'direccion'); ?>
             </td>
	</tr>
        
        <tr>
          
	   <td>
		<?php echo $form->textFieldRow($model, 'telefono', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'telefono'); ?>
           </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'estadosede', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'estadosede'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'nivelessede', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'nivelessede'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'modelossede', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'modelossede'); ?>
         </td>
	<td>
		<?php echo $form->textFieldRow($model, 'gradossede', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'gradossede'); ?>
         </td>
    </tr>
    <label><?php //echo GxHtml::encode($model->getRelationLabel('egresadoSedes')); ?></label>
		<?php //echo $form->checkBoxList($model, 'egresadoSedes', GxHtml::encodeEx(GxHtml::listDataEx(EgresadoSede::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php //echo GxHtml::encode($model->getRelationLabel('historicoegresados')); ?></label>
		<?php //echo $form->checkBoxList($model, 'historicoegresados', GxHtml::encodeEx(GxHtml::listDataEx(Historicoegresado::model()->findAllAttributes(null, true)), false, true)); ?>
 </table>
		

		
<div class="form-actions">
<?php
    $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar', 'size' => 'large'));
     $this->endWidget();
?>
</div>
</div><!-- form -->