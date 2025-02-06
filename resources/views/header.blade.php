<nav class="navbar">
    <div class="flex">
        <div class="logo">
            <a href="{{route('home')}}"><img src="" alt="logo"></a>
        </div>
        <div class="link">
            <a href="{{route('about')}}">tentang kami</a>
            <a href="{{route('dokumentasi.show')}}">Dokumentasi</a> 
            <a href="{{route('program')}}">program</a>
        </div>
        @auth
            <div>
                <p>{{ Auth::user()->name }}</p>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button>out</button>
                </form>
            </div>
        @endauth
    </div>
</nav>