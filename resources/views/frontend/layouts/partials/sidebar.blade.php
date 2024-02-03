<section class="sidebar position-relative">
    <div class="user-profile px-20 py-15">
        <div class="d-flex align-items-center">
            <div class="image">
                <img src="{{ asset('images/avatar/' . (Auth::user()->avatar ?? 'avatar.png')) }}"
                    class="avatar avatar-lg bg-primary-light" alt="User Image">
            </div>

            <div class="info">
                <a class="dropdown-toggle px-20" data-bs-toggle="dropdown" href="#">{{ Auth::user()->username }}</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="ti-user"></i>
                        Profile</a>
                    {{-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a> --}}
                </div>
            </div>
        </div>

        {{-- <ul class="list-inline profile-setting mt-30 mb-20 d-flex justify-content-between">
            <li>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Search">
                    <i data-feather="search"></i>
                </a>
            </li>

            <li>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Notification">
                    <i data-feather="bell"></i>
                </a>
            </li>

            <li>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat">
                    <i data-feather="message-square"></i>
                </a>
            </li>

            <li>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout" onclick="logout()">
                    <i data-feather="log-out"></i>
                </a>
            </li>
        </ul> --}}
    </div>

    <div class="multinav">
        <div class="multinav-scroll" style="height: 100%;">
            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="header">Menu</li>

                {{-- Dashboard --}}
                <li class="{{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('backend.dashboard') }}">
                        <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->segment(1) == 'main-menu' ? 'active' : '' }}">
                    <a href="{{ route('backend.main-menu') }}">
                        <i class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                        <span>Main Menu</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>
