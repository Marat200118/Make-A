@extends('layouts.public')

@section('content')
<div class = "registration_container container">
    <div class="jumbotron text-left">
        <h2>Darba devēja profils</h2>
      </div>
      </div>

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-default" href="#">Mans profils</button>
                    <button type="button" class="btn btn-default" href="#">Mainīt datus</button>
                    <button type="button" class="btn btn-default" href="#">Mani piedāvājumi</button>
                    <button type="button" class="btn btn-default" href="#">Saņemtās vēstules</button>
                  </div>

            </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>Personīgie dati</h3>
                    <h4>SIA Uzņēmums</h4> 
                    <h4>sazina@gmail.com</h4> 
                    <h4>12345678</h4> 
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="http://via.placeholder.com/330x250" />
                        <a href="£">
                            <button type="button" class="btn btn-default" href="#">Pievienot profila bildi</button>
                        </a>
                        <a href="/moderator/vacancy/create">
                            <button type="button" class="btn btn-default" href="">Pievienot darba sludinājumu</button>
                        </a>
                    </div>

    </div>
        <div class="alert alert-info">
            <strong>Informācijai!</strong> Šī lapa ir tikai prototips.
          </div>
@endsection