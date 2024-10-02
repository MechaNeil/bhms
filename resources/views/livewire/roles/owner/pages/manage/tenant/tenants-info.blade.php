{{-- In work, do what you enjoy. --}}


@section('title', 'Tenants Information')
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
                                            d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />

                                    </svg>
                                    <span class="d-inline-block">Tenants</span>
                                </h3>

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tenants

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
                                    data-bs-target="#addTenantModal"">
                                    <i class=" bi bi-person-fill-add" style="font-size: 18px;"></i> Add New
                                </button>
                                <!-- Modal for Add tenants-->
                                <div class="modal fade" id="addTenantModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="addTenantModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addTenantModalLabel">Add Tenant</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgress" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="addTenantForm">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="completeName" class="form-label">Complete
                                                                Name</label>
                                                            <input type="text" class="form-control" id="completeName"
                                                                placeholder="Enter full name" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="profilePicture" class="form-label">Profile
                                                                Picture</label>
                                                            <input type="file" class="form-control" id="profilePicture"
                                                                accept="image/*" data-bs-toggle="tooltip"
                                                                title="Upload an image file (JPG, PNG, etc.)">
                                                            <div id="profilePictureFeedback" class="invalid-feedback">
                                                                Please upload a valid image file (JPG, PNG).
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="address"
                                                                placeholder="Enter address" required>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="proofOfIdentity" class="form-label">Proof of
                                                                Identity</label>
                                                            <input type="file" class="form-control" id="proofOfIdentity"
                                                                accept="image/*,application/pdf"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-custom-class="custom-tooltip"
                                                                title="Upload an image or PDF of your ID (up to 5MB)">
                                                            <div id="proofOfIdentityFeedback" class="invalid-feedback">
                                                                Please upload an image or PDF (up to 5MB).
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="emailAddress" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" class="form-control" id="emailAddress"
                                                                placeholder="Enter email" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="Choose a username" required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="contact" class="form-label">Contact</label>
                                                            <input type="text" class="form-control" id="contact"
                                                                placeholder="Enter contact number" required>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="password"
                                                                placeholder="Enter password" required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="gender" class="form-label">Gender</label>
                                                            <select class="form-select" id="gender" required>
                                                                <option value="" disabled selected>Select gender
                                                                </option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" id="status" required>
                                                                <option value="active" selected>Active</option>
                                                                <option value="inactive">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" form="addTenantForm">Save
                                                    Tenant</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit tenants --}}
                                <div class="modal fade" id="editTenantModal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="editTenantModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Larger modal for more space -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editTenantModalLabel">Edit Tenant</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="progress mb-3" style="height: 5px;">
                                                <div class="progress-bar" id="formProgress2" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>


                                            <div class="modal-body">
                                                <form id="editTenantForm">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="completeName" class="form-label">Complete
                                                                Name</label>
                                                            <input type="text" class="form-control" id="completeName"
                                                                placeholder="Enter full name" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="profilePicture" class="form-label">Profile
                                                                Picture</label>
                                                            <input type="file" class="form-control" id="profilePicture"
                                                                accept="image/*" data-bs-toggle="tooltip"
                                                                title="Upload an image file (JPG, PNG, etc.)">
                                                            <div id="profilePictureFeedback" class="invalid-feedback">
                                                                Please upload a valid image file (JPG, PNG).
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="address"
                                                                placeholder="Enter address" required>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="proofOfIdentity" class="form-label">Proof of
                                                                Identity</label>
                                                            <input type="file" class="form-control" id="proofOfIdentity"
                                                                accept="image/*,application/pdf"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-custom-class="custom-tooltip"
                                                                title="Upload an image or PDF of your ID (up to 5MB)">
                                                            <div id="proofOfIdentityFeedback" class="invalid-feedback">
                                                                Please upload an image or PDF (up to 5MB).
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="emailAddress" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" class="form-control" id="emailAddress"
                                                                placeholder="Enter email" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="Choose a username" required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="contact" class="form-label">Contact</label>
                                                            <input type="text" class="form-control" id="contact"
                                                                placeholder="Enter contact number" required>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="password"
                                                                placeholder="Enter password" required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="gender" class="form-label">Gender</label>
                                                            <select class="form-select" id="gender" required>
                                                                <option value="" disabled selected>Select gender
                                                                </option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" id="status" required>
                                                                <option value="active" selected>Active</option>
                                                                <option value="inactive">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" form="editTenantForm">Save
                                                    Tenant</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteTenantModal" tabindex="-1"
                                    aria-labelledby="deleteTenantModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteTenantModalLabel">Delete Tenant</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this tenant?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="deleteTenantButton">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Profile Picture --}}
                                <div class="modal fade" id="editProfilePictureModal" tabindex="-1"
                                    aria-labelledby="editProfilePictureLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editProfilePictureLabel">Update Profile
                                                    Picture for <span id="user-name-placeholder">Person</span></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="profilePictureForm">
                                                    <div class="mb-3">
                                                        <label for="profilePictureInput" class="form-label">Select
                                                            Profile Picture</label>
                                                        <input type="file" class="form-control" id="profilePictureInput"
                                                            accept="image/*">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Profile Identity --}}
                                <div class="modal fade" id="editProfileIdentityModal" tabindex="-1"
                                    aria-labelledby="editProfileIdentityLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editProfileIdentityLabel">Update Profile
                                                    Identity for <span id="user-name-placeholder">Person</span></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="profileIdentityForm">
                                                    <div class="mb-3">
                                                        <label for="profileIdentityInput" class="form-label">Select
                                                            Profile Identity</label>
                                                        <input type="file" class="form-control"
                                                            id="profileIdentityInput" accept="image/*">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="card mb-4">
                                    <div class="card-header">

                                        <h3 class="card-title">Tenants Table</h3>


                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table">

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="table-mode">
                                                    <tr>
                                                        <th>Profile</th>
                                                        <th>Contact Info</th>
                                                        <th>Address</th>
                                                        <th>Gender</th>
                                                        <th>Status</th>
                                                        <th>Proof of Identity</th>
                                                        <th style="width: 109px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td class=" text-center">
                                                            <img src="{{ asset('assets/img/user1-128x128.jpg') }}"
                                                                class="img-thumbnail mx-auto d-block img-size-120"
                                                                alt="Room Image" />
                                                            <button class="btn btn-warning btn-sm m-1 mt-1"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#editProfilePictureModal">
                                                                <i class="bi bi-pencil-fill"></i> &nbsp;Edit
                                                            </button>
                                                        </td>
                                                        <td class="contact-info">
                                                            <p>Full Name: <strong>Mak Nel T. Tevs</strong></p>
                                                            <p>Phone: <strong>09632266464</strong></p>
                                                            <p>Email: <strong>maknel@gmail.com</strong></p>
                                                        </td>
                                                        <td>Begonia, Viga, Catanduanes</td>
                                                        <td>Male</td>
                                                        <td class="text-center">
                                                            <span class="badge text-bg-success">Active</span>
                                                        </td>
                                                        <td class=" text-center">
                                                            <img src="{{ asset('assets/img/user1-128x128.jpg') }}"
                                                                class="img-thumbnail mx-auto d-block img-size-120"
                                                                alt="Room Image" />
                                                            <button class="btn btn-warning btn-sm m-1 mt-1"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#editProfileIdentityModal">
                                                                <i class="bi bi-pencil-fill"></i> &nbsp;Edit
                                                            </button>
                                                        </td>
                                                        <td class=" text-center">
                                                            <button class="btn btn-primary btn-sm m-1" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editTenantModal">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm m-1" type="button" data-bs-toggle="modal" data-bs-target="#deleteTenantModal">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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