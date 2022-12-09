<div class="col-md-8">
    <!-- Widget: user widget style 2 -->
    <div class="card card-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-orange">
        <!-- /.widget-user-image -->
        <h5 class="widget-user-desc">{{$peticion['titulo']}}</h5>
      </div>
      <div class="card-footer p-0">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Contenido <span class="float-right badge bg-primary">{{$peticion['contenido']}}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              Estado <span class="float-right badge bg-info">{{$peticion['status']}}</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
