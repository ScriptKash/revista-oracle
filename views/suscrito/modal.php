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
                <form id="frm-suscrito" data-locked="false">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label id="labelID_SUSCRITO" class="col col-md-3">ID Suscrito</label>
                                <div class="col col-md-9">
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="number" maxlength="6" class="form-control" id="ID_SUSCRITO" placeholder="Ingrese la identificación del suscrito" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Título de la revista</label>
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

                    echo "<select class='select2 form-control' id=\"ISSN_ID\">";

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

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Nombre del cliente</label>
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

                    $stid = oci_parse($conn,"SELECT ID_CLIENTE, NOMBRE_CLIENTE, APELLIDO1_CLIENTE, APELLIDO2_CLIENTE from CLIENTE");

                    oci_execute($stid);

                    echo "<select class='select2 form-control' id=\"CLIENTE_ID\">";

                       while ($fila = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                              echo "<option value=\"".$fila['ID_CLIENTE']."\"> ".$fila['NOMBRE_CLIENTE']." ".$fila['APELLIDO1_CLIENTE']." (".$fila['ID_CLIENTE'].")"."</option>";
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