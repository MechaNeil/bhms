{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
            
            @if (Route::has('login'))

            @auth
            <li class="nav-item">
                <a wire:navigate href="{{ route('dashboard-owner') }}" class="nav-link">
                    Dashboard
                </a>
            </li>
            @else
            <li class="nav-item">
                <a wire:navigate href="{{ route('login') }}" class="nav-link">
                    Log in
                </a>
            </li>

            @if (Route::has('register'))
            <li class="nav-item">
                <a wire:navigate href="{{ route('register') }}" class="nav-link">
                    Register
                </a>
            </li>
            @endif
            @endauth

            @endif
            @livewire('roles.owner.components.header-components.change-theme')
        </ul>
        <!--end::Start Navbar Links-->

            <!--end::User Menu Dropdown-->
   
        <!--end::End Navbar Links-->

    </div>

    <!--end::Container-->
</nav>
<!--end::Header-->