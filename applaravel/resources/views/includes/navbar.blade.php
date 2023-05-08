<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL::to('pet') }}">
          <img src="https://images.vexels.com/media/users/3/235658/isolated/preview/ab14b963565a4c5ab27169d90c341994-silueta-animales-21.png" width="30" height="30" class="d-inline-block align-top" >
            Pets Web
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item">
            <a class="nav-link " href="{{ URL::to('pet') }}">Pets</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('owner') }}">Owners</a>
            </li>

        </ul>
        </div>
    </div>
</nav>
