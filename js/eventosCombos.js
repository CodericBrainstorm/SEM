$(function(){ 
    $(".span-19").removeClass("span-19");

    $(".Ccombo").attr("data-placeholder", "Seleccione...");
    $(".Ccombo").chosen({
        allow_single_deselect: true
    });
    $(".Ccombo").show().addClass("hidden-field");
    $(".Cfecha").datepicker();
    $(".upprogress").hide(); 
    //al seleccionar departamento se muestran los municipios pertenecientes
    $("#Establecimiento_coddepto").change(function(){
        carga_municipios('#Establecimiento_codmunicipio',$(this).val());
    });
    $("#Establecimiento_coddepto").trigger('change');
     //al seleccionar ciudad se muestran las secretarias
    $("#Establecimiento_codmunicipio").change(function(){
        carga_secretarias('#Establecimiento_codmunicipio',$(this).val());
    });
    $("#Establecimiento_codmunicipio").trigger('change');
    
    //SEGUN DEPARTAMENTO SE VISUALIZA LOS MUNICIPIOS QUE PERTENECEN A ESTE DEPTO
    $("#Egresado_DEPARTAMENTO_NACIMIENTO_ID").change(function(){ 
        carga_municipios('#Egresado_MUNICIPIO_NACIMIENTO_ID',$(this).val());
    });
    $("#Egresado_EXPEDICION_DOC_DPTO_ID").change(function(){ 
        carga_municipios('#Egresado_EXPEDICION_DOC_MUN_ID',$(this).val());
    });
    
});

function carga_municipios(idmuni, filtro) { 
    
    if (filtro != "") {
        
        var selectM = $(idmuni).val();
        
        $.ajax({
            url: "index.php?r=establecimiento/municipios",
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
        $(idmuni).empty().html('<option value="">Seleccione ...</option>');
    }
    
    $(idmuni).trigger("liszt:updated");
    
}
//****************************************************************************************
//function carga_secretarias(idmuni, filtro) { 
//    
//    if (filtro != "") {
//        var selectM = $(idmuni).val();
//        $.ajax({
//            
//            url: "index.php?r=establecimiento/secretarias",
//            async: false,
//            type:'GET',
//            data: {id : filtro},
//            success: function(result) {
//                $(idmuni).html('');
//                if (result != "")
//                    $(idmuni).append(result);
//            },
//            beforeSend: function() {
//                $(".upprogress").show();
//            },
//            error: function(result) {
//                alert(result.status + ' ' + result.statusText);
//            }
//        });
//        if(selectM !="")
//            $(idmuni).val(selectM);
//        
//        $(".upprogress").hide();
//    } else {
//        $(idmuni).empty().html('<option value="">Seleccione...</option>');
//    }
//    $(idmuni).trigger("liszt:updated");
//}


