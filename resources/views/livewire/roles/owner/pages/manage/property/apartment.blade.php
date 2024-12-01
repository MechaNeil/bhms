{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@section('title', 'Apartments')
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
                                <h3 class="m-0" style="display: flex; align-items: flex-end;">
                                    <!-- Adjust the SVG size using width and height -->
                                    <svg class="d-inline-block text-secondary"
                                        style="margin-right: 8px; width: 38px; height: 38px; vertical-align: middle;"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                        <path
                                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                    </svg>
                                    <span class="d-inline-block">Apartment</span>
                                </h3>

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <i class="bi bi-house-door-fill" style="margin-right: 8px;"></i>Apartment
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
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#addApartmentModal">
                                    <i class=" bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                </button>


                                {{-- Add Apartment Modal --}}
                                <div class="modal fade" id="addApartmentModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="addApartmentModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addApartmentModalLabel">Add Apartment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressApartment1" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>

                                            <div class="modal-body">
                                                <form id="addApartmentForm">
                                                    <div class="row">
                                                        <!-- Apartment No. Input -->
                                                        <div class="mb-3">
                                                            <label for="apartmentName" class="form-label">Apartment
                                                                Name</label>
                                                            <input type="text" class="form-control" id="apartmentName"
                                                                placeholder="Apartment Name" required>
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            <label for="createRooms" class="form-label">Apartment
                                                                Name</label>
                                                            <input type="text" class="form-control" id="createRooms"
                                                                placeholder="Number of Rooms" required>
                                                        </div>
                                                        



                                                        <!-- Address Input -->
                                                        <div class="mb-3">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="address"
                                                                placeholder="Address" required>
                                                        </div>

                                                        <!-- Handled By Input -->
                                                        <div class="mb-3">
                                                            <label for="handledBy" class="form-label">Handled By</label>
                                                            <select class="form-select" id="handledBy" required>
                                                                <option value="" disabled selected>Select an option
                                                                </option>
                                                                <option value="user1">User 1</option>
                                                                <option value="user2">User 2</option>
                                                                <option value="user3">User 3</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>

                                                        <!-- Contact No. Input -->
                                                        <div class="mb-3">
                                                            <label for="contactNo" class="form-label">Contact
                                                                No.</label>
                                                            <input type="tel" class="form-control" id="contactNo"
                                                                placeholder="Contact No." required>
                                                        </div>



                                                        <!-- Image Upload Input -->
                                                        <div class="mb-3">
                                                            <label for="imageUpload" class="form-label">Image</label>
                                                            <input class="form-control" type="file" id="imageUpload">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    form="addApartmentForm">Save
                                                    Apartment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Modal --}}
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="editApartmentModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="editApartmentModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editApartmentModalLabel">Edit Apartment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressApartment2" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>

                                            <div class="modal-body">
                                                <form id="editApartmentForm">
                                                    <div class="row">
                                                        <!-- Apartment No. Input -->
                                                        <div class="mb-3">
                                                            <label for="apartmentName" class="form-label">Apartment
                                                                Name</label>
                                                            <input type="text" class="form-control" id="apartmentName"
                                                                placeholder="Apartment Name" required>
                                                        </div>



                                                        <div class="mb-3">
                                                            <label for="createRooms" class="form-label">Number Of Rooms
                                                                </label>
                                                            <input type="text" class="form-control" id="createRooms"
                                                                placeholder="Number of Rooms" required>
                                                        </div>

                                                        <!-- Handled By Input -->
                                                        <div class="mb-3">
                                                            <label for="handledBy" class="form-label">Handled By</label>
                                                            <select class="form-select" id="handledBy" required>
                                                                <option value="" disabled selected>Select an option
                                                                </option>
                                                                <option value="user1">User 1</option>
                                                                <option value="user2">User 2</option>
                                                                <option value="user3">User 3</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>

                                                        <!-- Contact No. Input -->
                                                        <div class="mb-3">
                                                            <label for="contactNo" class="form-label">Contact
                                                                No.</label>
                                                            <input type="tel" class="form-control" id="contactNo"
                                                                placeholder="Contact No." required>
                                                        </div>



                                                        <!-- Image Upload Input -->
                                                        <div class="mb-3">
                                                            <label for="imageUpload" class="form-label">Image</label>
                                                            <input class="form-control" type="file" id="imageUpload">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    form="editApartmentForm">Save
                                                    Apartment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteApartmentModal" tabindex="-1"
                                    aria-labelledby="deleteApartmentModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteApartmentModalLabel">Delete Apartment
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this Apartment?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="deleteApartmentButton">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card mb-4">
                                    <div class="card-header">

                                        <h3 class="card-title">Apartment Table</h3>


                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <table class="table table-bordered table-hover">
                                            <thead class="table-mode">
                                                <tr>
                                                    <th style="width: 170px">Apartment No.</th>
                                                    <th>Apartment Name</th>
                                                    <th>Total Rooms</th>
                                                    <th>Total Units</th>
                                                    <th style="width: 170px">Image</th>
                                                    <th>Address</th>
                                                    <th>Handled By</th>
                                                    <th>Contact No.</th>
                                                    <th>Company</th>


                                                    <th style="width: 109px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <td>AP-0001</td>
                                                    <td>MN's BigHouse</td>
                                                    <td>15 Rooms</td>
                                                    <td>47 Units</td>
                                                    <td>
                                                        <img src="{{ asset('assets/img/photo1.png') }}"
                                                            class="img-thumbnail mx-auto d-block img-size-120"
                                                            alt="Apartment Image" />
                                                    </td>
                                                    <td>Calatagan Proper</td>
                                                    <td>Neil T. Tevs</td>
                                                    <td>09815428349</td>
                                                    <td>MN's BHouse Inc.</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary btn-sm m-1" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#editApartmentModal">
                                                            <i class="bi bi-pencil-fill"></i>
                                                        </button>
                                                        <button class="btn btn-danger btn-sm m-1" type="button"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteApartmentModal">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>AP-0002</td>
                                                    <td>MN's Tevs Vhouse</td>
                                                    <td>12 Rooms</td>

                                                    <td>36 Units</td>
                                                    <td>
                                                        <img src="{{ asset('assets/img/photo2.png') }}"
                                                            class="img-thumbnail mx-auto d-block img-size-120"
                                                            alt="Apartment Image" />
                                                    </td>
                                                    <td>Cabinitan</td>
                                                    <td>Mark T. Tevs</td>
                                                    <td>09632266465</td>
                                                    <td>MN's BHouse Inc.</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary btn-sm m-1" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#editApartmentModal">
                                                            <i class="bi bi-pencil-fill"></i>
                                                        </button>
                                                        <button class="btn btn-danger btn-sm m-1" type="button"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteApartmentModal">
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