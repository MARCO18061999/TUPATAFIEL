<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TU PATA FIEL</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        &nbsp;&nbsp;
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Inicio</a>
                </li>
                &nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="#">Almacen</a>
                </li>
                &nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ingreso_menu" data-bs-toggle="dropdown" aria-expanded="false">Ingreso</a>
                    <ul class="dropdown-menu" aria-labelledby="ingreso_menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                &nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="salida_menu" data-bs-toggle="dropdown" aria-expanded="false">Salida</a>
                    <ul class="dropdown-menu" aria-labelledby="salida_menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                &nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="reportes_menu" data-bs-toggle="dropdown" aria-expanded="false">Reportes</a>
                    <ul class="dropdown-menu" aria-labelledby="reportes_menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                &nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="#">Cuenta</a>
                </li>
                &nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ajustes_menu" data-bs-toggle="dropdown" aria-expanded="false">Ajustes</a>
                    <ul class="dropdown-menu" aria-labelledby="ajustes_menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <button class="btn btn-outline-success" type="submit">Cerrar Sesion</button> -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Salir</button>
        </div>
    </div>
</nav>
<!-- ventanas -->
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Cerrar Sesion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Está seguro de salir?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>