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
                            <livewire:roles.owner.pages.dashboard.manage-assistant.component.search placeholder="TYpe something to word">

                            <div class="col-sm-6 mt-4">
                                <h3 class="mb-0">Assistant</h3>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Create Account</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tenants Registration
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
                    
                    <div class="m-auto w-50">
                        @foreach ($articles as $article)
                        <div class="mt-1 p-3 wire:key="{{ $article->id }}"">
                            <h3 class="article">
                                <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
                            </h3>
                            <p>
                                {{ str($article->content)->words(30) }}
                            </p>
                        </div>
                        @endforeach
                    </div>

                </div>
            </main>
            <livewire:roles.owner.components.owner-footer>
                <!--end::Footer livewire-->
                <div class="sidebar-overlay"></div>
                <!--end::App Main-->
                <!--begin::Footer-->
</div>