{{-- Embrace the bugs, the more bugs you fix the less bugs in the future -> MN --}}
@section('title', 'Dashboard')
@section('body-class', 'layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary')
<!-- Defining a custom body class for the register page -->

<div class="app-wrapper">
    <!-- App wrapper starts here -->
    <!-- livewire components starts here -->
    <!-- begin::Header livewire -->
    <livewire:roles.owner.components.owner-header>
        <!-- begin::Sidebar livewire -->
        <livewire:roles.owner.components.owner-sidebar>
            <!--begin::App Main-->
            <main class="app-main">
                <!--begin::App Content Header-->
                <div class="app-content-header">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="mb-0">Dashboard</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Dashboard
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
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row-->
                        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 row-cols">



                            <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.active-tenants>
                                <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.total-beds>
                                    <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.monthly-earnings>
                                        <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.total-collectibles>


                                            {{--
                                            <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.total-due-date>

                                                <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.all-tenants>

                                                    <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.occupancy-rate>
                                                        --}}

                        </div>
                        <div class="row row-cols-2">
                            <div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">List of Due Dates (Greater than or Equal to Current Date)
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead class="table-mode">
                                                <tr>
                                                    <th>Invoice Number</th>
                                                    <th>Due Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example row, you can dynamically generate rows here -->
                                                <tr>
                                                    <td>INV-001</td>
                                                    <td>2024-11-10</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Upcoming Invoices (7 Days Before Due Date)</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead class="table-mode">
                                                <tr>
                                                    <th>Invoice Number</th>
                                                    <th>Due Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example row, you can dynamically generate rows here -->
                                                <tr>
                                                    <td>INV-002</td>
                                                    <td>2024-11-17</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2">
                            <!--begin::Col-->


                            <div class="col-lg-6 col-6">

                                <!--begin::Room Status-->
                                {{--
                                <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.room-status>
                                    --}}

                                    <!--end::Room Status-->
                            </div>

                            <!--end::Col-->
                            <div class="col-lg-6 col-6">

                                {{--
                                <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.property>
                                    --}}

                                    <!--end::Room Status-->
                            </div>

                        </div>
                        <div class="row">
                            {{-- <livewire:roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.chart>
                                <!--end::Col--> --}}
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row">
                            <!-- Start col -->
                            <!-- /.Start col -->
                            <!-- Start col -->
                            <!-- /.Start col -->
                        </div> <!-- /.row (main row) -->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::App Content-->
            </main>
            <!--end::App Main-->
            <!--begin::Footer livewire-->
            <livewire:roles.owner.components.owner-footer>
                <!--end::Footer livewire-->
                <div class="sidebar-overlay"></div>

</div>