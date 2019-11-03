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
                <form id="frm-revista" data-locked="false">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label id="labelISSN" class="col col-md-3">ISSN</label>
                                <div class="col col-md-9">
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="9" class="form-control" id="ISSN" placeholder="Ingrese el identificador de la revista" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Título de la revista</label>
                                <div class="col col-md-9">
                                    <input type="text" maxlength="25" oninput="maxLengthCheck(this)" class="form-control" id="TITULO_REVISTA" placeholder="Ingrese el título" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-3">Número</label>
                                <div class="col col-md-9">
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="20" class="form-control" id="NUMERO" placeholder="Ingrese número" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Año publicación</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <input type='text' class="form-control datepicker" id="FECHA_PUBLICACION" data-date-format="d-M-y" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Precio</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="7" placeholder="Ingrese el precio" class="form-control" id="PRECIO" required />
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