<div class="card text-white bg-gradient-primary text-center">
        <div class="card-content d-flex">
          <div class="card-body">
            <img src="app-assets/images/revistas/revista.svg" alt="element 03" width="150" height="150" class="float-right px-1">
            <h4 class="card-title text-white mt-3">Listado de revistas</h4>
            <p class="card-text">Aquí podrás administrar las diferentes revistas que tenemos</p>
          </div>
        </div>
      </div>

<!-- Zero configuration table -->
<section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <button class="btn bg-gradient-success" type="button" name="button" data-toggle="modal" data-target="#mGuardar" onclick="limpiar();">Agregar revista</button>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                            <table id="tabla" class="table">
                                              <thead>
                                                  <tr>
                                                      <th>ISSN</th>
                                                      <th>Título</th>
                                                      <th>Número</th>
                                                      <th>Fecha</th>
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
                <?php include("views/revista/modal.php");?>
<!--/ Zero configuration table -->