<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-layout/css/rtl/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/demo/demo_configurator.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
	<script src="{{ asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
	<script src="{{ asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>

	<script src="{{ asset('assets-layout/js/app.js')}}"></script>
	<script src="{{ asset('assets/demo/pages/dashboard.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/streamgraph.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/sparklines.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/lines.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/areas.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/donuts.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/bars.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/progress.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/heatmaps.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/pies.js')}}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/bullets.js')}}"></script>
	<!-- /theme JS files -->

    <script src="{{ asset('assets/demo/pages/datatables_basic.js') }}"></script>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</head>

<body>
    <!-- Main navbar -->
    <div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
        <div class="container-fluid">
            <div class="d-flex d-lg-none me-2">
                <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                    <i class="ph-list"></i>
                </button>
            </div>

            <div class="navbar-brand flex-1 flex-lg-0">
                <a href="index.html" class="d-inline-flex align-items-center">
                    <img src="../../../assets/images/logo_icon.svg" alt="">
                </a>
            </div>

            <ul class="nav flex-row justify-content-end order-1 order-lg-2">


                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                        <div class="status-indicator-container">
                            <img src="../../../assets/images/demo/users/face11.jpg" class="w-32px h-32px rounded-pill"
                                alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                            <i class="ph-user-circle me-2"></i>
                            الملف الشخصي
                        </a>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            class="dropdown-item">
                            <i class="ph-sign-out me-2"></i>
                            تسجيل الخروج


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-start">

                        <div>
                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->


                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="ph-house"></i>
                                <span>لوحة التحكم</span>
                            </a>
                        </li>

                        <!-- Packages -->
                        <li class="nav-item">
                            <a href="{{ route('packages.index') }}" class="nav-link">
                                <i class="ph-layout"></i>
                                <span>الباقات</span>
                            </a>
                        </li>

                        <!-- Package Categories -->
                        <li class="nav-item">
                            <a href="{{ route('package_categories.index') }}" class="nav-link">
                                <i class="ph-hand-pointing"></i>
                                <span>تصنيف الباقات</span>
                            </a>
                        </li>

                        <!-- Users -->
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="ph-swatches"></i>
                                <span>المستخدمين</span>
                            </a>
                        </li>

                        <!-- Contacts -->
                        <li class="nav-item">
                            <a href="{{ route('contacts.index') }}" class="nav-link">
                                <i class="ph-note-blank"></i>
                                <span>الجهات</span>
                            </a>
                        </li>

                        <!-- Invitations -->
                        <li class="nav-item">
                            <a href="{{ route('invitations.index') }}" class="nav-link">
                                <i class="ph-note-blank"></i>
                                <span>الدعوات</span>
                            </a>
                        </li>
                        <!-- Invitations -->
                        <li class="nav-item">
                            <a href="{{ route('invitation_categories.index') }}" class="nav-link">
                                <i class="ph-note-blank"></i>
                                <span>تصنيف الدعوات</span>
                            </a>
                        </li>

                        <!-- Payments -->
                        <li class="nav-item">
                            <a href="{{ route('payments.index') }}" class="nav-link">
                                <i class="ph-note-pencil"></i>
                                <span>المدفوعات</span>
                            </a>
                        </li>

                        <!-- Templates -->
                        <li class="nav-item">
                            <a href="{{ route('templates.index') }}" class="nav-link">
                                <i class="ph-text-aa"></i>
                                <span>القوالب</span>
                            </a>
                        </li>
                        <!-- template_fields -->
                        <li class="nav-item">
                            <a href="{{ route('template_fields.index') }}" class="nav-link">
                                <i class="ph-text-aa"></i>
                                <span>حقول القوالب</span>
                            </a>
                        </li>

                        <!-- Settings -->
                        <li class="nav-item">
                            <a href="{{ route('admin.settings.index') }}" class="nav-link">
                                <i class="ph-text-aa"></i>
                                <span>الإعدادت</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">
                <!-- Page header -->
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">


                            <a href="#page_header"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>


                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                                        class="ph-house"></i></a>

                                <span class="breadcrumb-item active">@yield('title')</span>
                            </div>

                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- /main content -->

    </div>
</body>

</html>
