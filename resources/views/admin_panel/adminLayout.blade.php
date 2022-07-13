<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
<style>
.sidebar .nav .nav-item.active > .nav-link {
    color: #fff;
}
</style>
</head>
<body>
    <div class="container-scroller">
        
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: #000">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color: #eee;">
                 <a class="navbar-brand brand-logo" href="{{route('admin.dashboard')}}">
                    <div style="color: #ddd;"> </div>
                </a>
               <!-- <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard')}}">
                    <div style="color: #d6e400;">Admin </div>
                </a> -->
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text">{{session()->get('admin')->name}}</span>
                            <img class="img-xs rounded-circle" src="{{asset('images/faces/face2.jpg')}}" alt="Profile image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <br>
                            <br>
                            <a class="dropdown-item" href="{{route('admin.logout')}}">
                                Déconnexion
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#000">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="user-wrapper">
                                <div class="profile-image">
                                    <img src="{{asset('images/faces/face2.jpg')}}" alt="profile image">
                                </div>
                                <div class="text-wrapper">
                                    <p class="profile-name">{{session()->get('admin')->name}}</p>
                                    <div>
                                        <small class="designation text-muted">Admin</small>
                                        <!-- <span class="status-indicator online"></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item {{Route::is('admin.products') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('admin.products')}}">
                            <i class="menu-icon mdi mdi-cart-outline"></i>
                            <span class="menu-title">Produits</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::is('admin.categories') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('admin.categories')}}">
                            <i class="menu-icon mdi mdi-view-grid"></i>
                            <span class="menu-title">Catégories</span>
                        </a>
                    </li>
           
                </ul>
            </nav>
            <div class="main-panel">
                @yield('content')
                <footer class="footer">
                   
                </footer>
            </div>
        </div>
    </div>
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>
</body>

</html>
