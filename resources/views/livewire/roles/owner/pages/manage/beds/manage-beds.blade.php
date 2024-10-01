{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
@section('title', 'Mangage Beds')
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
                                <h3 class="mb-0" style="display: flex; align-items: flex-end;">
                                    <!-- Adjust the SVG size using width and height -->
                                    <svg class="d-inline-block text-secondary"
                                        style="margin-right: 8px; width: 38px; height: 38px; vertical-align: middle;"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22 11V20H20V17H4V20H2V4H4V14H12V7H18C20.2091 7 22 8.79086 22 11ZM8 13C6.34315 13 5 11.6569 5 10C5 8.34315 6.34315 7 8 7C9.65685 7 11 8.34315 11 10C11 11.6569 9.65685 13 8 13Z">
                                        </path>
                                    </svg>
                                    <span class="d-inline-block">Manage Beds</span>
                                </h3>

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Manage Beds
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

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th>Bed No.</th>
                                                        <th>Room No.</th>
                                                        <th>Daily Rate</th>
                                                        <th>Monthly Rate</th>
                                                        <th style="width: 100px" class=" text-center">Status</th>
                                                        <th style="width: 109px" class=" text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td>BD-0001</td>
                                                        <td>RM-0001</td>
                                                        <td>100.00</td>
                                                        <td>
                                                            2000.00
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="badge rounded-pill text-bg-success">available</span>
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
                                                    <tr class="align-middle">
                                                        <td>BD-0002</td>
                                                        <td>RM-0001</td>
                                                        <td>100.00</td>
                                                        <td>
                                                            2000.00
                                                        </td>
                                                        <td class=" text-center">
                                                            <span class="badge rounded-pill text-bg-warning">occupied</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>BD-0003</td>
                                                        <td>RM-0002</td>
                                                        <td>100.00</td>
                                                        <td>
                                                            2000.00
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="badge rounded-pill text-bg-success">available</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>BD-0004</td>
                                                        <td>RM-0002</td>
                                                        <td>100.00</td>
                                                        <td>
                                                            2000.00
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="badge rounded-pill text-bg-success">available</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>BD-0005</td>
                                                        <td>RM-0002</td>
                                                        <td>100.00</td>
                                                        <td>
                                                            2000.00
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="badge rounded-pill text-bg-success">available</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>BD-0006</td>
                                                        <td>RM-0004</td>
                                                        <td>300.00</td>
                                                        <td>
                                                            5000.00
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge rounded-pill text-bg-warning">occupied</span>
                                                        </td>
                                                        <td class="text-center">
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
                                        </div>
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