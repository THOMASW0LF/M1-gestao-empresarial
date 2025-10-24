<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Gestão Empresarial</a>

        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.produtos.index') }}">Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.login') }}">Área Admin</a></li>
        </ul>
    </div>
</nav>
