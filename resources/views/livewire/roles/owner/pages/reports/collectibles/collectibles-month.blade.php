
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
                                            Collectibles by Month
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
                                <div class="col-md-12 ">
                                    <div class="row text-white">
                                        <div class="col-6">
                                          <div class="card bg-primary">
                                            <div class="card-body">
                                              <h5>Occupied Beds</h5>
                                              <h3>Total: 1</h3>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-6 ">
                                          <div class="card bg-primary">
                                            <div class="card-body">
                                              <h5>Collectibles</h5>
                                              <h3>Total: 20,000.00</h3>
                                            </div>
                                          </div>
                                        </div>
                                      </div>


                                    <div class="card mb-4 mt-4">
                                        <div class="card-header">
    
                                            <h3 class="card-title">Collectibles by Months</h3>
    
    
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>Year</th>
                                                    <th>Month</th>
                                                    <th>Total Collectibles</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>2024</td>
                                                    <td>June</td>
                                                    <td>5,000.00</td>
                                                  </tr>
                                                  <tr>
                                                    <td>2024</td>
                                                    <td>July</td>
                                                    <td>5,000.00</td>
                                                  </tr>
                                                  <tr>
                                                    <td>2024</td>
                                                    <td>August</td>
                                                    <td>5,000.00</td>
                                                  </tr>
                                                  <tr>
                                                    <td>2024</td>
                                                    <td>September</td>
                                                    <td>5,000.00</td>
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
    