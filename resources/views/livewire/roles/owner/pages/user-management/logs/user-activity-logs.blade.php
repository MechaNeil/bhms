{{-- Be like water. --}}

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
                                <h3 class="mb-0">Activity Logs</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Activity Logs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Activity Logs
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
                        <div class="row">
                            <div class="col-md-12">                          
                                
                                <div class="card mb-4">
                                    <div class="card-header">

                                        <h3 class="card-title">Activity Logs</h3>


                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label>Show 
                                                    <select class="form-select d-inline w-auto">
                                                        <option>1</option>
                                                        <option>5</option>
                                                        <option>10</option>
                                                    </select> 
                                                    entries
                                                </label>
                                            </div>
                                            <div class="col-6 text-end">
                                                <input type="search" class="form-control d-inline w-auto" placeholder="Search">
                                            </div>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead class="table-mode">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Username</th>
                                                    <th>Role</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody id="activityTable">
                                                <tr>
                                                    <td>2024-10-04 10:40pm</td>
                                                    <td>Mark</td>
                                                    <td>Owner</td>
                                                    <td>Payment made for Invoice #IN-2024-10-4 by Mak Nel amounting to PHP:5,000</td>
                                                
                                                </tr>
                                                <tr>
                                                    <td>2024-10-04 10:30pm</td>
                                                    <td>Neil</td>
                                                    <td>Assistant</td>
                                                    <td>Updated invoice ID 1</td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div> <!-- /.card-body -->
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