@extends('layouts.public')

@section('content')


          <div class="background">
            <br>
            <h1 class="Darba_sludinājumi">Darba sludinājumi</h1>
          <!---search bar--->
            <br>
            <br>
            <div class="search-job text-center">
            <input type="text" class="form-control" placeholder="Atslēgas vārds">
            <input type="text" class="form-control" placeholder="Uzņēmums">
            <input type="text" class="form-control" placeholder="Atrašanās vieta">
            <input type="text" class="form-control" placeholder="Kategorija">
            <input type="button" class="btn btn-primary" value="Meklēt">
            </div>
            <!--Jobs------------------>
            <section id="jobs">
            <div class="container">

            @foreach($vacancy as $item)
                <!---1job---->
                <div class="company-details">
                  <div class="job-update">
                    <h4><b>{{ $item->name }}</b></h4>
                    <p>{{ $item->description }}</p>
                    <i class="fas fa-briefcase"></i><span> {{ $item->time }}</span><br>
                    <i class="fas fa-euro-sign"></i><span> {{ $item->salary }}</span><br>
                    <i class="fas fa-map-marker-alt"></i><span> {{ $item->location }} </span><br>
                    <i class="fas fa-star"></i><span> {{ $item->points }} points</span><br>
                    <p>Prasmes <i class = "fas fa-angle-double-right"></i><small>Komandas orientēts</small><small>HTML, CSS</small><small>Komunikācija</small><small>Laba humora izjūta</small></p>
                    <p>Pienākumi <i class = "fas fa-angle-double-right"></i> Mēs meklējam uzticamu komandas biedru, kurš ir gatavs uzņemties un izdarīt vairāk nekā citi, kā arī zināt jaunākos... <a href="#">Lasīt vairāk</a></p>
                  </div>
                  <div class="apply-btn">
                    <a href="{{ url('/moderator/vacancy/' . $item->id) }}">
                      <button type="button" class="btn btn-primary">Pieteikties</button>
                    </a>
                    <form method="POST" action="{{ url('/moderator/vacancy' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="." onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                  </div>
                </div>
            @endforeach


<!--     <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Vacancy</div>
                    <div class="card-body">
                        <a href="{{ url('/moderator/vacancy/create') }}" class="btn btn-success btn-sm" title="Add New Vacancy">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/moderator/vacancy') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Name</th><th>Description</th><th>Time</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vacancy as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->description }}</td><td>{{ $item->time }}</td>
                                        <td>
                                            <a href="{{ url('/moderator/vacancy/' . $item->id) }}" title="View Vacancy"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/moderator/vacancy/' . $item->id . '/edit') }}" title="Edit Vacancy"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/moderator/vacancy' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vacancy" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $vacancy->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
