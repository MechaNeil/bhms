    {{-- The best athlete wants his opponent at his best. --}}
<li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
    data-bs-toggle="dropdown"> <img src="{{ asset('assets/
img/user2-160x160.jpg') }}"
        class="user-image rounded-circle shadow" alt="User Image"> <span
        class="d-none d-md-inline">@if(auth()->check()){{ auth()->user()->username }}@endif</span> </a>
<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
    <!--begin::User Image-->
    <li class="user-header text-bg-primary"> <img
            src="{{ asset('assets/
img/user2-160x160.jpg') }}" class="rounded-circle shadow"
            alt="User Image">
        <p>
            @if(auth()->check())
            {{ auth()->user()->username }} - {{ auth()->user()->role }} 
            <small>Member since {{ auth()->user()->created_at->format('M. Y') }}</small>
        @endif
     </p>
    </li>
    <!--end::User Image-->
    <!--begin::Menu Body-->
    <li class="user-body">
        <!--begin::Row-->
        <div class="row">
            <div class="col-4 text-center"> <a href="#">Followers</a> </div>
            <div class="col-4 text-center"> <a href="#">Sales</a> </div>
            <div class="col-4 text-center"> <a href="#">Friends</a> </div>
        </div>
        <!--end::Row-->
    </li>
    <!--end::Menu Body-->
    <!--begin::Menu Footer-->
    <li class="user-footer">
        <a href="#" class="btn btn-default btn-flat">Profile</a>
        <!-- Wire click triggers the logout method in the Livewire component -->
        <livewire:auth.logout />
    </li>
</li>