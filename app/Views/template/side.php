<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <!-- Sidenav Menu Heading (Account)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <div class="sidenav-menu-heading d-sm-none">Account</div>
                    <!-- Sidenav Link (Alerts)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="bell"></i></div>
                        Alerts
                        <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                    </a>
                    <!-- Sidenav Link (Messages)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Messages
                        <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                    </a>
                    <!-- ID CARD-->
                    <!-- <img src="http://localhost/sejadi/assets/assets/img/demo/cards/blankprof1.png" alt="Admin" class="rounded-circle" width="80"> -->
                    <div class="card">
                        <img class="card-img-top" src="http://localhost/sejadi/assets/assets/img/demo/cards/blankprof1.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Contoh Nama</h5>
                        <p class="card-text">Contoh Koorporasi</p>
                        </div>
                    </div>
                    <!-- ID CARD-->
                    
                    <!-- Upper Paragraph Line-->
                    <a class="nav-link" href="<?= base_url(); ?>">
                        <div class="nav-link-icon"><i class="fas fa-broadcast-tower"></i></i></div>
                        Riwayat Keluarga Terkena COVID19
                    </a>
                    <a class="nav-link" href="<?= base_url(); ?>">
                        <div class="nav-link-icon"><i class="fas fa-broadcast-tower"></i></i></div>
                        Riwayat Penyakit Kormobid Keluarga
                    </a>
                    <!-- End of Upper Paragraph Line-->

                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Admin Menu</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link" href="<?= base_url(); ?>">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Dashboards
                    </a>
                    <!-- Sidenav Accordion (Pages)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i data-feather="grid"></i></div>
                        PKG
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link" href="pricing.html">Sumatif</a>
                            <a class="nav-link" href="invoice.html">Kuisioner</a>
                            <a class="nav-link" href="invoice.html">Penilaian Kinerja</a>
                            <a class="nav-link" href="invoice.html">List Penilaian Kerja</a>
                        </nav>
                    </div>
                    <!-- Sidenav Accordion (Flows)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                        <div class="nav-link-icon"><i data-feather="grid"></i></div>
                        SKP
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                            <a class="nav-link" href="wizard.html">Wizard</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i data-feather="layout"></i></div>
                        Perilaku Kerja
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                            <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                                Navigation
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutSidenavVariations" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Sidenav</a>
                                    <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                                    <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Layout -> Container Options)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                                Container Options
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutContainers" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-boxed.html">Boxed Layout</a>
                                    <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Layout -> Page Headers)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                                Page Headers
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsPageHeaders" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="header-simplified.html">Simplified</a>
                                    <a class="nav-link" href="header-compact.html">Compact</a>
                                    <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                                    <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                                    <a class="nav-link" href="header-light.html">Light</a>
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Layout -> Starter Layouts)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                                Starter Layouts
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsStarterTemplates" data-bs-parent="#accordionSidenavLayout">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="starter-default.html">Default</a>
                                    <a class="nav-link" href="starter-minimal.html">Minimal</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <!-- Sidenav Accordion (Components)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                        <div class="nav-link-icon"><i class="fas fa-briefcase"></i></div>
                        Jurnal Kegiatan
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseComponents" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="alerts.html">Alerts</a>
                            <a class="nav-link" href="avatars.html">Avatars</a>
                            <a class="nav-link" href="badges.html">Badges</a>
                            <a class="nav-link" href="buttons.html">Buttons</a>
                            <a class="nav-link" href="cards.html">
                                Cards
                                <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                            </a>
                            <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                            <a class="nav-link" href="forms.html">
                                Forms
                                <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                            </a>
                            <a class="nav-link" href="modals.html">Modals</a>
                            <a class="nav-link" href="navigation.html">Navigation</a>
                            <a class="nav-link" href="progress.html">Progress</a>
                            <a class="nav-link" href="step.html">Step</a>
                            <a class="nav-link" href="timeline.html">Timeline</a>
                            <a class="nav-link" href="toasts.html">Toasts</a>
                            <a class="nav-link" href="tooltips.html">Tooltips</a>
                        </nav>
                    </div>
                    <!-- Sidenav Accordion (Utilities)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                        <div class="nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                        Jurnal Kelas
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="animations.html">Animations</a>
                            <a class="nav-link" href="background.html">Background</a>
                            <a class="nav-link" href="borders.html">Borders</a>
                            <a class="nav-link" href="lift.html">Lift</a>
                            <a class="nav-link" href="shadows.html">Shadows</a>
                            <a class="nav-link" href="typography.html">Typography</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                        <div class="nav-link-icon"><i data-feather="flag"></i></div>
                        Lomba Guru
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="animations.html">Animations</a>
                            <a class="nav-link" href="background.html">Background</a>
                            <a class="nav-link" href="borders.html">Borders</a>
                            <a class="nav-link" href="lift.html">Lift</a>
                            <a class="nav-link" href="shadows.html">Shadows</a>
                            <a class="nav-link" href="typography.html">Typography</a>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
            <!-- FOOTER -->
            </div>
        </nav>
    </div>