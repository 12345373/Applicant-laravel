<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.shared.head')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.06);
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .btn-primary {
            border-radius: 0.5rem;
            padding: 0.6rem;
            font-weight: 600;
        }

        .logo img {
            height: 40px;
        }

        .credits {
            font-size: 13px;
            color: #6c757d;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block ms-2">NiceAdmin</span>
                                </a>
                            </div>

                            <div class="card w-100 mb-3">
                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text">@</span>
                                                <input type="email" name="email" class="form-control" id="yourUsername" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="d-grid mb-3">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                        </div>

                                        <div class="text-center">
                                            <p class="small mb-1">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
                                            <p class="small mb-0"><a href="{{ route('password.request') }}">Forgot your password?</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits text-center">
                                Designed by <a href="#">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @include('admin.shared.script')
</body>

</html>
