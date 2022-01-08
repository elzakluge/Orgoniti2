<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main" data-color="purple" >
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item {{ Request::is('categories') ? 'active bg-gradient-primary':'' }}">
        <a class="nav-link text-white" href="{{ url('categories') }}">
            <i class="material-icons">table_view</i>
          <span class="nav-link-text ms-1">Categories</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-category') ? 'active bg-gradient-primary':'' }}">
        <a class="nav-link text-white " href="{{ url('add-category') }}">
            <i class="material-icons">table_view</i>
          <span class="nav-link-text ms-1">Add Category</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('products') ? 'active bg-gradient-primary':'' }}">
        <a class="nav-link text-white " href="{{ url('products') }}">
            <i class="material-icons">table_view</i>
          <span class="nav-link-text ms-1">Products</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-products') ? 'active bg-gradient-primary':'' }}">
        <a class="nav-link text-white " href="{{ url('add-products') }}">
            <i class="material-icons">table_view</i>
          <span class="nav-link-text ms-1">Add Products</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('users') ? 'active bg-gradient-primary':'' }}">
        <a class="nav-link text-white " href="{{ url('users') }}">
            <i class="material-icons">table_view</i>
          <span class="nav-link-text ms-1">Users</span>
        </a>
      </li>
      
    </ul>
  </div>
</aside>
