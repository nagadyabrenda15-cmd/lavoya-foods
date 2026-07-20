<ul class="sidebar-nav" style="background: #28a745;">
    <li class="nav-item">
      <a class="nav-link" href="admin">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
        </svg> Dashboard
      </a>
    </li>
    <li class="nav-title">Order Management</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('new-order')}}">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
        </svg> New Orders
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-chevron-bottom"></use>
        </svg>  All Orders
      </a>
      <ul class="collapse" id="ordersSubMenu">
        <li class="nav-item">
          <a class="nav-link" href="pending_orders.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-clock"></use>
            </svg> Pending Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="completed_orders.html">
            <svg class="nav-icon">
              <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-check"></use>
            </svg> Completed Orders
          </a>
        </li>
      </ul>
    </li>
    {{-- <li class="nav-title">Product Management</li>
    <li class="nav-item">
      <a class="nav-link" href="products.html">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-grid"></use>
        </svg> All Products
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_product.html">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
        </svg> Add Product
      </a>
    </li> --}}
    <li class="nav-title">User Management</li>
    <li class="nav-item">
      <a class="nav-link" href="customers.html">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-people"></use>
        </svg> All Users
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_customer.html">
        <svg class="nav-icon">
          <use xlink:href="assets/vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
        </svg> Add User
      </a>
    </li>
    <!-- Add more modules as per your requirements -->
  </ul>