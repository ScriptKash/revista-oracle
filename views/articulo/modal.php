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
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="5" class="form-control" id="ID_ARTICULO" placeholder="Ingrese la identificación del artículo" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-3">Título artículo</label>
                                <div class="col col-md-9">
                                    <input type="text" maxlength="25" oninput="maxLengthCheck(this)" class="form-control" id="TITULO_ARTICULO" placeholder="Ingrese el título" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Página inicio</label>
                                <div class="col col-md-9">
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="5" class="form-control" id="PAGINA_INICIO" placeholder="Ingrese la página de inicio" required>
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
                                        <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="5" class="form-control" id="PAGIN_FIN" placeholder="Ingrese la página fin" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Título revista</label>
                                <div class="col col-md-9">
                                    <div class="input-group">
                                        <?php

                    $conn = oci_connect("BR", "br","localhost/XE");
                    if (!$conn) {
                      $m = oci_error();
                      echo $m['message'], "\n";
                      exit;
                    } else {

                      echo "";
                    }

                    $stid = oci_parse($conn,"SELECT ISSN, TITULO_REVISTA from REVISTA");

                    oci_execute($stid);

                    echo "<select class='form-control' id=\"ISSN_ID\">";

                       while ($fila = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                              echo "<option value=\"".$fila['ISSN']."\"> ".$fila['TITULO_REVISTA']."</option>";
                    }
                     echo "</select>";

                     oci_free_statement($stid);
                     oci_close($conn);
                    ?>

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