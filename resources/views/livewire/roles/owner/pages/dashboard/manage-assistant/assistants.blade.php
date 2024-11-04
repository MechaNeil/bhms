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
                            <div class="col-sm-6">
                                <h3 class="mb-0">Assistant</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Create Account</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Assistant
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
                    <!-- /.container-fluid -->
                    {{-- <form wire:submit="changeGreeting()">

                        <select type="text" class="p-4 mb-2" wire:model.fill='greeting'>
                            @foreach ($greetings as $item)
                            <option value="{{ $item->greeting }}">
                                {{ $item->greeting }}
                            </option>

                            @endforeach
                        </select> --}}

                        {{-- wire modifier live, debounce.1000s, change, blur, fill --}}
                        {{-- <input type="text" class="p-4 mb-2" wire:model='name'>
                        <div>
                            @error('name')
                            {{ $message }}

                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Greet
                        </button>
                </div>

                </form> --}}

                <livewire:roles.owner.pages.dashboard.manage-assistant.component.search placeholder="whatever we want">
   
                {{-- 
                @if ($greetingMessage != '')
                <div class="mt-5">
                    {{ $greetingMessage }}!
                </div>
                @endif --}}
</div>
<!--end::App Content-->
</main>
<livewire:roles.owner.components.owner-footer>
    <!--end::Footer livewire-->
    <div class="sidebar-overlay"></div>
    <!--end::App Main-->
    <!--begin::Footer-->
    </div>