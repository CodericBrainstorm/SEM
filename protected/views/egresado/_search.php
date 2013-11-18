<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model, 'CODIGO_SED'); ?>
		<?php echo $form->textField($model, 'CODIGO_SED', array('maxlength' => 10)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model, 'MUN_CODIGO'); ?>
		<?php echo $form->textField($model, 'MUN_CODIGO', array('maxlength' => 6)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'CODIGO_DANE_ESTABLEDUCATIVO'); ?>
		<?php //echo $form->textField($model, 'CODIGO_DANE_ESTABLEDUCATIVO', array('maxlength' => 12)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'CODIGO_DANE_SEDE'); ?>
		<?php //echo $form->textField($model, 'CODIGO_DANE_SEDE', array('maxlength' => 12)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'CONS_SEDE'); ?>
		<?php echo $form->textField($model, 'CONS_SEDE', array('maxlength' => 18)); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model, 'TIPO_DOCUMENTO'); ?>
		<?php echo $form->textField($model, 'TIPO_DOCUMENTO', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'NRO_OCUMENTO'); ?>
		<?php echo $form->textField($model, 'NRO_OCUMENTO', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'EXPEDICION_DOC_DPTO'); ?>
		<?php echo $form->textField($model, 'EXPEDICION_DOC_DPTO', array('maxlength' => 2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'EXPEDICION_DOC_MUN'); ?>
		<?php echo $form->textField($model, 'EXPEDICION_DOC_MUN', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'APELLIDO1'); ?>
		<?php echo $form->textField($model, 'APELLIDO1', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'APELLIDO2'); ?>
		<?php echo $form->textField($model, 'APELLIDO2', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'NOMBRE1'); ?>
		<?php echo $form->textField($model, 'NOMBRE1', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'NOMBRE2'); ?>
		<?php echo $form->textField($model, 'NOMBRE2', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'FechaNacDate'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'FechaNacDate',
			'value' => $model->FechaNacDate,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'DEPARTAMENTO_NACIMIENTO'); ?>
		<?php echo $form->textField($model, 'DEPARTAMENTO_NACIMIENTO', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'MUNICIPIO_NACIMIENTO'); ?>
		<?php echo $form->textField($model, 'MUNICIPIO_NACIMIENTO', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'GENERO'); ?>
		<?php echo $form->textField($model, 'GENERO', array('maxlength' => 1)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'ZONA_RESIDENCIA_ESTUDIANTE'); ?>
		<?php //echo $form->textField($model, 'ZONA_RESIDENCIA_ESTUDIANTE', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'DIRECCION_RESIDENCIA'); ?>
		<?php //echo $form->textField($model, 'DIRECCION_RESIDENCIA', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'TEL'); ?>
		<?php //echo $form->textField($model, 'TEL', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'RESIDENCIA_DEPARTAMENTO'); ?>
		<?php //echo $form->textField($model, 'RESIDENCIA_DEPARTAMENTO', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'RESIDENCIA_MUNICIPIO'); ?>
		<?php //echo $form->textField($model, 'RESIDENCIA_MUNICIPIO', array('maxlength' => 6)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'ESTRATO'); ?>
		<?php echo $form->textField($model, 'ESTRATO', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'SISBEN'); ?>
		<?php echo $form->textField($model, 'SISBEN', array('maxlength' => 4)); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model, 'DPTO_EXP'); ?>
		<?php echo $form->textField($model, 'DPTO_EXP', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'MUN_EXP'); ?>
		<?php echo $form->textField($model, 'MUN_EXP', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'PROVIENE_OTRO_MUN'); ?>
		<?php echo $form->textField($model, 'PROVIENE_OTRO_MUN', array('maxlength' => 4)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'TIPO_DISCAPACIDAD'); ?>
		<?php //echo $form->textField($model, 'TIPO_DISCAPACIDAD', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'CAPACIDADES_EXCEPCIONALES'); ?>
		<?php //echo $form->textField($model, 'CAPACIDADES_EXCEPCIONALES', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'ETNIA'); ?>
		<?php //echo $form->textField($model, 'ETNIA', array('maxlength' => 3)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'INS_FAMILIAR'); ?>
		<?php //echo $form->textField($model, 'INS_FAMILIAR', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'CARACTER'); ?>
		<?php //echo $form->textField($model, 'CARACTER', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'ESPECIALIDAD'); ?>
		<?php //echo $form->textField($model, 'ESPECIALIDAD', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'GRUPO_CURSO'); ?>
		<?php //echo $form->textField($model, 'GRUPO_CURSO', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'METODOLOGIA'); ?>
		<?php //echo $form->textField($model, 'METODOLOGIA', array('maxlength' => 4)); ?>
	</div>-->

	<div class="row">
		<?php //echo $form->label($model, 'Grupo_id'); ?>
		<?php //echo $form->textField($model, 'Grupo_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'SUBSIDIADO'); ?>
		<?php //echo $form->textField($model, 'SUBSIDIADO', array('maxlength' => 3)); ?>
	</div>

       <div class="row">

		<?php echo $form->label($model, 'NOMBRE_ESTABLECIMIENTO'); ?>
		<?php echo $form->textField($model, 'NOMBRE_ESTABLECIMIENTO', array('maxlength' => 255)); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model, 'NOMBRE_SEDE'); ?>
		<?php echo $form->textField($model, 'NOMBRE_SEDE', array('maxlength' => 255)); ?>
	</div>



	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
