<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$usuario = User::model()->findByPk(Yii::app()->user->id);
echo 'ROL:  '.$usuario->rol;
?>

<h1>Bienvenidos a <i>RUMBOS</i></h1>

<div style="text-align: center;">
    <?php 
    $this->beginWidget('bootstrap.widgets.BootHero');
    ?>
       <div style="text-align: center;">
           <?php if(Yii::app()->user->name == 'admin') {  ?>
            <a class="btn btn-primary btn-large" href="index.php?r=establecimiento/admin">Instituciones
            <img src="images/institution_icon.jpg"  WIDTH=40 HEIGHT=40></a>
           <a class="btn btn-primary btn-large" href="index.php?r=establecimiento/admin">Alumnos
            <img src="images/alumno2.jpg"  WIDTH=40 HEIGHT=40></a>
           <a class="btn btn-primary btn-large" href="index.php?r=establecimiento/admin">Indicadores
            <img src="images/iindicadores.jpg"  WIDTH=40 HEIGHT=40></a>
           <?php } ?>
      </div>
    
    <?php $this->endWidget(); ?>
    
    </div>






