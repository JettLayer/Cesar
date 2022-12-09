<div class="col-md-8">
    <!-- Widget: user widget style 2 -->
    <div class="card card-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-primary">
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="https://curioos.azureedge.net/content/files/Products/2155540/12748162/ProductZoom/63693746623" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">{{$usuario['name']}}</h3>
        <h5 class="widget-user-desc">{{$usuario['surname']}}</h5>
      </div>
      <div class="card-footer p-0">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Rol <span class="float-right badge bg-primary">{{$usuario['role']}}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              Email <span class="float-right badge bg-info">{{$usuario['email']}}</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
