{{-- In work, do what you enjoy. --}}

@section('title', 'Invoice')
@section('body-class', 'layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary')
<!-- Defining a custom body class for the register page -->

<div class="app-wrapper">
    <!-- App wrapper starts here -->
    <!-- livewire components starts here -->
    <!-- begin::Header livewire -->
    <livewire:roles.owner.components.owner-header>
        <!-- begin::Sidebar livewire -->
        <livewire:roles.owner.components.owner-sidebar>
            <main class="app-main ">
                <!--begin::App Content Header-->
                <div class="app-content-header ">
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
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Invoice
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

                <div class="container-fluid">

                    <div class="card m-lg-4 m-md-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">
                                        <i class="bi bi-house-fill"></i> BHouse Management System
                                        <small class="float-end">Date: December/1/2024</small>
                                    </h4>
                                </div>
                            </div>

                            <!-- Info Row -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6>From:</h6>
                                    <address>
                                        <strong>MN's BHMS, Inc.</strong><br>
                                        Calatagan Proper,<br>
                                        Virac, Catanduanes<br>
                                        Phone: 09632266467<br>
                                        Email: mneil@gmail.com
                                    </address>
                                </div>
                                <div class="col-sm-4">
                                    <h6>To:</h6>

                                    <address>
                                        <strong>Mak Nel Tevs</strong> <br>
                                        Apartment: MN's BigHouse <br>
                                        Room No: RM-0001 <br>
                                        Bed No: BD-0001 <br>

                                    </address>
                                </div>
                                <div class="col-sm-4">
                                    <h6>Invoice: </h6>
                                    <div class="mb-4"><strong>#IN-1-2024121</strong></div>

                                    <h6>Due Date:</h6>
                                    <div><strong>December 1, 2024</strong></div>
                                </div>
                            </div>

                            <!-- Table Row -->
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead class="table-mode">
                                            <tr>
                                                <th>Invoice Number</th>
                                                <th>Payer Name</th>
                                                <th>Paid For</th>




                                                <th>Total</th>
                                                <th>Amount Paid</th> <!-- New Column -->
                                                <th>Remaining Balance</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>IN-1-2024121</td>
                                                <td>Mark Nel Tevs</td>
                                                <td>
                                                    <ul>
                                                        <li>John Doe (Php 400)</li>
                                                        <li>Jane Smith (Php 400)</li>
                                                        <li>Chris Brown (Php 400)</li>
                                                        <li>Mark Nel Tevs (Php 585)</li>
                                                    </ul>
                                                </td>


                                                <td>Php 1,785</td>
                                                <td>Php 700.00</td> <!-- Amount Paid -->
                                                <td>Php 1085.00</td>
                                                <td>Partially Paid</td>
                                                <td>Admin has approve the Proof of Payment</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Payment Methods and Amount Due -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Payment Methods:</h6>
                                    <img src="{{ asset('assets/img/credit/visa.png') }}" alt="Visa">
                                    <img src="{{ asset('assets/img/credit/mastercard.png') }}" alt="Mastercard">
                                    <img src="{{ asset('assets/img/credit/american-express.png') }}"
                                        alt="American Express">
                                    <img src="{{ asset('assets/img/credit/paypal2.png') }}" alt="Paypal">

                                </div>

                                <div class="col-md-6">
                                    <h6>Charges: </h6>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Bed Rate:</th>
                                                <td><strong>Php 2,000</strong></td>
                                            </tr>
                                            <tr>
                                                <th>Utility Bills:</th>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>Electricity Bill: <strong>Php 900</strong></td>

                                                            </tr>
                                                            <tr>
                                                                <td>Water Bill: <strong>Php 240</strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Shared Utility Discount: <strong>Php 755</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Bill: <strong>Php 385</strong></td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Penalty Amount:</th>
                                                <td>Php 00.0</td>
                                            </tr>
                                            <tr>
                                                <th>Discount Amount:</th>
                                                <td>Php 00.0</td>
                                            </tr>
                                            <tr>
                                                <th>Subtotal:</th>
                                                <td><strong>Php 2,385</strong></td>
                                            </tr>
                                            <tr>
                                                <th>Shared Room Discount (10%): </th>
                                                <td>Php 600</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td><strong>Php 1,785</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Print Button -->
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-secondary"><i class="bi bi-printer-fill"></i>
                                            Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead class="table-mode">
                                <tr>
                                    <th>Invoice Number</th>
                                    <th>Payer Name</th>
                                    <th>Paid For</th>
                                    <th>Total Room Charges</th>
                                    <th>Amount Paid</th>
                                    <th>Remaining Balance</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IN-1-2024121</td>
                                    <td>Mark Nel Tevs</td>
                                    <td>
                                        <ul>
                                            <li>John Doe (Php 400)</li>
                                            <li>Jane Smith (Php 400)</li>
                                            <li>Chris Brown (Php 400)</li>
                                            <li>Mark Nel Tevs (Php 585)</li>
                                        </ul>
                                    </td>
                                    <td>Php 1,785</td>
                                    <td>Php 1,785</td>
                                    <td>Php 0.00</td>
                                    <td>Fully Paid</td>
                                    <td>Admin approved the proof of payment</td>
                                </tr>
                                <tr>
                                    <td>IN-1-2024122</td>
                                    <td>Jane Smith</td>
                                    <td>Self</td>
                                    <td>Php 1,785</td>
                                    <td>Php 400.00</td>
                                    <td>Php 1,385.00</td>
                                    <td>Partially Paid</td>
                                    <td>Waiting for payment</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                
                <!--end::App Content-->
            </main>
            <livewire:roles.owner.components.owner-footer>
                <!--end::Footer livewire-->
                <div class="sidebar-overlay"></div>
                <!--end::App Main-->
                <!--begin::Footer-->

</div>