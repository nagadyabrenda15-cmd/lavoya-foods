
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Lavoya Foods Admin Dashboard</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="assets/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="assets/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="assets/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="assets/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
<style>
    .icon-white {
        color: white;
        }

</style>
</head>
  <body>
    <div class="sidebar sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        
        <span style="color: green; font-weight: bold; font-size: 16px; text-transform: uppercase;" >Lavoya Foods</span>
        
      </div>
      {{-- sidebar --}}
      <!-- Sidebar Navigation -->
      @include('admin.layouts.sidebar')
      
    
      {{-- sidebar --}}
      {{-- <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button> --}}
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      @include('admin.layouts.top-header')
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Order History</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Payment Method</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customerOrders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-success" title="View">
                                                <i data-feather="eye" class="icon-white"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-info" title="Edit" style="margin-left: 5px;">
                                                <i data-feather="edit" class="icon-white"></i>
                                            </a>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this order?')" style="margin-left: 5px;">
                                                    <i data-feather="trash-2" class="icon-white"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                    </div>
                </div>
                
            </div>
            
              
              
         
          
          
        </div>
      </div>
      <footer class="footer">
        <div><a href="" style="text-decoration: none">&copy Copyright </a><a href="" style="text-decoration: none">Lavoya Foods Limited</a> © 20233 All Rights Reserved</div>
        
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

    <!-- CoreUI and necessary plugins-->
    <script src="assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="assets/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="assets/vendors/chart.js/js/chart.min.js"></script>
    <script src="assets/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="assets/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    </script>

  </body>
</html>