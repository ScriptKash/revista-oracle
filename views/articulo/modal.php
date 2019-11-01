<div id="mGuardar" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-gradient-success white">
        <h4 class="modal-title" id="nn"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <br>
          </div>
        <div class="modal-body">
                <form id="frm-cliente" data-locked="false">
                        <div class="row">
                          <div class="col col-md-12">
                              <div class="form-group">
                                <label id="labelID_ARTICULO" class="col col-md-3">ID artículo</label>
                                <div class="col col-md-9">
                                <input type="number" class="form-control" id="ID_ARTICULO"  placeholder="Ingrese la identificación del artículo" required>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <div class="row">
                            <div class="col col-md-12">
                                <div class="form-group">
                                  <label class="col col-md-3">Título artículo</label>
                                  <div class="col col-md-9">
                                  <input type="text" class="form-control" id="TITULO_ARTICULO" placeholder="Ingrese el título"  required>
                                </div>
                                </div>
                              </div>
                            </div>
  
                            <div class="row">
                              <div class="col col-md-12">
                                  <div class="form-group">
                                    <label class="col col-md-6">Página inicio</label>
                                    <div class="col col-md-9">
                                    <input type="number" class="form-control" id="PAGINA_INICIO" placeholder="Ingrese la página de inicio"  required>
                                  </div>
                                  </div>
                                </div>
                              </div>
                              
                      <div class="row">
                       <div class="col col-md-12">
                         <div class="form-group">
                             <label class="col col-md-6">Página fin</label>
                         <div class="col col-md-9">
                       <div class="input-group">
                       <input type="text" class="form-control" id="PAGIN_FIN" placeholder="Ingrese la página fin" required>
                       </div>
                      </div>
                    </div>
                   </div>
                </div>

                <div class="row">
                    <div class="col col-md-12">
                      <div class="form-group">
                          <label class="col col-md-6">ISSN ID</label>
                      <div class="col col-md-9">
                    <div class="input-group">
                    <input type="number" class="form-control" id="ISSN_ID" placeholder="Ingrese el identificador de la revista" required>
                  </div>
                   </div>
                 </div>
                </div>
             </div>
  
               </div>
        <div class="modal-footer">
              <button class="btn bg-gradient-success btnGuardar" id="Enviar">Guardar</button>
          <button type="button" class="btn bg-gradient-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
      </div>
     </div>
    </div>
  </div>