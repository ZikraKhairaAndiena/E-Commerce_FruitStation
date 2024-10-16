@extends('customer.layouts.main')

@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                        style="width: 185px;" alt="logo">
                                </div>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <p>Please login to your account</p>

                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email Address" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                                        <label class="form-label">Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                                        <label class="form-label">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button type="submit" class="btn btn-primary btn-block fa-lg mb-3"
                                            style="background: linear-gradient(to right, #ff416c, #ff4b2b); border: none; border-radius: 30px; padding: 10px 20px;">
                                            Log in
                                        </button>
                                        {{-- <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a> --}}
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <a href="{{ route('register') }}" class="btn btn-outline-danger" style="border-radius: 30px;">
                                            Create New
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
