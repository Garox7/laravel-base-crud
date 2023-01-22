<section class="create-form">
    <div class="container flex-column-center">
        <div class="banner-title">
            CREATE A COMIC
        </div>
        <div class="container">
            <h1>CREATE YOUR COMIC</h1>
            <form action="{{ route('comics.store') }}" method="post">
                @csrf()
                <div>
                    <label for="titleInput"></label>
                    <input type="text" id="titleInput" name="title" placeholder="Comic Title">
                </div>

                <div>
                    <label for="thumb">thumb</label>
                    <input type="text" id="thumb" name="thumb" placeholder="Comic Title">
                    {{-- <input type="file" name="thumb" id="thumb"> --}}
                </div>

                <div>
                    <label for="price">price</label>
                    <input type="number" id="price" name="price" placeholder="Add Price">
                </div>

                <div>
                    <label for="series">series</label>
                    <input type="text" id="series" name="series" placeholder="Comic Series">
                </div>

                <div>
                    <label for="date">data</label>
                    <input type="date" id="date" name="sale_date" placeholder="Comic Series">
                </div>

                <div>
                    <label for="type">type</label>
                    <input type="text" id="type" name="type" placeholder="Comic Series">
                </div>

                <div>
                    <label for="titleInput"></label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Crea">
            </form>
        </div>
    </div>
</section>
