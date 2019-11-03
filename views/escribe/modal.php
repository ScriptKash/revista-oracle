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
                <form id="frm-escribe" data-locked="false">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <div class="col col-md-9">
                                    <input onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" type="hidden" maxlength="6" class="form-control" id="ID_ESCRIBE" placeholder="Ingrese la identificación del artículo" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label class="col col-md-6">Nombre del artículo</label>
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

                    $stid = oci_parse($conn,"SELECT ID_ARTICULO, TITULO_ARTICULO from ARTICULO");

                    oci_execute($stid);

                    echo "<select class='select2 form-control' id=\"ARTICULO_ID\">";

                       while ($fila = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                              echo "<option value=\"".$fila['ID_ARTICULO']."\"> ".$fila['TITULO_ARTICULO']."</option>";
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
                                <label class="col col-md-6">Nombre del autor</label>
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

                    $stid = oci_parse($conn,"SELECT ID_AUTOR, NOMBRE_AUTOR, APELLIDO1, APELLIDO2 from AUTOR");

                    oci_execute($stid);

                    echo "<select class='select2 form-control' id=\"AUTOR_ID\">";

                       while ($fila = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                              echo "<option value=\"".$fila['ID_AUTOR']."\"> ".$fila['NOMBRE_AUTOR']." ".$fila['APELLIDO1']." (".$fila['ID_AUTOR'].")"."</option>";
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