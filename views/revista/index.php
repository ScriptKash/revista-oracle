<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php");?>
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    
    <!-- <script src="assets/js/jquery.dataTables.min.js"></script> -->
    <script src="assets/js/ajax_revista.js"></script>
</head>
<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

<?php include("includes/header.php");?>
<?php $page = 'revistas'; include('includes/menu.php'); ?>

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
                
            
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lista de revistas</h4>
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
                <!--/ Zero configuration table -->

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

</body>
</html>