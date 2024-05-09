@extends('layout.app')

@section('content')
    <main>
        <h1>Sito di anto</h1>
        <div class="container">
            <div class="row">

                @foreach ($movies as $movie)
                    <div class="col-md-4 g-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Title : </strong>{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><strong>Movie's leanguage:
                                    </strong>{{ $movie->original_title }}</h6>
                                <p class="card-text"><strong>Nationality: </strong>{{ $movie->nationality }}</p>
                                <p class="card-text"><strong>Vote: </strong>{{ $movie->vote }}</p>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </main>
@endsection
