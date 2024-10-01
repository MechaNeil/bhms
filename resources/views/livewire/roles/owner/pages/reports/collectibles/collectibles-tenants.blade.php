
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
                                            Collectibles
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
    
                                            <h3 class="card-title">Payment Table</h3>
    
    
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
    
                                            <table class="table table-bordered table-hover">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th>Tenant Name</th>
                                                        <th>Room No.</th>
                                                        <th>Monthly Due</th>
                                                        <th>Total Payment</th>
                                                        <th>Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tenant 1</td>
                                                        <td>1</td>
                                                        <td>3000</td>
                                                        <td>3000</td>
                                                        <td>2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenant 2</td>
                                                        <td>2</td>
                                                        <td>3000</td>
                                                        <td>3000</td>
                                                        <td>2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenant 3</td>
                                                        <td>3</td>
                                                        <td>3000</td>
                                                        <td>3000</td>
                                                        <td>2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenant 4</td>
                                                        <td>4</td>
                                                        <td>3000</td>
                                                        <td>3000</td>
                                                        <td>2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenant 5</td>
                                                        <td>5</td>
                                                        <td>3000</td>
                                                        <td>3000</td>
                                                        <td>2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenant 6</td>
                                                        <td>6</td>
                                                        <td>3000</td>
                                                        <td>3000</td>
                                                        <td>2000</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4" class="text-end"><strong>Total Collectible</strong></td>
                                                        <td><strong>20000</strong></td>
                                                    </tr>
                                                </tfoot>
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
    