<section class="product-single">
    <div class="container-sm flex-row-center">
        <div class="product-info">
            <h1>{{ $comic->title }}</h1>
            <div class="info-header flex-row-center">
                <div class="product-price flex-row-center">
                    <div class="info-left">
                        <span>U.S. Price:</span><span>${{ $comic->price }}</span>
                    </div>
                    <div class="info-right">
                        <span>AVAIABLE</span>
                    </div>
                </div>
                <div class="product-availability">
                    <select name="availability">
                        <option value="">Check Avayability</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <p class="description-text">{{ $comic->description }}</p>

            <div class="control-button">
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                    <button class="edit-button">Modifica</button>
                </a>
            </div>
        </div>
        <div class="advertisement flex-column-center">
            <span>ADVERTISEMENT</span>
            <img src="{{ asset('images/adv.jpg') }}" alt="advertisment">
        </div>
    </div>
</section>
