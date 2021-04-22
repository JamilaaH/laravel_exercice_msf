<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('batiment')}}>Batiment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('formation')}}>Formations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('typeformation')}}>Types de formations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('eleve')}}>Eleves</a>
            </li>
        </ul>
            <div class="nav-item ml-auto">
                <a class="nav-link" href={{route('admin')}}>Admin</a>
            </div>
    </div>
</nav>
