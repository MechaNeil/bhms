{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

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
                            {{-- this is a static data --}}
                            <livewire:roles.owner.pages.dashboard.manage-assistant.component.search placeholder="TYpe something to word">

                    
                            
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::App Content Header-->
                <!--begin::App Content-->
                <div class="app-content">

                    <div class="mt-4 ms-5 me-4">
                        <h3 class="ms-4">{{ $article->title }}</h3>
                    </div>
                    <!-- /.container-fluid -->
                    <div class="mt-4 ms-5 me-4">
                        <p class="ms-4 me-4">
                            {{ $article->content }}
                        </p>
                    </div>

                    <div>

            </main>
            <livewire:roles.owner.components.owner-footer>
                <!--end::Footer livewire-->
                <div class="sidebar-overlay"></div>
                <!--end::App Main-->
                <!--begin::Footer-->
</div>