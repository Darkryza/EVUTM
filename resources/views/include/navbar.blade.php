<nav>
    <a href="#">
        <img src="{{ asset('images/UTM-LOGO-FULL.png') }}" class="logo">
    </a>
    <ul class="nav-links">
        @if (auth())
        <li><a href="/home">Dashboard</a></li>
        @else
        <li><a href="/login">LOGIN</a></li>
        <li><a href="/register">REGISTER</a></li>
        @endif
    </ul>
</nav>