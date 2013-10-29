<div class="form">


<?php $form = $this->beginWidget('BActiveForm', array(
	'id' => 'egresado-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('BAlert',array(
'content'=>'<p>Campos con <span class="required">*</span> son requiredos.</p> ',
)); ?>
<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo $form->fieldClass($model, 'CODIGO_SED'); ?>">
		<?php echo $form->labelEx($model,'CODIGO_SED'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CODIGO_SED', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'CODIGO_SED'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ID_old'); ?>">
		<?php echo $form->labelEx($model,'ID_old'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ID_old', array('maxlength' => 16)); ?>
		<?php echo $form->error($model,'ID_old'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'MUN_CODIGO'); ?>">
		<?php echo $form->labelEx($model,'MUN_CODIGO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'MUN_CODIGO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'MUN_CODIGO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CODIGO_DANE_ESTABLEDUCATIVO'); ?>">
		<?php echo $form->labelEx($model,'CODIGO_DANE_ESTABLEDUCATIVO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CODIGO_DANE_ESTABLEDUCATIVO', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'CODIGO_DANE_ESTABLEDUCATIVO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CODIGO_DANE_SEDE'); ?>">
		<?php echo $form->labelEx($model,'CODIGO_DANE_SEDE'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CODIGO_DANE_SEDE', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'CODIGO_DANE_SEDE'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CONS_SEDE'); ?>">
		<?php echo $form->labelEx($model,'CONS_SEDE'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CONS_SEDE', array('maxlength' => 18)); ?>
		<?php echo $form->error($model,'CONS_SEDE'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'establecimiento_id'); ?>">
		<?php echo $form->labelEx($model,'establecimiento_id'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'establecimiento_id'); ?>
		<?php echo $form->error($model,'establecimiento_id'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'TIPO_DOCUMENTO'); ?>">
		<?php echo $form->labelEx($model,'TIPO_DOCUMENTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'TIPO_DOCUMENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'TIPO_DOCUMENTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NRO_OCUMENTO'); ?>">
		<?php echo $form->labelEx($model,'NRO_OCUMENTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NRO_OCUMENTO', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'NRO_OCUMENTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'EXPEDICION_DOC_DPTO'); ?>">
		<?php echo $form->labelEx($model,'EXPEDICION_DOC_DPTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'EXPEDICION_DOC_DPTO', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'EXPEDICION_DOC_DPTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'EXPEDICION_DOC_MUN'); ?>">
		<?php echo $form->labelEx($model,'EXPEDICION_DOC_MUN'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'EXPEDICION_DOC_MUN', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'EXPEDICION_DOC_MUN'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'APELLIDO1'); ?>">
		<?php echo $form->labelEx($model,'APELLIDO1'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'APELLIDO1', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'APELLIDO1'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'APELLIDO2'); ?>">
		<?php echo $form->labelEx($model,'APELLIDO2'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'APELLIDO2', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'APELLIDO2'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NOMBRE1'); ?>">
		<?php echo $form->labelEx($model,'NOMBRE1'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NOMBRE1', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'NOMBRE1'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NOMBRE2'); ?>">
		<?php echo $form->labelEx($model,'NOMBRE2'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NOMBRE2', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'NOMBRE2'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'FechaNacDate'); ?>">
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
			));
; ?>
		<?php echo $form->error($model,'FechaNacDate'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'DEPARTAMENTO_NACIMIENTO'); ?>">
		<?php echo $form->labelEx($model,'DEPARTAMENTO_NACIMIENTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'DEPARTAMENTO_NACIMIENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'DEPARTAMENTO_NACIMIENTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'MUNICIPIO_NACIMIENTO'); ?>">
		<?php echo $form->labelEx($model,'MUNICIPIO_NACIMIENTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'MUNICIPIO_NACIMIENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'MUNICIPIO_NACIMIENTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'GENERO'); ?>">
		<?php echo $form->labelEx($model,'GENERO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'GENERO', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'GENERO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ZONA_RESIDENCIA_ESTUDIANTE'); ?>">
		<?php echo $form->labelEx($model,'ZONA_RESIDENCIA_ESTUDIANTE'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ZONA_RESIDENCIA_ESTUDIANTE', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'ZONA_RESIDENCIA_ESTUDIANTE'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'DIRECCION_RESIDENCIA'); ?>">
		<?php echo $form->labelEx($model,'DIRECCION_RESIDENCIA'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'DIRECCION_RESIDENCIA', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'DIRECCION_RESIDENCIA'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'TEL'); ?>">
		<?php echo $form->labelEx($model,'TEL'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'TEL', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'TEL'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'RESIDENCIA_DEPARTAMENTO'); ?>">
		<?php echo $form->labelEx($model,'RESIDENCIA_DEPARTAMENTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'RESIDENCIA_DEPARTAMENTO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'RESIDENCIA_DEPARTAMENTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'RESIDENCIA_MUNICIPIO'); ?>">
		<?php echo $form->labelEx($model,'RESIDENCIA_MUNICIPIO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'RESIDENCIA_MUNICIPIO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'RESIDENCIA_MUNICIPIO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ESTRATO'); ?>">
		<?php echo $form->labelEx($model,'ESTRATO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ESTRATO', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'ESTRATO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'SISBEN'); ?>">
		<?php echo $form->labelEx($model,'SISBEN'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'SISBEN', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'SISBEN'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'POB_VICT_CONF'); ?>">
		<?php echo $form->labelEx($model,'POB_VICT_CONF'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'POB_VICT_CONF', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'POB_VICT_CONF'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'DPTO_EXP'); ?>">
		<?php echo $form->labelEx($model,'DPTO_EXP'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'DPTO_EXP', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'DPTO_EXP'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'MUN_EXP'); ?>">
		<?php echo $form->labelEx($model,'MUN_EXP'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'MUN_EXP', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'MUN_EXP'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'PROVIENE_OTRO_MUN'); ?>">
		<?php echo $form->labelEx($model,'PROVIENE_OTRO_MUN'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'PROVIENE_OTRO_MUN', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'PROVIENE_OTRO_MUN'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'TIPO_DISCAPACIDAD'); ?>">
		<?php echo $form->labelEx($model,'TIPO_DISCAPACIDAD'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'TIPO_DISCAPACIDAD', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'TIPO_DISCAPACIDAD'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CAPACIDADES_EXCEPCIONALES'); ?>">
		<?php echo $form->labelEx($model,'CAPACIDADES_EXCEPCIONALES'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CAPACIDADES_EXCEPCIONALES', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'CAPACIDADES_EXCEPCIONALES'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ETNIA'); ?>">
		<?php echo $form->labelEx($model,'ETNIA'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ETNIA', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'ETNIA'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'INS_FAMILIAR'); ?>">
		<?php echo $form->labelEx($model,'INS_FAMILIAR'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'INS_FAMILIAR', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'INS_FAMILIAR'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CARACTER'); ?>">
		<?php echo $form->labelEx($model,'CARACTER'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CARACTER', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'CARACTER'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ESPECIALIDAD'); ?>">
		<?php echo $form->labelEx($model,'ESPECIALIDAD'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ESPECIALIDAD', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'ESPECIALIDAD'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'GRUPO_CURSO'); ?>">
		<?php echo $form->labelEx($model,'GRUPO_CURSO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'GRUPO_CURSO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'GRUPO_CURSO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'METODOLOGIA'); ?>">
		<?php echo $form->labelEx($model,'METODOLOGIA'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'METODOLOGIA', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'METODOLOGIA'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'Grupo_id'); ?>">
		<?php echo $form->labelEx($model,'Grupo_id'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'Grupo_id'); ?>
		<?php echo $form->error($model,'Grupo_id'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'SUBSIDIADO'); ?>">
		<?php echo $form->labelEx($model,'SUBSIDIADO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'SUBSIDIADO', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'SUBSIDIADO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'REPITENTE'); ?>">
		<?php echo $form->labelEx($model,'REPITENTE'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'REPITENTE', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'REPITENTE'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NUEVO'); ?>">
		<?php echo $form->labelEx($model,'NUEVO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NUEVO', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'NUEVO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'SIT_ACAD_ANO_ANT'); ?>">
		<?php echo $form->labelEx($model,'SIT_ACAD_ANO_ANT'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'SIT_ACAD_ANO_ANT', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'SIT_ACAD_ANO_ANT'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CON_ALUM_ANO_ANT'); ?>">
		<?php echo $form->labelEx($model,'CON_ALUM_ANO_ANT'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CON_ALUM_ANO_ANT', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'CON_ALUM_ANO_ANT'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ID_ALUMNO'); ?>">
		<?php echo $form->labelEx($model,'ID_ALUMNO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ID_ALUMNO', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'ID_ALUMNO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'COR_ID'); ?>">
		<?php echo $form->labelEx($model,'COR_ID'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'COR_ID', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'COR_ID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CAB_FAMILIA'); ?>">
		<?php echo $form->labelEx($model,'CAB_FAMILIA'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CAB_FAMILIA', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'CAB_FAMILIA'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'BEN_MAD_FLIA'); ?>">
		<?php echo $form->labelEx($model,'BEN_MAD_FLIA'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'BEN_MAD_FLIA', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'BEN_MAD_FLIA'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'BEN_VET_FP'); ?>">
		<?php echo $form->labelEx($model,'BEN_VET_FP'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'BEN_VET_FP', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'BEN_VET_FP'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'BEN_HER_NAC'); ?>">
		<?php echo $form->labelEx($model,'BEN_HER_NAC'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'BEN_HER_NAC', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'BEN_HER_NAC'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'EST_ID'); ?>">
		<?php echo $form->labelEx($model,'EST_ID'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'EST_ID', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'EST_ID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NOMBRE1_FON'); ?>">
		<?php echo $form->labelEx($model,'NOMBRE1_FON'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NOMBRE1_FON', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'NOMBRE1_FON'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NOMBRE2_FON'); ?>">
		<?php echo $form->labelEx($model,'NOMBRE2_FON'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NOMBRE2_FON', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'NOMBRE2_FON'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'APELLIDO1_FON'); ?>">
		<?php echo $form->labelEx($model,'APELLIDO1_FON'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'APELLIDO1_FON', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'APELLIDO1_FON'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'APELLIDO2_FON'); ?>">
		<?php echo $form->labelEx($model,'APELLIDO2_FON'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'APELLIDO2_FON', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'APELLIDO2_FON'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'PER_ID'); ?>">
		<?php echo $form->labelEx($model,'PER_ID'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'PER_ID', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'PER_ID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'ESTADO'); ?>">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'ESTADO', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'INTERNADO'); ?>">
		<?php echo $form->labelEx($model,'INTERNADO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'INTERNADO', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'INTERNADO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'VAL_DES_PERIODO2'); ?>">
		<?php echo $form->labelEx($model,'VAL_DES_PERIODO2'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'VAL_DES_PERIODO2', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'VAL_DES_PERIODO2'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NUM_CONVENIO'); ?>">
		<?php echo $form->labelEx($model,'NUM_CONVENIO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NUM_CONVENIO', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'NUM_CONVENIO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'BUENO'); ?>">
		<?php echo $form->labelEx($model,'BUENO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'BUENO', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'BUENO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CAR_ID'); ?>">
		<?php echo $form->labelEx($model,'CAR_ID'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CAR_ID', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'CAR_ID'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'FEC_CREACION'); ?>">
		<?php echo $form->labelEx($model,'FEC_CREACION'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'FEC_CREACION', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'FEC_CREACION'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NOMBRE_ESTABLECIMIENTO'); ?>">
		<?php echo $form->labelEx($model,'NOMBRE_ESTABLECIMIENTO'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NOMBRE_ESTABLECIMIENTO', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'NOMBRE_ESTABLECIMIENTO'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CTE_ID_SECTOR'); ?>">
		<?php echo $form->labelEx($model,'CTE_ID_SECTOR'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CTE_ID_SECTOR', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'CTE_ID_SECTOR'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'NOMBRE_SEDE'); ?>">
		<?php echo $form->labelEx($model,'NOMBRE_SEDE'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'NOMBRE_SEDE', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'NOMBRE_SEDE'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'CTE_ID_ZONA'); ?>">
		<?php echo $form->labelEx($model,'CTE_ID_ZONA'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'CTE_ID_ZONA', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'CTE_ID_ZONA'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'DISCAP1'); ?>">
		<?php echo $form->labelEx($model,'DISCAP1'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'DISCAP1', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'DISCAP1'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'grado1'); ?>">
		<?php echo $form->labelEx($model,'grado1'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'grado1', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'grado1'); ?>
                </div>
		</div><!-- row -->
		<div class="<?php echo $form->fieldClass($model, 'COD_MUN1'); ?>">
		<?php echo $form->labelEx($model,'COD_MUN1'); ?>
                <div class="controls">
		<?php echo $form->textField($model, 'COD_MUN1', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'COD_MUN1'); ?>
                </div>
		</div><!-- row -->

<div class="form-actions">
<?php
echo BHtml::submitButton(Yii::t('app', 'Guardar'));
$this->endWidget();
?>
</div>
</div><!-- form -->