<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Area | {{ config('app.name') }}</title>
    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="{{ url('frontend/images/logo/01.svg') }}" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('backend/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/css/main.min.css') }}" />
</head>

<body class="bg-one">
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <p>{{ session()->get('error') }}</p>
                    </div>
                @endif
                <form class="my-5" method="post" action="{{ url('/admin/login') }}">
                    @csrf
                    <div class="card p-md-4 p-sm-3">
                        <div class="login-form">
                            <div class="app-brand"
                                style="display: flex; justify-content: center; align-items: center; padding: 16px;">
                                <a href="">
                                    <img src="{{ url('frontend/images/logo/01.svg') }}"
                                        style="max-height: 150px; max-width: 500px;" class="logo"
                                        alt="Bootstrap Gallery" />
                                </a>
                            </div>

                            <h3 class="mt-5 mb-4">Login</h3>
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input type="text" class="form-control" name="email"
                                    placeholder="Enter your email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter password" />
                            </div>

                            <div class="d-grid py-3 mt-3">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    LOGIN
                                </button>
                            </div>
                        </div>
                    </div>


                    </ul>
            </div>



            </form>
            <center style="margin-top:20px;">
                <a class="mb-4 text-info" href="{{ url('/') }}">Back to Home</a>
            </center>
        </div>
    </div>
    </div>
    <!-- Container end -->
</body>

</html>
