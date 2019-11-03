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
                <form id="frm-autor" data-locked="false">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label id="labelID_AUTOR" class="col col-md-3">Cédula</label>
                                <div class="col col-md-9">
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="9" class="form-control" id="ID_AUTOR" placeholder="Ingrese la identificación del autor" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-3">Nombre</label>
                                <div class="col col-md-9">
                                    <input type="text" maxlength="15" onkeypress="return isText(event)" oninput="maxLengthCheck(this)" class="form-control" id="NOMBRE_AUTOR" placeholder="Ingrese el nombre" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Primer apellido</label>
                                <div class="col col-md-9">
                                    <input type="text" maxlength="15" onkeypress="return isText(event)" oninput="maxLengthCheck(this)" class="form-control" id="APELLIDO1" placeholder="Ingrese el primer apellido" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Segundo apellido</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <input type="text" maxlength="15" onkeypress="return isText(event)" oninput="maxLengthCheck(this)" class="form-control" id="APELLIDO2" placeholder="Ingrese el segundo apellido" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Correo electrónico</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <input type="email" maxlength="30" class="form-control" id="CORREO" placeholder="Ingrese el correo electrónico" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Adscripción</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <input type="text" maxlength="15" onkeypress="return isText(event)" oninput="maxLengthCheck(this)" class="form-control" id="ADSCRIPCION" placeholder="Ingrese la adscripción" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Posición</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="4" class="form-control" id="POSICION" placeholder="Ingrese la posición" required>
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