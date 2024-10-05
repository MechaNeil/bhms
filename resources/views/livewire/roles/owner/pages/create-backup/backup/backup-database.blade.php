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
                                <h3 class="mb-0">Create Backup</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Backup</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Create Backup
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
                        <!-- Backup Success Alert -->
                        <div class="alert alert-success d-none" id="success-alert" role="alert">
                            Backup completed successfully! <a href="#" class="alert-link" id="download-link">Click here
                                to download.</a>
                        </div>

                        <!-- Backup Failed Alert -->
                        <div class="alert alert-danger d-none" id="error-alert" role="alert">
                            Backup failed! <a href="#" class="alert-link" id="retry-link">Click here to retry.</a>
                        </div>

                        <!-- Backup Button -->
                        <div class="text-center mb-4">
                            <button class="btn btn-primary btn-lg" id="backup-btn">
                                <i class="bi bi-cloud-arrow-up-fill"></i> Backup Database
                            </button>
                        </div>

                        <!-- Progress Bar (Optional) -->
                        <div class="progress mb-4 d-none" id="backup-progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 0%;" id="progress-bar"></div>
                        </div>

                        <!-- Backup Records Table -->
                        <div class="card">
                            <div class="card-header">
                                Backup Records
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-mode">
                                            <tr>
                                                <th>User</th>
                                                <th>Backup File</th>
                                                <th>Backup Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="backup-table-body">
                                            <tr>
                                                <td>Administrator</td>
                                                <td><a href="#">backup/database_backup_2024-04-05_08-10.sql</a></td>
                                                <td>2024-04-05 14:10:27</td>
                                                <td><button class="btn btn-success btn-sm">Download</button></td>
                                            </tr>
                                            <!-- More records can be dynamically added here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

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