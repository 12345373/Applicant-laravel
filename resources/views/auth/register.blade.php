<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Modern Design</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-hover: #4f46e5;
            --secondary-color: #f1f5f9;
            --text-color: #334155;
            --light-text: #94a3b8;
        }

        body {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            height: 100vh;
        }

        .register-container {
            max-width: 1000px;
            margin: 0 auto;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }

        .register-banner {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            padding: 0;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .banner-content {
            padding: 3rem;
            position: relative;
            z-index: 2;
        }

        .banner-pattern {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60%;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,.1)' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.6;
            z-index: 1;
        }

        .steps-container {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 1rem;
            position: relative;
        }

        .step::after {
            content: '';
            position: absolute;
            top: 25px;
            right: -50%;
            width: 100%;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.3);
            z-index: 1;
        }

        .step:last-child::after {
            display: none;
        }

        .step-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .step.active .step-number {
            background-color: white;
            color: var(--primary-color);
        }

        .step-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .step.active .step-label {
            color: white;
            font-weight: bold;
        }

        .form-container {
            background-color: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-floating .form-control {
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            padding: 1rem 1rem;
            height: calc(3.5rem + 2px);
        }

        .form-floating .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-floating label {
            padding: 1rem;
            color: var(--light-text);
        }

        .btn-register {
            background-color: var(--primary-color);
            border: none;
            border-radius: 10px;
            padding: 1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.3);
        }

        .logo {
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-right: 0.5rem;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .separator {
            margin: 1.5rem 0;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--light-text);
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }

        .separator::before {
            margin-right: 1rem;
        }

        .separator::after {
            margin-left: 1rem;
        }

        .social-register {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background-color: var(--secondary-color);
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--light-text);
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 2rem;
            font-size: 0.8rem;
            color: var(--light-text);
            text-align: center;
        }

        .alert-danger {
            border-radius: 10px;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        @if ($errors->any())
        <div class="alert alert-danger position-absolute top-0 start-50 translate-middle-x mt-4 px-4 py-3" style="border-radius: 10px; z-index: 1000; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="register-container row m-0">
            <div class="col-md-6 p-0 d-none d-md-block">
                <div class="register-banner">
                    <div class="banner-pattern"></div>
                    <div class="banner-content">
                        <h2 class="fw-bold mb-4">Join Our Community</h2>
                        <p class="mb-5">Create your account and start your journey with us today.</p>

                        <div class="steps-container">
                            <div class="step active">
                                <div class="step-number">1</div>
                                <div class="step-label">Sign Up</div>
                            </div>
                            <div class="step">
                                <div class="step-number">2</div>
                                <div class="step-label">Profile</div>
                            </div>
                            <div class="step">
                                <div class="step-number">3</div>
                                <div class="step-label">Explore</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-5">
                            {{-- <div class="bg-white rounded-circle p-2 me-3">
                                <img src="/api/placeholder/40/40" alt="User" class="rounded-circle">
                            </div> --}}
                            <div>
                                <p class="mb-0 fw-bold">Team SW2</p>
                                <p class="mb-0 small">Digital Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 form-container">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="logo-text">Alaa anwar</div>
                </div>

                <h3 class="mb-4 fw-bold text-center">Create an Account</h3>
                <p class="text-center text-muted mb-4">Fill out the form below to get started</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name" required>
                        <label for="floatingName"><i class="fa-regular fa-user me-2"></i>Full Name</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Email" required>
                        <label for="floatingEmail"><i class="fa-regular fa-envelope me-2"></i>Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword"><i class="fa-solid fa-lock me-2"></i>Password</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirmation" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password" required>
                        <label for="floatingConfirmPassword"><i class="fa-solid fa-shield-halved me-2"></i>Confirm Password</label>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" style="color: var(--primary-color);">Terms of Service</a> and <a href="#" style="color: var(--primary-color);">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-register btn-primary w-100 py-3">
                        Create Account <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>
                </form>

                <div class="separator">Or sign up with</div>

                <div class="social-register">
                    <a href="#" class="social-btn">
                        <i class="fa-brands fa-google fs-5"></i>
                    </a>
                    <a href="#" class="social-btn">
                        <i class="fa-brands fa-facebook-f fs-5"></i>
                    </a>
                    <a href="#" class="social-btn">
                        <i class="fa-brands fa-apple fs-5"></i>
                    </a>
                </div>

                <div class="login-link">
                    Already have an account? <a href="{{ route('login') }}">Sign in</a>
                </div>

                <div class="footer">
                    &copy; 2025 Alaa anwar - All Rights Reserved
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
