$(document).on("ready", function() {
  Listar();
  Guardar();
  Eliminar();
  Actualizar();
  
});

function Actualizar() {
  $("#tabla").on("click", ".btnEditarEscribe", function() {
      d = $(this).parents("tr").find("td");
      $("#labelESCRIBE_ID").hide();
      $("#ID_ESCRIBE").val(d[0].innerText).hide();
      $("#ARTICULO_ID").val(d[1].innerText);
      $("#AUTOR_ID").val(d[2].innerText);
      __('nn').innerHTML = "Editar";

  });
}

function Eliminar() {
  $("#tabla").on("click", ".btnEliminarEscribe", function() {
      d = $(this).parents("tr").find("td");

      swal({
          title: '¿Esta seguro que desea eliminar a ' + d[1].innerText + '?',
          text: "¡No se puede revertir!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Eliminar',
          cancelButtonText: 'No, Cancelar',
          confirmButtonClass: 'btn bg-gradient-success',
          cancelButtonClass: 'btn bg-gradient-danger',
          buttonsStyling: false
      }).then(function() {

          $.ajax({
              type: 'POST',
              url: "?c=Escribe&a=Eliminar",
              data: {
                  'ID_ESCRIBE': d[0].innerText
              },
              success: function(result) {

                  if (result == 1) {
                      swal({
                          type: 'success',
                          title: 'Eliminado exitosamente',
                          showConfirmButton: false,
                          timer: 1500
                      });
                  }
                  console.log(result);
                  Listar();
              }
          });


      }, function(dismiss) {
          // dismiss can be 'cancel', 'overlay',
          // 'close', and 'timer'
          if (dismiss === 'cancel') {
              swal({
                  type: 'error',
                  title: 'Operacion Cancelada',
                  text: 'Su registro esta a salvo ☺',
                  showConfirmButton: false,
                  timer: 1500
              });
          }
      })
  });
}

function Guardar() {
  $("#frm-escribe").on("submit", function(e) {
      e.preventDefault();
      //Guardamos la referencia al formulario
      var $f = $(this);
      //Comprobamos si el semaforo esta en verde (1)
      if ($f.data('locked') != undefined && !$f.data('locked')) {
          //No esta bloqueado aun, bloqueamos, preparamos y enviamos la peticion
          $.ajax({
              type: 'POST',
              url: "?c=Escribe&a=Guardar",
              data: {
                  'ID_ESCRIBE': $("#ID_ESCRIBE").val(),
                  'ARTICULO_ID': $("#ARTICULO_ID").val(),
                  'AUTOR_ID': $("#AUTOR_ID").val(),
                  'acc': __("nn").innerHTML
              },
              beforeSend: function() {
                  $f.data('locked', true); // (2)
              },
              success: function(result) {
                  $('#mGuardar').modal('hide');
                  if (result == true) {
                      console.log("Todo salió op");
                      swal({
                          type: 'success',
                          title: 'Operación ejecutada exitosamente',
                          showConfirmButton: false,
                          timer: 1500
                      });
                      Listar();
                  } else {
                      console.log("Error al guardar");
                      swal({
                          type: 'error',
                          title: 'Error',
                          showConfirmButton: false,
                          timer: 1500
                      }).catch(function(timeout) {});
                  }
              },
              complete: function() {
                  $f.data('locked', false); // (3)
              }
          });
      } else {
          //Bloqueado!!!
          //alert("locked");
      }

  });
  /**/
}

function __(id) {
  return document.getElementById(id);
}

function limpiar() {
  $("#ID_ESCRIBE").val("");
  $("#ARTICULO_ID").val("");
  $("#AUTOR_ID").val("");
  __('nn').innerHTML = "Nuevo";
}

function Listar() {
  var table = $("#tabla").DataTable({
      "destroy": true,
      "responsive": true,
      "bDeferRender": true,
      "sPaginationType": "full_numbers",
      "ajax": {
          "url": "?c=Escribe&a=Listar",
          "type": "POST"
      },
      "columns": [
          {
              "data": "ID_ESCRIBE"
          },
          {
              "data": "ARTICULO_ID"
          },
          {
              "data": "AUTOR_ID"
          },
          {
              "data": null,
              "defaultContent": "<button class='btn bg-gradient-warning btnEditarEscribe ' data-toggle='modal' data-target='#mGuardar'><span class='fa fa-pencil'></span></button>\
              <button class='btn bg-gradient-danger btnEliminarEscribe'><span class='fa fa-trash'></span></button>"
          }
      ],

      "language": idioma_espanol
  });
}


var idioma_espanol = {

  "sProcessing": "Procesando...",
  "sLengthMenu": "Mostrar _MENU_ registros",
  "sZeroRecords": "No se encontraron resultados",
  "sEmptyTable": "Ningún dato disponible en esta tabla",
  "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
  "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
  "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
  "sInfoPostFix": "",
  "sSearch": "Buscar:",
  "sUrl": "",
  "sInfoThousands": ",",
  "sLoadingRecords": "Cargando...",
  "oPaginate": {
      "sFirst": "Primero",
      "sLast": "Último",
      "sNext": "Siguiente",
      "sPrevious": "Anterior"
  },
  "oAria": {
      "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
  }
}