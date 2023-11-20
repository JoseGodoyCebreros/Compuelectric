'use strict'
//MENU DESPLEGABLE

$('.img-menu').on('click', () => {
  $('.contenedor-menu').toggleClass('activo');
});

$(document).on('click', function(event) {
  if (!$(event.target).closest('.contenedor-menu').length && !$(event.target).is('.img-menu')) {
    $('.contenedor-menu').removeClass('activo');
  }
});

//MODALES

$(document).ready(function() {
  

    $(document).ready(function() {
        // Abrir modal al hacer clic en el botón
        $(".abrir-modal").click(function() {
          var modalId = $(this).data("modal");
          $("#" + modalId).addClass("mostrar");
        });
      
        // Cerrar modal al hacer clic en el botón de cerrar
        $(".botonModal-cerrar").click(function() {
          var modalId = $(this).closest(".contenedor-modal").attr("id");
          $("#" + modalId).removeClass("mostrar");
        });
      
        // Cerrar modal al hacer clic fuera del modal
        $(document).click(function(event) {
          if ($(event.target).hasClass("contenedor-modal")) {
            $(event.target).removeClass("mostrar");
          }
        });
    });

}); 