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
                                    <span class="d-inline-block">Collectibles Tenants</span>
                                </h3>

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Report</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Collectibles Tenants
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
                            <div class="container mt-5">
                                <!-- First Row: Overview Cards -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h5>Tenants with Occupied Bed(s)</h5>
                                                <h1>Total: 1</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h5>Collectibles</h5>
                                                <h1>Total: 20,000.00</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Second Row: Table and Chart -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Collectibles by Tenant</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered">
                                                        <thead class="table-mode">
                                                            <tr>
                                                                <th>Tenant Name</th>
                                                                <th>Outstanding Balance</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Mak Nel</td>
                                                                <td>20,000.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="btn-group mt-3" role="group">
                                                    <button type="button" class="btn btn-secondary">Copy</button>
                                                    <button type="button" class="btn btn-secondary">CSV</button>
                                                    <button type="button" class="btn btn-secondary">Excel</button>
                                                    <button type="button" class="btn btn-secondary">PDF</button>
                                                    <button type="button" class="btn btn-secondary">Print</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Chart Column -->
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Collectibles Pie Chart</h5>
                                                <canvas id="collectiblesChart" height="150"></canvas>
                                            </div>
                                        </div>
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