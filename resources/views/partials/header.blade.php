<header>
    <div class="container">
        <div class="left">
            <a href="">
                <img src="{{ asset('img/dc-logo.png') }}" alt="DC-LOGO">
            </a>
          
        </div>
        <div class="right">
            <ul>
                <li>
                    <a class="{{ (request()->is('characters')) ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a>
                </li>
                <li>
                    <a class="{{ (request()->is('comics')) ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
                </li>
                <li>
                    <a class="{{ (request()->is('movies')) ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a>
                </li>
                <li>
                    <a class="{{ (request()->is('tv')) ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
                </li>
                <li>
                    <a class="{{ (request()->is('games')) ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a>
                </li>
                <li>
                    <a class="{{ (request()->is('collectibles')) ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li>
                    <a class="{{ (request()->is('videos')) ? 'active' : '' }}" href="{{ route('videos') }}">VIDEOS</a>
                </li>
                <li>
                    <a class="{{ (request()->is('fans')) ? 'active' : '' }}" href="{{ route('fans') }}">FANS</a>
                </li>
                <li>
                    <a class="{{ (request()->is('news')) ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a>
                </li>
                <li>
                    <a class="{{ (request()->is('shop')) ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a>
                </li>
            </ul>
        </div>
    </div>
</header>