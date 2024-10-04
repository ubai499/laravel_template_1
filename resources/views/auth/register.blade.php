@extends('layouts.app')

@section('content')
<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden m-0">
                        <div class="row justify-content-center g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">
                                    <div class="bg-overlay"></div>
                                    <div class="position-relative h-100 d-flex flex-column">
                                        <div class="mb-4">
                                            <a href="{{ url('/') }}" class="d-block">
                                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="18">
                                            </a>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="mb-3">
                                                <i class="ri-double-quotes-l display-4 text-success"></i>
                                            </div>

                                            <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner text-center text-white-50 pb-5">
                                                    <div class="carousel-item active">
                                                        <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h5 class="text-primary">Register Account</h5>
                                        <p class="text-muted">Get your Free Velzon account now.</p>
                                    </div>

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                                            @csrf

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                                    @error('password')
                                                    <div class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="password-confirm" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>

                                            <div class="mb-4">
                                                <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                            </div>

                                            <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                <h5 class="fs-13">Password must contain:</h5>
                                                <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">{{ __('Register') }}</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                                </div>

                                                <div>
                                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->
@endsection