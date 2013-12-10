<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
    <table>
       <tr>
           <td>
               <?php echo $form->label($model, 'CODIGO_SED'); ?>
               <?php echo $form->textField($model, 'CODIGO_SED', array('maxlength' => 10)); ?>
           </td>
           <td>
               <?php echo $form->label($model, 'MUN_CODIGO'); ?>
               <?php echo $form->textField($model, 'MUN_CODIGO', array('maxlength' => 6)); ?>
           </td>
           <td>
               <?php echo $form->label($model, 'TIPO_DOCUMENTO'); ?>
               <?php echo $form->textField($model, 'TIPO_DOCUMENTO', array('maxlength' => 6)); ?>
           </td>
           <td>
		<?php echo $form->label($model, 'NRO_OCUMENTO'); ?>
		<?php echo $form->textField($model, 'NRO_OCUMENTO', array('maxlength' => 20)); ?>
	   </td>
           
       </tr>
       <tr>
	  <td>
		<?php echo $form->label($model, 'APELLIDO1'); ?>
		<?php echo $form->textField($model, 'APELLIDO1', array('maxlength' => 200)); ?>
	  </td>

	  <td>
		<?php echo $form->label($model, 'APELLIDO2'); ?>
		<?php echo $form->textField($model, 'APELLIDO2', array('maxlength' => 200)); ?>
	  </td>

	   <td>
		<?php echo $form->label($model, 'NOMBRE1'); ?>
		<?php echo $form->textField($model, 'NOMBRE1', array('maxlength' => 200)); ?>
	   </td>

	   <td>
		<?php echo $form->label($model, 'NOMBRE2'); ?>
		<?php echo $form->textField($model, 'NOMBRE2', array('maxlength' => 200)); ?>
	   </td>
        </tr>
	<tr>
            <td>
		<?php echo $form->label($model, 'DEPARTAMENTO_NACIMIENTO_ID'); ?>
		<?php echo $form->textField($model, 'DEPARTAMENTO_NACIMIENTO_ID', array('maxlength' => 6)); ?>
	    </td>
            <td>
		<?php echo $form->label($model, 'MUNICIPIO_NACIMIENTO_ID'); ?>
		<?php echo $form->textField($model, 'MUNICIPIO_NACIMIENTO_ID', array('maxlength' => 6)); ?>
	    </td>

	    <td>
		<?php echo $form->label($model, 'GENERO'); ?>
		<?php echo $form->textField($model, 'GENERO', array('maxlength' => 1)); ?>
	    </td>
            <td>
                <?php echo $form->label($model, 'ESTRATO'); ?>
		<?php echo $form->textField($model, 'ESTRATO', array('maxlength' => 4)); ?>
	    </td> 
        </tr>
        <tr> 
	   <td>
		<?php echo $form->label($model, 'SISBEN'); ?>
		<?php echo $form->textField($model, 'SISBEN', array('maxlength' => 4)); ?>
	    </td>
            <td>
		<?php echo $form->label($model, 'DPTO_EXP'); ?>
		<?php echo $form->textField($model, 'DPTO_EXP', array('maxlength' => 6)); ?>
	   </td>
           <td>
		<?php echo $form->label($model, 'MUN_EXP'); ?>
		<?php echo $form->textField($model, 'MUN_EXP', array('maxlength' => 6)); ?>
	   </td>
           <td>
		<?php echo $form->label($model, 'PROVIENE_OTRO_MUN'); ?>
		<?php echo $form->textField($model, 'PROVIENE_OTRO_MUN', array('maxlength' => 4)); ?>
	   </td>
       </tr>
       <tr>
           <td>
               <?php echo $form->label($model, 'ETNIA'); ?>
               <?php echo $form->textField($model, 'ETNIA', array('maxlength' => 3)); ?>
           </td>>
           <td>

               <?php echo $form->label($model, 'NOMBRE_ESTABLECIMIENTO'); ?>
               <?php echo $form->textField($model, 'NOMBRE_ESTABLECIMIENTO', array('maxlength' => 255)); ?>
           </td>
           <td>
		<?php echo $form->label($model, 'NOMBRE_SEDE'); ?>
		<?php echo $form->textField($model, 'NOMBRE_SEDE', array('maxlength' => 255)); ?>
	   </td>
         </tr>
       </table>


	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar Egresado')); ?>
	</div>
 

<?php $this->endWidget(); ?>

</div><!-- search-form -->
