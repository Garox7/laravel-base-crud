<section class="product-single">

    @if(session('create_success'))
        <div class="alert-succes">
            {{session('create_success')}}
        </div>
    @endif

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
            <div class="control-button flex-row-center">
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                    <button class="edit-button">Modifica</button>
                </a>
                <button class="delete-button">Elimina</button>
            </div>
        </div>
        <div class="advertisement flex-column-center">
            <span>ADVERTISEMENT</span>
            <img src="{{ asset('images/adv.jpg') }}" alt="advertisment">
        </div>
    </div>

    <div class="delete-popup-backdrop flex-row-center hidden">
        <div class="popup-container">
            <h2>Sei sicuro di voler eliminare l'elemento?</h2>
            <p>L'azione è irreversibile</p>
            <div class="confirm-button-container flex-column-center">
                <button class="cancel-button">Annulla</button>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="confirm-button">Conferma</button>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- <script src="{{ asset('js/partials/product_single.js') }}"></script> --}}
