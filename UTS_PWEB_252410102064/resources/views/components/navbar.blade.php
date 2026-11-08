
<nav class="navbar">
    <div class="container">
        <a href="/" class="navbar-brand">Smart Library</a>

        <a class="nav-link" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>

        <a class="nav-link" href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan Buku</a>

        <a class="nav-link" href="{{ route('profile', ['username' => $username]) }}">Profile</a>

        <a class="nav-link" href="{{ route('login') }}">Logout</a>
    </div>
</nav>
