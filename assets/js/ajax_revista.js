$(document).on("ready", function(){
    listar();
  
  
  });
  
  function listar(){
    var table = $("#tabla").DataTable({
         "destroy": true,
         "responsive":true,
         "bDeferRender": true,
          "sPaginationType": "full_numbers",
          "ajax": {
            "url": "?c=Revista&a=Listar",
            "type": "POST"
          },
          "columns": [
            { "data": "ISSN"},
            { "data": "TITULO_REVISTA" },
            { "data": "NUMERO" },
            { "data": "AÑO_PUBLICACION" },
            {"data":null,"defaultContent": "<button class='btn btn-warning btnEditarDoctor ' data-toggle='modal' data-target='#mGuardar'><span class='fa fa-pencil'></span></button>\
            <button class='btn btn-danger btnElinimarDoctor'><span class='fa fa-trash'></span></button>" }
            ],
  
   "language": idioma_espanol
    });
  
    console.log(table);
  }
  
  
      var idioma_espanol = {
  
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
  }
  