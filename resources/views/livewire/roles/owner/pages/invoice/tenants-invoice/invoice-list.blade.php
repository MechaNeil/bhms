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
                                <h3 class="mb-0">Invoice List</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Invoice</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Invoice List
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
                            <div class="co-md-12">


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
                                                            <button class="btn btn-primary btn-sm m-1"><i class="bi bi-box-arrow-in-up"></i> &nbsp;Update</button>
                                                            <button wire:navigate href="view-invoice" class="btn btn-info btn-sm m-1"><i class="bi bi-eye"></i> &nbsp;View</button>
                                                            <button class="btn btn-success btn-sm m-1"><i class="bi bi-wallet2"></i> &nbsp;Pay</button>
                                                        </td>
                                                        <td>IN-2024-May-2</td>
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