@extends('sb-admin/app')

@section('title', 'Forgot Password')
@section('bg-blue', 'bg-gradient-primary')

@section('body')
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>

                  @if (session('status'))
                        <div class="alert alert-success my-3">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form class="user" action="/forgot-password" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                      @error('email')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/register">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/login">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection