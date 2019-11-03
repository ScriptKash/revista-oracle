<div class="card text-white bg-gradient-warning text-center">
        <div class="card-content d-flex">
          <div class="card-body">
            <img src="app-assets/images/articulos/escribe.svg" alt="element 03" width="150" height="150" class="float-right px-1">
            <h4 class="card-title text-white mt-3">Lista de escribe</h4>
            <p class="card-text">Aquí podrás administrar los artículos escritos por los autores</p>
          </div>
        </div>
      </div>

<!-- Zero configuration table -->
<section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <button class="btn bg-gradient-warning" type="button" name="button" data-toggle="modal" data-target="#mGuardar" onclick="limpiar();">Agregar escribe</button>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                            <table id="tabla" class="table">
                                              <thead>
                                                  <tr>
                                                      <th>ID escribe</th>
                                                      <th>ID Artículo</th>
                                                      <th>ID Autor</th>
                                                      <th></th>
                                                  </tr>
                                              </thead>
                                               <tbody>
                                               </tbody>
                                           </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include("views/escribe/modal.php");?>
<!--/ Zero configuration table -->