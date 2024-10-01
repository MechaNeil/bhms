{{-- Stop trying to control. --}}


@section('title', 'SMS Configuration')
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
                                <h3 class="mb-0">SMS Configuration</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Notification</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        SMS Configuration
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
                        
                        <div class="container mt-5">
                            <div class="card shadow-sm">
                                <div class="card-body w- ">
                                    <form>
                                        <div class="mb-3">
                                            <label for="apiCode" class="form-label">API Code</label>
                                            <input type="text" class="form-control" id="apiCode" placeholder="ex. fa58ea11ewssasdd">
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="apiPassword" class="form-label">API Password</label>
                                            <input type="password" class="form-control" id="apiPassword" placeholder="*************">
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="setAlarm" class="form-label">Set Alarm</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="setAlarm" placeholder="dd/mm/yyyy">
                                                <span class="input-group-text">
                                                    <i class="bi bi-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                                        </div>
                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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