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
	'id' => 'egresado-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
<?php echo $form->errorSummary($model); ?>
    <table class="table_inscripcion">
        <tr class="row0">
            
            <td>
                 <?php echo $form->textFieldRow($model, 'CODIGO_SED', array('maxlength' => 10)); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'ID_old', array('maxlength' => 16)); ?>
		<?php echo $form->error($model,'ID_old'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'MUN_CODIGO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'MUN_CODIGO'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'CODIGO_DANE_ESTABLEDUCATIVO', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'CODIGO_DANE_ESTABLEDUCATIVO'); ?>
            </td>
	    <td>
		<?php if(isset($model->CODIGO_DANE_SEDE))
                {
                    echo $form->textFieldRow($model, 'CODIGO_DANE_SEDE', array('maxlength' => 12, 'readOnly'=>true)); ?>
		     <?php echo $form->error($model,'CODIGO_DANE_SEDE'); 
                } else 
                
                {
                     echo $form->textFieldRow($model, 'CODIGO_DANE_SEDE', array('maxlength' => 12)); ?>
		     <?php echo $form->error($model,'CODIGO_DANE_SEDE'); 
                } ?>
             </td>
	</tr>
        
	<tr>
            
	    <td>
		<?php echo $form->textFieldRow($model, 'CONS_SEDE', array('maxlength' => 18)); ?>
		<?php echo $form->error($model,'CONS_SEDE'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'establecimiento_id'); ?>
		<?php echo $form->error($model,'establecimiento_id'); ?>
            </td>
            <td>
		<?php echo $form->textFieldRow($model, 'TIPO_DOCUMENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'TIPO_DOCUMENTO'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'NRO_OCUMENTO', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'NRO_OCUMENTO'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'EXPEDICION_DOC_DPTO', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'EXPEDICION_DOC_DPTO'); ?>
             </td>
	</tr>
        
        <tr>
          
	   <td>
		<?php echo $form->textFieldRow($model, 'EXPEDICION_DOC_MUN', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'EXPEDICION_DOC_MUN'); ?>
           </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'APELLIDO1', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'APELLIDO1'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'APELLIDO2', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'APELLIDO2'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'NOMBRE1', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'NOMBRE1'); ?>
         </td>
	<td>
		<?php echo $form->textFieldRow($model, 'NOMBRE2', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'NOMBRE2'); ?>
         </td>
    </tr>
    
    <tr>
        
	<td>
	    <?php echo $form->labelEx($model,'FechaNacDate'); ?>
                <div class="controls">
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'FechaNacDate',
			'value' => $model->FechaNacDate,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			)); ?>
		
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'DEPARTAMENTO_NACIMIENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'DEPARTAMENTO_NACIMIENTO'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'MUNICIPIO_NACIMIENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'MUNICIPIO_NACIMIENTO'); ?>
          </td>
	  <td>
	     <?php echo $form->textFieldRow($model, 'GENERO', array('maxlength' => 1)); ?>
	     <?php echo $form->error($model,'GENERO'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'ZONA_RESIDENCIA_ESTUDIANTE', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'ZONA_RESIDENCIA_ESTUDIANTE'); ?>
          </td>
      </tr>
      <tr>
          
          <td>
		<?php echo $form->textFieldRow($model, 'DIRECCION_RESIDENCIA', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'DIRECCION_RESIDENCIA'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'TEL', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'TEL'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'RESIDENCIA_DEPARTAMENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'RESIDENCIA_DEPARTAMENTO'); ?>
         </td>
	 <td>
		<?php echo $form->textFieldRow($model, 'RESIDENCIA_MUNICIPIO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'RESIDENCIA_MUNICIPIO'); ?>
         </td>
	 <td>
	     <?php echo $form->textFieldRow($model, 'ESTRATO', array('maxlength' => 4)); ?>
	     <?php echo $form->error($model,'ESTRATO'); ?>
         </td>
      </tr>
      <tr>
          
	  <td>
		<?php echo $form->textFieldRow($model, 'SISBEN', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'SISBEN'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'TIPO_DISCAPACIDAD', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'TIPO_DISCAPACIDAD'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'CAPACIDADES_EXCEPCIONALES', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'CAPACIDADES_EXCEPCIONALES'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'ETNIA', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'ETNIA'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'SUBSIDIADO', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'SUBSIDIADO'); ?>
          </td>
        </tr>
        <tr>
          
	  
	  
	  <td>
		<?php echo $form->textFieldRow($model, 'NOMBRE_ESTABLECIMIENTO', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'NOMBRE_ESTABLECIMIENTO'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'NOMBRE_SEDE', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'NOMBRE_SEDE'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'CELULAR', array('maxlength' => 14)); ?>
		<?php echo $form->error($model,'CELULAR'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'FACEBOOK', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'FACEBOOK'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'TWITTER', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'FACEBOOK'); ?>
          </td>
         </tr>
         <TR>
             <td>
		<?php echo $form->textFieldRow($model, 'LINKEDIN', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'LINKEDIN'); ?>
          </td>
         </TR>
</table>
		
		

<div class="form-actions">
<?php
$this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar', 'size' => 'large'));
     $this->endWidget();
?>
</div>
</div><!-- form -->