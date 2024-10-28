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
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#addBedsModal">
                                    <i class=" bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                </button>

                                {{-- Add Beds Modal --}}
                                <div class="modal fade" id="addBedsModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="addBedsModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addBedsModalLabel">Add Beds</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressbeds1" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="addBedsForm">
                                                    <div class="mb-3">
                                                        <label for="roomSelect" class="form-label">Room</label>
                                                        <select class="form-select" id="roomSelect" required>
                                                          <option value="" disabled selected>Select a room</option>
                                                          <option value="1">room 1</option>
                                                          <option value="2">room 2</option>
                                                          <option value="3">room 3</option>
                                                          <!-- Add more rooms as needed -->
                                                        </select>
                                                      </div>
                                                      
                                                      <!-- Bed Number Input -->
                                                      <div class="mb-3">
                                                        <label for="bedNumber" class="form-label">Bed Number</label>
                                                        <input type="number" class="form-control" id="bedNumber" placeholder="Bed Number" required>
                                                      </div>
                                            
                                                      <!-- Monthly Rent Input -->
                                                      <div class="mb-3">
                                                        <label for="monthlyRent" class="form-label">Monthly Rent</label>
                                                        <input type="number" class="form-control" id="monthlyRent" placeholder="Monthly Rent" required>
                                                      </div>
                                            
                                                      <!-- Status Dropdown -->
                                                      <div class="mb-3">
                                                        <label for="statusSelect" class="form-label">Status</label>
                                                        <select class="form-select" id="statusSelect" required>
                                                          
                                                          <option value="available" selected>Available</option>
                                                          <option value="occupied">Occupied</option>
                                                          <option value="maintenance">Under Maintenance</option>
                                                        </select>
                                                      </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" form="addBedsForm">Save
                                                    Beds</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Modal --}}
                                <div class="modal fade" id="editBedsModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="editBedsModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editBedsModalLabel">Edit Beds</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressbeds2" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="editBedsForm">
                                                    <div class="mb-3">
                                                        <label for="roomSelect" class="form-label">Room</label>
                                                        <select class="form-select" id="roomSelect" required>
                                                          <option value="" disabled selected>Select a room</option>
                                                          <option value="1">room 1</option>
                                                          <option value="2">room 2</option>
                                                          <option value="3">room 3</option>
                                                          <!-- Add more rooms as needed -->
                                                        </select>
                                                      </div>
                                                      
                                                      <!-- Bed Number Input -->
                                                      <div class="mb-3">
                                                        <label for="bedNumber" class="form-label">Bed Number</label>
                                                        <input type="number" class="form-control" id="bedNumber" placeholder="Bed Number" required>
                                                      </div>
                                            
                                                      <!-- Monthly Rent Input -->
                                                      <div class="mb-3">
                                                        <label for="monthlyRent" class="form-label">Monthly Rent</label>
                                                        <input type="number" class="form-control" id="monthlyRent" placeholder="Monthly Rent" required>
                                                      </div>
                                            
                                                      <!-- Status Dropdown -->
                                                      <div class="mb-3">
                                                        <label for="statusSelect" class="form-label">Status</label>
                                                        <select class="form-select" id="statusSelect" required>
                                                        
                                                          <option value="available" selected>Available</option>
                                                          <option value="occupied">Occupied</option>
                                                          <option value="maintenance">Under Maintenance</option>
                                                        </select>
                                                      </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" form="editBedsForm">Save
                                                    Beds</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteBedsModal" tabindex="-1"
                                    aria-labelledby="deleteBedsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteBedsModalLabel">Delete Beds</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this bed?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="deleteBedsButton">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>





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
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#editBedsModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-sm m-1" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteBedsModal">
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
                                                            <span
                                                                class="badge rounded-pill text-bg-warning">occupied</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#editBedsModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                                </button>

                                                                <button class="btn btn-danger btn-sm m-1" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteBedsModal">
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
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#editBedsModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-sm m-1" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteBedsModal">
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
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#editBedsModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-sm m-1" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteBedsModal">
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
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#editBedsModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-sm m-1" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteBedsModal">
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
                                                            <span
                                                                class="badge rounded-pill text-bg-warning">occupied</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#editBedsModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-sm m-1" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteBedsModal">
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