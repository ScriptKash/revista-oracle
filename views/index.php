<?php include("includes/a_config.php");?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php include("includes/head-tag-contents.php");?>
    </head>

    <body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

        <?php include("includes/header.php");?>
            <?php $page = 'index'; include('includes/menu.php'); ?>

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

                            <!-- CrossFade Carousel Start -->
                            <section id="carousel-crossfade">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-sm-12">
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="app-assets/images/revistas/1.png" class="img-fluid d-block w-100" alt="cf-img-1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="app-assets/images/revistas/2.jpg" class="img-fluid d-block w-100" alt="cf-img-2">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="app-assets/images/revistas/3.jpg" class="img-fluid d-block w-100" alt="cf-img-3">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h1 class="text-center display-2">Revistas Vogue<br></h1>
                                        <h3 class="text-center success">Leer nunca fue tan entretenido</h3>
                                    </div>
                                </div>
                            </section>
                            <!-- CrossFade Carousel End -->
                            <br>
                            <br>
                            <h1><p class="text-center primary">Revistas disponibles</p></h1>
                            <hr>
                            <div class="row match-height">

                                <?php

                    $conn = oci_connect("BR", "br","localhost/XE");
                    if (!$conn) {
                      $m = oci_error();
                      echo $m['message'], "\n";
                      exit;
                    } else {

                      echo "";

                    }

                    $stid = oci_parse($conn,"SELECT TITULO_REVISTA, PRECIO from REVISTA");

                    oci_execute($stid);

                       while ($fila = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                        echo "<div class='col-lg-4 col-md-4 col-sm-12'>";
                        echo "<div class='card text-white bg-gradient-primary text-center'>";
                          echo "<div class='card-content'>";
                            echo "<div class='card-body'>";
                              echo "<img src='app-assets/images/revistas/revista.svg' alt='element 02' width='100' height='100' class='mb-1'>";
                              echo "<h3 class='card-title text-white'>".$fila['TITULO_REVISTA']."</h3>";
                              echo "<p class='card-text'>₡".$fila['PRECIO']."</p>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      echo "</div>";
                    }

                     oci_free_statement($stid);
                     oci_close($conn);
                    ?>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- END: Content-->

                <?php include("includes/footer.php");?>
                    <?php include("includes/scripts.php");?>

    </body>

    </html>