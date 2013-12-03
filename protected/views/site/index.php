<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$usuario = User::model()->findByPk(Yii::app()->user->id);

?>

<h1>Bienvenidos a <i>RUMBOS</i></h1>

<div style="text-align: center;">
    <?php 
    $this->beginWidget('bootstrap.widgets.BootHero');
    ?>
       <div style="text-align: center;">
           <?php if (isset($usuario)){
           if($usuario->rol == 'admin') {  ?>
            <a class="btn btn-primary btn-large" href="index.php?r=establecimiento/admin">Instituciones
            <img src="images/institution_icon.jpg"  WIDTH=40 HEIGHT=40></a>
           <a class="btn btn-primary btn-large" href="index.php?r=egresado/admin">Alumnos
            <img src="images/alumno2.jpg"  WIDTH=40 HEIGHT=40></a>
           <a class="btn btn-primary btn-large" href="index.php?r=establecimiento/admin">Indicadores
            <img src="images/iindicadores.jpg"  WIDTH=40 HEIGHT=40></a>
           <?php } 
           if(($usuario->rol == 'rector') OR ($usuario->rol == 'secretaria') ) { ?>
             <a class="btn btn-primary btn-large" href="index.php?r=establecimiento/adminByUser&user=<?php echo $usuario->name; ?>&rol=<?php echo $usuario->rol; ?>">Instituciones del del usuario
            <img src="images/institution_icon.jpg"  WIDTH=40 HEIGHT=40></a>
           
           
           <?php } }  ?>  
      </div>
    
    <?php $this->endWidget(); ?>
    
    </div>






