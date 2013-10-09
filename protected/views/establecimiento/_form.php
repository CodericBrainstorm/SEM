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
	'id' => 'establecimiento-form',
	'enableAjaxValidation' => false,
));  
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

<table class="table_inscripcion">
             <tr class="row0">
                <hr class="linea-sep" />
                <td>
                   <?php echo $form->dropDownListRow($model, 'coddepto', GxHtml::listDataEx(Departamento::model()->findAll(array('condition' => 'habiles = 1',"order"=>"nombre"))), array('prompt' => 'Seleccione...')); ?>
                </td>
                <td>
                   <?php
                      $tempciudad = $model->codmunicipio;
                      
                       if (!is_numeric($tempciudad)){
                         $tempciudad = 0; 
                      echo $form->dropDownListRow($model, 'codmunicipio', GxHtml::listDataEx(Municipio::model()->findAll(array('condition'=>'idmunicipio='.$tempciudad))), array('prompt' => 'Seleccione...'));
                     ?>
                </td>
                <td>
                  <?php echo $form->dropDownListRow($model, 'secretariaID', GxHtml::listDataEx(Secretaria::model()->findAll()), array('prompt' => 'Seleccione...'));
                       } ?>
                </td>
                <td>
                    <?php echo $form->textFieldRow($model, 'codigo', array('maxlength' => 255)); ?>
                </td>
                <td>
                    <?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 255)); ?>
                </td>
            </tr>

                        
            <tr class="row1">
                
                
                <td>
                    <?php echo $form->textFieldRow($model, 'direccion', array('maxlength' => 255)); ?>
                </td>
                <td>
                    <?php echo $form->textFieldRow($model, 'telefono', array('maxlength' => 255)); ?>
                </td>
                <td>
                   <?php echo $form->dropDownListRow($model, 'tipoID', GxHtml::listDataEx(Tipo::model()->findAll()), array('prompt' => 'Seleccione...')); ?>
                </td>
                <td>
                   <?php echo $form->dropDownListRow($model, 'zonaID', GxHtml::listDataEx(Zona::model()->findAll()), array('prompt' => 'Seleccione...')); ?>
                </td>
                <td>
                    <?php echo $form->dropDownListRow($model, 'sectorID', GxHtml::listDataEx(Sector::model()->findAll()), array('prompt' => 'Seleccione...')); ?>
                 
                 </td>
               
            </tr>
                                
            <tr>
                 <td class="formaciones-td">
                   <label><?php echo GxHtml::encode($model->getRelationLabel('Jornadas')); ?></label>
		       <?php echo $form->checkBoxList($model,
                                                      'instJornadaEstablecimientos',
                                                      GxHtml::encodeEx(GxHtml::listDataEx(Jornada::model()->findAllAttributes(null, true))),
                                                     array('labelOptions'=>array('style'=>'display:inline-block;'))
                                                     
                               ); ?>
		 </td>
                <td>
                   <label><?php echo GxHtml::encode($model->getRelationLabel('Niveles')); ?></label>
		     <?php echo $form->checkBoxList($model, 'instNivelEstablecimientos',
                             GxHtml::encodeEx(GxHtml::listDataEx(Nivel::model()->findAllAttributes(null, true)), false, true)); 
                     ?>
		 </td>

                <td>
                    <label><?php echo GxHtml::encode($model->getRelationLabel('Grados')); ?></label>
		    <?php echo $form->checkBoxList($model, 'instGradoEstablecimientos', GxHtml::encodeEx(GxHtml::listDataEx(Grado::model()->findAllAttributes(null, true)), false, true)); ?>
		 </td>
                <td>
                    <label><?php echo GxHtml::encode($model->getRelationLabel('Modelos educativos')); ?></label>
		    <?php echo $form->checkBoxList($model, 'instModeloseducativosEstablecimientos', GxHtml::encodeEx(GxHtml::listDataEx(Modeloseducativos::model()->findAllAttributes(null, true)), false, true)); ?>
		</td>
                <td>
                    <label><?php echo GxHtml::encode($model->getRelationLabel('Capacidades excepcionales ')); ?></label>
		   <?php echo $form->checkBoxList($model, 'instCapacidadexcepcionalEstablecimientos', GxHtml::encodeEx(GxHtml::listDataEx(Capacidadexcepcional::model()->findAllAttributes(null, true)), false, true)); ?>
	        </td>
            </tr>
            <tr>
                <td>
                   <label><?php echo GxHtml::encode($model->getRelationLabel('Discapacidades')); ?></label>
		    <?php echo $form->checkBoxList($model, 'instDiscapacidadEstablecimientos', GxHtml::encodeEx(GxHtml::listDataEx(Discapacidad::model()->findAllAttributes(null, true)), false, true)); ?>
	       </td>
               <td>  
                   <label><?php echo GxHtml::encode($model->getRelationLabel('Idiomas')); ?></label>
		   <?php echo $form->checkBoxList($model, 'instIdiomaEstablecimientos', GxHtml::encodeEx(GxHtml::listDataEx(Idioma::model()->findAllAttributes(null, true)), false, true)); ?>
	       </td>
               <td>
                    <?php echo $form->dropDownListRow($model, 'estadoID', GxHtml::listDataEx(Estado::model()->findAll())); ?>
                </td>
            
           
                <td> <?php //echo $form->textFieldRow($model, 'RADICADO', array('maxlength' => 255)); ?><td>
            <tr>
       </table> 
          
		<?php //echo $form->textField($model, 'correoelectronico', array('maxlength' => 100)); ?>
		<?php //echo $form->error($model,'correoelectronico'); ?>
                </div>
		</div><!-- row -->

		<label><?php //echo GxHtml::encode($model->getRelationLabel('instHistoricorectores')); ?></label>
		<?php //echo $form->checkBoxList($model, 'instHistoricorectores', GxHtml::encodeEx(GxHtml::listDataEx(InstHistoricorectores::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php //echo GxHtml::encode($model->getRelationLabel('sedSedes')); ?></label>
		<?php //echo $form->checkBoxList($model, 'sedSedes', GxHtml::encodeEx(GxHtml::listDataEx(SedSede::model()->findAllAttributes(null, true)), false, true)); ?>
<div class="form-actions">
<?php
     $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar', 'size' => 'large'));
     $this->endWidget();
?>
</div>
</div><!-- form -->