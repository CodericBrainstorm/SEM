<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
    <table>
        <tr>
            <td>
                <?php echo $form->label($model, 'vinculacion'); ?>
                <?php echo $form->dropDownList($model, 'vinculacion', array('Independiente'=>'Independiente', 'Empleado'=>'Empleado')); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'fechainicio'); ?>
                <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'fechainicio',
			'value' => $model->fechainicio,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
                                'yearRange' =>'1970:2010',
				),
			)); ?>
            </td>
            <td>
                <?php echo $form->labelEx($model,'fechafin'); ?>
               <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'fechafin',
			'value' => $model->fechafin,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
                                'yearRange' =>'1970:2010',
				),
			)); ?>
            </td>

            <td>
                <?php echo $form->label($model, 'municipio'); ?>
                <?php echo $form->textField($model, 'municipio', array('maxlength' => 30)); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->label($model, 'empresa'); ?>
                <?php echo $form->textField($model, 'empresa', array('maxlength' => 30)); ?>
            </td>

            <td>
                <?php echo $form->label($model, 'sector'); ?>
                <?php echo $form->textField($model, 'sector', array('maxlength' => 20)); ?>
            </td>

            <td>
                <?php echo $form->label($model, 'cargo'); ?>
                <?php echo $form->textField($model, 'cargo', array('maxlength' => 20)); ?>
            </td>

            <td>
                <?php echo $form->label($model, 'honorariosSMMLV'); ?>
                <?php echo $form->textField($model, 'honorariosSMMLV'); ?>
            </td>
        </tr>
        
        <tr>
           <td colspan="4">
        
            <?php echo GxHtml::submitButton(Yii::t('app', 'Busqueda Histórico laboral')); ?>
               </td>
        
       </tr>
    </table>
<?php $this->endWidget(); ?>

</div><!-- search-form -->
