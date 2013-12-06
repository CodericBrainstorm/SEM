
<style type="text/css">
    .titulo-carac{
        background-color: #bebec5;
        color: black;
        padding-left: 3px;
        padding:0px 8px 0px 14px;
        margin-bottom:18px;
        text-shadow:0 1px 0 rgba(255,255,255,0.5);
        border:1px solid dimgray;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        font-size: 20px;
    }
    .table_inscripcion td {
        vertical-align: text-top;
    }
    .formaciones-td {
        float: left;  align: text-bottom;
       
    }
    .checkbox.inline {  margin-left: 0;}
    
</style>

<div class="form">


<?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id' => 'historicoegresado-form',
	'enableAjaxValidation' => false,
));
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
    <table class="table_inscripcion">
        <tr>
            <td>
                <?php echo $form->dropDownListRow($model, 'anio',  array('prompt' => 'Seleccione...','1985'=>'1985', '1986'=>'1986', '1987'=>'1987',
                    '1988'=>'1988', '1989'=>'1989', '1990'=>'1990', '1991'=>'1991', '1992'=>'1992', '1993'=>'1993',
                    '1994'=>'1994', '1995'=>'1995', '1996'=>'1996', '1997'=>'1997', '1998'=>'1998', '1999'=>'1999',
                    '2000'=>'2000', '2001'=>'2001', '2002'=>'2002', '2003'=>'2003', '2004'=>'2004', '2005'=>'2005',
                    '2006'=>'2006', '2007'=>'2007', '2008'=>'2008', '2009'=>'2009', '2010'=>'2010', '2011'=>'2011',
                    '2012' => '2012', '2013'=>'2013'));
                ?>
                
            </td>
            <td>
               <?php echo $form->dropDownListRow($model, 'grado', array('prompt' => 'Seleccione...', '1'=>'1°',
                   '2'=>'2°', '3'=>'3°', '4'=>'4°', '5'=>'5°', '6'=>'6°', '7'=>'7°',
                   '8'=>'8°', '9'=>'9°', '10'=>'10°','11'=>'11°')); ?>
            </td>
        </tr>
    </table>

    
    
    
<div class="form-actions">
<?php
     $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'success', 'icon' => 'ok white', 'label' => 'Guardar Histórico', 'size' => 'large'));
     $this->endWidget();
?>
</div>
</div><!-- form -->