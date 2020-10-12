@extends('admin-layout.app')

<section id="regestration">
    <div class="container-fluid">
      <div class="row full-height-vh m-0">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <div class="card">
            <div class="card-content">
              <div class="card-body register-img">
                <div class="row m-0">
                  <div class="col-lg-6 d-none d-lg-block py-2 text-center">
                    <img src="app-assets/img/gallery/register.png" alt="" class="img-fluid mt-3 pl-3" width="400"
                      height="230">
                  </div>
                  <div class="col-lg-6 col-md-12 px-4 pt-3 bg-white">
                    <h4 class="card-title mb-2">Create Account</h4>
                    <p class="card-text mb-3">
                      Fill the below form to create a new account.
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                        <input id="name" type="text" class="form-control mb-3  @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          <input id="email" type="email" class="form-control mb-3  @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm password" required autocomplete="new-password">
                        <div class="custom-control custom-checkbox custom-control-inline mb-3">
                          <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input mb-3 "
                            checked />
                          <label class="custom-control-label" for="customCheckboxInline1">
                            I accept the terms & conditions.
                          </label>
                        </div>
                        <div class="fg-actions d-flex justify-content-between">
                          <div class="login-btn">
                            <button class="btn btn-outline-primary">
                              <a href="{{url('/adminLogin')}}" class="text-decoration-none">
                                Back To Login
                              </a>
                            </button>
                      </div>
                      <div class="recover-pass">
                        <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <form method="POST" action="{{ route('register') }}"> --}}
    {{-- @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div> --}}
