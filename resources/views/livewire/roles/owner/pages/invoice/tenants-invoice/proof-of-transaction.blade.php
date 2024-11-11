{{-- The whole world belongs to you. --}}
{{-- Care about people's approval and you will be their prisoner. --}}

@section('title', 'Proof of Transaction')
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
                                        <path fill-rule="evenodd"
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />



                                    </svg>
                                    <span class="d-inline-block">Proof of Transaction</span>
                                </h3>
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
                            <div class="co-md-12">
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#addRoomModal">
                                    <i class=" bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                </button>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="editProofModal" tabindex="-1" aria-labelledby="editProofModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editProofModalLabel">Edit Proof of Payment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="updateProofForm">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="invoiceNumber" class="form-label">Invoice Number</label>
                                                            <input type="text" class="form-control" id="invoiceNumber" value="2024-1-1-May" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="tenantName" class="form-label">Tenant Name</label>
                                                            <input type="text" class="form-control" id="tenantName" value="Mark Nel Tevs" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="dateOfPayment" class="form-label">Date of Payment</label>
                                                            <input type="date" class="form-control" id="dateOfPayment" value="2024-10-02" required>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="amountPaid" class="form-label">Amount Paid</label>
                                                            <input type="number" class="form-control" id="amountPaid" value="1785" required>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="remainingBalance" class="form-label">Remaining Balance</label>
                                                            <input type="number" class="form-control" id="remainingBalance" value="1785" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="paymentMethod" class="form-label">Payment Method</label>
                                                            <select class="form-select" id="paymentMethod" required>
                                                                <option value="Cash" selected>Cash</option>
                                                                <option value="Credit Card">Credit Card</option>
                                                                <option value="Bank Transfer">Bank Transfer</option>
                                                                <option value="Bank Transfer">Online Payment</option>

                                                                <!-- Add more payment methods as needed -->
                                                            </select>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" id="status" required>
                                                                <option value="Pending Review" selected>Pending Review</option>
                                                                <option value="Rejected">Rejected</option>
                                                                <!-- Add more statuses as needed -->
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="col-md-6 mb-3">
                                                            <label for="proofOfPayment" class="form-label">Proof of Payment</label>
                                                            <div class="text-start">
                                                                <img src="{{ asset('assets/img/credit/visa.png') }}" alt="Proof of Payment" style="width: 100px; height: auto;">
                                                                <div>
                                                                    <button wire:navigate href="view-proof-transaction" class="btn btn-info btn-sm m-1 mt-2"><i class="bi bi-eye"></i> &nbsp;View</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                
                                                        <div class="col-md-12 mb-3">
                                                            <label for="remarks" class="form-label">Reply</label>
                                                            <textarea class="form-control" id="remarks" rows="3" placeholder="Enter remarks if any"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="saveChangesButton">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- update Proof Modal --}}
                                <div class="modal fade" id="updateProofModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateProofModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateProofModalLabel">Update Proof</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                
                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressProof1" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                
                                            <div class="modal-body">
                                                <form id="updateProofForm">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="invoiceNumber" class="form-label">Invoice Number</label>
                                                            <input type="text" class="form-control" id="invoiceNumber" value="2024-1-1-May" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="tenantName" class="form-label">Tenant Name</label>
                                                            <input type="text" class="form-control" id="tenantName" value="Mark Nel Tevs" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="dateOfPayment" class="form-label">Date of Payment</label>
                                                            <input type="date" class="form-control" id="dateOfPayment" value="2024-10-02" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="amountPaid" class="form-label">Amount Paid</label>
                                                            <input class="form-control" id="amountPaid" value="1785" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="remainingBalance" class="form-label">Remaining Balance</label>
                                                            <input class="form-control" id="remainingBalance" value="0.00" disabled>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="paymentMethod" class="form-label">Payment Method</label>
                                                            <select class="form-select" id="paymentMethod" disabled>
                                                                <option value="Cash" selected>Cash</option>
                                                                <option value="Credit Card">Credit Card</option>
                                                                <option value="Bank Transfer">Bank Transfer</option>
                                                                <option value="Online Payment">Online Payment</option>
                                                                <!-- Add more payment methods as needed -->
                                                            </select>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <input class="form-control" id="status" value="Approved" disabled>
                                                               
                                                                
                                                                <!-- Add more statuses as needed -->
                                                            </input>
                                                        </div>
                                
                                                        <div class="col-md-6 mb-3">
                                                            <label for="proofOfPayment" class="form-label">Proof of Payment</label>
                                                            <div class="text-start">
                                                                <img src="{{ asset('assets/img/credit/visa.png') }}" alt="Proof of Payment" style="width: 100px; height: auto;">
                                                                <div>
                                                                    <button wire:navigate href="view-proof-transaction" class="btn btn-info btn-sm m-1 mt-2"><i class="bi bi-eye"></i> &nbsp;View</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="col-md-12 mb-3">
                                                            <label for="remarks" class="form-label">Reply</label>
                                                            <textarea class="form-control" id="remarks" rows="3" placeholder="Enter remarks if any"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class=" btn btn-primary" form="updateProofForm"><i
                                                    class="bi bi-box-arrow-in-up"></i>
                                                &nbsp;Update to Invoice</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Invoice List</h3>
                                    </div>
                                    <div class="card-body table">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-container">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th style="width: 200px">Action</th>
                                                        <th>Invoice Number</th>
                                                        <th>Tenant Name</th>
                                                        <th>Date of Payment</th>
                                                        <th>Proof of Payment</th>
                                                        <th>Amount Paid</th> <!-- New Column -->
                                                        <th>Remaining Balance</th>
                                                        <th>Payment Method</th>
                                                        <th>Status</th>
                                                        <th>Date Submitted</th>
                                                        <th>Reply from Owner</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <button class="btn btn-success btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editProofModal"><i
                                                                    class="bi bi-box-arrow-in-up"></i>
                                                                &nbsp;Edit</button>
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#updateProofModal"><i
                                                                    class="bi bi-box-arrow-in-up"></i>
                                                                &nbsp;Update</button>

                                                        </td>
                                                        <td>IN-1-24121</td>
                                                        <td>Mark Nel Tevs</td>
                                                        <td>October 2, 2024</td>

                                                        <td>
                                                            <div class="text-center">
                                                                <img src="{{ asset('assets/img/credit/visa.png') }}"
                                                                    alt="Proof of Payment"
                                                                    style="width: 100px; height: auto;">
                                                                <div>
                                                                    <button
                                                                        class="btn btn-info btn-sm m-1 mt-2"><i
                                                                            class="bi bi-eye"></i> &nbsp;View</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Php 1,785</td> <!-- Amount Paid -->
                                                        <td>Php 0.00</td> <!-- Remaining Balance -->

                                                        <td>
                                                            Cash
                                                        </td>
                                                        <td> <span
                                                                class="badge rounded-pill text-bg-warning mb-1">Pending
                                                                Review</span>
                                                        </td>
                                                        <td>November 10, 2024</td>
                                                        <td>Noted</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
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