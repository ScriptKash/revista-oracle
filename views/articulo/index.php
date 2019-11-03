<?php include("includes/a_config.php");?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php include("includes/head-tag-contents.php");?>
            <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
            <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
            <script src="assets/js/ajax_articulo.js"></script>
            <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
            <script src="assets/js/sweetalert2.min.js"></script>
            <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    </head>

    <body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

        <?php include("includes/header.php");?>
            <?php $page = 'articulos'; include('includes/menu.php'); ?>

                <!-- BEGIN: Content-->
                <div class="app-content content">
                    <div class="content-overlay"></div>
                    <div class="header-navbar-shadow"></div>
                    <div class="content-wrapper">
                        <div class="content-header row">
                            <div class="content-header-left col-md-9 col-12 mb-2">
                            </div>
                        </div>
                        <div class="content-body">

                            <?php include("views/articulo/articulo.php");?>

                        </div>
                    </div>
                </div>
                <!-- END: Content-->

                <?php include("includes/footer.php");?>
                    <?php include("includes/scripts.php");?>

                        <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
                        <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
                        <script src="app-assets/js/scripts/datatables/datatable.js"></script>

                        <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
                        <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
                        <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
                        <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
                        <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
                        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
                        <script src="app-assets/js/scripts/forms/select/form-select2.js"></script>

                        <script type="text/javascript">
                            function maxLengthCheck(object) {
                                if (object.value.length > object.maxLength)
                                    object.value = object.value.slice(0, object.maxLength)
                            }

                            function isNumeric(evt) {
                                var theEvent = evt || window.event;
                                var key = theEvent.keyCode || theEvent.which;
                                key = String.fromCharCode(key);
                                var regex = /[0-9]|\./;
                                if (!regex.test(key)) {
                                    theEvent.returnValue = false;
                                    if (theEvent.preventDefault) theEvent.preventDefault();
                                }
                            }
                        </script>
    </body>

    </html>