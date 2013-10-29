jQuery(function($) {    
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3c;Ant',
        nextText: 'Sig&#x3e;',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi&eacute;', 'Juv', 'Vie', 'S&aacute;b'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: '',
        showAnim: 'slide',
        yearRange: '1900:2012',
        autoSize: true,
        changeYear: true,
        changeMonth: true
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    
});

$(function(){      
    $(".span-19").removeClass("span-19");
    $(".Ccombo").attr("data-placeholder", "Seleccione...");
    $(".Ccombo").chosen({
        allow_single_deselect: true
    });
    $(".Ccombo").show().addClass("hidden-field");
    $(".Cfecha").datepicker();
    $(".upprogress").hide();
    $(".form_academica .radio, .internet .radio").addClass('inline');
    
    //combos
    $("#Caracterizacion_departamento_inscripcion_id").change(function(){
        carga_municipios('#Caracterizacion_municipio_inscripcion_id',$(this).val());
    });
    $("#Caracterizacion_departamento_inscripcion_id").trigger('change');
    
    $("#Caracterizacion_departamento_reside_id").change(function(){
        carga_municipios('#Caracterizacion_municipio_reside_id',$(this).val());
    });
    $("#Caracterizacion_departamento_reside_id").trigger('change');
    
    $("#Caracterizacion_departamento_labora_id").change(function(){
        carga_municipios('#Caracterizacion_municipio_labora_id',$(this).val());
    });
    $("#Caracterizacion_departamento_labora_id").trigger('change');
    
    //flujos1
    $("#Caracterizacion_documento_identidad_id_5").change(function(){
            valida_otros(this,"#Caracterizacion_cual_documento_identidad");
    });
    $("#Caracterizacion_documento_identidad_id_0").change(function(){
            $("#Caracterizacion_documento_identidad_id_5").trigger('change');
    });
    $("#Caracterizacion_documento_identidad_id_1").change(function(){
            $("#Caracterizacion_documento_identidad_id_5").trigger('change');
    });
    $("#Caracterizacion_documento_identidad_id_2").change(function(){
            $("#Caracterizacion_documento_identidad_id_5").trigger('change');
    });
    $("#Caracterizacion_documento_identidad_id_3").change(function(){
            $("#Caracterizacion_documento_identidad_id_5").trigger('change');
    });
    $("#Caracterizacion_documento_identidad_id_4").change(function(){
            $("#Caracterizacion_documento_identidad_id_5").trigger('change');
    });
    $("#Caracterizacion_documento_identidad_id_5").trigger('change');
    
    //flujos2
    $("#Caracterizacion_comunidad_id_5").change(function(){
            valida_otros(this,"#Caracterizacion_cual_comunidad");
    });
    $("#Caracterizacion_comunidad_id_0").change(function(){
            $("#Caracterizacion_comunidad_id_5").trigger('change');
    });
    $("#Caracterizacion_comunidad_id_1").change(function(){
            $("#Caracterizacion_comunidad_id_5").trigger('change');
    });
    $("#Caracterizacion_comunidad_id_2").change(function(){
            $("#Caracterizacion_comunidad_id_5").trigger('change');
    });
    $("#Caracterizacion_comunidad_id_3").change(function(){
            $("#Caracterizacion_comunidad_id_5").trigger('change');
    });
    $("#Caracterizacion_comunidad_id_4").change(function(){
            $("#Caracterizacion_comunidad_id_5").trigger('change');
    });
    $("#Caracterizacion_comunidad_id_5").trigger('change');
    
    //flujos3
    $("#Caracterizacion_tipo_agente_educativo_id_12").change(function(){
            valida_otros(this,"#Caracterizacion_cual_otro_agente");
    });
    $("#Caracterizacion_tipo_agente_educativo_id_0").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_1").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_2").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_3").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_4").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_5").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_6").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_7").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_8").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_9").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_10").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_11").change(function(){
            $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    });
    $("#Caracterizacion_tipo_agente_educativo_id_12").trigger('change');
    
    //flujos4
    $("#Caracterizacion_tipo_institucion_labora_id_7").change(function(){
            valida_otros(this,"#Caracterizacion_cual_tipo_institucion_labora");
    });
    $("#Caracterizacion_tipo_institucion_labora_id_0").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_1").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_2").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_3").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_4").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_5").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_6").change(function(){
            $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    });
    $("#Caracterizacion_tipo_institucion_labora_id_7").trigger('change');
    //flujos5
    $("#Caracterizacion_otra_discapacidad").change(function(){
           valida_otros(this,"#Caracterizacion_cual_discapacidad");
    });
    $("#Caracterizacion_otra_discapacidad").trigger('change');
    
    //flujos2
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").change(function(){
            valida_otros(this,"#Caracterizacion_otra_cual_ingreso_edusitio");
    });
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_0").change(function(){
            $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_1").change(function(){
            $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_2").change(function(){
            $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_3").change(function(){
            $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_4").change(function(){
            $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_ingreso_edusitio_id_5").trigger('change');
    
    
    $("#Caracterizacion_tf_sin_estudios").change(function(){
             valida_otros_checks(this,".form_academica input[type='radio']");
    });
    $("#Caracterizacion_tf_sin_estudios").trigger('change');

    $("#Caracterizacion_trabajo_con_discapacidad_1").change(function(){
             valida_otros_checks(this,".row11 input[type='checkbox']");
             $("#Caracterizacion_otra_discapacidad").trigger('change');
    });
    $("#Caracterizacion_trabajo_con_discapacidad_0").change(function(){
             $("#Caracterizacion_trabajo_con_discapacidad_1").trigger('change');
    });
    $("#Caracterizacion_trabajo_con_discapacidad_1").trigger('change');
    
    
    $("#Caracterizacion_participado_primera_inf_0").change(function(){
             valida_otros(this,".formaciones-td input");
             valida_otros_checks($("#Caracterizacion_participado_primera_inf_1"),".formaciones-td input[type='checkbox']");
             $(".formaciones-td input[type='checkbox']").trigger('change');
    });
    
    $("#Caracterizacion_participado_primera_inf_1").change(function(){
             $("#Caracterizacion_participado_primera_inf_0").trigger('change');
    });
    $("#Caracterizacion_participado_primera_inf_0").trigger('change');
    
    //
    $("#Caracterizacion_formacion_primera_infancia_1").change(function(){
             valida_otros($("#Caracterizacion_formacion_primera_infancia_0"),".row13 textarea");
             valida_otros_checks(this,".row13 input[type='radio']");
    });
    $("#Caracterizacion_formacion_primera_infancia_0").change(function(){
             $("#Caracterizacion_formacion_primera_infancia_1").trigger('change');
    });
    $("#Caracterizacion_formacion_primera_infancia_1").trigger('change');
    //
    
    $("#Caracterizacion_conocimientos_tic_1").change(function(){
             valida_otros($("#Caracterizacion_conocimientos_tic_0"),".row16 textarea");
             valida_otros_checks(this,".row16 input[type='checkbox'], .row16 input[type='radio']");
    });
    $("#Caracterizacion_conocimientos_tic_0").change(function(){
             $("#Caracterizacion_conocimientos_tic_1").trigger('change');
    });
    $("#Caracterizacion_conocimientos_tic_1").trigger('change');
    //
    
    $("#Caracterizacion_frecuencia_uso_internet_id_5").change(function(){
             valida_otros(this,"#Caracterizacion_cual_frecuencia_uso_internet");
    });
    $("#Caracterizacion_frecuencia_uso_internet_id_0").change(function(){
             $("#Caracterizacion_frecuencia_uso_internet_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_uso_internet_id_1").change(function(){
             $("#Caracterizacion_frecuencia_uso_internet_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_uso_internet_id_2").change(function(){
             $("#Caracterizacion_frecuencia_uso_internet_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_uso_internet_id_3").change(function(){
             $("#Caracterizacion_frecuencia_uso_internet_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_uso_internet_id_4").change(function(){
             $("#Caracterizacion_frecuencia_uso_internet_id_5").trigger('change');
    });
    $("#Caracterizacion_frecuencia_uso_internet_id_5").trigger('change');
    //
    
    $("#Caracterizacion_dedica_tiempo_estudio_internet_1").change(function(){
             valida_otros(this,"#Caracterizacion_razones_no_dedica_tiempo");
    });
    $("#Caracterizacion_dedica_tiempo_estudio_internet_0").change(function(){
             $("#Caracterizacion_dedica_tiempo_estudio_internet_1").trigger('change');
    });
    $("#Caracterizacion_dedica_tiempo_estudio_internet_1").trigger('change');
    
    //
    $("#Caracterizacion_conoce_portal_minedu_0").change(function(){
             valida_otros(this,"#Caracterizacion_cual_usuario");
    });
    $("#Caracterizacion_conoce_portal_minedu_1").change(function(){
             $("#Caracterizacion_conoce_portal_minedu_0").trigger('change');
    });
    $("#Caracterizacion_conoce_portal_minedu_0").trigger('change');
    //
    
    $("#Caracterizacion_conoce_edusitio_1").change(function(){
             valida_otros($("#Caracterizacion_conoce_edusitio_0"),"#Caracterizacion_otra_cual_ingreso_edusitio");
             valida_otros_checks(this,".row25 input[type='checkbox'], .row25 input[type='radio']");
    });
    $("#Caracterizacion_conoce_edusitio_0").change(function(){
             $("#Caracterizacion_conoce_edusitio_1").trigger('change');
    });
    $("#Caracterizacion_conoce_edusitio_0").trigger('change');
    //
    
    $(".formaciones-td input[type='checkbox']").change(function(){
        valida_otros(this,"#"+$(this).next().attr("id"));
    });
    $(".formaciones-td input[type='checkbox']").trigger('change');
    
    $("#Sede_DEPARTAMENTO_ID").change(function(){
        carga_municipios('#Sede_MUNICIPIO_ID',$(this).val());
    });
    $("#Sede_DEPARTAMENTO_ID").trigger('change');
    
    
    $("#Asistente_DEPARTAMENTO_ID").change(function(){
        carga_municipios('#Asistente_MUNICIPIO_ID',$(this).val());
    });
    $("#Asistente_DEPARTAMENTO_ID").trigger('change');
});

function valida_otros(obj, cual){
   if($(obj).is(":checked"))
    $(cual).removeAttr('disabled').addClass("requerido");
   else
    $(cual).attr('disabled', 'disabled').removeClass("requerido").val("");
}

function valida_otros_checks(obj, cual){
   if($(obj).is(":checked"))
        $(cual).attr('disabled', 'disabled').removeClass("requerido").attr("checked",false);
   else
        $(cual).removeAttr('disabled').addClass("requerido");
}

function carga_municipios(idmuni, filtro) { 
    if (filtro != "") {
        var selectM = $(idmuni).val();
        $.ajax({
            url: "index.php?r=sede/municipios",
            async: false,
            type:'GET',
            data: {id : filtro},
            success: function(result) {
                $(idmuni).html('');
                if (result != "")
                    $(idmuni).append(result);
            },
            beforeSend: function() {
                $(".upprogress").show();
            },
            error: function(result) {
                alert(result.status + ' ' + result.statusText);
            }
        });
        if(selectM !="")
            $(idmuni).val(selectM);
        
        $(".upprogress").hide();
    } else {
        $(idmuni).empty().html('<option value="">Seleccione...</option>');
    }
    $(idmuni).trigger("liszt:updated");
}