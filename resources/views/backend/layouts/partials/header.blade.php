<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <a href="#"
            class="waves-effect waves-light nav-link rounded d-none d-md-inline-block mx-10 push-btn text-white"
            data-toggle="push-menu" role="button">
            <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span></span>
        </a>

        <!-- Logo -->
        <a href="javascript:void(0)" class="logo justify-content-around">
            <!-- logo-->
            <div class="logo-lg">
                <span class="light-logo"><img src="{{ asset('images/antrein-logo.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/antrein-logo.png') }}" alt="logo"></span>
            </div>
        </a>
    </div>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="container">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-md-none">
                        <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                            role="button">
                            <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></span>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-md-inline-block">
                        <a href="#" data-provide="fullscreen"
                            class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                            <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                                        aria-describedby="button-addon2" id="search" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon3">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                                <ul id="listFiltered">

                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
                            title="User">
                            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                        </a>

                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i>
                                    Profile</a>
                                {{-- <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="logout()"><i
                                        class="ti-lock text-muted me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Control Sidebar Toggle Button -->
                    {{-- <li>
						<a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
							<i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
						</a>
					</li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Control Sidebar -->
{{-- <aside class="control-sidebar">
	<div class="rpanel-title">
		<span class="pull-right btn btn-circle btn-danger">
			<i class="ion ion-close text-white" data-toggle="control-sidebar"></i>
		</span>
	</div>

	<!-- Create the tabs -->
	<ul class="nav nav-tabs control-sidebar-tabs">
		<li class="nav-item">
			<a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active">
				<i class="mdi mdi-message-text"></i>
			</a>
		</li>

		<li class="nav-item">
			<a href="#control-sidebar-settings-tab" data-bs-toggle="tab">
				<i class="mdi mdi-playlist-check"></i>
			</a>
		</li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
		<!-- Home tab content -->
		<div class="tab-pane active" id="control-sidebar-home-tab">
			<div class="flexbox">
				<a href="javascript:void(0)" class="text-grey">
					<i class="ti-more"></i>
				</a>

				<p>Users</p>

				<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
			</div>

			<div class="lookup lookup-sm lookup-right d-none d-lg-block">
				<input type="text" name="s" placeholder="Search" class="w-p100">
			</div>

			<div class="media-list media-list-hover mt-20">
				<div class="media py-10 px-0">
					<a class="avatar avatar-lg status-success" href="#">
						<img src="{{ asset('images/avatar.png') }}" alt="...">
					</a>
					<div class="media-body">
						<p class="fs-16">
							<a class="hover-primary" href="#"><strong>Tyler</strong></a>
						</p>
						<p>Praesent tristique diam...</p>
						<span>Just now</span>
					</div>
				</div>
			</div>

		</div>
		<!-- /.tab-pane -->

		<!-- Settings tab content -->
		<div class="tab-pane" id="control-sidebar-settings-tab">
			<div class="flexbox">
				<a href="javascript:void(0)" class="text-grey">
					<i class="ti-more"></i>
				</a>

				<p>Todo List</p>

				<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
			</div>

			<ul class="todo-list mt-20">
				<li class="py-15 px-5 by-1">
					<!-- checkbox -->
					<input type="checkbox" id="basic_checkbox_1" class="filled-in">
					<label for="basic_checkbox_1" class="mb-0 h-15"></label>
					<!-- todo text -->
					<span class="text-line">Nulla vitae purus</span>
					<!-- Emphasis label -->
					<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
					<!-- General tools such as edit or delete-->
					<div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					</div>
				</li>
			</ul>
		</div>
		<!-- /.tab-pane -->
	</div>
</aside> --}}
<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
