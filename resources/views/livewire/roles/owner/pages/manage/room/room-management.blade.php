{{-- The best athlete wants his opponent at his best. --}}

@section('title', 'Room Mangement')
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
                                <h3 class="m-1" style="display: flex; align-items: flex-end;">
                                    <!-- Adjust the SVG size using width and height -->
                                    <svg class="d-inline-block text-secondary"
                                        style="margin-right: 8px; width: 38px; height: 38px; vertical-align: middle;"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                        <path
                                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                    </svg>
                                    <span class="d-inline-block">Room Management</span>
                                </h3>

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <i class="bi bi-house-door-fill" style="margin-right: 8px;"></i>Room Management
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
                                    <i class="bi bi-house-add-fill" style="font-size: 18px;"></i> Add New
                                </button>
                                
                                
                                <div class="card mb-4">
                                    <div class="card-header">

                                        <h3 class="card-title">Room Table</h3>


                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <table class="table table-bordered">
                                            <thead class="table-mode">
                                                <tr>
                                                    <th style="width: 100px">Room No.</th>
                                                    <th>Description</th>
                                                    <th style="width: 170px">Image</th>
                                                    <th style="width: 109px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <td>RM-0001</td>
                                                    <td>Just a Normal Room With 2 Double Deck Beds</td>
                                                    <td>
                                                        <img src="{{ asset('assets/
img/photo1.png') }}"
                                                            class="img-thumbnail mx-auto d-block img-size-120"
                                                            alt="Room Image" />
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
                                                    <td>RM-0002</td>
                                                    <td>Room with 3 beds</td>
                                                    <td>
                                                        <img src="{{ asset('assets/
img/photo2.png') }}"
                                                            class="img-thumbnail mx-auto d-block img-size-120"
                                                            alt="Room Image" />
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
                                                    <td>RM-0003</td>
                                                    <td>Delux Room With TV, with air conditioning unit</td>
                                                    <td>
                                                        <img src="{{ asset('assets/
img/photo3.jpg') }}"
                                                            class="img-thumbnail mx-auto d-block img-size-120"
                                                            alt="Room Image" />
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
                                                    <td>RM-0004</td>
                                                    <td>Room with a round table privete cr and kitchen</td>
                                                    <td>
                                                        <img src="{{ asset('assets/
img/photo4.jpg') }}"
                                                            class="img-thumbnail mx-auto d-block img-size-120"
                                                            alt="Room Image" />
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