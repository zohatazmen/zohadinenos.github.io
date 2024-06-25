<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') | Zoha's Dinenos AdminPanel</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/logo/01.svg') }}">

    <!-- *************
   ************ CSS Files *************
  ************* -->
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ url('backend/fonts/icomoon/style.css') }}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('backend/css/main.min.css') }}" />

    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ url('backend/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <!-- Sidebar wrapper start -->
            <nav id="sidebar" class="sidebar-wrapper">

                <!-- App brand starts -->
                <div class="app-brand"
                    style="display: flex; justify-content: center; align-items: center; padding: 16px;">
                    <a href="admin">
                        <img src="{{ url('frontend/images/logo/01.svg') }}" style="max-height: 100px; max-width: 500px;"
                            class="logo" alt="Bootstrap Gallery" />
                    </a>
                </div>
                <!-- App brand ends -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="{{ Request::is('admin') ? 'active current-page' : '' }}">
                            <a href="{{ url('admin') }}">
                                <i class="icon-stacked_line_chart"></i>
                                <span class="menu-text">Support Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview {{ Request::is('admin/register', 'admin/admins-list') ? 'active' : '' }}">
                            <a href="#!\">
                                <i class="icon-lock"></i>
                                <span class="menu-text">Authentication</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/register') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/register') }}">Add an Admin</a>
                                </li>
                                <li class="{{ Request::is('admin/admins-list') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/admins-list') }}">Admin List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview {{ Request::is('admin/team', 'admin/team-add') ? 'active' : '' }}">
                            <a href="#!\">
                                <i class="icon-support_agent"></i>
                                <span class="menu-text">Team Management</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/team') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/team') }}">Team</a>
                                </li>
                                <li class="{{ Request::is('admin/team-add') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/team-add') }}">Add a Team Member</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview {{ Request::is('admin/projects', 'admin/project-add') ? 'active' : '' }}">
                            <a href="#!\">
                                <i class="icon-book-open"></i>
                                <span class="menu-text">Project Management</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/projects') }}">Projects</a>
                                </li>
                                <li class="{{ Request::is('admin/project-add') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/project-add') }}">Add Projects</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview {{ Request::is('admin/orders', 'admin/order-add') ? 'active' : '' }}">
                            <a href="#!\">
                                <i class="icon-add_task"></i>
                                <span class="menu-text">Order Management</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/orders') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/orders') }}">Orders</a>
                                </li>
                                <li class="{{ Request::is('admin/order-add') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/order-add') }}">Add Orders</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="treeview {{ Request::is('admin/reservations', 'admin/reservations/create') ? 'active' : '' }}">
                            <a href="#!">
                                <i class="icon-calendar"></i>
                                <span class="menu-text">Reservation Management</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/reservations') ? 'active' : '' }}">
                                    <a href="{{ route('admin.reservations.index') }}">Reservations</a>
                                </li>
                                <li class="{{ Request::is('admin/reservations/create') ? 'active' : '' }}">
                                    <a href="{{ route('admin.reservations.create') }}">Add a Reservation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview {{ Request::is('admin/faqs', 'admin/faq-add') ? 'active' : '' }}">
                            <a href="#!">
                                <i class="icon-message-circle"></i>
                                <span class="menu-text">FAQs Management</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/faqs') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/faqs') }}">FAQs</a>
                                </li>
                                <li class="{{ Request::is('admin/faq-add') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/faq-add') }}">Add FAQ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview {{ Request::is('admin/menus', 'admin/menus/add') ? 'active' : '' }}">
                            <a href="#!">
                                <i class="icon-check-circle"></i>
                                <span class="menu-text">Menu Management</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/menus') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/menus') }}">Menus</a>
                                </li>
                                <li class="{{ Request::is('admin/menus/add') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/menus/add') }}">Add Menu</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/contactmanagement') ? 'active' : '' }}">
                            <a href="{{ url('/admin/contactmanagement') }}">
                                <i class="icon-grid_on"></i>
                                <span class="menu-text">Contact Management</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/reservationformmanagement') ? 'active' : '' }}">
                            <a href="{{ url('/admin/reservationformmanagement') }}">
                                <i class="icon-layers"></i>
                                <span class="menu-text">Reservation form Manage</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/logout') }}">
                                <i class="icon-sentiment_satisfied_alt"></i>
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('') }}">
                                <i class=""></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>

            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                <div class="app-header d-flex align-items-center">

                    <!-- Toggle buttons start -->
                    <div class="d-flex">
                        <button class="btn btn-outline-light toggle-sidebar" id="toggle-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                        <button class="btn btn-outline-light pin-sidebar" id="pin-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                    <!-- Toggle buttons end -->

                    <!-- Search container start -->
                    <div class="search-container d-sm-block d-none mx-3">
                        <input type="text" class="form-control" placeholder="Search" />
                        <i class="icon-search"></i>
                    </div>
                    <!-- Search container end -->


                    <!-- App header actions start -->
                    <div class="header-actions">
                    </div>
                    <div class="dropdown ms-2">
                        <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Zoha Tazmen</span>
                            <img src="{{ url('backend/anidp.jpg') }}" class="img-3x m-2 me-0 rounded-3"
                                alt="Bootstrap Gallery" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
                            <a class="dropdown-item d-flex align-items-center py-2" href="/admin/admins-list"><i
                                    class="icon-gitlab fs-4 me-3"></i>Admins</a>
                            <a class="dropdown-item d-flex align-items-center py-2" href="admin/login"><i
                                    class="icon-log-out fs-4 me-3"></i>Logout</a>
                        </div>
                    </div>
                </div>
                <!-- App header actions end -->
            </div>
            <!-- App header ends -->
            <script src="{{ url('backend/js/jquery.min.js') }}"></script>
            <script src="{{ url('backend/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ url('backend/js/custom.js') }}"></script>
