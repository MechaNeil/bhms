
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
                                <div class="card-header mb-3"><h3 class="card-title">Company Information</h3></div>
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <img src="{{ asset('assets/img/user1-128x128.jpg') }}" class="rounded-circle mb-3" alt="Company Logo" width="150" height="150">
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCompanyModal">
                                        Edit Company Info
                                    </button>
                                </div>
                                <div class="card-body table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mt-4">
                                            <tbody class="table-mode">
                                                <tr>
                                                    <th>Company Name:</th>
                                                    <td>MN's BHMS</td>
                                                </tr>
                                                <tr>
                                                    <th>Address:</th>
                                                    <td>Calatagan Proper, Virac, Catanduanes</td>
                                                </tr>
                                                <tr>
                                                    <th>Contact:</th>
                                                    <td>123456</td>
                                                </tr>
                                                <tr>
                                                    <th>Website:</th>
                                                    <td><a href="https://github.com/MechaNeil">https://github.com/MechaNeil</a></td>
                                                </tr>
                                            </tbody>
                                
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Editing Info -->
                            <div class="modal fade" id="editCompanyModal" tabindex="-1" aria-labelledby="editCompanyModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editCompanyModalLabel">Edit Company Info</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="companyLogo" class="form-label">Company Logo</label>
                                                    <input type="file" class="form-control" id="companyLogo"
                                                        accept="image/*" data-bs-toggle="tooltip"
                                                        title="Upload an image file (JPG, PNG, etc.)">
                                                    <div id="companyLogoFeedback" class="invalid-feedback">
                                                        Please upload a valid image file (JPG, PNG).
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="companyName" class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" id="companyName" placeholder="Enter company name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" placeholder="Enter address">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="contact" class="form-label">Contact</label>
                                                    <input type="text" class="form-control" id="contact" placeholder="Enter contact">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="website" class="form-label">Website</label>
                                                    <input type="url" class="form-control" id="website" placeholder="Enter website">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
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

