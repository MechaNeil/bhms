{{-- Because she competes with no one, no one can compete with her. --}}

@section('title', 'Bed Assisgnment')
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
                                    <span class="d-inline-block">Bed Assignment</span>
                                </h3>

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Bed Assignment
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
                                    data-bs-target="#addAssignBedsModal">
                                    <i class=" bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                </button>

                                {{-- Add Beds Modal --}}
                                <div class="modal fade" id="addAssignBedsModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAssignBedsModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addAssignBedsModalLabel">Add Beds</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressAssignbeds1"
                                                    role="progressbar" style="width: 0%;" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="addAssignBedsForm">
                                                    <div class="mb-3">
                                                        <label for="tenantNameSelect" class="form-label">Tenant
                                                            Name</label>
                                                        <select class="form-select" id="tenantNameSelect" required>
                                                            <option value="" disabled selected>Select Tenant</option>
                                                            <option value="1">Neil</option>
                                                            <option value="2">Mark</option>
                                                            <option value="3">Teves</option>
                                                            <!-- Add more tenants as needed -->
                                                        </select>
                                                    </div>

                                                    <!-- Room Name Dropdown -->
                                                    <div class="mb-3">
                                                        <label for="roomNameSelect" class="form-label">Room Name</label>
                                                        <select class="form-select" id="roomNameSelect" required>
                                                            <option value="" disabled selected>Select room</option>
                                                            <option value="1">room 1</option>
                                                            <option value="2">room 2</option>
                                                            <option value="3">room 3</option>
                                                            <!-- Add more rooms as needed -->
                                                        </select>
                                                    </div>

                                                    <!-- Bed Number Dropdown -->
                                                    <div class="mb-3">
                                                        <label for="bedNumberSelect" class="form-label">Bed
                                                            Number</label>
                                                        <select class="form-select" id="bedNumberSelect" required>
                                                            <option value="" disabled selected>Assign Bed</option>
                                                            <option value="1">bed 1</option>
                                                            <option value="2">bed 2</option>
                                                            <option value="3">bed 3</option>
                                                            <!-- Add more beds as needed -->
                                                        </select>
                                                    </div>

                                                    <!-- Due Date Input -->
                                                    <div class="mb-3">
                                                        <label for="dueDateInput" class="form-label">Due Date (enter
                                                            1-28)</label>
                                                        <input type="number" class="form-control" id="dueDateInput"
                                                            placeholder="Enter due date" min="1" max="28" required>
                                                    </div>

                                                    <!-- Months to Stay Input -->
                                                    <div class="mb-3">
                                                        <label for="monthsToStayInput" class="form-label">Months to
                                                            Stay</label>
                                                        <input type="number" class="form-control" id="monthsToStayInput"
                                                            placeholder="Enter months to stay" required>
                                                    </div>

                                                    <!-- Terms and Conditions Checkbox -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="termsCheck"
                                                            required>
                                                        <label class="form-check-label" for="termsCheck">
                                                            I acknowledge that I have read and agree to the Terms and
                                                            Conditions.
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    form="addAssignBedsForm">Save
                                                    Beds</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Modal --}}

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteAssignBedsModal" tabindex="-1"
                                    aria-labelledby="deleteAssignBedsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteAssignBedsModalLabel">Delete Beds</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this assigned bed?</p>
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

                                        <h3 class="card-title">Beds Assign Table</h3>


                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th>Tenant Name</th>
                                                        <th>Room No.</th>
                                                        <th>Bed No.</th>
                                                        <th>Date Start</th>
                                                        <th>Due Date</th>
                                                        <th>Months to Stay</th>
                                                        <th style="width: 109px"
                                                            class=" text-center justify-items-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td>Mark Tevs</td>
                                                        <td>RM-0001</td>
                                                        <td>BD-0001</td>
                                                        <td>Sept 06,2021</td>
                                                        <td>
                                                            Dec 01,2028
                                                        </td>
                                                        <td>
                                                            36 Months
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-success btn-sm m-1" type="button">
                                                                <i class="bi bi-eye-fill"></i>
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