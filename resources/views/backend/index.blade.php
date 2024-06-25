@extends('backend.layouts.main')
@section('title', 'Dashboard')
@section('main-container')
    <!-- App body starts -->
    <div class="app-body">
        <!-- Container starts -->
        <div class="container-fluid">
            <!-- Row start -->
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape1.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-lock"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalAdmins }}</h3>
                                    <h6 class="m-0 fw-light">Total Admins</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-support_agent"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalTeams }}</h3>
                                    <h6 class="m-0 fw-light">Total Team Members</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape3.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-book-open"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalOrders }}</h3>
                                    <h6 class="m-0 fw-light">Total Orders</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape4.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-book"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalProjects }}</h3>
                                    <h6 class="m-0 fw-light">Total Projects</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape5.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-calendar"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalReservations }}</h3>
                                    <h6 class="m-0 fw-light">Total Reservations</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape6.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-message-circle"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalFaqs }}</h3>
                                    <h6 class="m-0 fw-light">Total FAQs</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape3.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-check-circle"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalMenus }}</h3>
                                    <h6 class="m-0 fw-light">Total Menus</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
                                <div class="position-relative shape-block">
                                    <img src="backend/images/shape4.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                                    <i class="icon-grid_on"></i>
                                </div>
                                <div class="ms-2">
                                    <h3 class="m-0 fw-semibold">{{ $totalContacts }}</h3>
                                    <h6 class="m-0 fw-light">Total Contacts</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Container ends -->
    </div>
    <!-- App body ends -->
@endsection
