@extends('layouts.public')

@section('content')

<!--Starts darba sludinajums-->
            <div class="background">
              <h1 class="Darba_sludinājums">Darba sludinājums</h1>
              <!--<<img class="wish_logo" src="img/wish.jpg" alt="wish logo">-->
              <div style="display:inline-block;vertical-align:top;">
                <div class="wish_logo"></div>
              </div>
              <div style="display:inline-block;">
                  <div><h2 class="Darba_amata_nosaukums">{{ $vacancy->name }}</h2></div>
                  <div><h2 class="Atrašanās_vieta">{{ $vacancy->location }}</h2></div>
              </div>
              <hr class = "line">
              <p class="Darba_amata_apraksts">{{ $vacancy->description }}</p>
              <hr class = "line">

              <div class="btn">
                <form method="POST" action="{{ url('/moderator/application') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                <div>
                    {{ csrf_field() }}
                <input class="form-control" name="vacancy_id" type="hidden" id="vacancy_id" value="{{ $vacancy->id }}" >
                <input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ Auth::id() }}" >
                <textarea name="description" id="comments" class="comments">Kāpēc vēlies peiteikties ?</textarea>
                </div>
                <input type="submit" value="Pieteikties" >
                </form>

<!--                 <form action="/action_page.php">
                  <input type="file" id="myFile" name="filename">
                  <input type="submit" value="Nosūtīt" >
                </form> -->

              </div>
            </div>
@endsection
