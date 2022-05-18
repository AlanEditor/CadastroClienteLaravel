

    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top order-2 ">

      <div class="container-fluid">
        <a class="navbar-brand ms-sm-5" href="{{route('cadastro')}}">Cadastro de Clientes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse justify-content-end me-3 pe-5" id="navbarNavAltMarkup"> <!-- Start Menu -->
        <div class="navbar-nav">
          <a class="nav-link me-3 fs-5 ms-3 ms-sm-5 ms-lg-0" aria-current="page" href="{{route('cadastro')}}">Cadastro</a>
          <a class="nav-link me-3 fs-5 ms-3 ms-sm-5 ms-lg-0" href="{{route('listagem')}}">Listagem</a>
        </div>
      </div><!-- End Menu -->

    </nav>
