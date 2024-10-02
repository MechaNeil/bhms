
    {{-- The whole world belongs to you. --}}

    @section('title', 'Collectibles')
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
                                    <h3 class="mb-0">Collectibles</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                        <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Bills
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
    
                                            <h3 class="card-title">Bill Rates Table</h3>
    
    
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
    
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
    
                                                        <th>Bills</th>
                                                        <th>Rate</th>
                                                        <th style="width: 100px" class=" text-left">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td>
                                                            Electricity
                                                        </td>
                                                        <td>
                                                            100 / KWh
                                                        </td>
    
                                                        <td class=" text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm mb-1" type="button">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            Water
                                                        </td>
                                                        <td>
                                                            70 Cu
                                                        </td>
    
                                                        <td class=" text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button">
                                                                <i class="bi bi-trash-fill"></i>
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
    