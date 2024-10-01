
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    @section('title', 'Register Tenants')
    @section('body-class', 'layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary')
    <!-- Defining a custom body class for the register page -->
    
    <div class="app-wrapper">
        <!-- App wrapper starts here -->
        <!-- livewire components starts here -->
        <!-- begin::Header livewire -->
        <livewire:roles.owner.components.owner-header>
            <!-- begin::Sidebar livewire -->
            <livewire:roles.owner.components.owner-sidebar>
                <main class="app-main">
                    <!--begin::App Content Header-->
                    <div class="app-content-header">
                        <!--begin::Container-->
                        <div class="container-fluid">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="mb-0">Tenants Registration</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                        <li class="breadcrumb-item"><a href="#">Create Account</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Tenants Registration
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::App Content Header-->
                    <!--begin::App Content-->
                    <div class="app-content">
                        <div class="container-fluid">
                            <div class="callout callout-info mb-4">
                                <h5 class="fw-bold">Tips</h5>
                                <p>
                                    The <a href="/starter.html" target="_blank" rel="noopener noreferrer"
                                        class="callout-link">
                                        starter page
                                    </a> is a good place to start building your app if you’d like to
                                    start from scratch.
                                </p>
                            </div>
                            <p>The layout consists of five major parts:</p>
                            <ul>
                                <li>
                                    Wrapper <code>.app-wrapper</code> . A div that wraps the whole site.
                                </li>
                                <li>
                                    Main Header <code>.app-header</code> . Contains the logo and navbar.
                                </li>
                                <li>
                                    Main Sidebar <code>.app-sidebar</code> . Contains the sidebar user
                                    panel and menu.
                                </li>
                                <li>
                                    Content <code>.app-main</code> . Contains the page header and content.
                                </li>
                                <li>
                                    Main Footer <code>.app-footer</code> . Contains the footer.
                                </li>
                            </ul>
                            <h4>Layout Options</h4>
                            <p>
                                AdminLTE v4 provides a set of options to apply to your main
                                layout. Each one of these classes can be added to the
                                <code>body</code> tag to get the desired goal.
                            </p>
                            <ul>
                                <li>
                                    Fixed Sidebar: use the class <code>.layout-fixed</code> to get a
                                    fixed sidebar.
                                </li>
                                <li>
                                    Mini Sidebar on Toggle: use the class
                                    <code>.sidebar-expand-* .sidebar-mini</code>
                                    to have a collapsed sidebar upon loading.
                                </li>
                                <li>
                                    Collapsed Sidebar: use the class
                                    <code>.sidebar-expand-* .sidebar-mini .sidebar-collapse</code> to
                                    have a collapsed sidebar upon loading.
                                </li>
                            </ul>
                        </div> <!-- /.container-fluid -->
                    </div>
                    <!--end::App Content-->
                </main>
                <livewire:roles.owner.components.owner-footer>
                <!--end::Footer livewire-->
                <div class="sidebar-overlay"></div>
                <!--end::App Main-->
                <!--begin::Footer-->
    </div>