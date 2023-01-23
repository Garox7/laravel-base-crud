<section class="create-form">
    <div class="form-container flex-column-center">
        <h1 >CREA IL TUO FUMETTO</h1>
        <form action="{{ route('comics.update', ['comic' => $comic]) }}" method="post">
            @csrf()
            @method('put')
            <div>
                <input type="text" id="titleInput" name="title" class="input-form has-text" value="{{ $comic->title }}">
                <label for="titleinput">Inserisci il titolo</label>
            </div>

            <div>
                <input type="number" id="price" name="price" class="input-form has-text" value="{{ $comic->price }}">
                <label for="price">Inserisci il prezzo</label>
            </div>

            <div>
                <input type="text" id="series" name="series" class="input-form has-text" value="{{ $comic->series }}">
                <label for="series">Specifica la serie</label>
            </div>

            <div>
                <input type="text" id="type" name="type" class="input-form has-text" value="{{ $comic->type }}">
                <label for="type">Specifica il tipo di fumetto</label>
            </div>

            <div>
                <textarea name="description" id="textarea" cols="30" rows="5" class="input-form has-text">{{ $comic->description }}</textarea>
                <label for="textarea">Aggiungi una descrizione</label>
            </div>
            <input type="submit" value="Applica modifiche">
        </form>
    </div>
</section>
