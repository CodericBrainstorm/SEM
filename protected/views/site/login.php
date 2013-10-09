<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);


?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
        <div style="text-align: center;">
            <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
            <div class="hero-unit" style="width: 40%; margin-left: 30%;">
            <div class="badge badge-info">
            <h3>Iniciar Sesión</h3> 
            </div>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>


	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'label' => 'Ingresar', 'size' => 'large')); ?>
	</div>
            </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
