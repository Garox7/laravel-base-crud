<header>
    <div class="header-container">
        <div class="header-navigation">
            <a href="/" class="header-logo-link">
                <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
            </a>
            <nav>
                <ul>
                    @foreach ($menu as $item)
                    <li>
                        <a href="{{ route('comics.index') }}" class="header-link">
                            {{ $item['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>

        <div class="header-controller">
            <div class="header-search">
                <button class="flex-row-center" id="header-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <form action="" class="hidden" id="header-search-input">
                    <label for="search">Search:</label>
                    <input type="search" name="search">
                </form>
            </div>
            <div class="header-login">
                <button>SIGN UP</button>
                <button>LOG IN</button>
            </div>
        </div>
    </div>
</header>
