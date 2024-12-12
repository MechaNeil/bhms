{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

{{-- Nothing in the world is as soft and yielding as water. --}}

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
                                <h3 class="mb-0">Company Info</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Company Info</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Company Info
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
                        <!-- Profile Section -->

                        <!-- Company Information Table -->
                        <div class="card mb-4 mt-4">
                            <div class="card-header mb-3">
                                <h3 class="card-title">Company Information</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <img src="{{ asset('storage/'.$company->company_logo) }}" class="rounded-circle mb-3"
                                    alt="Company Logo" width="150" height="150">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editCompanyModal">
                                    Edit Company Info
                                </button>
                            </div>
                            <livewire:roles.owner.pages.background.more-info.components.company-modal>

                            <div class="card-body table">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-4">
                                        <tbody class="table-mode">
                                            <tr>
                                                <th>Company Name:</th>
                                                <td>{{ $company_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td>{{ $address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact:</th>
                                                <td>{{ $contact_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Website:</th>
                                                <td><a href="{{ $website }}" target="_blank">{{ $website }}</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- /.container-fluid -->
                </div>
                <!--end::App Content-->
            </main>
            <livewire:roles.owner.components.owner-footer>
                <!--end::Footer livewire-->
                <div class="sidebar-overlay"></div>
                <!--end::App Main-->
                <!--begin::Footer-->
</div>