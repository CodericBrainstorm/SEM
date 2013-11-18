<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('ID')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->ID), array('view', 'id' => $data->ID)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('CODIGO_SED')); ?>:
	<?php echo GxHtml::encode($data->CODIGO_SED); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ID_old')); ?>:
	<?php echo GxHtml::encode($data->ID_old); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('MUN_CODIGO')); ?>:
	<?php echo GxHtml::encode($data->MUN_CODIGO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CODIGO_DANE_ESTABLEDUCATIVO')); ?>:
	<?php echo GxHtml::encode($data->CODIGO_DANE_ESTABLEDUCATIVO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CODIGO_DANE_SEDE')); ?>:
	<?php echo GxHtml::encode($data->CODIGO_DANE_SEDE); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CONS_SEDE')); ?>:
	<?php echo GxHtml::encode($data->CONS_SEDE); ?>
	<br />
	<?php /*
	
	<?php echo GxHtml::encode($data->getAttributeLabel('TIPO_DOCUMENTO')); ?>:
	<?php echo GxHtml::encode($data->TIPO_DOCUMENTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NRO_OCUMENTO')); ?>:
	<?php echo GxHtml::encode($data->NRO_OCUMENTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('EXPEDICION_DOC_DPTO')); ?>:
	<?php echo GxHtml::encode($data->EXPEDICION_DOC_DPTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('EXPEDICION_DOC_MUN')); ?>:
	<?php echo GxHtml::encode($data->EXPEDICION_DOC_MUN); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('APELLIDO1')); ?>:
	<?php echo GxHtml::encode($data->APELLIDO1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('APELLIDO2')); ?>:
	<?php echo GxHtml::encode($data->APELLIDO2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NOMBRE1')); ?>:
	<?php echo GxHtml::encode($data->NOMBRE1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NOMBRE2')); ?>:
	<?php echo GxHtml::encode($data->NOMBRE2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('FechaNacDate')); ?>:
	<?php echo GxHtml::encode($data->FechaNacDate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('DEPARTAMENTO_NACIMIENTO')); ?>:
	<?php echo GxHtml::encode($data->DEPARTAMENTO_NACIMIENTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('MUNICIPIO_NACIMIENTO')); ?>:
	<?php echo GxHtml::encode($data->MUNICIPIO_NACIMIENTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('GENERO')); ?>:
	<?php echo GxHtml::encode($data->GENERO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ZONA_RESIDENCIA_ESTUDIANTE')); ?>:
	<?php echo GxHtml::encode($data->ZONA_RESIDENCIA_ESTUDIANTE); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('DIRECCION_RESIDENCIA')); ?>:
	<?php echo GxHtml::encode($data->DIRECCION_RESIDENCIA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('TEL')); ?>:
	<?php echo GxHtml::encode($data->TEL); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('RESIDENCIA_DEPARTAMENTO')); ?>:
	<?php echo GxHtml::encode($data->RESIDENCIA_DEPARTAMENTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('RESIDENCIA_MUNICIPIO')); ?>:
	<?php echo GxHtml::encode($data->RESIDENCIA_MUNICIPIO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ESTRATO')); ?>:
	<?php echo GxHtml::encode($data->ESTRATO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('SISBEN')); ?>:
	<?php echo GxHtml::encode($data->SISBEN); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('POB_VICT_CONF')); ?>:
	<?php echo GxHtml::encode($data->POB_VICT_CONF); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('DPTO_EXP')); ?>:
	<?php echo GxHtml::encode($data->DPTO_EXP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('MUN_EXP')); ?>:
	<?php echo GxHtml::encode($data->MUN_EXP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('PROVIENE_OTRO_MUN')); ?>:
	<?php echo GxHtml::encode($data->PROVIENE_OTRO_MUN); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('TIPO_DISCAPACIDAD')); ?>:
	<?php echo GxHtml::encode($data->TIPO_DISCAPACIDAD); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CAPACIDADES_EXCEPCIONALES')); ?>:
	<?php echo GxHtml::encode($data->CAPACIDADES_EXCEPCIONALES); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ETNIA')); ?>:
	<?php echo GxHtml::encode($data->ETNIA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('INS_FAMILIAR')); ?>:
	<?php echo GxHtml::encode($data->INS_FAMILIAR); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CARACTER')); ?>:
	<?php echo GxHtml::encode($data->CARACTER); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ESPECIALIDAD')); ?>:
	<?php echo GxHtml::encode($data->ESPECIALIDAD); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('GRUPO_CURSO')); ?>:
	<?php echo GxHtml::encode($data->GRUPO_CURSO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('METODOLOGIA')); ?>:
	<?php echo GxHtml::encode($data->METODOLOGIA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Grupo_id')); ?>:
	<?php echo GxHtml::encode($data->Grupo_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('SUBSIDIADO')); ?>:
	<?php echo GxHtml::encode($data->SUBSIDIADO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('REPITENTE')); ?>:
	<?php echo GxHtml::encode($data->REPITENTE); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NUEVO')); ?>:
	<?php echo GxHtml::encode($data->NUEVO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('SIT_ACAD_ANO_ANT')); ?>:
	<?php echo GxHtml::encode($data->SIT_ACAD_ANO_ANT); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CON_ALUM_ANO_ANT')); ?>:
	<?php echo GxHtml::encode($data->CON_ALUM_ANO_ANT); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ID_ALUMNO')); ?>:
	<?php echo GxHtml::encode($data->ID_ALUMNO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('COR_ID')); ?>:
	<?php echo GxHtml::encode($data->COR_ID); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CAB_FAMILIA')); ?>:
	<?php echo GxHtml::encode($data->CAB_FAMILIA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('BEN_MAD_FLIA')); ?>:
	<?php echo GxHtml::encode($data->BEN_MAD_FLIA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('BEN_VET_FP')); ?>:
	<?php echo GxHtml::encode($data->BEN_VET_FP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('BEN_HER_NAC')); ?>:
	<?php echo GxHtml::encode($data->BEN_HER_NAC); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('EST_ID')); ?>:
	<?php echo GxHtml::encode($data->EST_ID); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NOMBRE1_FON')); ?>:
	<?php echo GxHtml::encode($data->NOMBRE1_FON); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NOMBRE2_FON')); ?>:
	<?php echo GxHtml::encode($data->NOMBRE2_FON); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('APELLIDO1_FON')); ?>:
	<?php echo GxHtml::encode($data->APELLIDO1_FON); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('APELLIDO2_FON')); ?>:
	<?php echo GxHtml::encode($data->APELLIDO2_FON); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('PER_ID')); ?>:
	<?php echo GxHtml::encode($data->PER_ID); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ESTADO')); ?>:
	<?php echo GxHtml::encode($data->ESTADO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('INTERNADO')); ?>:
	<?php echo GxHtml::encode($data->INTERNADO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('VAL_DES_PERIODO2')); ?>:
	<?php echo GxHtml::encode($data->VAL_DES_PERIODO2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NUM_CONVENIO')); ?>:
	<?php echo GxHtml::encode($data->NUM_CONVENIO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('BUENO')); ?>:
	<?php echo GxHtml::encode($data->BUENO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CAR_ID')); ?>:
	<?php echo GxHtml::encode($data->CAR_ID); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('FEC_CREACION')); ?>:
	<?php echo GxHtml::encode($data->FEC_CREACION); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NOMBRE_ESTABLECIMIENTO')); ?>:
	<?php echo GxHtml::encode($data->NOMBRE_ESTABLECIMIENTO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CTE_ID_SECTOR')); ?>:
	<?php echo GxHtml::encode($data->CTE_ID_SECTOR); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NOMBRE_SEDE')); ?>:
	<?php echo GxHtml::encode($data->NOMBRE_SEDE); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('CTE_ID_ZONA')); ?>:
	<?php echo GxHtml::encode($data->CTE_ID_ZONA); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('DISCAP1')); ?>:
	<?php echo GxHtml::encode($data->DISCAP1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('grado1')); ?>:
	<?php echo GxHtml::encode($data->grado1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('COD_MUN1')); ?>:
	<?php echo GxHtml::encode($data->COD_MUN1); ?>
	<br />
	*/ ?>

</div>