<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<!--	<div class="row">
		<?php //echo $form->label($model, 'ID'); ?>
		<?php //echo $form->textField($model, 'ID'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'CODIGO_SED'); ?>
		<?php echo $form->textField($model, 'CODIGO_SED', array('maxlength' => 10)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'ID_old'); ?>
		<?php //echo $form->textField($model, 'ID_old', array('maxlength' => 16)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'MUN_CODIGO'); ?>
		<?php echo $form->textField($model, 'MUN_CODIGO', array('maxlength' => 6)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'CODIGO_DANE_ESTABLEDUCATIVO'); ?>
		<?php //echo $form->textField($model, 'CODIGO_DANE_ESTABLEDUCATIVO', array('maxlength' => 12)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'CODIGO_DANE_SEDE'); ?>
		<?php echo $form->textField($model, 'CODIGO_DANE_SEDE', array('maxlength' => 12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'CONS_SEDE'); ?>
		<?php echo $form->textField($model, 'CONS_SEDE', array('maxlength' => 18)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'establecimiento_id'); ?>
		<?php //echo $form->textField($model, 'establecimiento_id'); ?>
	</div>-->

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
		<?php echo $form->label($model, 'POB_VICT_CONF'); ?>
		<?php echo $form->textField($model, 'POB_VICT_CONF', array('maxlength' => 4)); ?>
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

<!--	<div class="row">
		<?php //echo $form->label($model, 'REPITENTE'); ?>
		<?php //echo $form->textField($model, 'REPITENTE', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'NUEVO'); ?>
		<?php //echo $form->textField($model, 'NUEVO', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'SIT_ACAD_ANO_ANT'); ?>
		<?php //echo $form->textField($model, 'SIT_ACAD_ANO_ANT', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'CON_ALUM_ANO_ANT'); ?>
		<?php //echo $form->textField($model, 'CON_ALUM_ANO_ANT', array('maxlength' => 3)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'ID_ALUMNO'); ?>
		<?php //echo $form->textField($model, 'ID_ALUMNO', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'COR_ID'); ?>
		<?php //echo $form->textField($model, 'COR_ID', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'CAB_FAMILIA'); ?>
		<?php //echo $form->textField($model, 'CAB_FAMILIA', array('maxlength' => 3)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'BEN_MAD_FLIA'); ?>
		<?php //echo $form->textField($model, 'BEN_MAD_FLIA', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'BEN_VET_FP'); ?>
		<?php //echo $form->textField($model, 'BEN_VET_FP', array('maxlength' => 3)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'BEN_HER_NAC'); ?>
		<?php //echo $form->textField($model, 'BEN_HER_NAC', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'EST_ID'); ?>
		<?php //echo $form->textField($model, 'EST_ID', array('maxlength' => 10)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model, 'NOMBRE1_FON'); ?>
		<?php //echo $form->textField($model, 'NOMBRE1_FON', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'NOMBRE2_FON'); ?>
		<?php //echo $form->textField($model, 'NOMBRE2_FON', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'APELLIDO1_FON'); ?>
		<?php //echo $form->textField($model, 'APELLIDO1_FON', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'APELLIDO2_FON'); ?>
		<?php //echo $form->textField($model, 'APELLIDO2_FON', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'PER_ID'); ?>
		<?php //echo $form->textField($model, 'PER_ID', array('maxlength' => 10)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'ESTADO'); ?>
		<?php echo $form->textField($model, 'ESTADO', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'INTERNADO'); ?>
		<?php echo $form->textField($model, 'INTERNADO', array('maxlength' => 2)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'VAL_DES_PERIODO2'); ?>
		<?php //echo $form->textField($model, 'VAL_DES_PERIODO2', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'NUM_CONVENIO'); ?>
		<?php //echo $form->textField($model, 'NUM_CONVENIO', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'BUENO'); ?>
		<?php //echo $form->textField($model, 'BUENO', array('maxlength' => 6)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'CAR_ID'); ?>
		<?php //echo $form->textField($model, 'CAR_ID', array('maxlength' => 10)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model, 'FEC_CREACION'); ?>
		<?php echo $form->textField($model, 'FEC_CREACION', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'NOMBRE_ESTABLECIMIENTO'); ?>
		<?php echo $form->textField($model, 'NOMBRE_ESTABLECIMIENTO', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'CTE_ID_SECTOR'); ?>
		<?php echo $form->textField($model, 'CTE_ID_SECTOR', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'NOMBRE_SEDE'); ?>
		<?php echo $form->textField($model, 'NOMBRE_SEDE', array('maxlength' => 255)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model, 'CTE_ID_ZONA'); ?>
		<?php //echo $form->textField($model, 'CTE_ID_ZONA', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'DISCAP1'); ?>
		<?php //echo $form->textField($model, 'DISCAP1', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'grado1'); ?>
		<?php //echo $form->textField($model, 'grado1', array('maxlength' => 3)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model, 'COD_MUN1'); ?>
		<?php //echo $form->textField($model, 'COD_MUN1', array('maxlength' => 10)); ?>
	</div>-->

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
