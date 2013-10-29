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

echo $model->coddepto; 
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

<table class="table_inscripcion">
             <tr class="row0">
                <hr class="linea-sep" />
                <td>
                   <?php if(isset($model->coddepto))
                       echo $form->textFieldRow($model, 'nom_depto', array('maxlength' => 255));
                    else
                       echo $form->dropDownListRow($model, 'coddepto', GxHtml::listDataEx(Departamento::model()->findAll(array('condition' => 'habiles = 1',"order"=>"nombre"))), array('prompt' => 'Seleccione...')); ?>
                </td>
                <td> 
                   <?php  if(!isset($model->coddepto)){
                      $tempciudad = $model->codmunicipio;
                      
                       if (!is_numeric($tempciudad)){
                         $tempciudad = 0; 
                         echo $form->dropDownListRow($model, 'codmunicipio', GxHtml::listDataEx(Municipio::model()->findAll(array('condition'=>'idmunicipio='.$tempciudad))), array('prompt' => 'Seleccione...'));
                         ?>
                </td>
                <td>
                  <?php echo $form->dropDownListRow($model, 'secretariaID', GxHtml::listDataEx(Secretaria::model()->findAll()), array('prompt' => 'Seleccione...'));
                   } }
                        ?>
                </td>
                <?php if(isset($model->coddepto)) { ?>
                  <td> <?php echo $form->textFieldRow($model, 'nom_municipio', array('maxlength' => 255)); ?></td>
                  <td> <?php echo $form->textFieldRow($model, 'secretaria', array('maxlength' => 255)); ?></td>
                <?php } ?>
                <td>
                    <?php echo $form->textFieldRow($model, 'codigo', array('maxlength' => 255)); ?>
                </td>
               
            </tr>

                        
            <tr class="row1">
                 <td>
                    <?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 255)); ?>
                </td>
                
                <td>
                    <?php echo $form->textFieldRow($model, 'direccion', array('maxlength' => 255)); ?>
                </td>
                <td>
                    <?php echo $form->textFieldRow($model, 'telefono', array('maxlength' => 255)); ?>
                </td>
                <td>
                   <?php echo $form->textFieldRow($model, 'tipo', array('maxlength' => 255)); ?>
                </td>
                
               
            </tr>
                                
            <tr>
                <td>
                   <?php echo $form->textFieldRow($model, 'zona', array('maxlength' => 255)); ?>
                </td>
                <td>
                    <?php echo $form->textFieldRow($model, 'sector', array('maxlength' => 255)); ?>
                 
                 </td>
                 <td>
                   <?php echo $form->textAreaRow($model, 'jornadas', array('maxlength' => 255)); ?>
		 </td>
                <td>
                    <?php echo $form->textAreaRow($model, 'niveles', array('maxlength' => 255)); ?>
		 </td>

               
            </tr>
            <tr>
                 <td>
                    <?php echo $form->textAreaRow($model, 'grados', array('maxlength' => 255)); ?>
                </td>
                <td> 
                    <?php echo $form->textAreaRow($model, 'modeloseducativos', array('maxlength' => 255)); ?>
		</td>
                <td>
                    <?php echo $form->textAreaRow($model, 'capacidadesexcepcionales', array('maxlength' => 255)); ?> 
                </td>
                    <td>
                       <?php echo $form->textAreaRow($model, 'discapacidades', array('maxlength' => 255)); ?>
                    </td>
                    
            <tr>
            <tr>
                <td>  
                      <?php echo $form->textAreaRow($model, 'idiomas', array('maxlength' => 255)); ?>
                    </td>
                    <td>
                        <?php echo $form->textFieldRow($model, 'estado', array('maxlength' => 255)); ?>
                    </td>
                   <td>
                       <?php echo $form->textFieldRow($model, 'num_sedes', array('maxlength' => 5)); ?>
                   </td>
                   <td>
                       <?php echo $form->textFieldRow($model, 'calendario', array('maxlength' => 1)); ?>
                   </td>
                
            </tr>
            <TR>
                <td>
                    <?php echo $form->textFieldRow($model, 'correoelectronico', array('maxlength' => 100)); ?>
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