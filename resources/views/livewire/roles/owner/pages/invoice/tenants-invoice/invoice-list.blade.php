{{-- Care about people's approval and you will be their prisoner. --}}

@section('title', 'Register Tenants')
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
                                    <span class="d-inline-block">Invoice</span>
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

                                {{-- update Invoice Modal --}}
                                <div class="modal fade" id="updateInvoiceModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateInvoiceModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateInvoiceModalLabel">update Invoice</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressInvoice1" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="updateInvoiceForm">
                                                    <div class="mb-3">
                                                        <label for="invoiceNumber" class="form-label">Invoice
                                                            Number</label>
                                                        <input type="text" class="form-control" id="invoiceNumber"
                                                            value="2024-1-1-May" disabled>
                                                    </div>

                                                    <!-- Bed Rate (Read-Only) -->
                                                    <div class="mb-3">
                                                        <label for="bedRate" class="form-label">Bed Rate</label>
                                                        <input type="text" class="form-control" id="bedRate"
                                                            value="5000" disabled>
                                                    </div>

                                                    <!-- Penalty -->
                                                    <div class="mb-3">
                                                        <label for="penalty" class="form-label">Penalty</label>
                                                        <input type="number" class="form-control" id="penalty"
                                                            placeholder="0" required>
                                                    </div>

                                                    <!-- Discount -->
                                                    <div class="mb-3">
                                                        <label for="discount" class="form-label">Discount</label>
                                                        <input type="number" class="form-control" id="discount"
                                                            placeholder="0" required>
                                                    </div>

                                                    <!-- Total Due (Read-Only) -->
                                                    <div class="mb-3">
                                                        <label for="totalDue" class="form-label">Total Due</label>
                                                        <input type="text" class="form-control" id="totalDue"
                                                            value="5000" disabled>
                                                    </div>

                                                    <!-- Remarks -->
                                                    <div class="mb-3">
                                                        <label for="remarks" class="form-label">Remarks</label>
                                                        <textarea class="form-control" id="remarks" rows="3"
                                                            placeholder="Enter remarks if any"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    form="updateInvoiceForm">Save
                                                    Invoice</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Pay Modal --}}
                                <div class="modal fade" id="payInvoiceModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="payInvoiceModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="payInvoiceModalLabel">Pay Invoice</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgressInvoice2" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="payInvoiceForm">
                                                    <div class="mb-3">
                                                        <label for="invoiceNumber" class="form-label">Invoice
                                                            Number</label>
                                                        <input type="text" class="form-control" id="invoiceNumber"
                                                            value="2024-1-1-May" disabled>
                                                    </div>

                                                    <!-- Bed Rate (Disabled) -->
                                                    <div class="mb-3">
                                                        <label for="bedRate" class="form-label">Bed Rate</label>
                                                        <input type="text" class="form-control" id="bedRate"
                                                            value="5000" disabled>
                                                    </div>

                                                    <!-- Penalty -->
                                                    <div class="mb-3">
                                                        <label for="penalty" class="form-label">Penalty</label>
                                                        <input type="number" class="form-control" id="penalty"
                                                            placeholder="0" required>
                                                    </div>

                                                    <!-- Discount -->
                                                    <div class="mb-3">
                                                        <label for="discount" class="form-label">Discount</label>
                                                        <input type="number" class="form-control" id="discount"
                                                            placeholder="0" required>
                                                    </div>

                                                    <!-- Total Due (Disabled) -->
                                                    <div class="mb-3">
                                                        <label for="totalDue" class="form-label">Total Due</label>
                                                        <input type="text" class="form-control" id="totalDue"
                                                            value="5000" disabled>
                                                    </div>

                                                    <!-- Remarks -->
                                                    <div class="mb-3">
                                                        <label for="remarks" class="form-label">Remarks</label>
                                                        <textarea class="form-control" id="remarks" rows="3"
                                                            placeholder="Enter remarks if any"></textarea>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary me-auto"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" form="payInvoiceForm">Save
                                                    Invoice</button>
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
                                            <table class="table table-bordered">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th style="width: 200px">Action</th>
                                                        <th>Invoice Number</th>
                                                        <th>Tenant Name</th>
                                                        <th>Due Date</th>
                                                        <th>Bed Rate</th>
                                                        <th>Penalty Amount</th>
                                                        <th>Discount Amount</th>
                                                        <th>Total Due</th>
                                                        <th>Status</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#updateInvoiceModal"><i
                                                                    class="bi bi-box-arrow-in-up"></i>
                                                                &nbsp;Update</button>
                                                            <button wire:navigate href="view-invoice"
                                                                class="btn btn-info btn-sm m-1"><i
                                                                    class="bi bi-eye"></i> &nbsp;View</button>
                                                            <button class="btn btn-success btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#payInvoiceModal"><i
                                                                    class="bi bi-wallet2"></i> &nbsp;Pay</button>
                                                        </td>
                                                        <td>IN-2024-October-2</td>
                                                        <td>Mark Nel Tevs</td>
                                                        <td>October 2, 2024</td>
                                                        <td>5,000.00</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                        <td>5,000.00</td>
                                                        <td>Unpaid</td>
                                                        <td></td>
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