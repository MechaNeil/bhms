
    {{-- The whole world belongs to you. --}}

    @section('title', 'Bills')
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
                                    <h3 class="mb-0">Utility Bills</h3>
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
                                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#addBillsModal">
                                    <i class=" bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                </button>

                                {{-- Add Bills Modal --}}
                                <div class="modal fade" id="addBillsModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="addBillsModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addBillsModalLabel">Add Utility Bills</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressBills1"
                                                    role="progressbar" style="width: 0%;" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="addBillsForm">
                                                    <div class="mb-3">
                                                        <label for="billType" class="form-label">Bill Type</label>
                                                        <select class="form-select" id="billType" required>
                                                          <option selected disabled>Choose a bill type...</option>
                                                          <option value="electricity">Electricity</option>
                                                          <option value="water">Water</option>
                                                          <!-- Add other bill types if needed -->
                                                        </select>
                                                      </div>
                                            
                                                      <!-- Rate -->
                                                      <div class="mb-3">
                                                        <label for="rate" class="form-label">Rate</label>
                                                        <input type="number" class="form-control" id="rate" placeholder="Enter rate" required>
                                                      </div>
                                            
                                                      <!-- Unit -->
                                                      <div class="mb-3">
                                                        <label for="unit" class="form-label">Unit</label>
                                                        <input type="text" class="form-control" id="unit" placeholder="e.g., KWh, Cu" required>
                                                      </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    form="addBillsForm">Save
                                                    Bills</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Modal --}}
                                <div class="modal fade" id="editBillsModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="editBillsModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editBillsModalLabel">Edit Bills</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressBills2"
                                                    role="progressbar" style="width: 0%;" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="editBillsForm">
                                                    
                                                    <div class="mb-3">
                                                        <label for="billType" class="form-label">Bill Type</label>
                                                        <select class="form-select" id="billType" required>
                                                          <option selected disabled>Choose a bill type...</option>
                                                          <option value="electricity">Electricity</option>
                                                          <option value="water">Water</option>
                                                          <!-- Add other bill types if needed -->
                                                        </select>
                                                      </div>
                                            
                                                      <!-- Rate -->
                                                      <div class="mb-3">
                                                        <label for="rate" class="form-label">Rate</label>
                                                        <input type="number" class="form-control" id="rate" placeholder="Enter rate" required>
                                                      </div>
                                            
                                                      <!-- Unit -->
                                                      <div class="mb-3">
                                                        <label for="unit" class="form-label">Unit</label>
                                                        <input type="text" class="form-control" id="unit" placeholder="e.g., KWh, Cu" required>
                                                      </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    form="editBillsForm">Save
                                                    Bills</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteBillsModal" tabindex="-1"
                                    aria-labelledby="deleteBillsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteBillsModalLabel">Delete Bills</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="deleteBillsButton">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                    <div class="card mb-4">
                                        <div class="card-header">
    
                                            <h3 class="card-title">Bill Rates Table</h3>
    
    
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
    
                                            <table class="table table-bordered">
                                                <thead class="table-mode">
                                                    <tr>
    
                                                        <th>Bills</th>
                                                        <th>Rate</th>
                                                        <th style="width: 120px">Action</th>
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
    
                                                        <td class="text-center">

                                                            
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#editBillsModal">
                                                            <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteBillsModal">
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
    
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#editBillsModal">
                                                            <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteBillsModal">
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
    