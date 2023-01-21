<section class="product-grid flex-row-center">
    <div class="container">
        <div class="banner-title">
            CURRENT SERIES
        </div>
        <div class="card-container flex-row-center">
            @foreach ($comics as $item)
                <div class="card">
                    <a class="flex-column-center" href="{{ route('comics.show', ['comic' => $item->id]) }}">
                        <div class="card-cover">
                            <img src="{{ $item->thumb }}" alt="{{ $item->title }}">
                        </div>
                        <div class="card-title">
                            <p>{{ $item->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button>LOAD MORE</button>
    </div>
</section>
