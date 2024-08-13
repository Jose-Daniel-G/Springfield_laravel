
<div class="offcanvas offcanvas-start " tabindex="-1" id="sidebar">
  <div class="offcanvas-header p-4">
      <h5 class="offcanvas-title">Sidebar</h5>
      <button type="button" class="btn-close text-reset" data-bs-dimiss="offcanvas"
          aria-label="Close"></button>
  </div>
</div>
<div class="offcanvas-body">

  <ul class="list-group">
      <li class="list-group-item">
        <a class="nav-link active" href="{{ route('home') }}">
        <i class="fas fa-home"></i>Home - Dashboard</a></li>
      <li class="list-group-item">
        <a class="nav-link active" href="{{ route('post') }}">
             Noticias
        </a>
      </li>
      <li class="list-group-item">
        <a class="nav-link" href="{{ route('categories') }}">
          Categories
        </a>
      </li>
      <li>
       

  </ul>
</div>
