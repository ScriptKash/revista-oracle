<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/horizontal-menu-template/index.html">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vogue</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php echo ($page == 'index') ? "active" : ""; ?>"><a href="?c=inicio"><i class="feather icon-home"></i><span class="menu-title">Inicio</span></a>
                </li>
                <li class="nav-item <?php echo ($page == 'clientes') ? "active" : ""; ?>"><a href=""><i class="feather icon-users"></i><span class="menu-title">Clientes</span></a>
                </li>
                <li class="nav-item <?php echo ($page == 'autores') ? "active" : ""; ?>"><a href=""><i class="feather icon-edit-2"></i><span class="menu-title">Autores</span></a>
                </li>
                <li class="nav-item <?php echo ($page == 'articulos') ? "active" : ""; ?>"><a href=""><i class="feather icon-file"></i><span class="menu-title">Artículos</span></a>
                </li>
                <li class="nav-item <?php echo ($page == 'revistas') ? "active" : ""; ?>"><a href="?c=revista"><i class="feather icon-file-text"></i><span class="menu-title">Revistas</span></a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->