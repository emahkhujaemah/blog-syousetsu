<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="#">Syousetsu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active {{ ($title === "Home") }} " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "About") }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Blog") }}" href="/blog">Blog</a>
            </li>
            </ul>
        </div>
    </div>
</nav>