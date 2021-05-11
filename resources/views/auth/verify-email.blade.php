@extends('sb-admin/app')

@section('title', 'Verifikasi Email')
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
                    <h1 class="h4 text-gray-900 mb-4">Verify Email</h1>
                  </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success my-3">
                        A new email verification link has been emailed to you!
                    </div>
                @endif

                  <form class="user" method="POST" action="/email/verification-notification">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Kirim Ulang
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