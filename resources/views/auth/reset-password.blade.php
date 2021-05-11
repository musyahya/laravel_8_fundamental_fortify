@extends('sb-admin/app')

@section('title', 'Reset Password')
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
                    <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  </div>
                  <form class="user" method="POST" action="/reset-password">
                    @csrf
                    <input type="hidden" name="token" value="{{request()->route('token')}}">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{request()->email}}">
                      @error('email')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Repeat Password" name="password_confirmation">
                        @error('password')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Reset
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection