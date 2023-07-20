<header>
    <div class="container">
        <div class="d-flex">
            <div>
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC Logo">
            </div>
            <div>
                <nav>
                    <ul class="d-flex">
                        @foreach ($links as $link)
                        <li class="pe-2">
                            {{ $link['text'] }}
                            <div :class="link.active ? 'highlighted' : ''"></div>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>