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
if(isset($_GET['idsede']))
   $model->CODIGO_DANE_SEDE = $_GET['idsede'];
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
<?php echo $form->errorSummary($model); ?>
    <BR>
    <table class="table_inscripcion">
        
        <tr class="row0">
           
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
	    <td>      <b>Tipo de documento<b><br>
		<?php echo $form->dropDownList($model, 'TIPO_DOCUMENTO', array('T.I.'=>'T.I.','C.C.'=>'C.C.' , 'C.E.'=>'C.E.',
                          'NUIP'=>'NUIP', 'NIP'=>'NIP', 'Registro civil'=>'Registro civil de nacimiento',
                          'num_SE'=>'Número de identificación establecido por Secretaría de Educación',
                           'Certificado cabildo'=>'Certificado cabildo', 'Otro'=>'Otro')); ?>
		<?php //echo $form->error($model,'TIPO_DOCUMENTO'); ?>
            </td>
	    <td>
		<?php echo $form->textFieldRow($model, 'NRO_OCUMENTO', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'NRO_OCUMENTO'); ?>
            </td>
	    <td>
		<?php echo $form->dropDownListRow($model, 'EXPEDICION_DOC_DPTO_ID', GxHtml::listDataEx(Departamento::model()->findAll()),array('prompt'=>'Seleccione...')); ?>
		<?php //echo $form->error($model,'DEPARTAMENTO_NACIMIENTO_ID'); ?>
            </td>
             <td>
		<?php $tempciudadexp = $model->EXPEDICION_DOC_MUN_ID;
                                            if (!is_numeric($tempciudadexp))
                                                $tempciudadexp=0;
                                            echo $form->dropDownListRow($model, 'EXPEDICION_DOC_MUN_ID', GxHtml::listDataEx(Municipio::model()->findAll(array('condition'=>'idmunicipio='.$tempciudadexp))), array('prompt'=>'Seleccione...')); 
                                       ?>
          </td>
	</tr>
        
        
        <tr>
          
	 
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
                                'yearRange' =>'1970:2010',
				),
			)); ?>
		
          </td>
    </tr>
    
    <tr>
        
	
	  <td>
		<?php echo $form->dropDownListRow($model, 'DEPARTAMENTO_NACIMIENTO_ID', GxHtml::listDataEx(Departamento::model()->findAll()),array('prompt'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'DEPARTAMENTO_NACIMIENTO_ID'); ?>
          </td>
          <td>
		<?php $tempciudad = $model->MUNICIPIO_NACIMIENTO_ID;
                                            if (!is_numeric($tempciudad))
                                                $tempciudad=0;
                                            echo $form->dropDownListRow($model, 'MUNICIPIO_NACIMIENTO_ID', GxHtml::listDataEx(Municipio::model()->findAll(array('condition'=>'idmunicipio='.$tempciudad))), array('prompt'=>'Seleccione...')); 
                                       ?>
          </td>
	  <td>
              <b>Género</b><BR>
	     <?php echo $form->dropDownList($model, 'GENERO', array('prompt' => 'Seleccione...', 1 => 'Femenino', 2 => 'Masculino')); ?>
	     <?php echo $form->error($model,'GENERO'); ?>
          </td>
	  <td>
                 <b>Zona residencia</b><br>
		<?php echo $form->dropDownList($model, 'ZONA_RESIDENCIA_ESTUDIANTE', array('Rural' => 'Rural','Urbana'=>'Urbana','Rural y Urbana'=>'Rural y Urbana')); ?>
		<?php echo $form->error($model,'ZONA_RESIDENCIA_ESTUDIANTE'); ?>
          </td>
           <td>
		<?php echo $form->textFieldRow($model, 'DIRECCION_RESIDENCIA', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'DIRECCION_RESIDENCIA'); ?>
          </td>
      </tr>
      <tr>
          
         
          <td>
		<?php echo $form->textFieldRow($model, 'TEL', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'TEL'); ?>
          </td>
	  <td>
		<?php echo $form->dropDownListRow($model, 'RESIDENCIA_DEPARTAMENTO_ID', GxHtml::listDataEx(Departamento::model()->findAll()),array('prompt'=>'Seleccione...')); ?>
		<?php //echo $form->error($model,'DEPARTAMENTO_NACIMIENTO_ID'); ?>
          </td>
          <td>
		<?php $tempciudadres = $model->RESIDENCIA_MUNICIPIO_ID;
                                           if (!is_numeric($tempciudadres))
                                                 $tempciudadres=0;
                                            echo $form->dropDownListRow($model, 'RESIDENCIA_MUNICIPIO_ID', GxHtml::listDataEx(Municipio::model()->findAll(array('condition'=>'idmunicipio='.$tempciudadres))), array('prompt'=>'Seleccione...')); 
                                       ?>
          </td>
	 <td>
	     <?php echo $form->dropDownListRow($model, 'ESTRATO',array('prompt' => 'Seleccione...','uno'=>'uno',
                'dos'=>'dos','tres'=>'tres','cuatro'=>'cuatro','cinco'=>'cinco','seis'=>'seis' )); ?>
	     <?php echo $form->error($model,'ESTRATO'); ?>
         </td>
          
	  <td>
		<?php echo $form->textFieldRow($model, 'SISBEN', array('maxlength' =>20)); ?>
		<?php echo $form->error($model,'SISBEN'); ?>
          </td>
      </tr>
      <tr>
         <td>
                <?php echo $form->dropDownListRow($model, 'TIPO_DISCAPACIDAD', GxHtml::listDataEx(Tipodiscapacidad::model()->findAll(array())),array('prompt'=>'Seleccione...')); ?>
         </td>
	  <td>
              <b> Capacidades excepcionales </b>
		<?php echo $form->textArea($model, 'CAPACIDADES_EXCEPCIONALES', array("style"=>"width:200px;height:28px")); ?>
		<?php echo $form->error($model,'CAPACIDADES_EXCEPCIONALES'); ?>
          </td>
	  <td>
		<?php echo $form->textFieldRow($model, 'ETNIA', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'ETNIA'); ?>
          </td>
	  <td>
		<?php echo $form->dropDownListRow($model, 'SUBSIDIADO', array('NO'=>'NO','SI'=>'SI')); ?>
		<?php echo $form->error($model,'SUBSIDIADO'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'CELULAR', array('maxlength' => 14)); ?>
		<?php echo $form->error($model,'CELULAR'); ?>
          </td>
          
        </tr>
        <tr>
         
	  <td>
		<?php echo $form->textFieldRow($model, 'FACEBOOK', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'FACEBOOK'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'TWITTER', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'FACEBOOK'); ?>
          </td>
          <td>
		<?php echo $form->textFieldRow($model, 'LINKEDIN', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'LINKEDIN'); ?>
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