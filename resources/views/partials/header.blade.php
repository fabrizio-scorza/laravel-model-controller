<header>
    <div class="container">
        <nav class="d-flex justify-content-between pt-4">
            <h3>Belli Film</h3>
            <ul class="d-flex gap-5">
                <li>
                    {{-- link che con il metodo route si collega alla pagina home --}}
                    <a class="link-success" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    {{-- link che con il metodo route si collega alla pagina comics --}}
                    <a class="link-success" href="{{ route('movies') }}">Movies</a>
                </li>                
            </ul>
        </nav>
    </div>

</header>