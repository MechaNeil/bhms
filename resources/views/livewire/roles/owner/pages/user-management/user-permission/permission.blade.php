{{-- Close your eyes. Count to one. That is how long forever feels. --}}

{{-- This is so hard --}}

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
                                <h3 class="mb-0">Permission</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Permission</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Permission
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!-- Edit -->
                <div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Role Name Input -->
                                <div class="mb-3">
                                    <label for="roleName" class="form-label">Role Name</label>
                                    <input type="text" class="form-control" id="roleName" placeholder="Role Name"
                                        disabled>
                                </div>

                                <!-- Permissions Section -->
                                <div class="mb-3">
                                    <h5>Permissions</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="manageUsers">
                                        <label class="form-check-label" for="manageUsers">
                                            Manage Users
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="viewReports">
                                        <label class="form-check-label" for="viewReports">
                                            View Reports
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="saveRoleBtn">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::App Content Header-->
                <!--begin::App Content-->
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card mb-4">
                                    <div class="card-header">

                                        <h3 class="card-title">User Permission List</h3>


                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Role Name</th>
                                                            <th>Manage Users</th>
                                                            <th>View Reports</th>
                                                            <th>Edit Role</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Admin</td>
                                                            <td><input type="checkbox" checked disabled></td>
                                                            <td><input type="checkbox" checked disabled></td>
                                                            <td>
                                                                <button class="btn btn-secondary btn-sm disabled"
                                                                    data-bs-toggle="modal" data-bs-target="#editRoleModal"
                                                                    onclick="editRole(1, 'Admin')" disabled>Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tenant</td>
                                                            <td><input type="checkbox" disabled></td>
                                                            <td><input type="checkbox" checked disabled></td>
                                                            <td>
                                                                <button class="btn btn-secondary btn-sm"
                                                                    data-bs-toggle="modal" data-bs-target="#editRoleModal"
                                                                    onclick="editRole(2, 'Tenant')" disabled>Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Assistant</td>
                                                            <td><input type="checkbox" checked disabled></td>
                                                            <td><input type="checkbox" disabled></td>
                                                            <td>
                                                                <button class="btn btn-primary btn-sm"
                                                                    data-bs-toggle="modal" data-bs-target="#editRoleModal"
                                                                    onclick="editRole(3, 'Assistant')">Edit</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                     <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-end">
                                            <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                                        </ul>
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