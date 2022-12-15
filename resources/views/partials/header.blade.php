<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
            <ul>
                <li><a href="{{ route("home")}}">home</a></li>
                <li><a href="{{ route("charachters")}}">characters</a></li>
                <li><a href="{{ route("comics")}}">comics</a></li>
                <li><a href="{{ route("movies")}}">home</a></li>
                <li><a href="{{ route("tv")}}">tv</a></li>
                <li><a href="{{ route("games")}}">games</a></li>
                <li><a href="{{ route("collectibles")}}">collectibiels</a></li>
                <li><a href="{{ route("video")}}">videos</a></li>
                <li><a href="{{ route("fans")}}">fans</a></li>
                <li><a href="{{ route("news")}}">news</a></li>
                <li><a href="{{ route("shop")}}">shop</a></li>
            </ul>
    </div>
    <div class="jumbo-container">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
       
</header>