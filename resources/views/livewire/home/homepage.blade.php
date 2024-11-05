{{-- Care about people's approval and you will be their prisoner. --}}


{{-- The Master doesn't talk, he acts. --}}


{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

@section('title', 'Register Tenants')
@section('body-class', 'layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary')
<!-- Defining a custom body class for the register page -->

<div class="app-wrapper">
    <!-- App wrapper starts here -->
    <!-- livewire components starts here -->
    <!-- begin::Header livewire -->
    <livewire:home.components.home-header>
        <!-- begin::Sidebar livewire -->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="container col-9">
                            <h1>Welcome to Boarding House Management System</h1>
                            <div class="callout callout-info mb-3">
                                <div class="col-12">
                                    <p>Efficiently manage your boarding house with our system</p>
                                    <p>This system helps manage your boarding house efficiently, making tasks such as
                                        tenant management,
                                        invoice tracking, and payment processing easier and more organized.</p>
                                </div>
                            </div>

                            @if (Route::has('login'))
                            @auth
                            <a wire:navigate href="{{ route('dashboard-owner') }}" class="btn btn-primary">
                                Get Started
                            </a>
                            @else
                            <a wire:navigate href="{{ route('login') }}" class="btn btn-primary">
                                Get Started
                            </a>
                            @endauth
                            @endif
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--end::Container-->
                    <!--end::App Content Header-->
                    <!--begin::App Content-->
                    <div class="app-content mt-5">
                        <div class="container-fluid">
                            <div class="container">


                                <div class="card card-primary card-outline mb-4">
                                    <div class="card-header">
                                        <h1 class="card-tilte text-center">Features</h1>
                                    </div>
                                    <div class="card-body row ms-2">
                                        <div class="col-md-4">
                                            <i class="bi bi-speedometer2"></i>
                                            <h3>Dashboard</h3>
                                            <p>Total Active Tenants, Total Beds, Total Collection, and Total
                                                Collectibles.
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-people"></i>
                                            <h3>Tenants</h3>
                                            <p>Manage tenant information and details.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-building"></i>
                                            <h3>Rooms</h3>
                                            <p>View room information, including room number, images and description.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-house"></i>
                                            <h3>Bed Info</h3>
                                            <p>View bed details, including bed numbers, and occupancy status etc.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-clipboard"></i>
                                            <h3>Bed Assignment</h3>
                                            <p>Assign beds to tenants and track bed allocations.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-file-text"></i>
                                            <h3>Invoice</h3>
                                            <p>Generate invoices, track payment history, and manage billing cycles.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-bar-chart"></i>
                                            <h3>Reports</h3>
                                            <p>Generate various reports, including collectible reports, financial
                                                summaries,
                                                and
                                                tenant
                                                payment histories.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-clock"></i>
                                            <h3>Activity Log</h3>
                                            <p>View system activities, including user logins, modifications to tenant
                                                records,
                                                and invoice
                                                generation.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="bi bi-database"></i>
                                            <h3>Backup Database</h3>
                                            <p>Backup system database to prevent data loss and ensure data integrity.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.container-fluid -->
                    </div>
                    <!--end::App Content-->
        </main>

        <!--end::App Main-->
        <!--begin::Footer-->
</div>



<!--end::App Main-->
<!--begin::Footer-->