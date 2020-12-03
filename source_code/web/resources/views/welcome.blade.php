@extends('layouts.public')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class = "registration_container container">
      <div class = "main_text_row row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="registreties">Reģistrēties</h1>
        </div>
      </div>
      <div class="buttons_row row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 button_b">
          <a href="profile_student.html">
            <button type="button" class="btn btn-light">Darba Meklētājs</button>
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 button_b">
          <a href="darba_d.html">
            <button type="button" class="btn btn-light">Darba Devējs</button>
          </a>
        </div>
      </div>
    </div>
    <div class="content container">
      <a class="lorem"></a>
    </div>

@endsection
