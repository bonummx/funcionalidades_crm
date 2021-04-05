$(document).ready(function(){
  var modulo_relacionado = $("input[name=rel_custom_module]").val(); // Vista de lista->Vista de detalle->Editar registro
    return_module = $("input[name=return_module]").val(); // Agregar registro
    if (modulo_relacionado == "fideicomisos" || return_module == "fideicomisos") {
      deshabilita_campos("cf_12171");
      deshabilita_campos("cf_12247");
      deshabilita_campos("cf_12095");
      deshabilita_campos("cf_13764");
      deshabilita_campos("cf_12339");
      deshabilita_campos("cf_14494");
      deshabilita_campos("cf_14473");
      deshabilita_campos("cf_12370");
      deshabilita_campos("cf_13952");
      deshabilita_campos("cf_13345");
      deshabilita_campos("cf_12347");
      deshabilita_campos("cf_13209");
      deshabilita_campos("cf_13210");
      deshabilita_campos("cf_12324");
      deshabilita_campos("cf_12372");
    }
    function deshabilita_campos(campo){
      $($("#mouseArea_"+campo).parent()).css("pointer-events","none");
      $($("#"+campo).parent()).css("pointer-events","none");
    }
})
