
    {{-- Be like water. --}}

    @section('title', 'Requests')
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
                                    <h3 class="mb-0">Requests</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                        <li class="breadcrumb-item"><a href="#">Notification</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Requests
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
                                    <button type="button" class="btn btn-primary mb-3">
                                        <i class="bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                    </button>
                                    <div class="card mb-4">
                                        <div class="card-header">
    
                                            <h3 class="card-title">Beds Table</h3>
    
    
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
    
                                            <table class="table table-bordered">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th>Tenant Name</th>
                                                        <th>Requests</th>
                                                        <th>Date Issued</th>
                                                        <th>Reply from owner</th>
    
                                                        <th style="width: 100px" class=" text-center">Status</th>
                                                                                                                <th style="width: 109px" class=" text-center">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td>Neil Tevs</td>
                                                        <td>Repair Bed</td>
                                                        <td>September 28, 2024</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="badge rounded-pill text-bg-success">pending</span>
                                                        </td>
                                                        <td class=" text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </button>
                                                            <button class="btn btn-success btn-sm m-1" type="button">
                                                                <i class="bi bi-reply-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>Mark Tevs</td>
                                                        <td>No wifi connection</td>
                                                        <td>September 28, 2024</td>
                                                        <td>
                                                            Noted
                                                        </td>
                                                        <td class=" text-center">
                                                            <span class="badge rounded-pill text-bg-success">solve</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </button>
                                                            <button class="btn btn-success btn-sm m-1" type="button">
                                                                <i class="bi bi-reply-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
    
    
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