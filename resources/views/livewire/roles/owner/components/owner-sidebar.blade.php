{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}


<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link--> <a href="{{ route('dashboard-owner') }} " class="brand-link">
            <!--begin::Brand Image--> <img src="{{ asset('assets/img/mn2.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75">
            <!--end::Brand Image-->
            <!--begin::Brand Text--> <span class="brand-text fw-light">MN's Bhms</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    
    <div class="sidebar-wrapper" data-overlayscrollbars="host">
        <div class="os-size-observer os-size-observer-appear">
            <div class="os-size-observer-listener ltr"></div>
        </div>
        <div data-overlayscrollbars-viewport="scrollbarHidden"
            style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px; overflow-y: scroll;">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item"> <a wire:navigate href="/dashboard-owner"
                            class="nav-link {{ request()->routeIs('dashboard-owner*') ? 'active' : '' }}"> <i
                                class="nav-icon bi bi-speedometer2"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item"> <a wire:navigate href="/permission-management"
                            class="nav-link {{ request()->routeIs('permission-management*') ? 'active' : '' }}"> <i
                                class="nav-icon bi bi-person-gear"></i>
                            <p>Assistant</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('room-management*') ||
                        request()->routeIs('tenants-information*') ||
                        request()->routeIs('manage-beds*') ||
                        request()->routeIs('bed-assignment*') ||
                        request()->routeIs('invoice*') ||
                        request()->routeIs('view-invoice*') ||
                        request()->routeIs('utility-bills*')
                            ? 'menu-open'
                            : 'menu-close' }}">

                        <a href="#" class="nav-link {{ request()->routeIs('room-management*') ||
                            request()->routeIs('tenants-information*') ||
                            request()->routeIs('manage-beds*') ||
                            request()->routeIs('bed-assignment*') ||
                            request()->routeIs('invoice*') ||
                            request()->routeIs('view-invoice*') ||
                            request()->routeIs('utility-bills*')
                                ? 'active'
                                : '' }}">
                             <i
                             class="nav-icon bi bi-menu-button-wide"></i>
                         <p>
                             MANAGE
                             <i class="nav-arrow bi bi-chevron-right"></i>
                         </p>                        
                        
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item"> <a wire:navigate href="/room-management"
                                    class="nav-link {{ request()->routeIs('room-management*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-house-gear-fill"></i>
                                    <p>Room</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/tenants-information"
                                    class="nav-link {{ request()->routeIs('tenants-information*') ? 'active' : '' }}">
                                    <i class="nav-icon bi bi-people-fill"></i>
                                    <p>Tenants</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/manage-beds"
                                    class="nav-link {{ request()->routeIs('manage-beds*') ? 'active' : '' }}">
                                    <svg class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 27 27" fill="currentColor">
                                        <path
                                            d="M22 11V20H20V17H4V20H2V4H4V14H12V7H18C20.2091 7 22 8.79086 22 11ZM8 13C6.34315 13 5 11.6569 5 10C5 8.34315 6.34315 7 8 7C9.65685 7 11 8.34315 11 10C11 11.6569 9.65685 13 8 13Z">
                                        </path>
                                    </svg>
                                    <p>Beds</p>
                                </a>
                            </li>

                            <li class="nav-item"> <a wire:navigate href="/bed-assignment"
                                    class="nav-link {{ request()->routeIs('bed-assignment*') ? 'active' : '' }}">
                                    <svg class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 27 27" fill="currentColor">
                                        <path
                                            d="M22 11V20H20V17H4V20H2V4H4V14H12V7H18C20.2091 7 22 8.79086 22 11ZM8 13C6.34315 13 5 11.6569 5 10C5 8.34315 6.34315 7 8 7C9.65685 7 11 8.34315 11 10C11 11.6569 9.65685 13 8 13Z">
                                        </path>
                                    </svg>
                                    <p>Assign Beds</p>
                                </a>
                            </li>


                            <li class="nav-item"> <a wire:navigate href="/invoice-list"
                                    class="nav-link {{ request()->routeIs('view-invoice*') || request()->routeIs('invoice-list*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-file-text-fill "></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/utility-bills"
                                    class="nav-link {{ request()->routeIs('utility-bills*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi-cash"></i>
                                    <p>Bills</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->routeIs('requests*') ||
                        request()->routeIs('sms-configuration*') ||
                        request()->routeIs('notice-board*')
                            ? 'menu-open'
                            : 'menu-close' }}">

                        <a href="#" class="nav-link {{ request()->routeIs('requests*') ||
                            request()->routeIs('sms-configuration*') ||
                            request()->routeIs('notice-board*')
                                ? 'active'
                                : '' }}">
                                
                                <i
                                class="nav-icon bi bi-send-fill"></i>
                            <p>
                                NOTIFY
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>     
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a wire:navigate href="/requests"
                                    class="nav-link {{ request()->routeIs('requests*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-list-check"></i>
                                    <p>Requests</p>
                                </a> </li>
                            <li class="nav-item"> <a wire:navigate href="/sms-configuration"
                                    class="nav-link {{ request()->routeIs('sms-configuration*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi-envelope-fill"></i>
                                    <p>SMS</p>
                                </a> </li>
                            <li class="nav-item"> <a wire:navigate href="/notice-board"
                                    class="nav-link {{ request()->routeIs('notice-board*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi-megaphone-fill"></i>
                                    <p>Notice Board</p>
                                </a> </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->routeIs('collectibles-month*') ||
                        request()->routeIs('collectibles-tenants*') ||
                        request()->routeIs('monthly-payment*') ||
                        request()->routeIs('payment-list*')
                            ? 'menu-open'
                            : 'menu-close' }}">

                        <a href="#" class="nav-link {{ request()->routeIs('collectibles-month*') ||
                        request()->routeIs('collectibles-tenants*') ||
                        request()->routeIs('monthly-payment*') ||
                        request()->routeIs('payment-list*') ? 'active' : '' }}"">
                                <i
                                class="nav-icon bi bi-receipt"></i>
                            <p>
                               REPORTS
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>     
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item"> <a wire:navigate href="/collectibles-month"
                                    class="nav-link {{ request()->routeIs('collectibles-month*') ? 'active' : '' }}">
                                    <i class="nav-icon bi bi-wallet"></i>
                                    <p>Collectibles Months</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/collectibles-tenants"
                                    class="nav-link {{ request()->routeIs('collectibles-tenants*') ? 'active' : '' }}">
                                    <i class="nav-icon bi bi-wallet"></i>
                                    <p>Collectibles Tenants</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/monthly-payment"
                                    class="nav-link {{ request()->routeIs('monthly-payment*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-cash-stack"></i>
                                    <p>Monthly Payments</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/payment-list"
                                    class="nav-link {{ request()->routeIs('payment-list*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-cash-stack"></i>
                                    <p>Payments List</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="nav-item {{ request()->routeIs('users*') || request()->routeIs('activity-logs*') ? 'menu-open' : 'menu-close' }}">

                        <a href="#"
                            class="nav-link {{ request()->routeIs('users*') || request()->routeIs('activity-logs*') ? 'active' : '' }}"">
                            <i
                            class="nav-icon bi bi-person-fill-gear"></i>
                        <p>
                            ADMINISTER
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>     
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a wire:navigate href="/users"
                                    class="nav-link {{ request()->routeIs('users*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-person-circle"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="nav-item"> <a wire:navigate href="/activity-logs"
                                    class="nav-link {{ request()->routeIs('activity-logs*') ? 'active' : '' }}"> <i
                                        class="nav-icon bi bi-card-checklist"></i>
                                    <p>Activity Logs</p>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <li class="nav-header">CREATE BACKUP</li>
                    <li class="nav-item"> <a wire:navigate href="/backup-database"
                            class="nav-link {{ request()->routeIs('backup-database*') ? 'active' : '' }}"> <i
                                class="nav-icon bi bi-database-fill"></i>
                            <p>Backup Database</p>
                        </a>
                    </li>

                    <li class="nav-header">MORE INFO</li>


                    <li class="nav-item"> <a wire:navigate href="/article-index"
                        class="nav-link {{ request()->routeIs('article-index*') ? 'active' : '' }}"> <i
                            class="nav-icon bi bi-buildings"></i>
                        <p>Article-Index</p>
                    </a>
                </li>

                    <li class="nav-item"> <a wire:navigate href="/company-info"
                            class="nav-link {{ request()->routeIs('company-info*') ? 'active' : '' }}"> <i
                                class="nav-icon bi bi-buildings"></i>
                            <p>Company Info</p>
                        </a>
                    </li>
                    <li class="nav-item"> <a wire:navigate href="/"
                            class="nav-link {{ request()->routeIs('visit*') ? 'active' : '' }}"> <i
                                class="nav-icon bi bi-globe"></i>
                            <p>Visit Home Page</p>
                        </a>
                    </li>
                    



                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <div
            class="os-scrollbar os-scrollbar-horizontal os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-unusable os-theme-light os-scrollbar-auto-hide-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="width: 100%;"></div>
            </div>
        </div>
        <div
            class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-visible os-theme-light os-scrollbar-auto-hide-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="height: 60.637%; transform: translateY(0%);"></div>
            </div>
        </div>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->