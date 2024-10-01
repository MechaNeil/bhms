{{-- Success is as dangerous as failure. --}}

@section('title', 'Notice Board')
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
                                <h3 class="mb-0">Notice Board</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Notification</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Notice Board</h3>
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
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Title">
                                        </div>
                    

                                        <div class="mb-3">
                                            <label for="noticeBody" class="form-label">Notice Body</label>
                                            <textarea class="form-control" id="noticeBody" rows="3" placeholder="Say Something"></textarea>
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