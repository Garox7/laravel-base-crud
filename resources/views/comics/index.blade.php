@extends('layouts.base')

@section('content')
    <section class="comic-section container">
        <div class="row g-3">
            @foreach ($comics as $comic)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
