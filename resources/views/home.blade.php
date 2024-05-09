@extends('layout.app')

@section('content')
    <main>
        <section class="jumbo">
            <div class="container py-4">
                <div class="row row row-cols-1 row-cols-md-3 g-4">
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
        </section>
        <section>
            <div class="container text-center">
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In eveniet voluptate itaque, odit
                    reprehenderit assumenda, vero tempore fugiat eligendi quasi nesciunt ipsam ducimus obcaecati soluta?
                    Autem sint consectetur similique consequuntur. </h3>
            </div>
        </section>
        <section>
            <div class="container py-3">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Lorem, ipsum dolor.</div>
                            <div class="card-body">
                                <p>TLorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                                    eveniet aut ab nobis voluptatibus inventore autem? Aut possimus perspiciatis rerum ab?
                                    Aliquid consequuntur in aliquam. Ullam tempora fugit quo alias?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Lorem, ipsum dolor.</div>
                            <div class="card-body">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                                    eveniet aut ab nobis voluptatibus inventore autem? Aut possimus perspiciatis rerum ab?
                                    Aliquid consequuntur in aliquam. Ullam tempora fugit quo alias?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Lorem, ipsum dolor.</div>
                            <div class="card-body">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                                    eveniet aut ab nobis voluptatibus inventore autem? Aut possimus perspiciatis rerum ab?
                                    Aliquid consequuntur in aliquam. Ullam tempora fugit quo alias?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
