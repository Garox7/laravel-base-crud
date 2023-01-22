<section class="create-form">
    <div class="form-container flex-column-center">
        <h1 >CREATE YOUR COMIC</h1>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf()
            <div>
                <input type="text" id="titleInput" name="title" class="input-form">
                <label for="titleinput">Inserisci il titolo del fumetto</label>
            </div>

            <div>
                <input type="number" id="price" name="price" class="input-form">
                <label for="price">Inserisci il prezzo</label>
            </div>

            <div>
                <input type="text" id="series" name="series" class="input-form">
                <label for="series">Specifica la serie</label>
            </div>

            <div>
                <input type="text" id="type" name="type" class="input-form">
                <label for="type">Specifica il tipo di fumetto</label>
            </div>

            <div>
                <textarea name="description" id="textarea" cols="30" rows="5" class="input-form"></textarea>
                <label for="textarea">Aggiungi una descrizione</label>
            </div>
            <input type="submit" value="Crea il fumetto!">
        </form>
    </div>
</section>
