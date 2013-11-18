<div class="form">

<?php $form = $this->beginWidget('GxActiveForm', array(
        'id' => 'inscripcion-form',
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
        <div>
<!--            <div class="row" style="float: left; width: 47%;">
                    <?php //echo $form->label($model, 'tipo_documento_id_search'); ?>
                    <?php //echo $form->dropDownList($model, 'tipo_documento_id', GxHtml::listDataEx(Tipodocumento::model()->findAll(array('condition'=>'inscripcion=1'))), array('prompt' => Yii::t('app', 'Seleccione...'))); ?>
                    <?php //echo $form->error($model,'tipo_documento_id'); ?>
            </div>-->

            <div class="row" style="float: right; width: 47%;">
                    <?php echo $form->label($model, 'Numero de documento'); ?>
                    <?php echo $form->textField($model, 'NRO_OCUMENTO', array('maxlength' => 20)); ?>
                    <?php echo $form->error($model,'NRO_OCUMENTO'); ?>
            </div>
            <div style="clear: both;"></div>
	</div>
        <div>
            <div class="row" style="float: left; width: 47%;">
                    <?php echo $form->label($model, 'Primer apellido'); ?>
                    <?php echo $form->textField($model, 'APELLIDO1', array('maxlength' => 255)); ?>
            </div>

            <div class="row" style="float: right; width: 47%;">
                    <?php echo $form->label($model, 'Segundo apellido'); ?>
                    <?php echo $form->textField($model, 'APELLIDO2', array('maxlength' => 255)); ?>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div>
            <div class="row" style="float: left; width: 47%;">
                    <?php echo $form->label($model, 'Primer nombre'); ?>
                    <?php echo $form->textField($model, 'NOMBRE1', array('maxlength' => 255)); ?>
            </div>

            <div class="row" style="float: right; width: 47%;">
                    <?php echo $form->label($model, 'Segundo nombre'); ?>
                    <?php echo $form->textField($model, 'NOMBRE2', array('maxlength' => 255)); ?>
            </div>
            <div style="clear: both;"></div>
        </div>
	<div class="row buttons" style="text-align: center;">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
